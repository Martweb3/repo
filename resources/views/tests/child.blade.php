@extends('tests.pagina')

@section('title', 'otra')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }}
    @endfor

@endsection

@section('content')
    <p>This is my body content.</p>
    Hello, {{ $name }}.
@endsection

@php
//sdddd
@endphp
