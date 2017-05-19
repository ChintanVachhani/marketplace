<!DOCTYPE html>
<html>
<head>
    <title>Marketplace</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/review.css" rel="stylesheet" type="text/css">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
<!-- header -->
<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left">
            <h1><a href="index.php">Marketplace</a></h1>
        </div>
        <div class="w3l_search">
            <form action="search.php" method="get">
                <input type="search" name="Search" placeholder="Search" required="">
                <button type="submit" class="btn btn-default search" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
                <div class="clearfix"></div>
            </form>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<!-- //header -->
<!-- navigation -->
<div class="navigation-agileits">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                        data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php" class="act">Home</a></li>
                    <li><a href="products.php">All Products</a></li>
                    <!-- Mega Menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="multi-gd-img">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="">Gizmo Life</a></li>
                                        <li><a href="">Spicy Food</a></li>
                                        <li><a href="">Sidhuz Shop</a></li>
                                        <li><a href="">CoderAbhishekChaudhary</a></li>
                                        <li><a href="">Buy-Sell-Trade</a></li>
                                        <li><a href="">Earth Developers</a></li>
                                    </ul>
                                </div>

                            </div>
                        </ul>
                    </li>
                    <li><a href="checkout.php">My Cart</a></li>
                    <?php
                    session_start();
                    if (isset($_SESSION['user'])) {
                        echo '<li><a href="recent.php"><span>User Activity</span></a></li>';
                    }
                    ?>
                    <li><?php
                        if (isset($_SESSION['user'])) {
                            echo '<a href="logout.php"><span>Logout&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #000000;">' . $_SESSION["user"] . '</span></span></a></li>';
                        } else {
                            echo '<a href="login.php"><span>Login</span></a></li>';
                        }
                        ?></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="products">
    <div class="container">
        <div class="col-md-12">
            <?php
            $list = array();
            ?>
            <?php

            $prodList1 = array();
            $prodList2 = array();
            $prodList3 = array();
            $prodList4 = array();
            $prodList5 = array();
            $prodList6 = array();

            $userKey = $_SESSION['user'];
            // replace space with underscore for key names
            $userKey = str_replace('.', '__', $userKey);

            if (isset($_COOKIE[$userKey])) {
                $itemsAvailable = true;
                $idList = $_COOKIE[$userKey];
                $idArray = explode(",", $idList);

                $idSize = sizeof($idArray) - 1;

                $finalIds = array();
                for ($i = $idSize; $i >= 0; $i--) {
                    $key = $idArray[$i];
                    if (!in_array($key, $finalIds)) {
                        array_push($finalIds, $key);
                    }

                }

                if (sizeof($finalIds) > 0) {

                    foreach ($finalIds as $pid) {
                        $p_i = explode("_", $pid);
                        if (count($p_i) == 2) {
                            $prod = $p_i[0];
                            $src = $p_i[1];
                            $source = '';

                            switch ($src) {
                                case 1:
                                    $source = "http://www.gizmolife.org/marketplace/productDetails.php?id=$prod";
                                    $ch = curl_init($source);
                                    curl_setopt($ch, CURLOPT_HEADER, 0);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                    $contents = curl_exec($ch);
                                    curl_close($ch);

                                    $data1 = json_decode($contents, true);

                                    $prodList1 = array_merge($prodList1, $data1);
                                    break;
                                case 2:
                                    $source = "http://www.spicyfood.co/productDetails.php?id=$prod";
                                    $ch = curl_init($source);
                                    curl_setopt($ch, CURLOPT_HEADER, 0);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                    $contents = curl_exec($ch);
                                    curl_close($ch);

                                    $data2 = json_decode($contents, true);

                                    $prodList2 = array_merge($prodList2, $data2);
                                    break;
                                case 3:
                                    $source = "https://sidhuzshop.000webhostapp.com/productDetails.php?id=$prod";
                                    $ch = curl_init($source);
                                    curl_setopt($ch, CURLOPT_HEADER, 0);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                    $contents = curl_exec($ch);
                                    curl_close($ch);

                                    $data3 = json_decode($contents, true);

                                    $prodList3 = array_merge($prodList3, $data3);
                                    break;
                                case 4:
                                    $source = "http://www.coderabhishekchaudhary.com/productDetails.php?id=$prod";
                                    $ch = curl_init($source);
                                    curl_setopt($ch, CURLOPT_HEADER, 0);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                    $contents = curl_exec($ch);
                                    curl_close($ch);

                                    $data4 = json_decode($contents, true);

                                    $prodList4 = array_merge($prodList4, $data4);
                                    break;
                                case 5:
                                    $source = "http://www.buyselltrade.store/productDetails.php?id=$prod";

                                    $ch = curl_init($source);
                                    curl_setopt($ch, CURLOPT_HEADER, 0);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                    $contents = curl_exec($ch);
                                    curl_close($ch);

                                    $data5 = json_decode($contents, true);

                                    $prodList5 = array_merge($prodList5, $data5);
                                    break;
                                case 6:
                                    $source = "https://earthdevelopers.chintanvachhani.me/productDetails.php?id=$prod";
                                    $ch = curl_init($source);
                                    curl_setopt($ch, CURLOPT_HEADER, 0);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                    $contents = curl_exec($ch);
                                    curl_close($ch);

                                    $data6 = json_decode($contents, true);

                                    $prodList6 = array_merge($prodList6, $data6);
                                    break;
                            }


                        }

                    }
                }

            }
            echo "<div class='alert alert-info' style='text-align: center'><h4>Gizmo Life</h4></div>";
            if (sizeof($prodList1) > 0) {
                $i = 1;
                foreach ($prodList1 as $product) {
                    if ($i % 3 == 1) {
                        echo "<div class='agile_top_brands_grids'>";
                    }
                    $id = $product['product_id'];
                    $image = $product['product_image'];
                    $name = $product['product_name'];
                    $price = $product['product_price'];
                    $identifier = $product['website_identifier'];
                    echo "<div class='col-md-4 top_brand_left'><div class='hover14 column'><div class='agile_top_brand_left_grid'><div class='agile_top_brand_left_grid_pos'>";
                    echo "</div><div class='agile_top_brand_left_grid1'><figure><div class='snipcart-item block'>";
                    echo "<div class='snipcart-thumb'><a href='product.php?id=$id&w=$identifier'><img title=' ' alt=' ' src='$image' height='150px' width='150px' ></a><p>$name</p>";

                    $prod_id = $id;

                    //set up database connection
                    $dbc = mysqli_connect("localhost", "root", "password", "marketplace");
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $fetch_reviews = "SELECT round(avg(rating)) AS Rating FROM marketplace.ratings WHERE product_id = " . $prod_id . " GROUP BY product_id;";

                    $fetch_response = mysqli_query($dbc, $fetch_reviews);

                    if (mysqli_num_rows($fetch_response) > 0) {
                        // output data of each row
                        echo "<div class='ratings'>";
                        while ($row = mysqli_fetch_array($fetch_response, MYSQLI_ASSOC)) {
                            $no_of_stars = $row['Rating'];
                            echo "<p>" . show_ratings($no_of_stars) . "</p>";
                        }
                        echo "</div>";
                    } else {
                        echo "<p>" . show_ratings(0) . "</p>";
                    }
                    mysqli_close($dbc);
                    echo "<h4>$$price </h4></div>";
                    echo "<div class='snipcart-details top_brand_home_details'><form action='#' method='post'><fieldset>";
                    echo "<input type='hidden' name='cmd' value='_cart'><input type='hidden' name='add' value='1'><input type='hidden' name='business' value=' '>";
                    echo "<input type='hidden' name='item_name' value='Fortune Sunflower Oil'><input type='hidden' name='amount' value='35.99'>";
                    echo "<input type='hidden' name='discount_amount' value='1.00'><input type='hidden' name='currency_code' value='USD'>";
                    echo "<input type='hidden' name='return' value=' '><input type='hidden' name='cancel_return' value=' '>";
                    echo "<input type='submit' name='submit' value='Add to cart' class='button'></fieldset></form></div></div></figure></div></div></div>";
                    if ($i % 3 == 0 || $i == count($prodList1)) {
                        echo "</div><div class='clearfix'></div></div>";
                    } else {
                        echo "</div>";
                    }
                    $i++;
                }
                echo "<br/><br/>";
            } else {
                echo "<div style='text-align: center'><h6>No products visited yet.</h6></div><br/><br/>";
            }
            echo "<div class='clearfix'></div>";
            echo "<div class='alert alert-info' style='text-align: center'><h4>Spicy Food</h4></div>";
            if (sizeof($prodList2) > 0) {
                $i = 1;
                foreach ($prodList2 as $product) {
                    if ($i % 3 == 1) {
                        echo "<div class='agile_top_brands_grids'>";
                    }
                    $id = $product['product_id'];
                    $image = $product['product_image'];
                    $name = $product['product_name'];
                    $price = $product['product_price'];
                    $identifier = $product['website_identifier'];
                    echo "<div class='col-md-4 top_brand_left'><div class='hover14 column'><div class='agile_top_brand_left_grid'><div class='agile_top_brand_left_grid_pos'>";
                    echo "</div><div class='agile_top_brand_left_grid1'><figure><div class='snipcart-item block'>";
                    echo "<div class='snipcart-thumb'><a href='product.php?id=$id&w=$identifier'><img title=' ' alt=' ' src='$image' height='150px' width='150px' ></a><p>$name</p>";

                    $prod_id = $id;

                    //set up database connection
                    $dbc = mysqli_connect("localhost", "root", "password", "marketplace");
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $fetch_reviews = "SELECT round(avg(rating)) AS Rating FROM marketplace.ratings WHERE product_id = " . $prod_id . " GROUP BY product_id;";

                    $fetch_response = mysqli_query($dbc, $fetch_reviews);

                    if (mysqli_num_rows($fetch_response) > 0) {
                        // output data of each row
                        echo "<div class='ratings'>";
                        while ($row = mysqli_fetch_array($fetch_response, MYSQLI_ASSOC)) {
                            $no_of_stars = $row['Rating'];
                            echo "<p>" . show_ratings($no_of_stars) . "</p>";
                        }
                        echo "</div>";
                    } else {
                        echo "<p>" . show_ratings(0) . "</p>";
                    }
                    mysqli_close($dbc);
                    echo "<h4>$$price </h4></div>";
                    echo "<div class='snipcart-details top_brand_home_details'><form action='#' method='post'><fieldset>";
                    echo "<input type='hidden' name='cmd' value='_cart'><input type='hidden' name='add' value='1'><input type='hidden' name='business' value=' '>";
                    echo "<input type='hidden' name='item_name' value='Fortune Sunflower Oil'><input type='hidden' name='amount' value='35.99'>";
                    echo "<input type='hidden' name='discount_amount' value='1.00'><input type='hidden' name='currency_code' value='USD'>";
                    echo "<input type='hidden' name='return' value=' '><input type='hidden' name='cancel_return' value=' '>";
                    echo "<input type='submit' name='submit' value='Add to cart' class='button'></fieldset></form></div></div></figure></div></div></div>";
                    if ($i % 3 == 0 || $i == count($prodList2)) {
                        echo "</div><div class='clearfix'></div></div>";
                    } else {
                        echo "</div>";
                    }
                    $i++;
                }
                echo "<br/><br/>";
            } else {
                echo "<div style='text-align: center'><h6>No products visited yet.</h6></div><br/><br/>";
            }
            echo "<div class='clearfix'></div>";
            echo "<div class='alert alert-info' style='text-align: center'><h4>Sidhuz Shop</h4></div>";
            if (sizeof($prodList3) > 0) {
                $i = 1;
                foreach ($prodList3 as $product) {
                    if ($i % 3 == 1) {
                        echo "<div class='agile_top_brands_grids'>";
                    }
                    $id = $product['product_id'];
                    $image = $product['product_image'];
                    $name = $product['product_name'];
                    $price = $product['product_price'];
                    $identifier = $product['website_identifier'];
                    echo "<div class='col-md-4 top_brand_left'><div class='hover14 column'><div class='agile_top_brand_left_grid'><div class='agile_top_brand_left_grid_pos'>";
                    echo "</div><div class='agile_top_brand_left_grid1'><figure><div class='snipcart-item block'>";
                    echo "<div class='snipcart-thumb'><a href='product.php?id=$id&w=$identifier'><img title=' ' alt=' ' src='$image' height='150px' width='150px' ></a><p>$name</p>";

                    $prod_id = $id;

                    //set up database connection
                    $dbc = mysqli_connect("localhost", "root", "password", "marketplace");
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $fetch_reviews = "SELECT round(avg(rating)) AS Rating FROM marketplace.ratings WHERE product_id = " . $prod_id . " GROUP BY product_id;";

                    $fetch_response = mysqli_query($dbc, $fetch_reviews);

                    if (mysqli_num_rows($fetch_response) > 0) {
                        // output data of each row
                        echo "<div class='ratings'>";
                        while ($row = mysqli_fetch_array($fetch_response, MYSQLI_ASSOC)) {
                            $no_of_stars = $row['Rating'];
                            echo "<p>" . show_ratings($no_of_stars) . "</p>";
                        }
                        echo "</div>";
                    } else {
                        echo "<p>" . show_ratings(0) . "</p>";
                    }
                    mysqli_close($dbc);
                    echo "<h4>$$price </h4></div>";
                    echo "<div class='snipcart-details top_brand_home_details'><form action='#' method='post'><fieldset>";
                    echo "<input type='hidden' name='cmd' value='_cart'><input type='hidden' name='add' value='1'><input type='hidden' name='business' value=' '>";
                    echo "<input type='hidden' name='item_name' value='Fortune Sunflower Oil'><input type='hidden' name='amount' value='35.99'>";
                    echo "<input type='hidden' name='discount_amount' value='1.00'><input type='hidden' name='currency_code' value='USD'>";
                    echo "<input type='hidden' name='return' value=' '><input type='hidden' name='cancel_return' value=' '>";
                    echo "<input type='submit' name='submit' value='Add to cart' class='button'></fieldset></form></div></div></figure></div></div></div>";
                    if ($i % 3 == 0 || $i == count($prodList3)) {
                        echo "</div><div class='clearfix'></div></div>";
                    } else {
                        echo "</div>";
                    }
                    $i++;
                }
                echo "<br/><br/>";
            } else {
                echo "<div style='text-align: center'><h6>No products visited yet.</h6></div><br/><br/>";
            }
            echo "<div class='clearfix'></div>";
            echo "<div class='alert alert-info' style='text-align: center'><h4>Coder</h4></div>";
            if (sizeof($prodList4) > 0) {
                $i = 1;
                foreach ($prodList4 as $product) {
                    if ($i % 3 == 1) {
                        echo "<div class='agile_top_brands_grids'>";
                    }
                    $id = $product['product_id'];
                    $image = $product['product_image'];
                    $name = $product['product_name'];
                    $price = $product['product_price'];
                    $identifier = $product['website_identifier'];
                    echo "<div class='col-md-4 top_brand_left'><div class='hover14 column'><div class='agile_top_brand_left_grid'><div class='agile_top_brand_left_grid_pos'>";
                    echo "</div><div class='agile_top_brand_left_grid1'><figure><div class='snipcart-item block'>";
                    echo "<div class='snipcart-thumb'><a href='product.php?id=$id&w=$identifier'><img title=' ' alt=' ' src='$image' height='150px' width='150px' ></a><p>$name</p>";

                    $prod_id = $id;

                    //set up database connection
                    $dbc = mysqli_connect("localhost", "root", "password", "marketplace");
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $fetch_reviews = "SELECT round(avg(rating)) AS Rating FROM marketplace.ratings WHERE product_id = " . $prod_id . " GROUP BY product_id;";

                    $fetch_response = mysqli_query($dbc, $fetch_reviews);

                    if (mysqli_num_rows($fetch_response) > 0) {
                        // output data of each row
                        echo "<div class='ratings'>";
                        while ($row = mysqli_fetch_array($fetch_response, MYSQLI_ASSOC)) {
                            $no_of_stars = $row['Rating'];
                            echo "<p>" . show_ratings($no_of_stars) . "</p>";
                        }
                        echo "</div>";
                    } else {
                        echo "<p>" . show_ratings(0) . "</p>";
                    }
                    mysqli_close($dbc);
                    echo "<h4>$$price </h4></div>";
                    echo "<div class='snipcart-details top_brand_home_details'><form action='#' method='post'><fieldset>";
                    echo "<input type='hidden' name='cmd' value='_cart'><input type='hidden' name='add' value='1'><input type='hidden' name='business' value=' '>";
                    echo "<input type='hidden' name='item_name' value='Fortune Sunflower Oil'><input type='hidden' name='amount' value='35.99'>";
                    echo "<input type='hidden' name='discount_amount' value='1.00'><input type='hidden' name='currency_code' value='USD'>";
                    echo "<input type='hidden' name='return' value=' '><input type='hidden' name='cancel_return' value=' '>";
                    echo "<input type='submit' name='submit' value='Add to cart' class='button'></fieldset></form></div></div></figure></div></div></div>";
                    if ($i % 3 == 0 || $i == count($prodList4)) {
                        echo "</div><div class='clearfix'></div></div>";
                    } else {
                        echo "</div>";
                    }
                    $i++;
                }
                echo "<br/><br/>";
            } else {
                echo "<div style='text-align: center'><h6>No products visited yet.</h6></div><br/><br/>";
            }
            echo "<div class='clearfix'></div>";
            echo "<div class='alert alert-info' style='text-align: center'><h4>Buy Sell Trade</h4></div>";
            if (sizeof($prodList5) > 0) {
                $i = 1;
                foreach ($prodList5 as $product) {
                    if ($i % 3 == 1) {
                        echo "<div class='agile_top_brands_grids'>";
                    }
                    $id = $product['product_id'];
                    $image = $product['product_image'];
                    $name = $product['product_name'];
                    $price = $product['product_price'];
                    $identifier = $product['website_identifier'];
                    echo "<div class='col-md-4 top_brand_left'><div class='hover14 column'><div class='agile_top_brand_left_grid'><div class='agile_top_brand_left_grid_pos'>";
                    echo "</div><div class='agile_top_brand_left_grid1'><figure><div class='snipcart-item block'>";
                    echo "<div class='snipcart-thumb'><a href='product.php?id=$id&w=$identifier'><img title=' ' alt=' ' src='$image' height='150px' width='150px' ></a><p>$name</p>";

                    $prod_id = $id;

                    //set up database connection
                    $dbc = mysqli_connect("localhost", "root", "password", "marketplace");
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $fetch_reviews = "SELECT round(avg(rating)) AS Rating FROM marketplace.ratings WHERE product_id = " . $prod_id . " GROUP BY product_id;";

                    $fetch_response = mysqli_query($dbc, $fetch_reviews);

                    if (mysqli_num_rows($fetch_response) > 0) {
                        // output data of each row
                        echo "<div class='ratings'>";
                        while ($row = mysqli_fetch_array($fetch_response, MYSQLI_ASSOC)) {
                            $no_of_stars = $row['Rating'];
                            echo "<p>" . show_ratings($no_of_stars) . "</p>";
                        }
                        echo "</div>";
                    } else {
                        echo "<p>" . show_ratings(0) . "</p>";
                    }
                    mysqli_close($dbc);
                    echo "<h4>$$price </h4></div>";
                    echo "<div class='snipcart-details top_brand_home_details'><form action='#' method='post'><fieldset>";
                    echo "<input type='hidden' name='cmd' value='_cart'><input type='hidden' name='add' value='1'><input type='hidden' name='business' value=' '>";
                    echo "<input type='hidden' name='item_name' value='Fortune Sunflower Oil'><input type='hidden' name='amount' value='35.99'>";
                    echo "<input type='hidden' name='discount_amount' value='1.00'><input type='hidden' name='currency_code' value='USD'>";
                    echo "<input type='hidden' name='return' value=' '><input type='hidden' name='cancel_return' value=' '>";
                    echo "<input type='submit' name='submit' value='Add to cart' class='button'></fieldset></form></div></div></figure></div></div></div>";
                    if ($i % 3 == 0 || $i == count($prodList5)) {
                        echo "</div><div class='clearfix'></div></div>";
                    } else {
                        echo "</div>";
                    }
                    $i++;
                }
                echo "<br/><br/>";
            } else {
                echo "<div style='text-align: center'><h6>No products visited yet.</h6></div><br/><br/>";

            }
            echo "<div class='alert alert-info' style='text-align: center'><h4>Earth Developers</h4></div>";
            if (sizeof($prodList6) > 0) {
                $i = 1;
                foreach ($prodList6 as $product) {
                    if ($i % 3 == 1) {
                        echo "<div class='agile_top_brands_grids'>";
                    }
                    $id = $product['product_id'];
                    $image = $product['product_image'];
                    $name = $product['product_name'];
                    $price = $product['product_price'];
                    $identifier = $product['website_identifier'];
                    echo "<div class='col-md-4 top_brand_left'><div class='hover14 column'><div class='agile_top_brand_left_grid'><div class='agile_top_brand_left_grid_pos'>";
                    echo "</div><div class='agile_top_brand_left_grid1'><figure><div class='snipcart-item block'>";
                    echo "<div class='snipcart-thumb'><a href='product.php?id=$id&w=$identifier'><img title=' ' alt=' ' src='$image' height='150px' width='150px' ></a><p>$name</p>";

                    $prod_id = $id;

                    //set up database connection
                    $dbc = mysqli_connect("localhost", "root", "password", "marketplace");
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $fetch_reviews = "SELECT round(avg(rating)) AS Rating FROM marketplace.ratings WHERE product_id = " . $prod_id . " GROUP BY product_id;";

                    $fetch_response = mysqli_query($dbc, $fetch_reviews);

                    if (mysqli_num_rows($fetch_response) > 0) {
                        // output data of each row
                        echo "<div class='ratings'>";
                        while ($row = mysqli_fetch_array($fetch_response, MYSQLI_ASSOC)) {
                            $no_of_stars = $row['Rating'];
                            echo "<p>" . show_ratings($no_of_stars) . "</p>";
                        }
                        echo "</div>";
                    } else {
                        echo "<p>" . show_ratings(0) . "</p>";
                    }
                    mysqli_close($dbc);
                    echo "<h4>$$price </h4></div>";
                    echo "<div class='snipcart-details top_brand_home_details'><form action='#' method='post'><fieldset>";
                    echo "<input type='hidden' name='cmd' value='_cart'><input type='hidden' name='add' value='1'><input type='hidden' name='business' value=' '>";
                    echo "<input type='hidden' name='item_name' value='Fortune Sunflower Oil'><input type='hidden' name='amount' value='35.99'>";
                    echo "<input type='hidden' name='discount_amount' value='1.00'><input type='hidden' name='currency_code' value='USD'>";
                    echo "<input type='hidden' name='return' value=' '><input type='hidden' name='cancel_return' value=' '>";
                    echo "<input type='submit' name='submit' value='Add to cart' class='button'></fieldset></form></div></div></figure></div></div></div>";
                    if ($i % 3 == 0 || $i == count($prodList6)) {
                        echo "</div><div class='clearfix'></div></div>";
                    } else {
                        echo "</div>";
                    }
                    $i++;
                }
                echo "<br/><br/>";
            } else {

                echo "<div style='text-align: center'><h6>No products visited yet.</h6></div><br/><br/>";

            }
            // Function to generate the HTML to display ratings STARs based on the value of column "ratings" in database table for each record.
            function show_ratings($product_rating)
            {
                $count_rows = 1;
                $out = "";

                // Loop to print the filled star ratings.
                while ($count_rows <= (int)$product_rating) {
                    $out .= "<span class='glyphicon glyphicon-star' style='color:gold'></span>";
                    $count_rows += 1;
                }

                // Loop to print unfilled star ratings.
                while ($count_rows <= 5) {
                    $out .= "<span class='glyphicon glyphicon-star-empty' style='color:gold'></span>";
                    $count_rows += 1;
                }
                return $out;
            }

            ?>
        </div>
    </div>
</div>

<!-- //footer -->
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-3 w3_footer_grid">
                <h3>Profile</h3>
                <ul class="info">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.php">My Cart</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.php">Login</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.php">Create Account</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="footer-copy">

        <div class="container">
            <p>© 2017 Marketplace. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>

</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#demo1').skdslider({
            'delay': 5000,
            'animationSpeed': 2000,
            'showNextPrev': true,
            'showPlayButton': true,
            'autoSlide': true,
            'animationType': 'fading'
        });

        jQuery('#responsive').change(function () {
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
</script>
<!-- //main slider-banner -->
</body>
</html>
