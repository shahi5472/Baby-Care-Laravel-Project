@extends('layout.admin_master')
@section('title','Employee')
@section('content')
<div class="card">
<a class="button" href="{{action('EmployeeController@create')}}" class="btn btn-sm btn-primary">Add</a>
              <div class="card-header">
                <h3 class="card-title">All Employees</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Contact</th>
                  <th scope="col">Designation</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($table as $item)
                    <tr>
                    <th scope="row">
                        <img src="{{asset('uploads/employee/'.$item->image)}}" alt="" width="50" height="30">
                    </th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->contact}}</td>
                    <td>{{$item->designation}}</td>
                  <td class="text-right">
                  <a href="{{action('EmployeeController@update_page',['id' => $item->id])}}" class="btn btn-sm btn-primary">Edit</a> 
                 <a onclick="return confirm('Are you sure to delete?')" href="{{action('EmployeeController@del',['id' => $item->id])}}" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
                    
              </tbody>
            </table>
              </div>
            </div>
@endsection