@extends('layout.admin_master')
@section('title','Packages')
@section('content')
<div class="card">
<a class="button" href="{{action('PackageController@create')}}" class="btn btn-sm btn-primary">Add Package</a>
              <div class="card-header">
                <h3 class="card-title">All Packages</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Package Name</th>
                  <th scope="col">Package Coast</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $i = 1;
                @endphp

                @foreach ($package as $item)
                    <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->amount}}</td>
                  <td class="text-right">
                  <a href="{{action('PackageController@update_package',['id' => $item->id])}}" class="btn btn-sm btn-primary">Edit</a> 
                 <a onclick="return confirm('Are you sure to delete?')" href="{{action('PackageController@delete',['id' => $item->id])}}" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
                    
              </tbody>
            </table>
              </div>
              <!-- /.card-body -->
              {{$package->links()}}
            </div>
@endsection