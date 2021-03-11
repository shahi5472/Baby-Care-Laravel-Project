<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookDaycare;
use App\Package;
class DayCareController extends Controller
{

    public function index(){
        $data= BookDaycare::where('isApprove','NO')->get();
        // dd($data,'a');
        return view('admin.book.all_booking_list',compact('data'));
    }
    public function approved(){
        $data= BookDaycare::where('isApprove','YES')->get();
        // dd($data,'a');
        return view('admin.book.approved-list',compact('data'));
    }

    public function create(){
        $data= Package::all();
        // dd($data,'a');
        return view('admin.book.book_for_daycare',compact('data'));
    }

    public function save(Request $request){
        // dd($request->all());
        $package = Package::find($request->package_id);
        $data = new BookDaycare();
        $payable1= $data->payable = $request->payable;
        $paid=$data->paid = $request->paid;
        $payable=$payable1-$data->paid = $request->paid;

        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->p_name = $package->id;
        $data->payable = $package->amount;
        $data->paid = 0;
        $data->t_time = $request->t_time;
        $data->g_time = $request->g_time;
        $data->date = $request->date;
        $data->save();
        return redirect()->back();
        }

        public function approve($id){
            $data = BookDaycare::find($id);
            $data->isApprove = 'YES';
            $data->save();
            return back();
        }

        public function delete($id){
            $data = BookDaycare::find($id);
            $data->delete();
            return back();
        }

        public function payment(Request $request)
        {
            $amount = $request->paid;
            $table = BookDaycare::find($request->id);
            $table->paid = $table->paid + $amount;
            $table->payable = $table->payable - $amount;
            if($table->payable == 0){
                $table->payment_status = 'paid';
            }
            $table->save();
            return redirect()->back()->with(['message' => 'Payment Successfull']);

        }
}
