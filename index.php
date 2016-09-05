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
            <form class="navbar-form navbar-left" role="search" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Search for products">
                    </div>
                    
                    <button type="submit" class="btn btn-default" name="submit"><i class="fa fa-search"></i></button>
                </form>
            
            <div>
                <ul class="nav navbar-nav navbar-right" id="kart"><li><a href='cart.php'><i class='fa fa-shopping-cart fa-2x '><?php echo" : "?><?php total_items(); ?> </i></a></li></ul>
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
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row" id="content_area">
                    <div class="col-lg-12">
                        
                   <div class="col-lg-10">

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

                <div class="row" id="products_box" >
                    <?php cart();?>

                    <?php getpro();?>

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
