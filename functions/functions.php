<?php


    $con=mysqli_connect("localhost","root","","ecommerce");




function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
function products()
{
  global $con;
  if(isset($_GET['p_id']))
  {
    $p_id=$_GET['p_id'];
    $q="select * from products where p_cat='$p_id' order by RAND()";
    $run=mysqli_query($con,$q);
    while($data=mysqli_fetch_array($run))
    {
      $p_title=$data['p_title'];
               $p_id=$data['p_id'];
               $p_img=$data['p_image'];
               $p_price=$data['p_price'];
               $p_desc=$data['p_desc'];
               echo "

                     <div class='col-sm-4 col-lg-4 col-md-4' id='single_product'>
                    <ul class='products'>
                                <li>
                                    <a href='details.php?p_id=$p_id'>
                                        <img src='admin_area/product_images/$p_img' height='150' width='200'></a>
                                        <h4>$p_desc</h4>
                                        <p class='pull-left'><b>Rs $p_price<b></p>
                                        <a href='index.php?p_id=$p_id'><button type='btn-default' style='float:right'><i class='fa fa-shopping-cart pull-right' aria-hidden='true'></i></button></a>
                                    
                                </li>
                            </ul>
                          </div> 
               ";
    }

  }
}
function cart()
{
        if(isset($_GET['p_id']))
        {

          $ip=getIp();
          $p_id=$_GET['p_id'];
           global $con;

         $q="select * from cart where p_id='$p_id' and ip_addr='$ip' ";
         $res=mysqli_query($con,$q);
         $count=mysqli_num_rows($res);
         if($count==0)
         {
                 $i="insert into cart(p_id,ip_addr) values('$p_id','$ip')";
                 $r=mysqli_query($con,$i);
                 if($r)
                 {
                  echo "<script>alert('product inserted')</script>";
                  echo "<script>window.open('cart.php','_self')</script>";
                 }
         }
         else
         {
           echo "<script>alert('product already inserted')</script>";
           echo "<script>window.open('cart.php','_self')</script>";
         }

        }


}





