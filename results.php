<!DOCTYPE>
<?php 
include 'functions/functions.php';


?>
<html>
	<head>
		<title>My Online Shop</title>
		
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		
			<a href="index.php"><img id="logo" src="images/logo.gif" /> </a>
			<img id="banner" src="images/ad_banner.gif" />
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
			
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/ > 
					<input type="submit" name="search" value="Search" />
				</form>
			
			</div>
			
		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			
				<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
				   <?php getcat();?>
				
				
				<ul>
					
				<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
					
					<?php getbrand();?>
				
				<ul>
			
			
			</div>
		
			<div id="content_area">
			
			
			
			<div id="shopping_cart"> 
					
					<span style="float:right; font-size:17px; padding:5px; line-height:40px;">
					
					<b style="color:yellow">Shopping Cart -</b> Total Items:  Total Price:  <a href="cart.php" style="color:yellow">Go to Cart</a>
					
					
					</span>
			</div>
			
				<div id="products_box">
				
				
				         
                                <?php 

                                		if(isset($_GET['search']))
                                		{

                                      			$box=$_GET['user_query'];
                                      			$q="select * from products where p_keyword like'%$box%'";
                                      			$res=mysqli_query($con,$q);
                                      			$count=mysqli_num_rows($res);
                                      			if($count==0)
                                      			{
                                      				echo "<h1>no product found</h1>";
                                      			}
                                      			else{
                                      			while($data=mysqli_fetch_array($res))
                                      			{
                                      						 $p_title=$data['p_title'];
									               $p_id=$data['p_id'];
									               $p_img=$data['p_image'];
									               $p_price=$data['p_price'];
									               $p_desc=$data['p_desc'];
									               echo "

									                     <div id='single_product'>
									                       <p>$p_title</p>

									                        <img src='admin_area/product_images/$p_img' height='120px' width='130px'>
									                        <p><b>$p_desc</b></p>
									                        <a href='details.php?p_id=$p_id' style='float:left'>details</a>
									                        <a href='#' ><button style='float:right'>addTocart</button></a>
									                      </div>  
									               ";
									                                      			}
									                                      	}		

                                		}




                                ?>
                                        
				        
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		<div id="footer">
		
		<h2 style="text-align:center; padding-top:10px;">&copy; 2014 by www.OnlineTuting.com</h2>
		
		</div>
	
	
	
	
	
	
	</div> 
<!--Main Container ends here-->


</body>
</html>