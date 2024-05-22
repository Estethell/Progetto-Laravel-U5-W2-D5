@include('includes.init')
@include('includes.navbar')

<div class="d-flex justify-content-center my-5"><img    src=" {{ $product->img }}"></img></div>
<h1>{{ $product->title }}</h1>
<p class="card-text text-center my-5 fw-bold">{{$product->description}}</p>




@include('includes.footer')