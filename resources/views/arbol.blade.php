@extends('layout')

@section('title', 'Árbol Familiar')

@section('bnd')

<h2>Mi árbol familiar</h2>

@foreach($name as $item)
<a href="{{ route('arbol', $item) }}">{{$item}}</a><br>

@endforeach

@endsection