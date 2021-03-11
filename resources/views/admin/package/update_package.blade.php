@extends('layout.admin_master')
@section('title','Update Package')
@section('content')
<form role="form"  method="post" action="{{action('PackageController@update')}}" enctype="multipart/form-data">
@csrf
    <div class="card-body">
    <input type="hidden" name="id" value="{{$data->id}}">
      <div class="form-group">
        <label>Package Name</label>
        <input type="text" class="form-control" name="name" value="{{$data->name}}" exampleInputEmail1="" placeholder="Input Package Name">
      </div>
      <div class="form-group">
        <label>Package Description</label>
        <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="write here">{{$data->description}}</textarea>
      </div>
      <div class="form-group">
        <label>Package Amount</label>
        <input type="number" class="form-control" name="amount" value="{{$data->amount}}" min="0">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection