@extends('adminlte.master')

@section('content')
    <h1>halaman create</h1>

@endsection

@push('scripts')
<script>
    var wrappers = document.getElementsByClassName("wrappers");
    var items = ['ini', 'contoh'];
    console.log("ini items", items);
</script>
@endpush