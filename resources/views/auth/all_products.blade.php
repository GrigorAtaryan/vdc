@extends('auth/app')


@section('content')

<div class="container">
	
	<div class="row">
			@if(count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
			@endif
		<div class="col-md-10 col-md-offset-1">
			<div style="width:900px; padding:20px;" class="panel panel-default">
					
					@if(isset($products))
					<code style="font-size:22px">Products</code><br/>
					<table class="table">		
					@foreach($products as $products)
						<tr>
							<td><a style="font-size:20px;" href="#"><?php echo $products->name_product ?></a></td>
							<td>
								<img width="40" height="40" src="{{ URL::to('images/edit.png')}}" />
								<img src="{{ URL::to('images/delete.png')}}" />
							</td>
								
						</tr>
					@endforeach						
					</table>
					@endif
				
					
				
					<hr />
					<form action="{{ url('auth/add_products/' . $id) }}" method="post" enctype="multipart/form-data">  
					<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
					<table style="width:700px; magin:0px auto; padding:5px; border:0px solid;">
						<th><h5><code style="font-size:20px">Add product</code></h5></th>
						<tr>
							<td><b>Name</b><input style="width:270px;" type="text"  value="{{ Illuminate\Support\Facades\Input::old('name_product')}}" name="name_product" class="form-control input-lg" /></td>
						</tr>
						<tr>
							<td><b>Description</b><textarea style="width:500px; height:100px;" name="description_product"  value="{{ Illuminate\Support\Facades\Input::old('description_product')}}"  class="form-control input-lg" ></textarea></td>
						</tr>
						<tr>						
							<td><b>Price</b><input style="width:100px;" type="text"  value="{{ Illuminate\Support\Facades\Input::old('price_product')}}" name="price_product" class="form-control input-lg" /></td>
						</tr>
						<tr>
							<td><b>Images</b><input type="file" name="file_product[]" multiple/></td>
							<td><input type="submit"  class="btn btn-primary" value="Add Product"></td>
						</tr>

					</table>
				
					</form>	
				
				</div>
			</div>
		</div>
	</div>
</div>
@endsection