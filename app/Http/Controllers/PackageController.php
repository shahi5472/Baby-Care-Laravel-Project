<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
class PackageController extends Controller
{
    public function index(){
        $package = Package::paginate(10);
        // dd($package,'a');
        return view('admin.package.package',compact('package'));
    }

    public function create(){
        $data = Package::all();
        return view('admin.package.create-package');
    }


    public function save(Request $request){
        $data = new Package();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->amount = $request->amount;
        $data->save();
         return redirect()->to('packages');
        }

    public function update_package($id){
        $data = Package::find($id);
        return view('admin.package.update_package',compact('data'));
    }

    public function update(Request $request)
    {
        $data = Package::find($request->id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->amount = $request->amount;
        $data->save();
        return redirect()->to('packages');
        
    }

    public function delete($id){
        $data = Package::find($id);
        $data->delete();
        return back();
    }
}
