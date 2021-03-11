@extends('layout.admin_master')
@section('title','All Booking List')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Booking Request</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Date</th>
                  <th scope="col">Pacakge</th>
                  <th scope="col">Payable</th>
                  <th scope="col">Paid</th>
                  <th scope="col">Status</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $i = 1;
                @endphp

                @foreach ($data as $item)
                    <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->package['name']}}</td>
                    <td>{{$item->payable}}</td>
                    <td>{{$item->paid}}</td>
                    <td><p class="{{$item->payment_status == 'unpaid' ? 'bg-danger' : 'bg-success'}} p-1">{{$item->payment_status}}</p></td>
                    <td class="text-right">
                  <button type="button" data-id="{{$item->id}}" data-payable="{{$item->payable}}" class="btn btn-sm btn-primary payBtn" data-toggle="modal" data-target="#payModal">Pay</button>
                  <a onclick="return confirm('Are you sure to delete?')" href="{{action('DayCareController@delete',['id' => $item->id])}}" class="btn btn-sm btn-danger">Delete</a>
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

            <div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Payment</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{action('DayCareController@payment')}}" method="post" id="payForm">
                        @csrf
                        <input type="hidden" name="id">
                        <div class="modal-body">
                        <div class="form-group">
                            <label>Payable</label>
                            <input type="number" class="form-control" readonly value="0" name="payable" placeholder="Input Amount">
                          </div>
                          <div class="form-group">
                            <label>Paid Amount</label>
                            <input type="number" class="form-control" value="0" name="paid" placeholder="Input Amount">
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                    
                  </div>
                </div>
              </div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function(){
            $('.payBtn').click(function(){
                var id = $(this).data('id');
                var payable = $(this).data('payable');

                $('#payForm [name=id]').val(id);
                $('#payForm [name=payable]').val(payable);
                $('#payForm [name=paid]').val(payable);
            });
        });
    </script>
@endsection