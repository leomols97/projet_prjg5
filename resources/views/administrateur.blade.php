@extends('layout')

@section('title')
    <h1> Page d'Administrateur </h1>
@stop

@section('content')
    <p>This is my body content.</p>

<form name="saveAStudent">
        <FORM NAME="option">
            <INPUT TYPE="radio" NAME="choix" VALUE="1">Gestion<BR>
            <INPUT TYPE="radio" NAME="choix" VALUE="2">Industriel<BR>
            <INPUT TYPE="radio" NAME="choix" VALUE="3">Réseaux<BR>
            <INPUT TYPE="button"NAME="but" VALUE="Quel et votre choix ?" onClick="choixprop(form3)">
        </FORM>
        Nom : <input type="text" name="name" required><br>
        Prénom : <input type="text" name="name" required><br>
        Numéro d'étudiant : <input type="text" name="studentNumber" pattern="[0-9]{5}" required><br>
        Numéro de téléphone de l'étudiant : <input type="tel" name="phoneNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
        <input type="submit" name="submit" value="Enregistrer un étudiant" onClick="document.forms.f.submit()"><br>
    </form>
@stop
