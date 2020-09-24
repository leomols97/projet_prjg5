@extends('layout')

@section('title')
    <h1>Page d'Administrateur</h1>
@stop

@section('content')
<script type="text/javascript">
/* Voici la fonction javascript qui change la propriété "display"
pour afficher ou non le div selon que ce soit "none" ou "block". */
function AfficherMasquerDBButton(id)
{
        divInfo = document.getElementById(id);

        if (divInfo.style.display == 'none')
                divInfo.style.display = 'block';
        else
                divInfo.style.display = 'none';
}
</script>

<!-- La c'est le bouton qui va afficher le div en cliquant dessus. -->
<input type="button" value="Enregistrer un nouvel élève" onClick="AfficherMasquerDBButton('divNewStudentACacher')" />
<!-- Ca c'est le div en question qui possède l'id indiqué dans
la fonction. -->
<div id="divNewStudentACacher" style="display:none">
<form name="createStudent" action="administrateur/createStudent" method="post">
        {{ csrf_field() }}
        <label>Votre nom</label> : <input type="text" name="last_name"><br>
        <label>Votre prénom</label> : <input type="text" name="first_name"><br>
        <label>Votre matricule</label> : <input type="text" name="matricule"><br>
        <label>Votre mot de passe</label> : <input type="password" name="pass_word"><br>
        <button type="submit">Enregistrer</button>
</form>
</div><br>

<input type="button" value="Enregistrer un nouveau produit" onClick="AfficherMasquerDBButton('divNewProductACacher')" />
<div id="divNewProductACacher" style="display:none">
<form name="createProduct" action="administrateur/createProduct" method="post">
        {{ csrf_field() }}
        <label>Description</label> : <input type="text" name="description"><br>
        <label>Prix</label> : <input type="text" name="price"><br>
        <label>Quantité en stock</label> : <input type="text" name="stock_qt"><br>
        <label>Nom de l'image du produit</label> : <input type="password" name="path"><br>
        <button type="submit">Enregistrer</button>
</form>
</div><br>

<input type="button" value="Modifier un produit" onClick="AfficherMasquerDBButton('divModifyProductACacher')" />
<div id="divModifyProductACacher" style="display:none">
<form name="createProduct" action="administrateur/createProduct" method="post">
        {{ csrf_field() }}
        <label>Description</label> : <input type="text" name="description"><br>
        <label>Prix</label> : <input type="text" name="price"><br>
        <label>Quantité en stock</label> : <input type="text" name="stock_qt"><br>
        <label>Nom de l'image du produit</label> : <input type="password" name="path"><br>
        <button type="submit">Enregistrer</button>
</form>
</div><br>

<input type="button" value="Supprimer un produit" onClick="AfficherMasquerDBButton('divDeleteProductACacher')" />
<div id="divDeleteProductACacher" style="display:none">
<form name="createProduct" action="administrateur/createProduct" method="post">
        {{ csrf_field() }}
        <label>ID du produit à supprimer</label> : <input type="text" name="prod_id"><br>
        <button type="submit">Enregistrer</button>
</form>
</div>
@stop
