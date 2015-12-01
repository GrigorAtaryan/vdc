@include('header')
      <!-- ASIDE NAV AND CONTENT -->
      <div class="line">
         <div class="box  margin-bottom">
            <div class="margin">
               <!-- ASIDE NAV 1 -->
@include('left')
               <!-- CONTENT -->
               <div style="border:0px solid;" >
                  <div style="border:0px solid; padding-left:200px; margin:0px auto; width:750px;" >
                  <code class="font_fantasy" style="font-size:50px">About Us</code>
                  @foreach($data_about as $about)
					   <p style="font-size:20px;" class="text-primary font_fantasy"><?php echo $about->text ?></p>
				      @endforeach
                  </div>        
               </div>
             
     

@include('footer')