<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class EmployeeController extends Controller
{
    public function index(){
        $table = Employee::all();
        return view('admin.employee.index',compact('table'));
    }
    public function create(){
        return view('admin.employee.create');
    }
    public function save(Request $request){
        $table = new Employee();
        $table->name = $request->name;
        $table->contact = $request->contact;
        $table->designation = $request->designation;

        if($request->hasFile('image')){
            $extension = $request->image->extension();
            $fileName = Str::slug($request->name,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $table->image = $fileName;
            $request->image->move('uploads/employee/',$fileName);
        }
        $table->save();
        return redirect()->to('employee');
    }
    public function update_page($id){
        $table = Employee::find($id);
        return view('admin.employee.update',compact('table'));
    }
    public function update(Request $request){
        $table = Employee::find($request->id);
        $table->name = $request->name;
        $table->contact = $request->contact;
        $table->designation = $request->designation;

        if($request->hasFile('image')){

            $path = public_path('uploads/employee/'.$table->image);
            if(file_exists($path)){
                unlink($path);
            }

            $extension = $request->image->extension();
            $fileName = Str::slug($request->name,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $table->image = $fileName;
            $request->image->move('uploads/employee/',$fileName);
        }
        $table->save();
        return redirect()->to('employee');
    }
    public function del($id){
        $table = Employee::find($id);
        $path = public_path('uploads/employee/'.$table->image);
          if(file_exists($path)){
            unlink($path);
          }
        $table->delete();
        return redirect()->back();
    }


    
}
