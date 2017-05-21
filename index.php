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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="multi-gd-img">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="nativeProducts.php?id=1">Gizmo Life</a></li>
                                        <li><a href="nativeProducts.php?id=2">Spicy Food</a></li>
                                        <li><a href="nativeProducts.php?id=3">Sidhuz Shop</a></li>
                                        <li><a href="nativeProducts.php?id=4">CoderAbhishekChaudhary</a></li>
                                        <li><a href="nativeProducts.php?id=5">Buy-Sell-Trade</a></li>
                                        <li><a href="nativeProducts.php?id=6">Earth Developers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <?php
                    session_start();
                    if (isset($_SESSION['user'])) {
                        echo '<li><a href="cart.php">My Cart</a></li>';
                    }
                    ?>
                    <?php
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
<!-- //navigation -->
<!-- main-slider -->
<ul id="demo1">
    <li>
        <img src="images/GizmoLife.jpg" alt=""/>
        <!--Slider Description example-->
        <div class="slide-desc">
            <h3>Gizmo Life</h3>
        </div>
    </li>
    <li>
        <img src="images/SpicyFood.jpg" alt=""/>
        <div class="slide-desc">
            <h3>Spicy Food</h3>
        </div>
    </li>

    <li>
        <img src="images/SidhuzShop.jpg" alt=""/>
        <div class="slide-desc">
            <h3>Sidhuz Shop</h3>
        </div>
    </li>

    <li>
        <img src="images/Coder.jpg" alt=""/>
        <div class="slide-desc">
            <h3>Coder</h3>
        </div>
    </li>

    <li>
        <img src="images/BuySellTrade.jpeg" alt=""/>
        <div class="slide-desc">
            <h3>Buy Sell Trade</h3>
        </div>
    </li>

    <li>
        <img src="images/EarthDevelopers.jpg" alt=""/>
        <div class="slide-desc">
            <h3>Earth Developers</h3>
        </div>
    </li>
