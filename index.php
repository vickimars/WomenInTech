<!--

<!DOCTYPE html>
<html>
    <?php
// This is the home page of our application
?>

<head>
<title>Bridget Codes Diary</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Quickly Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="WomenInTech-master/web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="WomenInTech-master/web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="web/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- banner-body -->
	<div class="banner-body">
		<div class="container">
<!-- header -->
			<div class="header">
				<div class="header-nav">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						   <a class="navbar-brand" href="index.php"><span>Q</span>uickly</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						 <ul class="nav navbar-nav">
							<li class="hvr-bounce-to-bottom active"><a href="index.php">Home</a></li>
							<li class="hvr-bounce-to-bottom"><a href="about.html">About</a></li>
							<li class="hvr-bounce-to-bottom"><a href="testupload.php">Uploadpost</a></li>
							<li class="hvr-bounce-to-bottom"><a href="contact.html">Contact Us</a></li>
						  </ul>
						  <div class="sign-in">
							<ul>
								<li><a href="forms/login.php">Sign In </a>/</li>
								<li><a href="forms/register.php">Register</a></li>
							</ul>
							</div>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>
	
			<!-- search-scripts -->
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
			<!-- //search-scripts -->
			</div>
<!-- //header -->
<!-- header-bottom -->
	<div class="header-bottom">
		<div class="header-bottom-top">
			<ul>
				<li><a href="#" class="g"> </a></li>
				<li><a href="#" class="p"> </a></li>
				<li><a href="#" class="facebook"> </a></li>
				<li><a href="#" class="twitter"> </a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
<!-- banner -->
		<div class="banner">
<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
				<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-inf">
								<h3>Bridget Codes Diary</h3>
								<p>The not so secret diary of a female coder</p>
								<a href="about us.php">See More</a>
							</div>
						</li>
						<li>
							<div class="banner-inf">
								<h3>Can a woman coder have it all</h3>
								<p>"One thing that I never anticipated when starting this course was the extent to which it would take over all aspects of my life. 
                                                                    We all heeded the warnings about setting aside evenings for coding and that this would be hard but ultimately fulfilling. My vocabulary has changed, mojitos, Netflix and chilling have been replaced with PHP, Trello and my all-time appropriately named favourite GitHub.  A three hour chunk of ‘free time’ takes on a new meaning. When I started the course I would allot time to study and find that two hours later, I was still staring at a line of code trying to get rock, paper, scissors to work (another sign that my priorities had changed). Friends would ask me what I was doing for the weekend and I would say ‘coding’, which wasn’t a euphemism for something alternative but an actual statement of fact.  I would be up until late at night coding and go to bed dreaming of PHP.</p>
								<a href="single.html">See More</a>
							</div>
						</li>
						<li>
							<div class="banner-inf">
								<h3>Hidden Figures Film Review</h3>
								<p>Placeholder text</p>
								<a href="single.html">See More</a>
							</div>
						</li>
					</ul>
				</div>
		</div>
<!-- //banner -->
<!-- banner-bottom -->
			<div class="banner-bottom">
				<ul id="flexiselDemo1">			
					<li>
						<div class="banner-bottom-grid">
							<img src="images/1.jpg" alt=" " class="img-responsive" />
							<p>BLOg POST ONE</p>
							<div class="more">
								<a href="single.html" class="hvr-bounce-to-bottom sint">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-bottom-grid">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
							<p>BLOG POST TWO </p>
							<div class="more">
								<a href="single.html" class="hvr-bounce-to-bottom sint">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-bottom-grid">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
							<p>placeholder text</p>
							<div class="more">
								<a href="single.html" class="hvr-bounce-to-bottom sint">Read More</a>
							</div>
						</div>
					</li>
				</ul>
				<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
