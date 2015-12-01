@extends('auth/app')


@section('content')

<div class="container">
	
	<div class="row">

		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
			

				<div class="panel-body">
				@if(Session::has('success_update_partners'))
						<div class="alert alert-success">
							
								<ul>
									<li>{{ Session::get('success_update_partners') }}</li>
								</ul>
							
						</div>
				@endif
					<h1>Partners</h1>
					<div class="container">
			
					<h5>Add/Edit</h5>
					<form action="{{ url('update_partners') }}" method="post">  
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							@foreach($data_partners as $partners)
								<textarea  rows="10" cols="100" name="text"><?php echo $partners->text ?></textarea><br /> 
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