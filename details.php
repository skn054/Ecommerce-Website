<!DOCTYPE html>
<?php 
include 'functions/functions.php';


?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body >

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
           <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle" style="color:white"><i class="fa fa-bars fa-lg"></i></a>
           
                <a href="#" class="navbar-brand" id="menu">Online Shopping</a>
            </div>
        </nav>
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#" id="Bname">
                        Products
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-laptop fa-fw icon"></i><p class="text">Laptops</p></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-desktop fa-fw icon"></i><p class="text">Desktop</p></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-mobile  fa-fw icon" aria-hidden="true"></i><p class="text">Mobiles</p></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-camera fa-fw icon"></i><p class="text">Cameras</p></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-tablet fa-fw icon"></i><p class="text">Tablets</p></a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                     <?php getproimage();?>
                     </div>
                        
                    <div class="col-lg-6">
                    <div class="row">
                    	<div class="col-lg-12">
                    		<h2><?php getprotitle();?></h2>
                    	</div>
                    </div>
                    <div class="row">
						 <div class="col-md-12">
						  <span class="label label-primary">Vintage</span>
						  <span class="monospaced">No. 1960140180</span>
						 </div>
						</div>
                    <div class="row">
                    	<div class="col-lg-12">
                    	<h4><?php getprodesc(); ?></h4>
                    	</div>
                    </div>
                    <div class="row">
							 <div class="col-lg-5">
							  <span class="sr-only">Four out of Five Stars</span>
							  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
							  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
							  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
							  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
							  <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
							  <span class="label label-success">61</span>
                               <span class="label label-success">412 Reviews</span>
							 </div>
							 <div class="col-lg-3" id="review ">
							 <div class="row">
							 		<i class="fa fa-pencil "></i>
							        
							  		<a href="#">Write a Review</a>
							  
							  </div>
							 </div>
							 <div class="col-lg-3">
							    <div class="row">
							    <i class="fa fa-heart"></i>
							 	<a href="#">Add To Wishlist</a></div>
							 </div>
                    </div>
                    <div class="row">
                    	<div class="col-lg-12">
                    		<h3><?php echo "Rs."?><?php getproprice();?></h3>
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="col-lg-6">
                    		<a href="#"><button type="button" class="btn  btn-lg add_to">Add To Cart</button></a>
                    	</div></div>
                    	<div class="row buy">
                    	<div class="col-lg-6">
                    		<a href="#"><button type="button" class="btn  btn-success btn-lg ">Buy Now</button></a>
                    	</div>
                    </div>
           
    
    
                    </div>
                    <div class="row ">
                    	<div class="col-lg-12 tabs">
                    		<ul class="nav nav-tabs">
                    			<li role="presentation" class="active"><a href="#desc" data-toggle="tab">Description</a></li>
                    			<li role="presentation"><a href="#features" data-toggle="tab">Features</a></li>
                    			<li role="presentation"><a href="#notes" data-toggle="tab">Notes</a></li>
                    			<li role="presentation"><a href="#review" data-toggle="tab">Reviews</a></li>
                    		</ul>
                            <div class="tab-content">
                                <div id="desc" class="tab-pane active">
                                    <p class="top-10">
                                      The 'Brownie' Flash B is a box camera taking frames on 620 film, made of sheet metal by Kodak Ltd. in England, 1958-60. 
                                      A more luxurious version of the Brownie Six-20 Model F, it has a two-speed shutter (1/80, 1/40 +B), a close-focus (5-10ft) lens, a yellow filter and flash sync. The Flash B is very similar to the Brownie Flash IV, adding a two-speed shutter but lacking a tripod bush.
                                     </p>
                                </div>
                                <div id="features" class="tab-pane">
                                    <h1>Features</h1>
                                </div>
                                <div id="notes" class="tab-pane">
                                    
                                </div>
                                <div id="review" class="tab-pane">
                                    
                                </div>
                            </div>
                    	</div>
                    </div>
                    	
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myscroll.js"></script>


    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $(".text").toggle();
        $("#Bname").toggle();
    });
    </script>

</body>

</html>
