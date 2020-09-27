@extends('layout')

@section('title')
    <h1>Page d'Administrateur</h1>
@endsection

@section('content')

<!-- La c'est le bouton qui va afficher le div en cliquant dessus. -->
<button onClick="AfficherMasquerDBButton('divNewStudent')" class="btn btn-info">Enregistrer nouveau utilisateur</button>
<!-- Ca c'est le div en question qui possède l'id indiqué dans
la fonction. -->
<div id="divNewStudent" style="display:none">
    <h3>-Creation Utilisateur:</h3>
    <form action="administrateur/createUser" method="post">
            {{ csrf_field() }}
            <label>Votre nom</label> : <input type="text" name="last_name" class="form-control" required><br>
            <label>Votre prénom</label> : <input type="text" name="first_name" class="form-control" required><br>
            <label>Votre matricule</label> : <input type="text" name="matricule" class="form-control" required><br>
            <label>Votre mot de passe</label> : <input type="password" name="pass_word" class="form-control" required><br>
            <label>Est administrateur:</label> : <input type="checkbox" name="is_admin" value="0"><br>
            <input type="submit" value="Enregistrer" name="submit" class="btn btn-primary">    </form>
</div>
<br>

<button onClick="AfficherMasquerDBButton('divNewProduct')" class="btn btn-info">Enregistrer Nouveau Produit</button>
<div id="divNewProduct" style="display:none">
    <h3>-Creation Produit:</h3>
    <form action="administrateur/createProduct" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>ID du Produit</label> : <input type="number" name="prod_id" class="form-control" required><br>
            <label>Description</label> : <input type="text" name="description" class="form-control" required><br>
            <label>Prix</label> : <input type="number" name="price" class="form-control" required><br>
            <label>Quantité en stock</label> : <input type="number" name="stock_qt" class="form-control" required><br>
            <label>Image du produit</label> : <input type="file" name="image" class="form-control-file" required><br>
            <input type="submit" value="Enregistrer" name="submit" class="btn btn-primary">    </form>
</div>
<br>

<button onClick="AfficherMasquerDBButton('divModifyProduct')" class="btn btn-info">Modifier Produit</button>
<div id="divModifyProduct" style="display:none">
    <h3>-Mise a jour Produit:</h3>
    <form action="administrateur/updateProduct" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>ID du Produit</label> : <input type="number" name="prod_id" class="form-control"><br>
            <label>Description</label> : <input type="text" name="description" class="form-control"><br>
            <label>Prix</label> : <input type="number" name="price" class="form-control"><br>
            <label>Quantité en stock</label> : <input type="number" name="stock_qt" class="form-control"><br>
            <label>Image du produit</label> : <input type="file" name="image" class="form-control-file"><br>
            <input type="submit" value="Enregistrer" name="submit" class="btn btn-primary">    </form>
</div>
<br>

<button onClick="AfficherMasquerDBButton('divDeleteProduct')" class="btn btn-info">Supprimer Produit</button>
<div id="divDeleteProduct" style="display:none">
    <h3>-Supression Produit:</h3>
    <form action="administrateur/deleteProduct" method="post">
            {{ csrf_field() }}
            <label>ID du produit à supprimer</label> : <input type="number" name="prod_id" class="form-control" required><br>
            <input type="submit" value="Enregistrer" name="submit" class="btn btn-primary">    </form>
</div>
<br>
<form action="storePage" method="get">
    <input type="submit" value="Page d'Achats" name="submit" class="btn btn-light">    </form>
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
