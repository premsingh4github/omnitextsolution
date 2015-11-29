<!-- by prem kumar singh @ 2015/10/29 -->
@extends('index')

@section('content')


	<div class="row">
		<div class="col-sm-8 col-md-8 col-lg-8 leftbanner">
			<div id="carousel-example-generic" class="carousel slide" data-ridde="carousel">
				<ol class="carousel-indicators">
					<li data-taget="#carousel-example-generic" data-slide-to"0" class="active"></li>
					<li data-taget="#carousel-example-generic" data-slide-to"1"></li>
					<li data-taget="#carousel-example-generic" data-slide-to"2"></li>
					<li data-taget="#carousel-example-generic" data-slide-to"3"></li>
				</ol> <!-- indicators -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/img1.png" height="100" alt="...">
						<div class="carousel-caption">
							.....
						</div>
					</div>

					<!-- <div class="item">
						<img src="img/img2.png" alt="...">
						<div class="carousel-caption">
							.....
						</div>
					</div>

					<div class="item">
						<img src="img/img3.png" alt="...">
						<div class="carousel-caption">
							.....
						</div>
					</div>

					<div class="item">
						<img src="img/img4.png" alt="...">
						<div class="carousel-caption">
							.....
						</div>
					</div> -->
					.....
				</div>
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4 rightbanner">
			
			<div class=" text-center">
				<h4>Greater success</h4>
				<h3>with custom content</h3>
				<!-- <h5>Textbroker authors deliver high-quality content – simply, quickly, and at competitive pricing.</h5> -->
			</div>
				<div class="text-justify">
					<h4 class="text-center"><b>Start making money with your writing skills and creative thinking ability!</b></h4>
				  	<form class="form-horizontal  text-center">
				  	  <div class="form-group">
				  	    <div>
				  	    	<input id="rgd" type="text" name="fName" class="input-block-level" required="required" placeholder="Your First Name">
			            </div>
				  	  </div>
				  	  <div class="form-group">
				  	    <div>
				  	    	<input id="rgd" type="text" name="fName" class="input-block-level" required="required" placeholder="Your Last Name">
			            </div>
				  	  </div>
				  	  <div class="form-group">
				  	    <div>
				  	    	<input id="rgd" type="email"  name ="email" class="input-block-level" required="required" placeholder="Your Email Address">
			            </div>
				  	  </div>
				  	  <div class="form-group">
				  	    <div>
				  	    	<input id="rgd" type="password"  name ="password" class="input-block-level" required="required" placeholder="Password">
				  	    	<!-- <input id="pwd" type="password"  name ="password" class="input-block-level" required="required" placeholder="Confirm Password"> -->
			            </div>
			          </div>
			          <div class="form-group">
				  	    <div>
				  	    	<!-- <input  type="password"  name ="password" class="input-block-level" required="required" placeholder="Password"> -->
				  	    	<input id="rgd" type="password"  name ="password" class="input-block-level" required="required" placeholder="Confirm Password">
			            </div>
			          </div>
			          <div class="form-group">
				  	    <div>
				  	    	<input id="rgd" type="submit" name="submit" class="btn btn-primary btn-large" value="Creat New Account"/>
			            </div>
				  	  </div>
				  	</form>
				</div>
		</div>
	</div>
	<div class="bottomsection">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4 ">
				<h4 class="text-center"><b>ADDRESS</b></h4>
					<ul class="unstyled address bottomborder">
						<li><b>Address:</b> Kupondole, Lalitpur Nepal</li>
						<li><b>Email:</b> info@omnitextsolution.com</li>
						<li><b>Website:</b> www.omnitextsolution.com</li>
						<li><b>Phone No:</b> +9779815720356</li>
					</ul>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<h4 class="text-center"><b>OUR COMPANY</b></h4>
					<div class="row">
						<div class="col-sm-6">
							<ul>
								<li>About Us</li>
								<li>Support</li>
								<li>Terms of Use</li>
								<li>Privacy Policy</li>
							</ul>
						</div>
						<div class="col-sm-6">
							<ul class="bottomborder" >
								<li>Copyright</li>
								<li>We are hiring</li>
								<li>Clients</li>
								<li>Blog</li>
							</ul>
						</div>
					</div>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<h4 class="text-center"><b>WE ACCEPT</b></h4>
				<div class="row text-center">
					<a href="#"><img src="img/payoneer.png" class="imgs"></a>
					<a href="#"><img src="img/mastercard.png" class="imgs"></a>
					<a href="#"><img src="img/visa.png" class="imgs"></a>
				</div>
				<div class="row text-center">
					<a href="#"><img src="img/skrill.png" class="imgs"></a>
					<a href="#"><img src="img/paypal.png" class="imgs"></a>
					<a href="#"><img src="img/esewa.png" class="imgs"></a>
				</div>
			</div>
		</div>
	</div>
@endsection
