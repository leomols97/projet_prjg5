@extends('layout')

@section('title', 'Page d'administrateur')

@section('content')
    <p>This is my body content.</p>
    <form name="saveAStudent">
        <FORM NAME="option">
            <INPUT TYPE="radio" NAME="choix" VALUE="1">Gestion<BR>
            <INPUT TYPE="radio" NAME="choix" VALUE="2">Industriel<BR>
            <INPUT TYPE="radio" NAME="choix" VALUE="3">Réseaux<BR>
            <INPUT TYPE="button"NAME="but" VALUE="Quel et votre choix ?" onClick="choixprop(form3)">
        </FORM>
        <input type="text" name="name" value="Nom de l'étudiant"><br>
        <input type="text" name="name" value="Prénom de l'étudiant"><br>
        <input type="text" name="studentNumber" value="Numéro de l'étudiant"><br>
        <input type="text" name="phoneNumber" value="Numéro de téléphone"><br>
        <input type="submit" name="submit" value="Enregistrer un étudiant" onClick="document.forms.f.submit()"><br>
    </form>
@stop
