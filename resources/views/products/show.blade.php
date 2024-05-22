@include('includes.init')
@include('includes.navbar')

<div class="d-flex flex-column align-items-center my-5">
    <img class="rounded-5"   src=" {{ $product->img }}"></img>
<h1 class="mt-5">{{ $product->name }}</h1></div>
<p class="card-text text-center m-5 p-5 fw-bold border rounded-5" >{{$product->description}}</p>




@include('includes.footer')