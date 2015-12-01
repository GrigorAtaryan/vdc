@extends('auth/app')


@section('content')

<div class="container">
	
	<div class="row">

		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
			

				<div class="panel-body">
				@if(Session::has('success_update_about'))
						<div class="alert alert-success">
							
								<ul>
									<li>{{ Session::get('success_update_about') }}</li>
								</ul>
							
						</div>
				@endif
					<h1>About Us</h1>
					<div class="container">
			
					<h5>Add/Edit</h5>
					<form action="{{ url('update_about') }}" method="post">  
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							@foreach($data_about as $about)
								<textarea  rows="10" cols="100" name="text"><?php echo $about->text ?></textarea><br /> 
							@endforeach
						
						<input type="submit"  class="btn btn-primary" value="Update">
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