<!-- //banner-bottom -->
<!-- blog -->
			<div class="blog">
				<div class="blog-left">
					<div class="blog-left-grid">
						<div class="blog-left-grid-left">
							<h3><a href="single.html">Frustrations with Code</a></h3>
							<p>by <span>Christina G</span> | March 29,2017 | <span>Coder</span></p>
						</div>
						<div class="blog-left-grid-right">
							<a href="#" class="hvr-bounce-to-bottom non">20 Comments</a>
						</div>
						<div class="clearfix"> </div>
						<a href="single.html"><img src="itcrowd.gif" alt=" " class="img-responsive" /></a>
						<p class="para"> placeholder text.</p>
						<div class="rd-mre">
							<a href="single.html" class="hvr-bounce-to-bottom quod">Read More</a>
						</div>
					</div>
					<div class="blog-left-grid">
						<div class="blog-left-grid-left">
							<h3><a href="single.html">Course Journey</a></h3>
							<p>by <span>Jenny</span> | April 15th 2017 | <span>Coder</span></p>
						</div>
						<div class="blog-left-grid-right">
							<a href="#" class="hvr-bounce-to-bottom non">3 comments</a>
						</div>
						<div class="clearfix"> </div>
						<a href="single.html"><img src="xxx" alt=" " class="img-responsive" /></a>
						<p class="para"> Placeholder text.</p>
						<div class="rd-mre">
							<a href="single.html" class="hvr-bounce-to-bottom quod">Read More</a>
						</div>
					</div>
				</div>
				<div class="blog-right">
					<div class="sap_tabs">	
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
							  <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>Popular</span></li>
							  <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Recent</span></li>
							  <li class="resp-tab-item grid3" aria-controls="tab_item-2" role="tab"><span>Comments</span></li>
							  <div class="clear"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
									  <div class="tab_list">
										<a href="womenintech-master/web/images/itcrowd.gif" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/7.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015 <span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="womenintech-master/web/images/women2.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/8.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/9-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/9.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/10-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/10.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
								</div>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
									  <div class="tab_list">
										<a href="images/8-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/8.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/9-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/9.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/10-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/10.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/7-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/7.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
								</div>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<div class="facts">
									  <div class="tab_list">
										<a href="images/9-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/9.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/10-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/10.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/7-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/7.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/8-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/8.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
								</div>
							</div>
						 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							   </script>
						<link rel="stylesheet" href="css/swipebox.css">
						<script src="js/jquery.swipebox.min.js"></script> 
							<script type="text/javascript">
								jQuery(function($) {
									$(".swipebox").swipebox();
								});
							</script>
					</div>
					</div>
					<div class="newsletter">
						<h3>Login to our Site</h3>
						<form action="" method="post">
<div>
<label for="username">Username: </label>
<input name="username" type="text"/>
</div>

<div>
<label for="password">Password: </label>
<input name="password" type="password"/>
</div>

<!--<button type="submit">Login</button>-->
<input type="submit" value="Login" tabindex="6" id="submit" name="submit"/>
</form>

                                                
					</div>
					<div class="four-fig">
						<div class="four-fig1">
							<a href="Womenintech" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="WomenIntech-master/web/images/womenintech.jpg" class="img-responsive" alt=" " /> 
							</a>
						</div>
						<div class="four-fig1">
							<a href=WomenIntech" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="WomenInTech-master/web/images/bridgetjones.jpeg" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="four-fig1">
							<a href="WomenInTech" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="WomenInTech-master/web/images/women2.jpg" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="four-fig1">
							<a href="WomenInTech" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="WomenInTech-master/web/images/coding.png" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pgs">
						<h3>Pages</h3>
						<ul>
							<li><a href="#">placeholder</a></li>
							<li><a href="#">placeholder</a></li>
							<li><a href="#">placeholder</a></li>
							<li><a href="#">placeholder</a></li>
							
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
<!-- //blog -->
	</div>
<!-- //header-bottom -->
		</div>
	</div>
<!-- //banner-body -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<h3>Footer</h3>
					</div>
					<div class="footer-grd-left">
						<p>placeholder</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid">
					
				</div>
				<div class="col-md-3 footer-grid">
					<h3>Pictures</h3>
					<div class="footer-grd">
						<img src="WomenIntech-master/web/images/womenintech.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="footer-grd">
						<img src="WomenIntech-master/web/images/women2.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="footer-grd">
						<img src="WomenIntech-master/web/images/coding.png" class="img-responsive" alt=" " />
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>