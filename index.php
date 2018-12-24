<<?php
session_start();
require_once 'db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | ই-কৃষক</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->

        <div class="row">
            <?php
            include_once'api.php';
            ?>
        </div>

    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.php"><img src="" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                Bangladesh
                                <span class="caret"></span>
                            </button>

                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                Taka
                                <span class="caret"></span>
                            </button>

                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="http://localhost/auncon/admin/"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.php" class="active">Home</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>ই</span>-কৃষক</h1>
                                <h2>তাজা ফলমূল</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/sli1.jpg" class="girl img-responsive" alt="" />

                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>ই</span>-কৃষক</h1>
                                <h2>দেশী মশলা</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/sli2.jpg" class="girl img-responsive" alt="" />

                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>ই</span>-কৃষক</h1>
                                <h2>তাজা শাক সবজি</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/sli3.jpg" class="girl img-responsive" alt="" />

                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        শাক সবজি
                                    </a>
                                </h4>
                            </div>
                            <div id="sportswear" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">আলু </a></li>
                                        <li><a href="#">পটল </a></li>
                                        <li><a href="#">গাজর </a></li>
                                        <li><a href="#">ফুলকপি</a></li>
                                        <li><a href="#">টমেটো </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        ফুল্মুল
                                    </a>
                                </h4>
                            </div>
                            <div id="mens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">আম</a></li>
                                        <li><a href="#">জাম</a></li>
                                        <li><a href="#">লিচু</a></li>
                                        <li><a href="#">আনারস</a></li>
                                        <li><a href="#">পেয়ারা</a></li>
                                        <li><a href="#">কলা</a></li>
                                        <li><a href="#">নাশপাতি</a></li>
                                        <li><a href="#">তরমুজ</a></li>
                                        <li><a href="#">বেদানা</a></li>
                                        <li><a href="#">জলপাই</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        মাংস
                                    </a>
                                </h4>
                            </div>
                            <div id="womens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">গরু</a></li>
                                        <li><a href="#">মুরগী</a></li>
                                        <li><a href="#">খাসি</a></li>
                                        <li><a href="#">উট</a></li>
                                        <li><a href="#">হাঁস</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">মাছ</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">তেল</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">চাল</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">মসলা</a></h4>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">দুগদ্গজাত পণ্য</a></h4>
                            </div>
                        </div>

                    </div><!--/category-products-->


                </div>
            </div>

            <div class="col-sm-9 padding-right">


                <div class="category-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tshirt" data-toggle="tab">ফলমূল</a></li>
                            <li><a href="#blazers" data-toggle="tab">শাক সবজি</a></li>
                            <li><a href="#sunglass" data-toggle="tab">মশলা</a></li>
                            <li><a href="#kids" data-toggle="tab">দুগ্ধজাত পণ্য</a></li>
                            <li><a href="#poloshirt" data-toggle="tab">চাল ডাল</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="tshirt" >
                            <?php
                            $query = "SELECT * FROM products ORDER BY id ASC";
                            $result = mysqli_query($connect, $query);
                            if(mysqli_num_rows($result) > 0)
                            {
                                while($row = mysqli_fetch_array($result))
                                {
                                    if ($row['category']=='fruits')
                                    {
                                        ?>
                                        <div class="col-md-4">
                                            <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                                                    <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                                                    <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                                                    <h4 class="text-danger">&#2547; <?php echo $row["price"]; ?></h4>
                                                    <input type="text" name="quantity" class="form-control" value="1" />
                                                    <input type="hidden" name="image" value="<?php echo $row["image"]; ?>" />
                                                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                                                </div>
                                            </form>
                                        </div>
                                        <?php
                                    }
                                }
                            }
                            ?>

                        </div>
                        <div class="tab-pane fade" id="blazers" >
                            <?php
                            $query = "SELECT * FROM products ORDER BY id ASC";
                            $result = mysqli_query($connect, $query);
                            if(mysqli_num_rows($result) > 0)
                            {
                                while($row = mysqli_fetch_array($result))
                                {
                                    ?>
                                    <?php
                                    if ($row['category']=='veg')
                                    {
                                        ?>
                                        <div class="col-md-4">
                                            <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                                                    <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                                                    <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                                                    <h4 class="text-danger">&#2547; <?php echo $row["price"]; ?></h4>
                                                    <input type="hidden" name="image" value="<?php echo $row["image"]; ?>" />
                                                    <input type="text" name="quantity" class="form-control" value="1" />
                                                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                                                </div>
                                            </form>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade" id="sunglass" >
                            <?php
                            $query = "SELECT * FROM products ORDER BY id ASC";
                            $result = mysqli_query($connect, $query);
                            if(mysqli_num_rows($result) > 0)
                            {
                                while($row = mysqli_fetch_array($result))
                                {
                                    ?>
                                    <?php
                                    if ($row['category']=='spice')
                                    {
                                        ?>
                                        <div class="col-md-4">
                                            <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                                                    <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                                                    <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                                                    <h4 class="text-danger">&#2547; <?php echo $row["price"]; ?></h4>
                                                    <input type="hidden" name="image" value="<?php echo $row["image"]; ?>" />
                                                    <input type="text" name="quantity" class="form-control" value="1" />
                                                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                                                </div>
                                            </form>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade" id="kids" >
                            <?php
                            $query = "SELECT * FROM products ORDER BY id ASC";
                            $result = mysqli_query($connect, $query);
                            if(mysqli_num_rows($result) > 0)
                            {
                                while($row = mysqli_fetch_array($result))
                                {
                                    ?>
                                    <?php
                                    if ($row['category']=='milk')
                                    {
                                        ?>
                                        <div class="col-md-4">
                                            <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                                                    <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                                                    <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                                                    <h4 class="text-danger">&#2547; <?php echo $row["price"]; ?></h4>
                                                    <input type="text" name="quantity" class="form-control" value="1" />
                                                    <input type="hidden" name="image" value="<?php echo $row["image"]; ?>" />
                                                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                                                </div>
                                            </form>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade" id="poloshirt" >
                            <?php
                            $query = "SELECT * FROM products ORDER BY id ASC";
                            $result = mysqli_query($connect, $query);
                            if(mysqli_num_rows($result) > 0)
                            {
                                while($row = mysqli_fetch_array($result))
                                {
                                    ?>
                                    <?php
                                    if ($row['category']=='rice')
                                    {
                                        ?>
                                        <div class="col-md-4">
                                            <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                                                    <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                                                    <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                                                    <h4 class="text-danger">&#2547; <?php echo $row["price"]; ?></h4>
                                                    <input type="hidden" name="image" value="<?php echo $row["image"]; ?>" />
                                                    <input type="text" name="quantity" class="form-control" value="1" />
                                                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                                                </div>
                                            </form>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                }
                            }
                            ?>
                        </div>

                    </div>
                </div><!--/category-tab-->

            </div>
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">করিরাইট © ২০১৮ ই-কৃষক সর্বস্বত্ব সংরক্ষিত.</p>
                <p class="pull-right">কারিগরি সহায়তায় <span><a target="_blank" href="#">এনএসইউ</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>