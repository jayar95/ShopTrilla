@extends('store-manager.base')

@section('panel-content')
	@foreach ($products as $product)
		<li>{{$product->name}} <a href="{{ route('product.delete', ['product' => $product->id]) }}">Delete</a></li>
	@endforeach
@endsection