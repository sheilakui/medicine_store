@extends('layout.main')
@section('content')

    <div class="row">

    <h3>Cart Items</h3>

		<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Action</th>
			</tr>
		</thead>
	    	<tbody>
			@foreach($cartItems as $cartItem)
			<tr>
				<td>{{$cartItem->name}}</td>
				<td>{{$cartItem->price}}</td>
				<td width="50px">

					{!! Form::open(['route' => ['cart.update', $cartItem->rowId], 'method' => 'PUT']) !!}
					<input name="qty" type="text" value="{{$cartItem->qty}}">

				</td>
				
					
				<td>
					<input type="submit" style="float:left" class="button success small" value="OK">
					{!! Form::close() !!}

					<form action="{{route('cart.destroy', $cartItem->rowId)}}" method="POST">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<input class="button small alert" type="submit" value="Delete">
					</form>		
				</td>
			</tr>
			@endforeach


			<tr>
				<td></td>
				<td>

				Sub Total KSH.{{Cart::subtotal()}} <br>
				

			   </td>
				<td>Items: {{Cart::count()}}</td>
				<td></td>
				<td></td>
			</tr>
		</tbody>	
	</table>

	<center><a href="{{route('checkout.shipping')}}" class="button" >Check Out</a>
    	</center>

    </div>
<br>
<br>
<br>
<br>

@endsection	