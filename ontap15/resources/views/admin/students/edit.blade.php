@extends('layouts.master')




@section('content')


    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Thêm mới User</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form</h6>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.student.update',$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                    <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">gender</label>
                                <select class="form-control" id="gender" name="gender" value="{{$data->gender}}"> 
                                    <option value="nam">nam</option>
                                    <option value="nữ">nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{$data->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">date</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{$data->date}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{$data->phone}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">image</label>
                                <input type="file" class="form-control" id="image" name="image" value="{{$data->image}}">
                            </div>
                           
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection
