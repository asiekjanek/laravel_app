@extends('layouts.app')

@section('title', 'Posty')

@section('content')

<h2>Lista postów</h2>

@if($posts->count() > 0)

<ul>
    @foreach($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->id) }}">
                {{ $post->title }}
            </a>

            <a href="{{ route('posts.edit', $post->id) }}">
                Edytuj
            </a>
        </li>
    @endforeach
</ul>

@else
    <p>Brak postów.</p>
@endif

<x-contact-form />

@endsection