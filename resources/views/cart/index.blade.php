@extends('layout.main')

@section('content')
<div class="row">
		<br>
		<h3 style="color: white">Cart Items</h3>
		<br>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>qty</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($cartItems as $cartItem)
			<tr>
				<td>{{ $cartItem->name }}</td>
				<td>{{ $cartItem->price }}</td>
				<td width="55px">
					{!! Form::open(['route' =>['cart.update', $cartItem->rowId], 'method' => 'PUT']) !!}
						<input name="qty" type="text" value=" {{ $cartItem->qty }}">
						<input type="submit" class="btn btn-sm btn-default" value="Ok">
					{!! Form::close() !!}
				</td>

				<td>
					<form action="{{ route('cart.destroy', $cartItem->rowId ) }}" method="POST">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<input type="submit" value="Remove" class="button alert">
					</form>
				</td>
				
			</tr>
			
			@endforeach
			<tr>
				<td></td>
				<td style="font-weight: bold">Total Price: $ {{ Cart::subtotal() }}</td>
				<td style="font-weight: bold; text-align: center;">Items: {{ Cart::count() }} </td>
				<td></td>

			</tr>
			
		</tbody>
	</table>

	<a href="{{ route('checkout') }}" class="button">Checkout</a>
</div>
@endsection
