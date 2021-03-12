@extends('layout.admin_master')

@section('title','Dashboard')

@section('content')

    <div class="section profile-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="#" method="POST">

                        <img style="border-radius: 50%;"
                             height="200"
                             width="200"
                             src="{{\Illuminate\Support\Facades\Auth::user()->image == null ?
                                asset('images/clients/01.jpg') :
                                asset('images/'.\Illuminate\Support\Facades\Auth::user()->image)}}"
                             alt="Avatar">

                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input
                                    type="name"
                                    class="form-control"
                                    id="exampleInputName"
                                    disabled
                                    value="{{\Illuminate\Support\Facades\Auth::user()->name}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Email address</label>
                            <input
                                    type="email"
                                    class="form-control"
                                    id="exampleInputEmail"
                                    aria-describedby="emailHelp"
                                    disabled
                                    value="{{\Illuminate\Support\Facades\Auth::user()->email}}"
                            />
                            <small id="emailHelp" class="form-text text-muted"
                            >We'll never share your email with anyone else.</small
                            >
                        </div>
                        <a href="{{url('/admin/edit/'.\Illuminate\Support\Facades\Auth::id())}}"
                           class="btn btn-primary">Edit</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection