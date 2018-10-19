@extends('layout.main')

@section('title', 'Products')
@section('content')



<!-- products listing -->
<!-- Latest SHirts -->
<div class="row">
    @forelse($products as $product)
<<<<<<< HEAD
            <div class="small-3 medium-3 large-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href=" {{ route('cart.edit', $product->id) }}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{ url('images', $product->image) }}"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            {{ $product->name }}
                        </h3>
                    </a>
                    <h5>
                        $ {{$product->price}}
                    </h5>
                    <p>
                        {{$product->description}}
                    </p>
                </div>
            </div>
    @empty 
    <h3>No Products</h3>

    
=======
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{ url('images',$product->image) }}"/>
                </a>
            </div>
            <a href="{{ route('product') }}">
                <h3>
                    {{$product->name}}
                </h3>
            </a>
            <h5>
                $ {{$product->price}}
            </h5>
            <p>
                {{$product->description}}
            </p>
        </div>
        @empty 
        <h3>No Products</h3>
        
    </div>
>>>>>>> 2ca2e5726ef7e538fc1f644432fff88a97e72f98
    @endforelse
</div>
@endsection
