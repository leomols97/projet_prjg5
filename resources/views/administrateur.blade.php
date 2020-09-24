@extends('layout')

@section('title')
    <h1>Page d'Administrateur</h1>
@endsection

@section('content')

<!-- La c'est le bouton qui va afficher le div en cliquant dessus. -->
<button onClick="AfficherMasquerDBButton('divNewStudent')">Enregistrer nouveau utilisateur</button>
<!-- Ca c'est le div en question qui possède l'id indiqué dans
la fonction. -->
<div id="divNewStudent" style="display:none">
    <form action="administrateur/createUser" method="post">
            {{ csrf_field() }}
            <label>Votre nom</label> : <input type="text" name="last_name"><br>
            <label>Votre prénom</label> : <input type="text" name="first_name"><br>
            <label>Votre matricule</label> : <input type="text" name="matricule"><br>
            <label>Votre mot de passe</label> : <input type="password" name="pass_word"><br>
            <label>Est administrateur:</label> : <input type="checkbox" name="is_admin" value="0"><br>
            <button type="submit">Enregistrer</button>
    </form>
</div>
<br>

<button onClick="AfficherMasquerDBButton('divNewProduct')">Enregistrer Nouveau Produit</button>
<div id="divNewProduct" style="display:none">
<form action="administrateur/createProduct" method="post">
        {{ csrf_field() }}
        <label>Description</label> : <input type="text" name="description"><br>
        <label>Prix</label> : <input type="text" name="price"><br>
        <label>Quantité en stock</label> : <input type="text" name="stock_qt"><br>
        <label>Nom de l'image du produit</label> : <input type="text" name="path"><br>
        <button type="submit">Enregistrer</button>
</form>
</div>
<br>

<button onClick="AfficherMasquerDBButton('divModifyProduct')">Modifier Produit</button>
<div id="divModifyProduct" style="display:none">
    <form action="administrateur/updateProduct" method="post">
            {{ csrf_field() }}
            <label>Description</label> : <input type="text" name="description"><br>
            <label>Prix</label> : <input type="text" name="price"><br>
            <label>Quantité en stock</label> : <input type="text" name="stock_qt"><br>
            <label>Nom de l'image du produit</label> : <input type="password" name="path"><br>
            <button type="submit">Enregistrer</button>
    </form>
</div>
<br>

<button onClick="AfficherMasquerDBButton('divDeleteProduct')">Supprimer Produit</button>
<div id="divDeleteProduct" style="display:none">
    <form action="administrateur/deleteProduct" method="post">
            {{ csrf_field() }}
            <label>ID du produit à supprimer</label> : <input type="text" name="prod_id"><br>
            <button type="submit">Enregistrer</button>
    </form>
</div>
<br>
@endsection

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
