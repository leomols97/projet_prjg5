@extends('layout')

@section('title', 'Page d'administrateur')

@section('content')
    <p>This is my body content.</p>

<form name="createStudent">
        <label for="last_name">Nom de Famille:</label>
        <input type="text" name="last_name" value="Nom de l'étudiant"><br>
        <input type="text" name="first_name" value="Prénom de l'étudiant"><br>
        <input type="text" name="matricule" value="Numéro de l'étudiant"><br>
        <button type="submit">Enregistrer</button>
    </form>

@stop
