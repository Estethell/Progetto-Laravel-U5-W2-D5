@include('includes.init')
@include('includes.navbar')
<h1>Modifica prodotto</h1>
<form method="POST" action="{{ route('products.update', ['product' => $product]) }}">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}">
    </div>
    <div class="mb-3">
        <label for="brand" class="form-label">Marchio</label>
        <input type="text" class="form-control" id="brand" name="brand" value="{{ $product->brand }}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Image url</label>
        <input type="text" class="form-control" id="img" name="img" value="{{ $product->img }}">
    </div>
    <button type="submit" class="btn btn-success">invia</button>

</form>

  @include('includes.footer')