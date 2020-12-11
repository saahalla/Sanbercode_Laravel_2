@extends('adminlte.master')
@section('content')
<div class="m-3">
    <h3>{{ $user->name }}</h3>
    <p>{{ $user->email }}</p>
    <p>{{ $user->password }}</p>
</div>


@endsection