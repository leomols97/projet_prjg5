@extends('layout')

@section('title')
    <h1 style="color:red">Erreur!</h1>
@stop

@section('content')
<h2>{{ $errorMsg }}</h2>
@stop
