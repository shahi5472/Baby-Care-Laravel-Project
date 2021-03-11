@extends('layout.admin_master')
@section('title','Packages')
@section('content')
<form role="form" method="post" action="{{action('PackageController@save')}}" enctype="multipart/form-data">
@csrf
    <div class="card-body">
      <div class="form-group">
        <label>Package Name</label>
        <input type="text" class="form-control" name="name" placeholder="Input Package Name">
      </div>
      <div class="form-group">
        <label>Package Description</label>
        <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="write here"></textarea>
      </div>
      <div class="form-group">
        <label>Package Amount</label>
        <input type="number" class="form-control" name="amount" value="100" min="100" placeholder="Input Package Amount">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection