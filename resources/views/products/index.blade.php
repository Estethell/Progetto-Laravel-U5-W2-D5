@include('includes.init')
@include('includes.navbar')

<div class="row">
    @forelse ( $products as $product )
  
    <div class="card col-6 col-md-3 gx-3">
      <img src="{{$product->img}}" class="card-img-top" alt="...">
      <div class="card-body">
          <a href=" {{ route('products.show', ['product' => $product]) }} "> <h5 class="card-title">{{$product->name}}</h5></a>
        
        <p>{{$product->price . '€'}}</p>
        @auth
        @if (Auth::user()->id === $product->user_id)
        <a class="btn btn-warning" href="{{ route('products.edit', ['product' => $product]) }}">Modifica</a>
        <form method="POST" action=" {{ route('products.destroy', ['product' => $product]) }}">
          @method('DELETE') 
          @csrf
          <button class="btn btn-danger">Cancella</button>
          @endif
        @endauth
        
          </form>
      </div>
    </div>
        
    @empty
  
    <p>Nessun prodotto</p>
        
    @endforelse
  
  </div>
  
  {{ $products->links()}}

@include('includes.footer')