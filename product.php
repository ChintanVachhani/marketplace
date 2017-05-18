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
                                        <li><a href="">Website 1</a></li>
                                        <li><a href="">Website 2</a></li>
                                        <li><a href="">Website 3</a></li>
                                        <li><a href="">Website 4</a></li>
                                        <li><a href="">Website 5</a></li>
                                        <li><a href="">Website 6</a></li>
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

<?php
$id = $_GET['id'];
$src = $_GET['w'];
$source = '';

switch ($src) {
    case 1:
        $source = "http://www.gizmolife.org/marketplace/productDetails.php?id=$id";
        break;
    case 2:
        $source = "http://www.spicyfood.co/productDetails.php?id=$id";
        break;
    case 3:
        $source = "http://www.sidhuzshop.com/productDetails.php?id=$id";
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
$ch = curl_init($source);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec($ch);
curl_close($ch);

$data = json_decode($contents, true);

foreach ($data as $product) {

    $image = $product['product_image'];
    $name = $product['product_name'];
    $description = $product['product_description'];
    $price = $product['product_price'];
}

?>

<div class="products">
    <div class="container">
        <div class="agileinfo_single">

            <div class="col-md-4 agileinfo_single_left">
                <img id="example" src="<?php echo $image; ?>" alt=" "
                     class="img-responsive">
            </div>
            <div class="col-md-8 agileinfo_single_right">
                <h2><?php echo $name; ?></h2>



                <div class="w3agile_description">
                    <h4>Description :</h4>
                    <p><?php echo $description; ?></p>
                </div>
                <div class="snipcart-item block">
                    <div class="snipcart-thumb agileinfo_single_right_snipcart">
                        <h4 class="m-sing"><?php echo "$" . $price; ?></h4>
                    </div>
                    <div class="snipcart-details agileinfo_single_right_details">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="business" value=" ">
                                <input type="hidden" name="item_name" value="pulao basmati rice">
                                <input type="hidden" name="amount" value="21.00">
                                <input type="hidden" name="discount_amount" value="1.00">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="return" value=" ">
                                <input type="hidden" name="cancel_return" value=" ">
                                <input type="submit" name="submit" value="Add to Cart" class="button">
                                <!-- Trigger the modal with a button -->
                                <input type="button" class="button" data-toggle="modal" data-target="#myModal"
                                       value="Rate & Review"></input>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add your review</h4>
                    </div>
                    <div class="modal-body">
                        <form accept-charset="UTF-8" action="review.php" method="post">
                            <input id="ratings-hidden" name="rating" type="hidden">
                            <textarea class="form-control animated" cols="50" id="new-review" name="comment"
                                      placeholder="Enter your review here..." rows="5"></textarea>
                            <br/>
                            <div class="rating1">
                                    <span class="starRating">
                                        <input id="rating5" type="radio" name="rating" value="5">
                                        <label for="rating5">5</label>
                                        <input id="rating4" type="radio" name="rating" value="4">
                                        <label for="rating4">4</label>
                                        <input id="rating3" type="radio" name="rating" value="3" checked="">
                                        <label for="rating3">3</label>
                                        <input id="rating2" type="radio" name="rating" value="2">
                                        <label for="rating2">2</label>
                                        <input id="rating1" type="radio" name="rating" value="1">
                                        <label for="rating1">1</label>
                                    </span>
                            </div>

                            <div class="text-right">
                                <button class="btn btn-danger btn-sm" type="button" class="close"
                                        data-dismiss="modal">Cancel
                                </button>
                                <button class="btn btn-success btn-sm" type="submit">Add</button>
                            </div>
                            <input id='prod_id' name='prod_id' type='hidden' value='<?php echo $_GET['id']; ?>'>
                            <input id='identifier_id' name='identifier_id' type='hidden'
                                   value='<?php echo $_GET['w']; ?>'>
                            <input id='user_id' name='user_id' type='hidden' value='<?php echo $_SESSION['user'] ?>'>
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>

        <div class="detailBox">
            <div class="titleBox">
                <label>User Reviews</label>
                <button type="button" class="close" aria-hidden="true">&times;</button>
            </div>
            <div class="actionBox">
                <ul class="commentList">
                    <li>
                        <div class="commentText">
                            <p class="">Hello this is a test comment.</p>
                            <span class="date sub-text">on March 5th, 2014</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<!-- //single -->
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