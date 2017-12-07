@extends('adminlte::page')

@section('title', 'Index Video')

@section('content_header')
    <h1>@yield('title')</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <a href="{{ route('videos.create') }}">Create</a>

    @forelse ($videos as $video)
        <table>
            <tr>
                <td>
                    <img src="{{ asset('storage/' . $video->image) }}">
                </td>
                <td>{{ $video->url }}</td>
            </tr>
        </table>
    @empty
        <h1>Anda tidak memiliki video</h1>
    @endforelse
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop