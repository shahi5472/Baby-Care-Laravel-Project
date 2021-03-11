@extends('layout.admin_master')
@section('title','Review List')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Review List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Review</th>
                  <th scope="col">Status</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $i = 1;
                    $data = App\UserReview::all();
                @endphp

                @foreach ($data as $item)
                    <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->review}}</td>
                    <td>{{$item->isApproved}}</td>
                    <td class="text-right">
                    @if($item->isApproved != 'YES')
                  <a onclick="return confirm('Are you sure to Approve?')" href="{{action('UserReviewController@approve',['id' => $item->id])}}" class="btn btn-sm btn-primary">Approve</a>
                    @endif
                  <a onclick="return confirm('Are you sure to delete?')" href="{{action('UserReviewController@delete',['id' => $item->id])}}" class="btn btn-sm btn-danger">Delete</a>
                </tr>
                @endforeach
                    
              </tbody>
            </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
@endsection