@extends('admin.layout.admin')
@section('content')
    <h3>Products</h3>
	<ul>
		@forelse ($products as $product)
			
		
		<li>
			<h4>Name of product: {{ $product->name }}</h4>
<<<<<<< HEAD
			<h4>Category:{{count((array)$product->category)?$product->category->name:"N/A"}}
			</h4>
			<form action="{{ route('product.destroy', $product->id) }}" method="POST">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<input type="submit" class="btn btn-sm btn-danger" value="Delete">
			</form>
=======
>>>>>>> 2ca2e5726ef7e538fc1f644432fff88a97e72f98
		</li>

		@empty
		    <h3>No products</h3>
		

		@endforelse
	</ul>




@endsection
