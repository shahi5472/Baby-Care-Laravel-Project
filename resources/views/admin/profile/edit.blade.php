@extends('layout.admin_master')

@section('title',$user->name)

@section('content')
    <div class="section profile-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form" action="{{url('/admin/update/'.$user->id)}}"
                          method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <img style="border-radius: 50%;"
                             height="200"
                             width="200"
                             src="{{$user->image == null ? asset('images/clients/01.jpg') : asset('images/'.$user->image) }}"
                             alt="Avatar">

                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input
                                    name="name"
                                    type="text"
                                    class="form-control"
                                    id="exampleInputName"
                                    value="{{$user->name}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Email address</label>
                            <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    id="exampleInputEmail"
                                    aria-describedby="emailHelp"
                                    value="{{$user->email}}"
                            />
                            <small id="emailHelp" class="form-text text-muted"
                            >We'll never share your email with anyone else.</small
                            >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Change picture</label>
                            <input
                                    type="file"
                                    name="photo"
                                    class="form-control-file"
                                    id="exampleFormControlFile1"
                            />
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection