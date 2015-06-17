<!DOCTYPE html>



<html>
	<head>
		<title>Chem-Stat, Inc.&nbsp; Chemicals, Solvents and Environmental and Safety Assistance</title>
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="dist/css/style.css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
		<script type="text/javascript" src="dist/js/bootstrap.js"></script>
		<script src="dist/js/smooth-scroll.min.js"></script>
	</head>

	<body>
		

			<nav data-scroll-header id="navbar" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Welcome to Chem-Stat Online</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse navbar-right">
      <ul class="nav navbar-nav">
        <li><a data-scroll href="#about">Home</a></li>
        <li><a data-scroll href="#products">Products</a></li>
        <li><a data-scroll href="#process">Services</a></li>
        <li><a data-scroll href="#contact">Contact</a></li>
         <li><a data-scroll href="#home">Company</a></li>
       
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<script type="text/javascript">
  $(function() {

    smoothScroll.init({
      speed: 500,
      easing: 'easeInOutCubic'
    });

    $(window).on('scroll', function () {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > 70) {
          $('#navbar').addClass('animate-navbar');
      }else {
          $('#navbar').removeClass('animate-navbar');
      }
    });
  });
</script>

			<div id="home" class="col-md-12 header-image" id="main">
				
				<div id="caret"><a data-scroll href="#about"><i class="icon-angle-down"></i></a></div>
			</div>

		<div id="#about">
				
				<div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Our Mission is Simple:</h1>
            <p>Our focus at Chem-Stat, Inc., is You, the customer. Our goal is to provide a service that is second to none within the chemical supply business. We are committed to meeting your industrial, laboratory, and scientific needs by offering competitive prices, quality service and technical support. We strive for our customers and vendors to recognize Chem-Stat as offering quality service, expertise and solutions for your business now and into the future. </p>
            <p><a class="btn btn-primary btn-large">Click here to learn more about Chem-Stat!</a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Our Staff</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="images/William.jpg" alt="">
                    <div class="caption">
                        <h3>William Cusik</h3>
                        <p></p>
                        <p>
                             <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                     <img src="images/Tim.jpg" alt="">
                    <div class="caption">
                        <h3>Tim Belcastro</h3>
                        <p></p>
                        <p>
                             <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                     <img src="images/Lori.jpg" alt="">
                    <div class="caption">
                        <h3>Lori Cusik</h3>
                        <p></p>
                        <p>
                             <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="images/John.jpg" alt="">
                    <div class="caption">
                        <h3>John Reams</h3>
                        <p></p>
                        <p>
                            <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
			
			


			</div>
	</div>
				<div id="footer">
					<p>footer example</p>
				</div>

	</body>
</html>