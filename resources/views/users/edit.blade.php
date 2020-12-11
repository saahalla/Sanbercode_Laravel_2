@extends('adminlte.master')
@section('content')
<div class="box box-primary" style="padding: 30px">
    <div class="box-header with-border">
        <h3 class="box-title">Edit User {{$user->name}} </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="/users/{{$user->id}}" method="POST">
    @csrf
    <!-- Khusus Untuk Update -->
    @method('PUT')
        <div class="box-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" id="name" placeholder="Enter Name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" id="email" placeholder="Enter email">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" value="{{ old('password', $user->password) }}" id="password" placeholder="Password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection