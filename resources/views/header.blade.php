<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="Description" content="Buy computers, accesories, networks, hardware from better store">
      <meta name="Keywords" content="Computers, dubai computers, vdc, vdcbrand, brand, computer store, computers accesories, printers, scanners, new brand">
      <title>vdcbrand</title>
      <link rel="stylesheet" href="css/components.css"/>
      <link rel="stylesheet" href="css/responsee.css"/>
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css"/>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
    
	
	 <!-- Bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	 <!-- Gallery -->
	 
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />
	<script src="js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	<script src="js/jquery.mousewheel.min.js" type="text/javascript"></script>
	<script src="js/jquery.kinetic.min.js" type="text/javascript"></script>
	<script src="js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>
	 
	 <script type="text/javascript">
		// Initialize the plugin with no custom options
		$(document).ready(function () {
			// None of the options are set
			$("div#makeMeScrollable").smoothDivScroll({
				autoScrollingMode: "onStart"
			});
		});
	</script>
	 
	
	
	
	
	

	
	
	
		<style type="text/css">

		#makeMeScrollable
		{
			width:100%;
			height: 300px;
			position: relative;
		}
		
		/* Replace the last selector for the type of element you have in
		   your scroller. If you have div's use #makeMeScrollable div.scrollableArea div,
		   if you have links use #makeMeScrollable div.scrollableArea a and so on. */
		#makeMeScrollable div.scrollableArea img
		{
			position: relative;
			float: left;
			margin: 0;
			padding: 0;
			/* If you don't want the images in the scroller to be selectable, try the following
			   block of code. It's just a nice feature that prevent the images from
			   accidentally becoming selected/inverted when the user interacts with the scroller. */
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-o-user-select: none;
			user-select: none;
		}
	</style>
	
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
         <nav>
            <div class="line">
               <div style="height:100px;" class="s-12 l-2"><br />
                  <img class="s-5 l-12 center" src="images/VDCc.png"/>
               </div>
               <div class="top-nav s-12 l-10 right">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li><a class="footer_font" href="{{ url('home') }}"><b>Home</b></a></li>
                     <li><a class="footer_font" href="{{ url('about') }}"><b>About us</b></a></li>
					 <li><a class="footer_font" href="{{ url('partners') }}"><b>Partners</b></a></li>
                     <li><a class="footer_font" href="{{ url('contact') }}"><b>Contact us</b></a></li> 
                  </ul>                
               </div>
            </div>
         </nav>
		 <br/>
      <div id="makeMeScrollable">
	
		<img src="images/slide_images/pencils.jpg" alt="Demo image" id="pencils" />
		<img src="images/slide_images/golf.jpg" alt="Demo image" id="golf" />
		<img src="images/slide_images/river.jpg" alt="Demo image" id="river" />
		<img src="images/slide_images/train.jpg" alt="Demo image" id="train" />
		<img src="images/slide_images/leaf.jpg" alt="Demo image" id="leaf" />
		<img src="images/slide_images/dog.jpg" alt="Demo image" id="dog" />
	</div>
	  