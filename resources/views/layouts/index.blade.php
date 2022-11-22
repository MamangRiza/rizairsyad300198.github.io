<!DOCTYPE html>
<!-- 
Template Name: Inland Design - Responsive HTML Template 
Version: 1.0.0
Author: Kamleshyadav
Website: 
Purchase: 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->
<!-- mengarahkan ke (konten) -->
@include('layouts.head')  
  <!-- HEAD -->
  <body class="int_dark_bg">
	<div class="search_input_box">
		<input type="text" placeholder="Search here..."/> 
		<span><i class="fas fa-times"></i></span>
	</div>
    <!--=== start Main wraapper ===-->
	<div class="int_main_wraapper">
		@include('layouts.header')

        <!-- start content -->
        @yield('contents') 
        <!-- end content -->

		<!--===Start Dark Footer Section===-->
		@include('layouts.footer')
		<!--===End Dark Footer Section===-->
		
	</div>
	<!--=== End Main wraapper ===-->
	
    <!--=== Optional JavaScript ===-->
    @include('layouts.js')
	<!--=== Optional JavaScript ===-->
  </body>
</html>