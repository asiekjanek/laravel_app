@extends('layout')

@section('title', 'Szczegóły produktu')

@section('content')

<h2>Szczegóły produktu</h2>

<p>Nazwa: {{ $produkt['name'] }}</p>

<p>Cena: {{ $produkt['price'] }} zł</p>

<a href="/">Powrót</a>

@endsection