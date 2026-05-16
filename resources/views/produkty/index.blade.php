@extends('layout')

@section('title', 'Lista produktów')

@section('content')

<h2>Lista produktów</h2>

<ul>
    @foreach($produkty as $produkt)
        <li>
            {{ $produkt['name'] }} - {{ $produkt['price'] }} zł

            <a href="/produkt/{{ $produkt['id'] }}">
                Szczegóły
            </a>
        </li>
    @endforeach
</ul>

@endsection