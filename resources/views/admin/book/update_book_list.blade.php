@extends('layout.admin_master')
@section('title','Update Booking')
@section('content')
<form role="form"  method="post" action="{{action('DayCareController@update')}}" enctype="multipart/form-data">
@csrf
    <div class="card-body">
    <input type="hidden" name="id" value="{{$book->id}}">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="name" value="{{$book->name}}" exampleInputEmail1="" placeholder="Input Name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="text" class="form-control" name="phone" value="{{$book->phone}}" exampleInputEmail1="" placeholder="Input Number">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Address </label>
        <input type="text" class="form-control" name="address" value="{{$book->address}}" exampleInputEmail1="" placeholder="Input Package Name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Package Name</label>
        
        <select name="p_name" class="form-control" id="">
            <option value="">Select a category</option>
            @foreach ($data as $row)
            <option value="{{$row->id}}" @if($book->p_name==$row->id) selected @endif>{{$row->name}}</option> 
            @endforeach
            
            </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Time to give the baby</label>
        <input type="text" class="form-control" name="g_time" value="{{$book->g_time}}" exampleInputEmail1="" placeholder="Input Package Name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Time to take the baby</label>
        <input type="text" class="form-control" name="t_time" value="{{$book->t_time}} " exampleInputEmail1 ="" placeholder="Input Package Amount">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Date</label>
        <input type="text" class="form-control" name="date" value="{{$book->date}} " exampleInputEmail1 ="" placeholder="Date">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Payable Amount</label>
        <input type="text" class="form-control" name="payable" value="{{$book->payable}} " exampleInputEmail1 ="" placeholder="Input Package Amount">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Paid</label>
        <input type="text" class="form-control" name="paid" value="{{$book->paid}} " exampleInputEmail1 ="" placeholder="Input Package Amount">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Payment Status</label>
        <select  name="payment_status">
              <option value="paid">paid</option>
              <option value="unpaid">unpaid</option>
          </select>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection