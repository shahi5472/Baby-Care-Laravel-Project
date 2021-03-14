<?php

use App\Package;
use App\Employee;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'auth'], function () {
    Route::post('book_for_daycare/save', 'DayCareController@save');

    // Booking
    Route::group(['middleware' => 'isAdmin'], function () {
        Route::get('admin/dashboard', function () {
            return view('admin.dashboard');
        });

        Route::get('/admin/edit/{id}', 'UsersController@edit_user');

        Route::put('/admin/update/{id}', 'UsersController@update_user');

        Route::get('admin/review-list', function () {
            return view('admin.review');
        });

        Route::get('user/list', function () {
            return view('admin.users');
        });

        Route::get('user/make-admin/{id}', 'UsersController@make_admin');
        Route::get('user/make-user/{id}', 'UsersController@make_user');

        Route::get('admin/review-approve/{id}', 'UserReviewController@approve');
        Route::get('admin/review-delete/{id}', 'UserReviewController@delete');

        Route::get('book_for_daycare', 'DayCareController@index');

        Route::get('book_for_daycare/approved', 'DayCareController@approved');
        Route::post('book_for_daycare/payment', 'DayCareController@payment');
        Route::get('book_for_daycare/approve/{id}', 'DayCareController@approve');

        Route::get('book_for_daycare/{id}', 'DayCareController@delete');

        // Package
        Route::get('packages', 'PackageController@index');
        Route::get('create-packages', 'PackageController@create');
        Route::post('save-package', 'PackageController@save');
        Route::get('update-package/{id}', 'PackageController@update_package');
        Route::post('update', 'PackageController@update');
        Route::get('delete_package/{id}', 'PackageController@delete');

        // employee
        Route::get('employee', 'EmployeeController@index');
        Route::get('create-employee', 'EmployeeController@create');
        Route::post('save-employee', 'EmployeeController@save');
        Route::get('update-page/{id}', 'EmployeeController@update_page');
        Route::post('update-employee', 'EmployeeController@update');
        Route::get('delete_employee/{id}', 'EmployeeController@del');
    });
});


Route::get('/', function () {
    $data = Package::paginate(6);
    $table = Employee::paginate(8);
    return view('layout.master', compact('data', 'table'));
    // return view('layout.master');
});

Route::get('/view/comments/{id}', 'CommentController@show');
Route::post('/post/comment', 'CommentController@store');
Route::post('/reply/comment', 'CommentRepliesController@store');

Route::get('/about', function () {
    return view('about');
    // return view('layout.master');
});

Route::get('/packages-list', function () {
    $data = Package::all();
    return view('packages', compact('data'));
});

Route::get('/employee-list', function () {
    $table = Employee::all();
    return view('employee', compact('table'));
});

Route::get('/give-review', function () {
    return view('give-review');
});

Route::get('/user-booking', function () {
    return view('booking');
})->middleware('auth');

Route::post('/review-submit', 'UserReviewController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
