@extends('store-manager.base')

@section('panel-content')
	<div class="row">
		<form action="" method="post" enctype="multipart/form-data" class="col-md-8 col-md-offset-2 form-group">
			{{ csrf_field() }}
			<h3>Create an item</h3>

			<div class="input-group">
				<span class="input-group-addon">Item name</span>
				<input type="text" name="name" class="form-control" placeholder="Name">
			</div>

			<div class="input-group">
				<span class="input-group-addon">Quantity</span>
				<input type="text" name="quantity" class="form-control" placeholder="Enter 0 for unlimited">
			</div>

			<div class="input-group">
				<span class="input-group-addon">Price per unit</span>
				<input type="text" name="price" class="form-control" placeholder="Price">
			</div>

			<textarea class="form-control" name="description" placeholder="Item Description"></textarea>

			<label>Upload Photos:</label>

			<input type="file" multiple accept=".jpg, .jpeg, png" name="photos[]" />

			<input class="btn btn-default" type="submit" value="Submit">
		</form>
	</div>
@endsection