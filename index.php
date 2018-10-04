<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<style>
			
			@charset "UTF-8";

.animated {
  -webkit-animation-duration: 1s;
	   -moz-animation-duration: 1s;
	     -o-animation-duration: 1s;
	        animation-duration: 1s;
	-webkit-animation-fill-mode: both;
	   -moz-animation-fill-mode: both;
	     -o-animation-fill-mode: both;
	        animation-fill-mode: both;
}

.animated.hinges {
	-webkit-animation-duration: 2s;
	   -moz-animation-duration: 2s;
	     -o-animation-duration: 2s;
	        animation-duration: 2s;
}

.animated.slow {
	-webkit-animation-duration: 3s;
	   -moz-animation-duration: 3s;
	     -o-animation-duration: 3s;
	        animation-duration: 3s;
}

.animated.snail {
	-webkit-animation-duration: 4s;
	   -moz-animation-duration: 4s;
	     -o-animation-duration: 4s;
	        animation-duration: 4s;
}

@-webkit-keyframes shake {
	0%, 100% {-webkit-transform: translateX(0);}
	10%, 30%, 50%, 70%, 90% {-webkit-transform: translateX(-10px);}
	20%, 40%, 60%, 80% {-webkit-transform: translateX(10px);}
}

@-moz-keyframes shake {
	0%, 100% {-moz-transform: translateX(0);}
	10%, 30%, 50%, 70%, 90% {-moz-transform: translateX(-10px);}
	20%, 40%, 60%, 80% {-moz-transform: translateX(10px);}
}

@-o-keyframes shake {
	0%, 100% {-o-transform: translateX(0);}
	10%, 30%, 50%, 70%, 90% {-o-transform: translateX(-10px);}
	20%, 40%, 60%, 80% {-o-transform: translateX(10px);}
}

@keyframes shake {
	0%, 100% {transform: translateX(0);}
	10%, 30%, 50%, 70%, 90% {transform: translateX(-10px);}
	20%, 40%, 60%, 80% {transform: translateX(10px);}
}

.shake {
	-webkit-animation-name: shake;
	-moz-animation-name: shake;
	-o-animation-name: shake;
	animation-name: shake;
}

.login .modal-dialog{
    width: 350px;
}
.login .modal-footer{
    border-top: 0;
    margin-top: 0px;
    padding: 10px 20px 20px;
}
.login .modal-header {
    border: 0 none;
    padding: 15px 15px 15px;
/*     padding: 11px 15px; */
}
.login .modal-body{
/*     background-color: #eeeeee; */
}
.login .division {
    float: none;
    margin: 0 auto 18px;
    overflow: hidden;
    position: relative;
    text-align: center;
    width: 100%;
}
.login .division .line {
    border-top: 1px solid #DFDFDF;
    position: absolute;
    top: 10px;
    width: 34%;
}
.login .division .line.l {
    left: 0;
}
.login .division .line.r {
    right: 0;
}
.login .division span {
    color: #424242;
    font-size: 17px;
}
.login .box .social {
    float: none;
    margin: 0 auto 30px;
    text-align: center;
}

.login .social .circle{
    background-color: #EEEEEE;
    color: #FFFFFF;
    border-radius: 100px;
    display: inline-block;
    margin: 0 17px;
    padding: 15px;
}
.login .social .circle .fa{
    font-size: 16px;
}
.login .social .facebook{
    background-color: #455CA8;
    color: #FFFFFF;
}
.login .social .google{
    background-color: #F74933;
}
.login .social .github{
    background-color: #403A3A;
}
.login .facebook:hover{
    background-color: #6E83CD;
}
.login .google:hover{
    background-color: #FF7566;
}
.login .github:hover{
    background-color: #4D4D4d;;
}
.login .forgot {
    color: #797979;
    margin-left: 0;
    overflow: hidden;
    text-align: center;
    width: 100%;
}
.login .btn-login, .registerBox .btn-register{
    background-color: #00BBFF;
    border-color: #00BBFF;
    border-width: 0;
    color: #FFFFFF;
    display: block;
    margin: 0 auto;
    padding: 15px 50px;
    text-transform: uppercase;
    width: 100%;
}
.login .btn-login:hover, .registerBox .btn-register:hover{
    background-color: #00A4E4;
    color: #FFFFFF;
}
.login .form-control{
    border-radius: 3px;
    background-color: rgba(0, 0, 0, 0.09);
    box-shadow: 0 1px 0px 0px rgba(0, 0, 0, 0.09) inset;
    color: #FFFFFF;
}
.login .form-control:hover{
    background-color: rgba(0,0,0,.16);
}
.login .form-control:focus{
    box-shadow: 0 1px 0 0 rgba(0, 0, 0, 0.04) inset;
    background-color: rgba(0,0,0,0.23);
    color: #FFFFFF;
}
.login .box .form input[type="text"], .login .box .form input[type="password"] {
    border-radius: 3px;
    border: none;
    color: #333333;
    font-size: 16px;
    height: 46px;
    margin-bottom: 5px;
    padding: 13px 12px;
    width: 100%;
}


