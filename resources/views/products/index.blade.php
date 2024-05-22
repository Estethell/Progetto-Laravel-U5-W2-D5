@include('includes.init')
@include('includes.navbar')

<div class="row">
    @forelse ( $products as $product )
  
    <div class="card col-6 col-md-3 gx-3 text-center m-1">
      <img src="{{$product->img}}" class="card-img-top p-1 pt-2" alt="...">
      <div class="card-body">
          <a href=" {{ route('products.show', ['product' => $product]) }} "> <h5 class="card-title">{{$product->name}}</h5></a>
        
        <p>{{$product->price . '€'}}</p>
       <div class="d-flex justify-content-center">
            @auth
            @if (Auth::user()->id === $product->user_id)
            <a class="btn btn-warning mx-1" href="{{ route('products.edit', ['product' => $product]) }}">Modifica</a>
            <form method="POST" action=" {{ route('products.destroy', ['product' => $product]) }}">
              @method('DELETE') 
              @csrf 
              <button class="btn btn-danger mx-1">Cancella</button>
              @endif
            @endauth
       </div>
        
          </form>
      </div>
    </div>
        
    @empty
  
    <p>Nessun prodotto</p>
        
    @endforelse
  
  </div>
  
  {{ $products->links()}}

@include('includes.footer')