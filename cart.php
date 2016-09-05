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
    <link href="cart.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
   
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
            <!--
           <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle" style="color:white"><i class="fa fa-bars fa-lg"></i></a>-->
           
                <a href="#" class="navbar-brand" id="menu">Online Shopping</a>
            </div>
            <form class="navbar-form navbar-left" role="search" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="text" name="username" placeholder="Search for products">
                    </div>
                    
                    <button type="submit" class="btn btn-default" name="submit"><i class="fa fa-search"></i></button>
                </form>
            
            <div>
                <ul class="nav navbar-nav navbar-right" id="kart"><li><a href='cart.php'><i class='fa fa-shopping-cart fa-2x '><?php echo" : "?><?php total_items(); ?> </i></a></li></ul>
            </div>



               
            
        </nav>
        <!-- Sidebar -->
        <!--
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#" id="Bname">
                        Products
                    </a>
                </li>
                <li>
                    <a href="products.php?p_id=1"><i class="fa fa-laptop fa-fw icon"></i><p class="text">Laptops</p></a>
                </li>
                <li>
                    <a href="products.php?p_id=2"><i class="fa fa-desktop fa-fw icon"></i><p class="text">Desktop</p></a>
                </li>
                <li>
                    <a href="products.php?p_id=3"><i class="fa fa-mobile  fa-fw icon" aria-hidden="true"></i><p class="text">Mobiles</p></a>
                </li>
                <li>
                    <a href="products.php?p_id=4"><i class="fa fa-camera fa-fw icon"></i><p class="text">Cameras</p></a>
                </li>
                <li>
                    <a href="products.php?p_id=5"><i class="fa fa-tablet fa-fw icon"></i><p class="text">Tablets</p></a>
                </li>
                
            </ul>
        </div>
        -->
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row" id="content_area">
                    <div class="col-lg-12">
                        
                   <div class="col-lg-10">
                 <!--
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/toll1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/toll2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/toll3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/toll4.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/toll5.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
               -->
               
                <div class="row" id="products_box" >
                    
                    
                    <div class="col-lg-10">
                    <form action="cart.php" method="post" enctype="multipart/form-data" >
                    	<table align="center" width="900" bgcolor="skyblue" border=" 2px solid white">
                    		<tr>
                    			<th>Item</th>
                    			
                    			<th>Quantity</th>
                    			<th>Price</th>
                    			<th>Delivery Details</th>
                    			<th>SubTotal</th>
                    		</tr>
                    		<?php
                    		       $ip=getIp();
                    				$query="select * from cart where ip_addr='$ip' ";
                    				$exe=mysqli_query($con,$query);
                    				while ($data=mysqli_fetch_array($exe)) {
                    					
                    					$p_id=$data['p_id'];

                    					$que="select * from products where p_id='$p_id'";
                    					$res= mysqli_query($con,$que);
                    					while($dat=mysqli_fetch_array($res))
                    					{
                    						$p_img=$dat['p_image'];
                    						$p_price=$dat['p_price'];
                    						$p_desc=$dat['p_desc'];
                    						$p_title=$dat['p_title'];
                    						?>
                    						
                    						<tr>
                    							<div class="col-lg-5">
                    							<td>
                    							    <div class="row">
                    							      <div class="col-lg-3">
                    								<img src="admin_area/product_images/<?php echo $p_img ;?>" width="80" height="70" /></div>
                    								<div class="col-lg-6">
                    								<p style='padding: 0px 5px'><?php echo $p_desc;?></p>
                    								<p>Seller:</p></div>
                    								<div class="col-lg-3">
                    								<p style='padding: 40px 0px 0px 0px'><a href='cart.php?p_id=<?php echo $p_id ?>'>Remove</a></p>
                    								</div>
                    							</td>
                    							</div>
                    							<div class="col-lg-1">
                    							<td><input type="text" size="1" name="qtn" value="1" style='margin:5px 10px;padding:0px 0px 0px 20px'/>
                    							 <p style='padding:5px 15px'><a href='cart.php?c_id=<?php echo $p_id; ?>'>Save</a></p></td></div>
                    							<div class="col-lg-2">
                    							<td ><p style='padding:0px 5px'><?php echo $p_price;?></p></td></div>
                    							<div class="col-lg-2">
                    								<td><p style="padding:5px 5px 5px">RS 20</p>
                    								<p class="description" style="padding:0px 5px">Delivery in 4-5 business days</p></td>
                    							</div>
                    							<div class="col-lg-2">
                    								<td><h5><?php $p_price=$p_price + 20;
                    								      echo $p_price; ?></h5></td>
                    							</div>
                    						</tr>
                    						<?php } } ?>
                    					
                    				
                    		 
                    	</table>
                    </form>
                    </div>
                 </div>   

                    

             </div>
                
            </div>
    <!-- Services Section -->
    

    <!-- Contact Section -->
    
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <?php
    deletecart();
     savetocart();
     ?>

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
