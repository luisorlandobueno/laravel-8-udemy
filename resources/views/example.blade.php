
@extends('layouts.appp')

@section('title' , 'este es el titulo')


<h1> hola {{$name}} bienvenido</h1>


@section('content')

tu nombre {{$name}}<br>
tu apellido {{$apellido}}<br>
tu edad {{$edad}}<br>



@endsection