function total_items(){
 
  
  
    global $con; 
    
    $ip = getIp(); 
    
    $get_items = "select * from cart where ip_addr='$ip'";
    
    $run_items = mysqli_query($con, $get_items); 
    
    $count_items = mysqli_num_rows($run_items);
    
    
    
    
  
  echo $count_items;
  }


  function total_price(){
  
    $total = 0;
    
    global $con; 
    
    $ip = getIp(); 
    
    $sel_price = "select * from cart where ip_addr='$ip'";
    
    $run_price = mysqli_query($con, $sel_price); 
    
    while($p_price=mysqli_fetch_array($run_price)){
      
      $pro_id = $p_price['p_id']; 
      
      $pro_price = "select * from products where p_id='$pro_id'";
      
      $run_pro_price = mysqli_query($con,$pro_price); 
      
      while ($pp_price = mysqli_fetch_array($run_pro_price)){
      
      $product_price = array($pp_price['p_price']);
      
      $values = array_sum($product_price);
      
      $total +=$values;
      
      }
    
    
    }
    
    echo "$" . $total;
    
  
  }


    function getcat()
    {
         global $con;

         $q="select * from categories ";
         $res=mysqli_query($con,$q);
         while($data=mysqli_fetch_array($res))
         {
               $cat_title=$data['cat_title'];
               $cat_id=$data['cat_id'];
               echo "<li><a href='index.php?cat_id=$cat_id'>$cat_title</a></li>

                      




               ";

         }


    }
    function getbrand()
    {
         global $con;

         $q="select * from brand ";
         $res=mysqli_query($con,$q);
         while($data=mysqli_fetch_array($res))
         {
               $brand_title=$data['brand_title'];
               $brand_id=$data['brand_id'];
               echo "<li><a href='index.php?brand_id=$brand_id'>$brand_title</a></li>";

         }


    }
    function getprotitle()
    {
      global $con;
      if(isset($_GET['p_id']))
      {
                             $p_id=$_GET['p_id'];
                            $q="select * from products where p_id='$p_id'";
                            $res=mysqli_query($con,$q);
                            while($data=mysqli_fetch_array($res))
                            {
                              $p_title=$data['p_title'];
                              echo "$p_title";
                            }
      }
    }
    function getprodesc()
    {
      global $con;
      if(isset($_GET['p_id']))
      {
                             $p_id=$_GET['p_id'];
                            $q="select * from products where p_id='$p_id'";
                            $res=mysqli_query($con,$q);
                            while($data=mysqli_fetch_array($res))
                            {
                              $p_desc=$data['p_desc'];
                              echo "$p_desc";
                            }
      }
    }
    function getproprice()
    {
      global $con;
      if(isset($_GET['p_id']))
      {
                             $p_id=$_GET['p_id'];
                            $q="select * from products where p_id='$p_id'";
                            $res=mysqli_query($con,$q);
                            while($data=mysqli_fetch_array($res))
                            {
                              $p_desc=$data['p_price'];
                              echo "$p_desc";
                            }
      }
    }
    function getproimage()
    {
       global $con;
       

                     if(isset($_GET['p_id']))
                     {
                            $p_id=$_GET['p_id'];
                            $q="select * from products where p_id='$p_id'";
                        $res=mysqli_query($con,$q);
                      while($data=mysqli_fetch_array($res))
                   {
                         
                         
                           $p_img=$data['p_image'];
                           
                         
                         echo "

                                    <img src='admin_area/product_images/$p_img' class='image-responsive' height='350' width='450'>
                            
                         ";

                   }    

                     }

         
    }

    function getpro()
    {
        if(!isset($_GET['cat_id'])){
          if(!isset($_GET['brand_id'])){
    	global $con;
    	$q="select * from products order by RAND()";
    	$res=mysqli_query($con,$q);
    	while($data=mysqli_fetch_array($res))
         {
               $p_title=$data['p_title'];
               $p_id=$data['p_id'];
               $p_img=$data['p_image'];
               $p_price=$data['p_price'];
               $p_desc=$data['p_desc'];
               echo "
                  <div class='col-sm-4 col-lg-4 col-md-4' id='single_product'>
                    <ul class='products'>
                                <li>
                                    <a href='details.php?p_id=$p_id'>
                                        <img src='admin_area/product_images/$p_img' height='150' width='200'></a>
                                        <h4>$p_desc</h4>
                                        <p class='pull-left'><b>Rs $p_price<b></p>
                                        <a href='index.php?p_id=$p_id'><button type='btn-default' style='float:right'><i class='fa fa-shopping-cart pull-right' aria-hidden='true'></i></button></a>
                                    
                                </li>
                            </ul>
                          </div> 
                          

               ";

         }
       }
       }
    }
    function getbranddetails()
    {
                    if(isset($_GET['brand_id']))
                   {

                     global $con;
                   $cat_id=$_GET['brand_id'];
                   $q="select * from products where p_brand='$cat_id'";
                   $res=mysqli_query($con,$q);
                   while($data=mysqli_fetch_array($res))
                    {
                        $p_title=$data['p_title'];
                         $p_id=$data['p_id'];
                         $p_img=$data['p_image'];
                         $p_price=$data['p_price'];
                         $p_desc=$data['p_desc'];
                         echo "

                               <div id='single_product'>
                                 <p><h1>$p_title</h1></p>

                                  <img src='admin_area/product_images/$p_img' height='100px' width='100px'>
                                  
                                  <p><b>$p_desc</b></p>
                                 
                                  
                                  <a href='index.php?p_id=$p_id' style='float:left'>goback</a>
                                  <a href='index.php?p_id=$p_id' ><button style='float:right'>addTocart</button></a>
                                </div>  


                         ";
                }

             }

    }
    function getcatdetails()
    {
             if(isset($_GET['cat_id']))
             {

                     global $con;
                   $cat_id=$_GET['cat_id'];
                   $q="select * from products where p_cat='$cat_id'";
                   $res=mysqli_query($con,$q);
                   while($data=mysqli_fetch_array($res))
                    {
                        $p_title=$data['p_title'];
                         $p_id=$data['p_id'];
                         $p_img=$data['p_image'];
                         $p_price=$data['p_price'];
                         $p_desc=$data['p_desc'];
                         echo "

                               <div id='single_product'>
                                 <p><h1>$p_title</h1></p>

                                  <img src='admin_area/product_images/$p_img' height='100px' width='100px'>
                                  
                                  <p><b>$p_desc</b></p>
                                 
                                  
                                  <a href='index.php?p_id=$p_id' style='float:left'>goback</a>
                                  <a href='index.php?p_id=$p_id' ><button style='float:right'>addTocart</button></a>
                                </div>  


                         ";
                }

             }
    }
    function getdetails()
    {
                  
                    global $con;

                     if(isset($_GET['p_id']))
                     {
                            $p_id=$_GET['p_id'];
                            $q="select * from products where p_id='$p_id'";
					    	$res=mysqli_query($con,$q);
					    	while($data=mysqli_fetch_array($res))
					         {
					               $p_title=$data['p_title'];
					               $p_id=$data['p_id'];
					               $p_img=$data['p_image'];
					               $p_price=$data['p_price'];
					               $p_desc=$data['p_desc'];
					               echo "

					                     <div id='single_product'>
					                       <p><h1>$p_title</h1></p>

					                        <img src='admin_area/product_images/$p_img' height='300px' width='500px'>
					                        
					                        <p><b>$p_desc</b></p>
					                       
					                        
					                        <a href='index.php?p_id=$p_id' style='float:left'>goback</a>
					                        <a href='index.php?p_id=$p_id' ><button style='float:right'>addTocart</button></a>
					                      </div>  


					               ";

					         }    

                     }


    }
    function deletecart()
    {
      global $con;

       
       $ip_addr=getIP();
       if(isset($_GET['p_id']))
       {
           $p_id=$_GET['p_id'];
          $q="delete  from cart where p_id='$p_id' and ip_addr='$ip_addr'";
          $res=mysqli_query($con,$q);
        //echo $p_id;
          if($res)
          {
            echo "<script>window.open('cart.php','_self')</script>";
          }


       }




    }
    function savetocart()
    {
      global $con;
       $ip_addr=getIP();
      if(isset($_GET['c_id']))
      {
        $c_id=$_GET['c_id'];
        if(isset($_POST['qtn'])){
        $qtn=$_POST['qtn'];
      }
        $query="update cart set qtn='$qtn' where p_id='$c_id' and ip_addr='$ip_addr'";
        $exe=mysqli_query($con,$query);
        



      }
    }





 ?>