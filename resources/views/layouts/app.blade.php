<!DOCTYPE HTML>
<html>
<head>
<title>ancien sujet de l ufr svt et sea</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript" charset="utf-8"></script>

  <script src="js/jquery.modal.js" type="text/javascript" charset="utf-8"></script>
  <link rel="stylesheet" href="ccs/jquery.modal1.css" type="text/css" media="screen" />

  <script src="highlight/highlight.pack.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" charset="utf-8"> hljs.initHighlightingOnLoad(); </script>
  <link rel="stylesheet" href="highlight/github.css" type="text/css" media="screen" />
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />

  
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});

</script>

</head>
<body>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
    <script>
      function openColorBox(){
        $.colorbox({iframe:true, width:"80%", height:"80%", href: "http://elianebirba.org/svtsea/terms.html"});
      }
      
      function countDown(){
        seconds--
        $("#seconds").text(seconds);
        if (seconds === 0){
          openColorBox();
          clearInterval(i);
        }
      }

      var seconds = 1,
          i = setInterval(countDown, 1000);
    </script>-->
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="">Ancien sujet</a>
	    </div>
	    <!--/.navbar-header-->

	   <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
			
			<!--<li class="dropdown">
		            <a href="login.php" ><i class="fa fa-user"></i><span>Login</span></a>
		        </li>-->
		        <li class="dropdown">
		            <a href="logout.php" ><i class="fa fa-user"></i><span>Logout</span></a>
		        </li>
		       <li class="dropdown">
		            <a href="https://www.facebook.com/Burkina-fasoAncien-sujet-examenTDdevoir-ufrsvtsea-1635108976753633/" target="_blank"><i class="fa fa-user"></i><span>facebook</span></a>
		        </li>
		        
		       
		       
		     
		     </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
</nav>
@yield('nav');


<!-- banner -->
  <div class="courses_banner">
  
  	<div class="container">
  		<h3>Ancient Sujet</h3>
  		<p class="description">
            sur ce site vous pouvez retrouver les anciens sujet de tout les matieres de l'UFR SVT ET SEA que vous pouvez telecharger gratuitement
        </p>
        <div class="breadcrumb1">
            <ul>
              
            </ul>
        </div>
  	</div>
   </div>
    <!-- //banner -->
 @yield('content');
	</div>
    <div class="footer">
    	<div class="container">
    		
    		
    		<div class="clearfix"> </div>
    		<div class="copy">
		       <p>Copyright © 2016 ancient sujet. All Rights Reserved  | Design by <a href="login.php">Holyngcom</a> </p>
	        </div>
    	</div>
    </div>
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- FlexSlider -->
</body>
</html>	
