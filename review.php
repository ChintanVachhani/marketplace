<?php
extract($_POST);
// db connection
$dbc = mysqli_connect("localhost", "root", "password", "marketplace");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = "INSERT INTO marketplace.reviews(comments,product_id,user_email,timestamp,website_identifier) 
VALUES ('" . $comment . "'," . $prod_id . ",'" . $user_id . "','" . date('Y-m-d H:i:s') . "'," . $identifier_id . ");";

$response = mysqli_query($dbc, $query);

$fetch_ratings = "SELECT * FROM marketplace.ratings WHERE product_id = " . $prod_id .
    " AND user_email = '" . $user_id . "';";

$fetch_response = mysqli_query($dbc, $fetch_ratings);

if (mysqli_num_rows($fetch_response) > 0) {
    $upd_ratings = "UPDATE marketplace.ratings set rating = " . $rating . " 
    WHERE product_id = " . $prod_id . " AND user_email = '" . $user_id . "';";

    $upd_response = mysqli_query($dbc, $upd_ratings);
} else {
    $ratings_query = "INSERT INTO marketplace.ratings(product_id,rating,user_email,website_identifier) 
    VALUES ('" . $prod_id . "'," . $rating . ",'" . $user_id . "'," . $identifier_id . ");";

    $ratings_response = mysqli_query($dbc, $ratings_query);

}

mysqli_close($dbc);

redirect("product.php?id=$prod_id&w=$identifier_id");

function redirect($url)
{
    //header("Location:  " . $url);
    print "<script type='text/javascript'>
   	     	window.location = '" . $url . "'; </script>";
    exit();
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
