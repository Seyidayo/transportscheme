<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="Dreacot">
    <title>Welcome to the Babcock University Transport Scheme</title>
    
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/infinite-slider.css" rel="stylesheet">
    <link href='../fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/w3.css" rel="stylesheet">
    <link href="../css/hover-min.css" rel="stylesheet">


</head>
<body>
    
    <header class="site-header">

        
    </header>
    <main class="site-main">

        <section class="hero_area1">
				<div class="nav-wrapper">  
						<nav class="navbar black navbar-default affix" id="title" data-spy="affix" data-offset-top="60" >
							<div class="container">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
									<span class="sr-only">Toggle Navigation</span>
									<div class="" onclick="myFunction(this)">
				  <div class="bar1"></div>
				  <div class="bar2"></div>
				  <div class="bar3"></div>
				</div>
								</button>
								<a href="../index.html" class="navbar-brand " style="height:70px; width:252px;">
									<div style="width:100%; height:100%;" class="sml-logo"  alt="Post"> </div>
									</a>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-navbar-collapse">
									<ul class="nav navbar-nav main-navbar-nav">
										<li class="active " ><a href="/" title="">HOME</a></li>
										<li><a class="ovrbtn" href="#x" title="">ABOUT US</a></li>
										<li><a class="ovrbtn" href="../faq.html" title="">FREQUENTLY ASKED QUESTIONS</a></li>
										<li><a class="ovrbtn" href="#x" title="">CONTACT US</a></li>
										<li><a class="lastbtn" href="../register/step1.html" style="" title="">BOOK A SERVICE</a></li>
									   
									</ul>                           
								</div><!-- /.navbar-collapse -->                
								<!-- END MAIN NAVIGATION -->
							</div>
						</nav>      
						</div>	
		  	</section>
            
    <section>
        <div class="container advert" style="margin-top:20px; width: 950px" >
            <a href="#ad0"id='learn-more'>
                    <img src="../img/ad0.jpg" width="100%" height="100%"  alt="Reference">
                </a>
    </div>

        <div class=" col-md-2"  >
            <div class="adverts">
                <a href="#ad1">
                    <img src="../img/ad1.jpg"   alt="Reference">
                </a>
            </div>
        </div>

      <div class="col-md-8 container text-center" >
            <form role="form" method="POST" action="step4.php" >
        
          <div class="track-page-outer text-center" id="tracking" >
                
              <div class="track-page-inner3">
                  
                  <h1>FILL IN REGISTRATION DETAIL</h1>
                  
                  <div>
                      <ol class="progtrckr" data-progtrckr-steps="4">
                           <li class="progtrckr-done">Service Required</li><!--
-->                        <li class="progtrckr-done">Ticket Options</li><!--
-->                        <li class="progtrckr-done">Customer Details</li><!--
-->                        <li class="progtrckr-todo">Payment & Reciept</li><!--
-->                     
                      </ol>                     
                  </div>
                  
                  <div class="col-sm-12 down1">

                      

                      <div class="form-group col-md-12"> <span style="float:left; color:black; font-weight:bold">Personal Contact</span><hr class="divide">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                      </div>
          
                        <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="phoneNumber" placeholder="Mobile Number" name="phoneNumber" maxlength="11" required>    
                       </div>

                       <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="studentNumber" placeholder="Student Number" name="studentNumber" required>
                      </div>
          
                      

                       <div class="form-group col-md-12"> <span style="float:left; color:black; font-weight:bold">Emergency Contact</span><hr class="divide">
                            <input type="text" class="form-control" id="NOK" placeholder="Next of Kin  " name="NOK" required>            
                     </div>

                     <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="NOKNumber" placeholder="Mobile Number of Next of Kin" name="NOKNumber" maxlength="11" required>   
                     </div>

                     

                     <div class="form-group col-md-12"> <span style="float:left; color:black; font-weight:bold">Regitration Details</span><hr class="divide">
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" required>
                        </div>

                     <div class="form-group col-md-12">
                            <input type="password" class="form-control" id="password" placeholder="Enter a Password" name="password" minlength="8" required>   
                     </div>

                     <div class="form-group col-md-12">
                            <input type="password" class="form-control" id="password" placeholder="Confirm Paswword" name="password" minlength="8" required>   
                     </div>
                     

                      
                  </div>

                  <div class="col-md-12 row" style="margin-top:-20px">
                    <h4 class="price" style="float:right; color: black; ">Price Estimate: ₦<span id="item-price" style="color: black; font-weight: bolder"><?= $_SESSION['price']; ?></span> <a href="#x" style="color: #ffc922"><i class="fa fa-refresh"></i></a></h4>
                   
                </div>
                  
                  <div class="col-md-12 mg20" >
                    <div class="col-md-6" >
                            <a href="step2.php" class="back" style="float:left">BACK</a>
                    </div>

                    <div class="col-md-6" >
                            <a href="step4.php">
                      <button style="float:right;" type="submit" class="button2" >
                      <span><span>NEXT</span></span></button></a>
                    </div>
                  </div>
                  
                  
              </div>
                            
          </div>
            </form>

      </div>


      <div class=" col-md-2">
          <div class="adverts">
              <a href="#ad2">
                  <img src="../img/ad2.gif" alt="Reference">
              </a>
          </div>
      </div>

    </section>

        
    </main>
    <footer class="site-footer">
        <div class="container text-center">
            <!-- Allow the contact us be at the foremost left hand side-->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