@media (max-width:400px){
    .login .modal-dialog{
        width: 100%;
    }
}

.big-login, .big-register{
    background-color: #00bbff;
    color: #FFFFFF;
    border-radius: 7px;
    border-width: 2px;
    font-size: 14px;
    font-style: normal;
    font-weight: 200;
    padding: 16px 60px;
    text-transform: uppercase;
    transition: all 0.3s ease 0s;
}
.big-login:hover{
    background-color: #00A4E4;
    color: #FFFFFF;
}
.big-register{
    background-color: rgba(0,0,0,.0);
    color: #00bbff;
    border-color: #00bbff;
}
.big-register:hover{
    border-color: #00A4E4;
    color:  #00A4E4;
}
		
		
		
		</style>
		<script>
		function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Sign in');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Login');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}

function loginAjax(){
    /*   Remove this comments when moving to server
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");            
            } else {
                 shakeModal(); 
            }
        });
    */

/*   Simulate error message from the server   */
     shakeModal();
}

function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

   
		</script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-4">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-5 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o color"></i>
										<span class="color">Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								
							
								
								
								
								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart head color" ></i>
										<span class="color">Your Cart</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->
								<div>
									<a href="#">
										<i class="fa fa-sign-in color" style="font-size:20px; color:white" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();"></i>
										<span style="color:white">Login</span>
										
										<div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                
                               
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="/login" accept-charset="UTF-8">
                                    <div class="form-group">
                                    <label for="recipient-email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control" placeholder=" "  style="color:black" name="Email" id="email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password1" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
                                </div>
                                    <input class="btn btn-default btn-login" style="background-color:#D10024;" type="button" value="Login" onclick="loginAjax()">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="bo" >
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
									<div class="col-md-12"> 
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="password1" class="col-form-label">Password</label>
													<input type="password" class="form-control" placeholder=" " style="color:black"  name="Password" id="password" required="">
												</div>
											</div>
										</div>
										
										
									</div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to 
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>        
    		      </div>
		      </div>
		  </div>
										
										
									</a>
								</div>

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->



		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
									<?php
									$conn = new mysqli("localhost", "root", "", "as_benchmark");
									
									
							
											$res = mysqli_query($conn,"select * from as_package");
												while($row = mysqli_fetch_array($res)){
												
										
									
									?>
										<!-- product -->
										<div class="product">
										
											<div class="product-img">
												<img src="data:image/jpeg;base64,'.base64_encode($row["image"]).'" alt="">
												<?php 
												echo	'<img src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'"width= "180" height ="150" alt="image not set">';
												?>
												<div class="product-label">
													<!--<span class="sale">-30%</span>
													<span class="new">NEW</span> -->
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?php echo $row["package_name"];?></a></h3>
												<h4 class="product-price"><?php echo '₹'.$row["amount"];?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
											<?php	}?>
										<!-- /product -->

										
										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
					
					
					
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
		<!-------------------------    SECTION   ---------------------------->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					
					<?php
									$conn = new mysqli("localhost", "root", "", "as_benchmark");
									
									
							
											$res = mysqli_query($conn,"select * from as_package");
												while($row = mysqli_fetch_array($res)){
												
										
									
									?>
							
							
							
					
						<div class="col-md-3">
						
							<div class="product">
											<div class="product-img">
												<?php 
												echo	'<img src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'"width= "180" height ="150" alt="image not set">';
												?>
												
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?php echo $row["package_name"];?></a></h3>
												<h4 class="product-price"><?php echo '₹'.$row["amount"];?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
							
							
							
							
							
							
							
							
							
						</div>
						
						
		<?php	}?>
					
					
				</div>
			</div>
		</div>
		
		
		
		

		
		
		<!---------------------------  /SECTION  ------------------------->
		


		

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
