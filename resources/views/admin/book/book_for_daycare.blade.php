@extends('layout.admin_master')
@section('title','Book Package')
@section('content')
<form role="form" method="post" action="{{action('DayCareController@save')}}" enctype="multipart/form-data">
@csrf
    <div class="card-body">
      <div class="form-group">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
      </div>
      <div class="form-group">
        <label>phone</label>
        <input type="text" class="form-control" name="phone" placeholder="Phone">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Address">
      </div>
      <div class="form-group">
      <label for="exampleInputEmail1">Select a Package</label>
            <select name="p_name" class="form-control" id="">
           
            @foreach ($data as $row)
            <option value="{{$row->id}}">{{$row->name}}</option> 
            @endforeach
            </select>
        </div>
      <div>
        <label>Time to give the baby</label>
        <input type="time" class="form-control" name="g_time" placeholder="Input Time">
      </div>
      <div class="form-group">
        <label>Time to take the baby</label>
        <input type="time" class="form-control" name="t_time" placeholder="Input Time">
      </div>
      <div class="form-group">
        <label>Date</label>
        <input type="Date" class="form-control" name="date" placeholder="Input Date">
      </div>
      <div class="form-group">
        <label>Payable</label>
        <input type="number" class="form-control" value="0" name="payable" placeholder="Input Amount">
      </div>
      <div class="form-group">
        <label>Paid</label>
        <input type="number" class="form-control" value="0" name="paid" placeholder="Input Amount">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection