<?php
session_start();
//echo '<pre>';
//print_r($_SESSION["shopping_cart"]);
//echo '</pre>';
//exit();
if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {

        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["hidden_name"],
                'item_price'          =>     $_POST["hidden_price"],
                'item_quantity'          =>     $_POST["quantity"],
                'item_image'               =>     $_POST["image"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="index.php"</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_id'               =>     $_POST["id"],
            'item_name'               =>     $_POST["hidden_name"],
            'item_price'          =>     $_POST["hidden_price"],
            'item_quantity'          =>     $_POST["quantity"],
            'item_image'               =>     $_POST["image"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | ই-কৃষক</title>
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
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
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
                            <li><a href="index.php" class="active">Back to Home</a></li>
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

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Item</td>
                    <td class="description"></td>
                    <td class="price">Price</td>
                    <td class="quantity">Quantity</td>
                    <td class="total">Total</td>
                    <td></td>
                </tr>
                </thead>


                <tbody>
                <?php
                if(!empty($_SESSION["shopping_cart"]))
                {
                    $total = 0;
                    foreach($_SESSION["shopping_cart"] as $keys => $values)
                    {
                        ?>

                        <tr>
                            <td class="cart_product">
                                <img src="<?php echo $values["item_image"]; ?> " height="30px" width="50px"/>
                            </td>
                            <td class="cart_description">
                                <h4><a href=""><?php echo $values["item_name"]; ?></a></h4>
                            </td>
                            <td class="cart_price">
                                <p><?php echo $values["item_price"]; ?></p>
                            </td>
                            <td class="cart_price">
                                <p><?php echo $values["item_quantity"]; ?></p>


                            <td class="cart_total">
                                <p class="cart_total_price">
                                    <?php echo number_format((int)$values["item_quantity"] * $values["item_price"], 2); ?></p>
                            </td>
                            <td class="cart_delete">
                                <a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a>
                            </td>
                        </tr>
                        <?php
                        $total = $total + ($values["item_quantity"] * $values["item_price"]);
                      $newtotal = number_format($total, 2);
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
        </div>
        <div class="row">

            <div class="col-sm-6">
                <div class="total_area">
                    <?php

                    if(isset($newtotal)) {
                        ?>
                        <ul>
                            <li>Cart Sub Total <span>&#2547;<?php echo $newtotal; ?></span></li>
                            <li>Eco Tax <span>Free</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>&#2547;<?php echo $newtotal; ?></span></li>
                        </ul>
                        <?php
                    }else {
                        ?>
                        <ul>
                            <li>Cart Sub Total <span>&#2547; 0</span></li>
                            <li>Eco Tax <span>&#2547; 0</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>&#2547; 0</span></li>
                        </ul>
                        <?php
                    }
                    ?>
                    <a class="btn btn-default check_out" href="">Check Out</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->





<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>

</html>