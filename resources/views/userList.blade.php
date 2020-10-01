@extends('layout')

@section('title')
    <h1>Liste Utilisateurs</h1>
@stop

@section('content')
<!-- Ca c'est le div en question qui possède l'id indiqué dans
la fonction. -->
<ul>
    @foreach ($users as $user)
        <li> {{$user->first_name}} - {{$user->last_name}} - {{$user->description}}</li>
    @endforeach
</ul>
@stop