</ul>
<!-- //main-slider -->
<!-- //top-header and slider -->
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h2>Top Services from Marketplace</h2>
        <div class="grid_3 grid_5">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#mostRated" id="mostRated-tab" role="tab"
                                                              data-toggle="tab" aria-controls="mostRated"
                                                              aria-expanded="true">Most Rated</a></li>
                    <li role="presentation"><a href="#mostVisited" role="tab" id="mostVisited-tab" data-toggle="tab"
                                               aria-controls="mostVisited">Most Visited</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="mostRated"
                         aria-labelledby="mostRated-tab">
                        <?php
                        $list = array();

                        $ch = curl_init("https://marketplace.chintanvachhani.me/mostRatedMarketplace.php");
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        $contents = curl_exec($ch);
                        curl_close($ch);

                        $data = json_decode($contents, true);

                        foreach ($data as $item) {
                            $id = $item['product_id'];
                            $src = $item['website_identifier'];
                            $source = '';

                            switch ($src) {
                                case 1:
                                    $source = "http://www.gizmolife.org/marketplace/productDetails.php?id=$id";
                                    break;
                                case 2:
                                    $source = "http://www.spicyfood.co/productDetails.php?id=$id";
                                    break;
                                case 3:
                                    $source = "https://sidhuzshop.000webhostapp.com/productDetails.php?id=$id";
                                    break;
                                case 4:
                                    $source = "http://www.coderabhishekchaudhary.com/productDetails.php?id=$id";
                                    break;
                                case 5:
                                    $source = "http://www.buyselltrade.store/productDetails.php?id=$id";
                                    break;
                                case 6:
                                    $source = "https://earthdevelopers.chintanvachhani.me/productDetails.php?id=$id";
                                    break;
                            }

                            $chI = curl_init($source);
                            curl_setopt($chI, CURLOPT_HEADER, 0);
                            curl_setopt($chI, CURLOPT_RETURNTRANSFER, 1);
                            $contentsI = curl_exec($chI);
                            $dataI = json_decode($contentsI, true);
                            curl_close($chI);
                            $list = array_merge($list, $dataI);
                        }
                        $i = 1;
                        foreach ($list as $product) {
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
                            echo "<div class='snipcart-thumb'><a href='product.php?id=$id&w=$identifier'><img title=' ' alt=' ' src='$image' height='150px'  ></a><p>$name</p>";

                            $prod_id = $id;

                            //set up database connection
                            $dbc = mysqli_connect("localhost", "root", "password", "marketplace");
                            if (mysqli_connect_errno()) {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                            $fetch_reviews = "SELECT round(avg(rating)) AS Rating FROM marketplace.ratings WHERE product_id = " . $prod_id . " AND rating > 0 GROUP BY product_id;";

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
                            echo "<input type='hidden' name='cmd' value='_cart'><input type='hidden' name='add' value='1'><input type='hidden' name='shipping' value='$id'>";
                            echo "<input type='hidden' name='item_name' value='$name'><input type='hidden' name='amount' value='$price'>";
                            echo "<input type='hidden' name='shipping2' value='$image'><input type='hidden' name='currency_code' value='USD'>";
                            echo "<input type='hidden' name='return' value=' '><input type='hidden' name='cancel_return' value=' '>";
                            echo "<input type='submit' name='submit' value='Add to cart' class='button'></fieldset></form></div></div></figure></div></div></div>";
                            if ($i % 3 == 0 || $i == count($list)) {
                                echo "</div><div class='clearfix'></div></div>";
                            } else {
                                echo "</div>";
                            }
                            $i++;
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
                    <div role="tabpanel" class="tab-pane fade" id="mostVisited" aria-labelledby="mostVisited-tab">
                        <?php
                        $list2 = array();

                        $ch2 = curl_init("https://marketplace.chintanvachhani.me/mostVisitedMarketplace.php");
                        curl_setopt($ch2, CURLOPT_HEADER, 0);
                        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
                        $contents2 = curl_exec($ch2);
                        curl_close($ch2);

                        $data2 = json_decode($contents2, true);

                        foreach ($data2 as $item2) {
                            $id2 = $item2['product_id'];
                            $src2 = $item2['website_identifier'];
                            $source2 = '';

                            switch ($src2) {
                                case 1:
                                    $source2 = "http://www.gizmolife.org/marketplace/productDetails.php?id=$id2";
                                    break;
                                case 2:
                                    $source2 = "http://www.spicyfood.co/productDetails.php?id=$id2";
                                    break;
                                case 3:
                                    $source2 = "https://sidhuzshop.000webhostapp.com/productDetails.php?id=$id2";
                                    break;
                                case 4:
                                    $source2 = "http://www.coderabhishekchaudhary.com/productDetails.php?id=$id2";
                                    break;
                                case 5:
                                    $source2 = "http://www.buyselltrade.store/productDetails.php?id=$id2";
                                    break;
                                case 6:
                                    $source2 = "https://earthdevelopers.chintanvachhani.me/productDetails.php?id=$id2";
                                    break;
                            }

                            $chI2 = curl_init($source2);
                            curl_setopt($chI2, CURLOPT_HEADER, 0);
                            curl_setopt($chI2, CURLOPT_RETURNTRANSFER, 1);
                            $contentsI2 = curl_exec($chI2);
                            $dataI2 = json_decode($contentsI2, true);
                            curl_close($chI2);
                            $list2 = array_merge($list2, $dataI2);
                        }
                        $i2 = 1;
                        foreach ($list2 as $product2) {
                            if ($i2 % 3 == 1) {
                                echo "<div class='agile_top_brands_grids'>";
                            }
                            $id2 = $product2['product_id'];
                            $image2 = $product2['product_image'];
                            $name2 = $product2['product_name'];
                            $price2 = $product2['product_price'];
                            $identifier2 = $product2['website_identifier'];
                            echo "<div class='col-md-4 top_brand_left'><div class='hover14 column'><div class='agile_top_brand_left_grid'><div class='agile_top_brand_left_grid_pos'>";
                            echo "</div><div class='agile_top_brand_left_grid1'><figure><div class='snipcart-item block'>";
                            echo "<div class='snipcart-thumb'><a href='product.php?id=$id2&w=$identifier2'><img title=' ' alt=' ' src='$image2' height='150px'  ></a><p>$name2</p>";

                            $prod_id = $id2;

                            //set up database connection
                            $dbc = mysqli_connect("localhost", "root", "password", "marketplace");
                            if (mysqli_connect_errno()) {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                            $fetch_reviews = "SELECT round(avg(rating)) AS Rating FROM marketplace.ratings WHERE product_id = " . $prod_id . " AND rating > 0 GROUP BY product_id;";

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
                            echo "<h4>$$price2 </h4></div>";
                            echo "<div class='snipcart-details top_brand_home_details'><form action='#' method='post'><fieldset>";
                            echo "<input type='hidden' name='cmd' value='_cart'><input type='hidden' name='add' value='1'><input type='hidden' name='shipping' value='$id2'>";
                            echo "<input type='hidden' name='item_name' value='$name2'><input type='hidden' name='amount' value='$price2'>";
                            echo "<input type='hidden' name='shipping2' value='$image2'><input type='hidden' name='currency_code' value='USD'>";
                            echo "<input type='hidden' name='return' value=' '><input type='hidden' name='cancel_return' value=' '>";
                            echo "<input type='submit' name='submit' value='Add to cart' class='button'></fieldset></form></div></div></figure></div></div></div>";
                            if ($i2 % 3 == 0 || $i2 == count($list2)) {
                                echo "</div><div class='clearfix'></div></div>";
                            } else {
                                echo "</div>";
                            }
                            $i2++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--brands-->
<div class="brands">
    <div class="container">
        <h3>Websites</h3>
        <div class="brands-agile">
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="http://www.gizmolife.org" target="_blank">Gizmo Life</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="http://www.spicyfood.co" target="_blank">Spicy Food</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="http://www.sidhuzshop.com" target="_blank">Sidhuz Shop</a></p>
                </div>
            </div>

            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="http://www.coderabhishekchaudhary.com" target="_blank">Coder</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="http://www.buyselltrade.store" target="_blank">BST Store</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="https://earthdevelopers.chintanvachhani.me" target="_blank">Earth Dev.</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//brands-->
<!-- //footer -->
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-3 w3_footer_grid">
                <h3>Profile</h3>
                <ul class="info">

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