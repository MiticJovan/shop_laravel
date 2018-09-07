@extends('layout.main')

@section('content')
	        <section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                    Welcome to Technics Store
                </strong>
            </h2>
            <br>
            <a href="{{ route('products') }}"><button class="button large">Check out our new products</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            Our's latest products
        </h2>
        </div>
       
        <!-- Latest Products-->
        <div class="row">
            @forelse($products->take(4) as $product)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
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
            <h4>No Products</h4>
            @endforelse
        </div>
        <!-- Footer -->
        <br>
@endsection