@extends('layout')

@section('title')
    <h1> IT Store </h1>
@endsection

@section('content')
    <div class="productsZone">
        @foreach ($products as $product)
            <div class="productZone" class="input-group mb-3">
                <p class="prodTitle">Reference: {{ $product->prod_id }}</p>
                <p class="prodDescription">Description: {{ $product->description }}</p>
                <p class="prodPrice">Price: {{ $product->price }}</p>
                <p class="prodStock">Stock: {{ $product->stock_qt }}</p>
                <p class="prodCat">Categorie: {{ $product->prod_cat }}</p>
                <img src="{{ $product->path }}" class="img-thumbnail"><br>
                <input id="qt{{ $loop->index }}" type="number" name="buy_qt" id="buy_qt">
                <button id="bt{{ $loop->index }}" onClick='addProd({{ $loop->index }})' class="btn btn-secondary">Ajouter</button>
            </div>
        @endforeach
    </div>
    <div id="pannier" >
        <h2>Pannier:</h2>
        <table id="pannier_list" class="table-striped">
            <thead>
                <th> Quantite </th>
                <th> Product ID </th>
                <th> Description </th>
                <th> Prix </th>
            </thead>
        </table>
        <button onClick="sendPan()" class="btn btn-primary">Envoyer</button>
    </div>
@endsection

<script>
    let products = {!! json_encode($products) !!}
    let panProducts = {};
    panProducts.qt = [];
    panProducts.prod_id = [];

    function addProd(btId) {
        let product = products[btId];
        $("#pannier_list").append(
            $('<tr>').append(
                $('<td>').text($('#qt'+btId).val()).attr("class", "qtProduct"),
                $('<td>').text(product.prod_id).attr("class", "idProduct"),
                $('<td>').text(product.description),
                $('<td>').text(product.price + "€"),
            )
        );
        panProducts.qt.push($('#qt'+btId).val());
        panProducts.prod_id.push(product.prod_id)
    }

    function sendPan() {
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
                url: "/storePage/buy",
                type: "POST",
                data: { products: JSON.stringify(panProducts), user : localStorage.getItem("myuser_id") }
        }).done(function() {
            location.reload();
        });
    }
</script>
