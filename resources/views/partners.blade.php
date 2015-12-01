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
                     <code style="font-size:40px" class="font_fantasy">Our Partners</code>
                     @foreach($data_partners as $partners)
					     <p style="font-size:20px;" class="text-primary font_fantasy"><?php echo $partners->text ?></p>
			      	  @endforeach
					 
                  </div>    
               </div>
             
     

@include('footer')