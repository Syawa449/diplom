@extends('layouts.header')

@section('content')
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">User Messages</h2>    			    				    				
					<div id="gmap" class="contact-map">

					<div class="py-12" style="flex-direction:row;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-wrap">
            @foreach($data as $el)

            <div class="card" style="width: 20rem; margin:30px 30px; ">
                <div class="card-body">
                    
                    <p class="card-text">{{ $el->name }}</p>
					<p class="card-text info">{{ $el->email }}</p>
					<p class="card-text">{{ $el->subject }}</p>
                    <h5 class="card-title">{{$el->info}}</h5>
					<a href="{{route('delete', $el->id)}}"><button type="submit" class="btn btn-warning">Удалить</button></a> 
                    
					


                </div>  
            </div>
            @endforeach

        </div>
    			</div>
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="container">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Add new product</h2>
	    				<div class="status alert alert-success" style="display: none"></div>

                        <!-- <form id="main-contact-form" action="{{route ('sozdatproduct') }}" 	 class="contact-form row" name="contact-form" method="post" enctype="multipart/form-data">
						@csrf
				            <div class="form-group col-md-6">
				                <input type="text" name="title" class="form-control" required="required" placeholder="title" id="title">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="cost" class="form-control" required="required" placeholder="cost" id="cost">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="instock" class="form-control" required="required" placeholder="instock" id="instock">
				            </div>
                            <div class="form-group col-md-12">
				                <input type="text" name="instockboolean" class="form-control" required="required" placeholder="instockboolean" id="instockboolean">
				            </div>
                            <div class="form-group col-md-12">
				                <input type="text" name="condition" class="form-control" required="required" placeholder="condition" id="condition">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="brand" id="brand" required="required" class="form-control" rows="8" placeholder="brand" ></textarea>
				            </div> 
				            <div class="form-group col-md-12">
                                <input type="file" name="img" id="img">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
							</div>
                            
						</div>

				        </form> -->
				    	<form id="main-contact-form" action="{{route ('sozdatproduct') }}" 	 class="contact-form row" name="contact-form" method="post" enctype="multipart/form-data">
						@csrf
				            <div class="form-group col-md-6">
				                <input type="text" name="title" class="form-control" required="required" placeholder="title" id="title">
				            </div>
                            <div class="form-group col-md-6">
				                <input type="text" name="cost" class="form-control" required="required" placeholder="cost" id="cost">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="instock" class="form-control" required="required" placeholder="instock" id="instock">
				            </div>
				            <div class="form-group col-md-12">
                            <select name="instockboolean" id="instockboolean">
                                <option>0</option>
                                <option>1</option>
                                
                                </select>
				            </div>
                            <div class="form-group col-md-6">
				                <input type="text" name="condition" class="form-control" required="required" placeholder="condition" id="condition">
				            </div>
                            <div class="form-group col-md-6">
				                <input type="text" name="brand" class="form-control" required="required" placeholder="brand" id="brand">
				            </div>
				            <div class="form-group col-md-12">
                                <input type="file" name="img" id="img">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
							</div>
						</div>

				        </form>

	    		</div>
			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
@endsection
