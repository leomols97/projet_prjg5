@extends('layout')

@section('title')
    <h1> IT Store </h1>
@endsection

@section('content')
    @foreach ($products as $product)
        <div class="productZone">
            <p class="prodTitle">Reference: {{ $product->prod_id }}</p>
            <p class="prodDescription">Description: {{ $product->description }}</p>
            <p class="prodPrice">Price: {{ $product->price }}</p>
            <p class="prodStock">Stock: {{ $product->stock_qt }}</p>
            <div>ProdImg</div>
            <input type="number" name="buy_qt" id="buy_qt">
            <button id="add_button">Ajouter<button>
        </div>
    @endforeach
    <div id=pannier>
        <p>Pannier:</p>
        <ul id="pannier_list">

        </ul>
    </div>
@endsection

<script>

</script>
