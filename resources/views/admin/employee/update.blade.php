@extends('layout.admin_master')
@section('title','Emoloyee')
@section('content')
<form role="form" method="post" action="{{action('EmployeeController@update')}}" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{$table->id}}">
    <div class="card-body">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" value="{{$table->name}}" name="name" placeholder="Input Name">
      </div>
      <div class="form-group">
        <label>Designation</label>
        <input type="text" class="form-control" value="{{$table->designation}}"  name="designation" placeholder="">
        
      </div>
      <div class="form-group">
        <label>Contact No</label>
        <input type="text" class="form-control" value="{{$table->contact}}" name="contact" value="0" placeholder="Input contact number">
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" name="image">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection