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
            <form action="#" method="post">
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
                    <li><?php
                        session_start();
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
<div class="products" style="padding-top: 40px; padding-bottom: 40px;">
    <div class="container">
        <div class="col-md-12">
            <div class="products-right-grid">
                <div class="products-right-grids">
                    <div class="w3l_search">
                        <form action="" method="post">
                            <select id="sortCriteria" name="sortCriteria">
                                <option value="0">Default Sorting</option>
                                <option value="1">Sort by Popularity</option>
                                <option value="2">Sort by Rating</option>
                                <option value="3">Sort by Price (Low to High)</option>
                                <option value="4">Sort by Price (High to Low)</option>
                            </select>
                            <button type="submit" class="btn btn-default search" aria-label="Left Align"
                                    style="color: white">Sort
                            </button>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <?php
            $list = array();
            ?>
            <?php
                        $ch = curl_init("http://www.gizmolife.org/marketplace/products.php");
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        $contents = curl_exec($ch);
                        curl_close($ch);
                        $list1 = json_decode($contents, true);
                        $list = array_merge($list, $list1);

                         ?><!--

            <?php
            /*            $ch = curl_init("http://www.spicyfood.co/products.php");
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        $contents = curl_exec($ch);
                        $list2 = json_decode($contents, true);
                        curl_close($ch);
                        $list = array_merge($list, $list2);


                        */ ?>

            <?php
            /*            $ch = curl_init("http://www.sidhuzshop.com/products.php");
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        $contents = curl_exec($ch);
                        $list3 = json_decode($contents, true);
                        curl_close($ch);
                        $list = array_merge($list, $list3);


                        */ ?>

            <?php
            /*            $ch = curl_init("http://www.coderabhishekchaudhary.com/products.php");
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        $contents = curl_exec($ch);
                        $list4 = json_decode($contents, true);
                        curl_close($ch);
                        $list = array_merge($list, $list4);


                        */ ?>

            --><?php
                        $ch = curl_init("http://www.buyselltrade.store/products.php");
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        $contents = curl_exec($ch);
                        $list5 = json_decode($contents, true);
                        curl_close($ch);
                        $list = array_merge($list, $list5);
                         ?>

            <?php
            $ch = curl_init("https://earthdevelopers.chintanvachhani.me/products.php");
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $contents = curl_exec($ch);
            $list6 = json_decode($contents, true);
            curl_close($ch);
            $list = array_merge($list, $list6);
            ?>

            <?php
            $i = 1;

            switch ($_POST['sortCriteria']) {
                case 1:
                    break;
                case 2:
                    break;
                case 3:
                    echo "<script>$('#sortCriteria option[value=3]').prop('selected', 'selected').change();</script>";
                    function cmp($a, $b)
                    {
                        return $a['product_price'] - $b['product_price'];
                    }

                    usort($list, "cmp");
                    break;
                case 4:
                    echo "<script>$('#sortCriteria option[value=4]').prop('selected', 'selected').change();</script>";
                    function cmp($a, $b)
                    {
                        return $b['product_price'] - $a['product_price'];
                    }

                    usort($list, "cmp");
                    break;
            }

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
                echo "<div class='snipcart-thumb'><a href='product.php?id=$id&w=$identifier'><img title=' ' alt=' ' src='$image' height='150px' width='150px' ></a><p>$name</p><div class=\"stars\"><i class=\"fa fa-star blue-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star blue-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star blue-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star blue-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star gray-star\" aria-hidden=\"true\"></i></div><h4>$$price </h4></div>";
                echo "<div class='snipcart-details top_brand_home_details'><form action='#' method='post'><fieldset>";
                echo "<input type='hidden' name='cmd' value='_cart'><input type='hidden' name='add' value='1'><input type='hidden' name='business' value=' '>";
                echo "<input type='hidden' name='item_name' value='Fortune Sunflower Oil'><input type='hidden' name='amount' value='35.99'>";
                echo "<input type='hidden' name='discount_amount' value='1.00'><input type='hidden' name='currency_code' value='USD'>";
                echo "<input type='hidden' name='return' value=' '><input type='hidden' name='cancel_return' value=' '>";
                echo "<input type='submit' name='submit' value='Add to cart' class='button'></fieldset></form></div></div></figure></div></div></div>";
                if ($i % 3 == 0) {
                    echo "</div><div class='clearfix'></div></div>";
                } else {
                    echo "</div>";
                }
                $i++;
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