@extends('adminlte.master')
@section('content')

<div style="padding: 30px">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Users Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    <a href="/users/create" class="btn btn-primary mb-3">Add User</a>
    <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Email</th>
            <th style="width: 40px">Password</th>
            <th style="width: 40px">Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($users as $key => $user)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->password }}</td>
              <td style="display: flex;">
                <a class="btn btn-primary btn-sm mr-1" href="/users/{{$user->id}}">Show</a>
                <a class="btn btn-primary btn-sm mr-1" href="/users/{{$user->id}}/edit">Edit</a>
                <form action="/users/{{$user->id}}" method='POST'>
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="delete" class="btn btn-danger">
                </form>
                <!-- <a class="btn btn-primary btn-sm mr-1" href="/users/{{$user->id}}/delete">Delete</a> -->
              </td>
            </tr>
          @empty
            <tr><td align="center" colspan="4">No Users</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>
  
  </div>
</div>

@endsection