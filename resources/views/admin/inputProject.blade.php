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
  <head>
	@include('layouts.head')  
	<!--=== custom CSS ===-->
    <title>Input project</title>
  </head>

  <body class="int_dark_bg">
	</div>
		<!--===Index1 Dark Page Title start===-->
		<div class="int_about_page_title int_dark_about_title"> 
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
						<div class="int_bread_crumbs">
							<h1>Form Input project</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--===Index1 Dark Page Title End===-->
		
		<!--===Start Contact Us White Section===-->
		<div class="int_profile_white int_profile_dark">
			<div class="container">
					<div class="int_basic_edit">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="form_block">
									<h3>project information</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						
						<div class="col-md-6">
							<div class="form_block">
								<input type="text" class="form_field" name="name" placeholder="Project name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form_block">
								<input type="file" class="form_field" name="image" multiple>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form_block">
								<textarea class="form_field" name="details" placeholder="Details"></textarea>
							</div>
						</div>
					</div>
					<a href="javascript:;" class="int_btn">Add Project<span class="btn_caret"><i class="fas fa-caret-right"></i></span></a>
				</div>
			</div>							
		</div>
		<!--======End Contact Us White Section======-->
		
			
	</div> <!--=== Optional JavaScript ===-->
    @include('layouts.js')
	<!--=== Optional JavaScript ===-->
	<!--=== End Main wraapper ===-->
	
  </body>
</html>