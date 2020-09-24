@extends('layout')

@section('title')
    <h1>Page d'Administrateur</h1>
@stop

@section('content')
<script type="text/javascript">
/* Voici la fonction javascript qui change la propriété "display"
pour afficher ou non le div selon que ce soit "none" ou "block". */
function AfficherMasquerNewStudent()
{
        divInfo = document.getElementById('divNewStudentACacher');

        if (divInfo.style.display == 'none')
                divInfo.style.display = 'block';
        else
                divInfo.style.display = 'none';
}
function AfficherMasquerNewProduct()
{
        divInfo = document.getElementById('divNewProductACacher');

        if (divInfo.style.display == 'none')
                divInfo.style.display = 'block';
        else
                divInfo.style.display = 'none';
}
</script>

<!-- La c'est le bouton qui va afficher le div en cliquant dessus. -->
<input type="button" value="Enregistrer un nouvel élève" onClick="AfficherMasquerNewStudent()" />

<!-- Ca c'est le div en question qui possède l'id indiqué dans
la fonction. -->
<div id="divNewStudentACacher" style="display:none">
<form name="createStudent">
        <label>Votre nom</label> : <input type="text" name="last_name"><br>
        <label>Votre prénom</label> : <input type="text" name="first_name"><br>
        <label>Votre matricule</label> : <input type="text" name="matricule"><br>
        <label>Votre mot de passe</label> : <input type="password" name="pass_word"><br>
        <button type="submit">Enregistrer</button>
</form>
</div><br>

<input type="button" value="Enregistrer un nouveau produit" onClick="AfficherMasquerNewProduct()" />
<div id="divNewProductACacher" style="display:none">
<form name="createProduct">
        <label>Description</label> : <input type="text" name="description"><br>
        <label>Prix</label> : <input type="text" name="price"><br>
        <label>Quantité en stock</label> : <input type="text" name="stock_qt"><br>
        <label>Nom de l'image du produit</label> : <input type="password" name="path"><br>
        <button type="submit">Enregistrer</button>
</form>
</div>

@stop
