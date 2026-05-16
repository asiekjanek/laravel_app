@extends('layouts.app')

@section('title', 'Edycja posta')

@section('content')

<h2>Edycja posta</h2>

<form action="{{ route('posts.update', $post->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Tytuł</label>
    <br>

    <input type="text" name="title" value="{{ $post->title }}">

    @error('title')
        <div>{{ $message }}</div>
    @enderror

    <br><br>

    <label>Treść</label>
    <br>

    <textarea name="content">{{ $post->content }}</textarea>

    @error('content')
        <div>{{ $message }}</div>
    @enderror

    <br><br>

    <button type="submit">
        Zapisz
    </button>

</form>

@endsection