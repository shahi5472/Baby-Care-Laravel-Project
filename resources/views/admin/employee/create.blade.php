@extends('layout.admin_master')
@section('title','Emoloyee')
@section('content')
<form role="form" method="post" action="{{action('EmployeeController@save')}}" enctype="multipart/form-data">
@csrf
    <div class="card-body">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Input Name">
      </div>
      <div class="form-group">
        <label>Designation</label>
        <input type="text" class="form-control" name="designation" placeholder="">
        
      </div>
      <div class="form-group">
        <label>Contact No</label>
        <input type="text" class="form-control" name="contact" placeholder="Input contact number">
      </div>
      <div class="form-group">
        <label>Contact No</label>
        <input type="file" class="form-control" name="image">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection