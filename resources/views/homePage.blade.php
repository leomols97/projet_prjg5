@extends('layout')

@section('title')
    <h1>Connexion</h1>
@stop

@section('content')
<!-- Ca c'est le div en question qui possède l'id indiqué dans
la fonction. -->
<div id="login">
<form name="login" action="connect" method="post">
        {{ csrf_field() }}
        <label>Votre matricule</label> : <input type="text" name="myuser_id"><br>
        <label>Votre mot de passe</label> : <input type="password" name="pass_word"><br>
        <button type="submit">Se connecter</button>
</form>
</div>
@stop
