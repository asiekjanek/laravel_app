@extends('layout')

@section('title', 'Panel admina')

@section('content')

<h2>Panel administratora</h2>

@if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

<p>To jest widok admin.panel.</p>

@endsection