@extends('adminlte::page')

@section('title', 'Create Video')

@section('content_header')
    @yield('title')
@stop

@section('content')
    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        image <br>
        <input type="file" name="image"><br>

        url <br>
        <input type="text" name="url"><br>

        <button type="submit">Simpan</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop