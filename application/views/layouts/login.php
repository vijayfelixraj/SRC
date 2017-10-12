<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="Dashboard">
	    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

	    <title>SRS - Login</title>
	    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" type="image/x-icon" />
	    <!-- Bootstrap core CSS -->
	    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
	    <!--external css-->
	    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	        
	    <!-- Custom styles for this template -->
	    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
  	</head>

  	<body>

      	<!-- *********************************************************************************************************
      												MAIN CONTENT
      	********************************************************************************************************** -->
      	<div id="login-page">
  			<div class="container">
		      	<?php 
		          	echo $template['body']; 
		        ?>
		    </div>
		</div>
	  
	  	<!-- *********************************************************************************************************
      												MAIN CONTENT END
      	********************************************************************************************************** -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url(); ?>assets/img/login-bg.jpg", {speed: 500});
    </script>

  </body>
</html>