<!--                     
                    <h4><a style="color:#ffc922; text-decoration: none" href="ourservices.php ">OUR SERVICES</a></h4>
                    <a><p class="text">Interstate Travel</p></a>
                        <a><p class="text">Cab Service</p></a>
                        <a><p class="text">Airport Shuttle</p></a>
                        <a><p class="text">Courier Service</p></a>
                     -->
                  
                </div>
               <div class="col-md-3 col-sm-6 col-xs-12 fbox" >
                   
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox" >
                   
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox" >
                    <!-- <h4><a style="color:#ffc922;  text-decoration: none" href="contact.php#conct">CONTACT US</a></h4>
                    
                    <p><a href="tel:+2348159827634"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +234 815 982 7634</a></p>
                    <p><a href="mailto:info@dreacot.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info@goldtransit.com</a></p>
                 -->
				</div>
				
			
            </div>
        </div>
	 
		<div class="col-md-12 text-center" style="color:white;">
					
				<span>
					<p class="text-center">&copy; 2018 GOLD TRANSIT |<a href="privacypolicy.php">&nbsp Privacy Policy </a> </p>
					

					
					</span>
				</div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <script src="../js/customScript.js"></script> -->
    <script type="text/javascript">


    var basePrice = <?= $_SESSION['price']; ?>;

$(".calculate").change(function() {
    newPrice = basePrice;
    
    $('.calculate option:selected').each(function() {
        newPrice += $(this).data('price')
    });
    
    $('#item-price').html(newPrice);
});

        $('.carousel[data-type="multi"] .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i=0;i<4;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
          }
        });     
        
    </script>
    <script>
function myFunction(x) {
    x.classList.toggle("change");
}
</script>

<script>
$(function() { var logo = $(".lrg-logo"); $(window).scroll(function() {
var scroll = $(window).scrollTop();

    if (scroll >= 60) {
      if(!logo.hasClass("sml-logo")) {
        logo.hide();
        logo.removeClass('lrg-logo').addClass("sml-logo").fadeIn( "slow");
      }
    } else {
      if(!logo.hasClass("lrg-logo")) {
        logo.hide();
        logo.removeClass("sml-logo").addClass('lrg-logo').fadeIn( "slow");
      }
    }

});
});

$(document).ready(function(){
	// Add smooth scrolling to all links
	$(".discover-cu-main").on('click', function(event) {
  
	  // Make sure this.hash has a value before overriding default behavior
	  if (this.hash !== "") {
		// Prevent default anchor click behavior
		event.preventDefault();
  
		// Store hash
		var hash = this.hash;
  
		// Using jQuery's animate() method to add smooth page scroll
		// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		$('html, body').animate({
		  scrollTop: $(hash).offset().top
		}, 600, function(){
			
		});
	  } // End if
	});
  });

 
</script>


<script src="js/carousel.js"></script>

</body>
</html>