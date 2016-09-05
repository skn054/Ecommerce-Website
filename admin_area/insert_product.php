<!DOCTYPE html>
<?php
include 'includes/conn.php'


 ?>

<html>
<head>
	<title></title>
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</head>
<body bgcolor="blue">

<form action="insert_product.php" method="post" enctype="multipart/form-data">
	<table border="2" bgcolor="orange" align="centre" width="700"  >
		<tr>
		    <td>Insert product</td>
		</tr>

		<tr>
		    <td>Product title</td>
		    <td><input type="text" name="p_title" required></td>
		</tr>
		<tr>
		    <td>Product Category</td>
		    <td><select name="p_cat">
		    	<option>select a value</option>
                 <?php  


                               $q="select * from categories ";
					         $res=mysqli_query($con,$q);
					         while($data=mysqli_fetch_array($res))
					         {
					               $cat_id=$data['cat_id'];
					               $cat_title=$data['cat_title'];
					               echo "<option value='$cat_id'>$cat_title</a></li>";

					         }



                          


                 ?>


		    </select></td>
		</tr>
		<tr>
		    <td>Product Brand</td>
		    <td><select name="p_brand">
		    	<option>select a value</option>
                 <?php  


                               $q="select * from brand";
					         $res=mysqli_query($con,$q);
					         while($data=mysqli_fetch_array($res))
					         {
					               $b_id=$data['brand_id'];
					               $b_title=$data['brand_title'];
					               echo "<option value='$b_id'>$b_title</a></li>";

					         }



                          


                 ?>


		    </select></td>
		</tr>
		<tr>
		    <td>Product Image</td>
		    <td><input type="file" name="p_image" required></td>
		</tr>
		<tr>
		    <td>Product Price</td>
		    <td><input type="text" name="p_price" required></td>
		</tr>
		<tr>
		    <td>Product Decription</td>
		    <td><textarea rows="10" cols="20" name="p_desc"></textarea></td>
		</tr>
		<tr>
		    <td>Product Keyword</td>
		    <td><input type="text" name="p_keyword" required></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit"></td>
		</tr>


	</table>

</form>



</body>
</html>

      <?php 


                                     
    

                     

    

        if(isset($_POST['submit']))
        {
        	$p_title=$_POST['p_title'];
        	$p_cat=$_POST['p_cat'];
        	$p_brand=$_POST['p_brand'];
        	
        	
        	$p_price=$_POST['p_price'];
        	$p_desc=$_POST['p_desc'];
        	$p_keyword=$_POST['p_keyword'];

            
                       $p_image=$_FILES['p_image']['name'];
        	           $p_image_temp=$_FILES['p_image']['tmp_name'];
        	move_uploaded_file($p_image_temp, "product_images/$p_image");

        	$qur="insert into products(p_cat,p_brand,p_title,p_image,p_price,p_desc,p_keyword) values('$p_cat','$p_brand','$p_title','$p_image','$p_price','$p_desc','$p_keyword')";
        	$re=mysqli_query($con,$qur);


        	if($re){
		 
		 echo "<script>alert('Product Has been inserted!')</script>";
		 echo "<script>window.open('insert_product.php','_self')</script>";
		 
		 }

        }



    	
    	
    	
    	

    













      ?>

