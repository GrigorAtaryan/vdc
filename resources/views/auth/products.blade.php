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
			
					<div class="container">
			
					<h5>Add Category (Menu)</h5>
					<form action="{{ url('auth/add_category') }}" method="post">  
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<table style="width:600px;" class="table table-condensed">
						<tr>
							<td><input style="width:300px;" type="text" name="category_name" class="form-control input-lg"/></td>
							<td><input type="submit"  class="btn btn-primary" value="Add Category"></td>
							
						</tr>
					</table>
				
					<table  class="table table-condensed">
						<tr>
						<?php 
								if(!empty($result_category)) {?>
									@foreach($result_category as $category)
										<a href="{{ url('auth/show_product/' . $category->id) }}"  style="font-size:25px;"><?php echo $category->category_name ?></a><br />
									@endforeach
						<?php } ?>
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