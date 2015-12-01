@extends('auth/app')


@section('content')

<div class="container">
	
	<div class="row">

		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
			

				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
				
					@foreach($result_category as $category)
						<b><a href="#"  style="font-size:25px;"><?php echo $category->category_name; ?></a></b><br />
					@endforeach
					
					<?php if(!empty($result_sub_category)) {?>
							@foreach($result_sub_category as $sub_category)
										&nbsp &nbsp <a href="{{ url('auth/products/'.  $sub_category->id) }}"  style="font-size:25px;"><?php echo $sub_category->sub_category_name ?></a><br />
							@endforeach
					<?php } ?>			
							
					
						
	
					<div class="container">
			
					<h5>Add Sub category (Submenu)</h5>
					<form action="{{ url('auth/add_subcategory/' . $category->id) }}" method="post">  
					<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
					<table style="width:600px;" class="table table-condensed">
						<tr>
							<td><input style="width:300px;" type="text" name="sub_category_name" class="form-control input-lg" /></td>
							<td><input type="submit"  class="btn btn-primary" value="Add Subcategory"></td>
						</tr>
					</table>
				
					</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection