@include('header')
      <!-- ASIDE NAV AND CONTENT -->
      <div class="line">
         <div class="box  margin-bottom">
            <div class="margin">
			
			@if (count($errors) > 0)
						<div style="width:500px;margin:0px auto" class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
			@endif
               <!-- ASIDE NAV 1 -->
@include('left')
               <!-- CONTENT -->
               <div style="border:0px solid; padding-left:250px; margin:0px auto; width:900px;" >
                  <code style="font-family: Copperplate,Copperplate Gothic Light,fantasy; font-size:50px">Contact Us</code>
                  <form action="{{ url('mail') }}" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <table style="width:600px; background-color:#E0E0E0; border:0px solid;">
                        <tr>
                           <td><p class="footer_font">Name</p></td>
                           <td><input type="text" name="name" class="form-control"  placeholder="Jane Doe"></td>
                        </tr>
                        <tr>
                           <td><p class="footer_font">email</p></td>
                           <td><input type="email" name="email" class="form-control"  placeholder="jane.doe@example.com"></td>
                        </tr>
                        <tr>
                           <td><p class="footer_font">Message</p></td>
                           <td><textarea class="form-control" name="message" cols="30" rows="5"></textarea></td>
                           <td><input type="submit" value="Send" class="btn btn-primary" /></td>
                        </tr>
                     </table><br />
                  </form>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.406251601594!2d55.28712415485642!3d25.25691587691797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43153968b1a3%3A0x680c1c761060ac88!2sNIFTY+Computers+Trading+LLC!5e0!3m2!1sru!2sru!4v1448217178162" width="600" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>
     
               </div>
             

@include('footer')