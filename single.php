<!DOCTYPE html>
<html>

<head>
    <title>Suruzzaman SuperShop</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Vide" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--- start-rate---->
    <script src="js/jstarbox.js"></script>
    <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
        jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function(event, value) {
                    if (starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' ' + val);
                        return val;
                    }
                })
            });
        });
    </script>
    <!---//End-rate---->



</head>

<body>
    <a href="#"><img src="images/download.png" class="img-head" alt=""></a>
    <div class="header">
        <div class="container">
            <?php include("firstheader.php");?>
                <?php include("menu.php");?>
        </div>
    </div>

    <?php
			 include("db.php");
				$id = $_GET['id'];
				$sql = "SELECT products.*, categories.category_name FROM products INNER JOIN categories on products.product_category=categories.id WHERE product_id ='$id'";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_assoc($result);
			?>

        <div class="single">
            <div class="container">
                <div class="single-top-main">
                    <div class="col-md-5 single-top">
                        <div class="single-w3agile">

                            <div id="picture-frame">
                                <img src="admin/<?php echo $row['product_image']; ?>" data-src="admin/<?php echo $row['product_image']; ?>" alt="" class="img-responsive" />
                            
							</div>
                            <script src="js/jquery.zoomtoo.js"></script>

                            <script>
                                $(function() {
                                    $("#picture-frame").zoomToo({
                                        magnify: 1
                                    });
                                });
                            </script>

                        </div>
                    </div>
                    <div class="col-md-7 single-top-left ">

                        <div class="single-right">
                            <h3><?php echo $row['category_name']; ?></h3>

                            <div class="pr-single">
                                <p class="reduced ">BDT:
                                    <?php echo $row['product_price']; ?>
                                </p>
                            </div>
                            <div class="block block-w3">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <p class="in-pa">
                                <?php echo $row['product_details']; ?>
                            </p>

                            <ul class="social-top">
                                <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                                <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
                                <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
                                <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
                            </ul>
                            <div class="add add-3">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="Wheat" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/si.jpg">Add to Cart</button>
                            </div>

                            <div class="clearfix"> </div>
                        </div>

                    </div>

                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>

        </div>
        </div>
        <div class="clearfix"></div> <<br/>


        <div class="footer">
            <div class="container">
                <div class="footer-bottom">
                    <h2><a href="#"><b>T<br>T<br>E</b>Big Store<span>Suruzzaman SuperShop</span></a></h2>
                    <br>
                    <br>
                    <ul class="social-fo">
                        <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class=" address">
                        <div class="col-md-4 fo-grid1">
                            <p><i class="fa fa-home" aria-hidden="true"></i>59/A-2 West Razabar</p>
                        </div>
                        <div class="col-md-4 fo-grid1">
                            <p><i class="fa fa-phone" aria-hidden="true"></i>+880 1744 393 549</p>
                        </div>
                        <div class="col-md-4 fo-grid1">
                            <p><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>suruzzaman026@gmail.com</a></p>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- smooth scrolling -->
        <script type="text/javascript">
            $(document).ready(function() {
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });
            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
        <script type='text/javascript' src="js/jquery.mycart.js"></script>
        <script type="text/javascript">
            $(function() {

                var goToCartIcon = function($addTocartBtn) {
                    var $cartIcon = $(".my-cart-icon");
                    var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({
                        "position": "fixed",
                        "z-index": "999"
                    });
                    $addTocartBtn.prepend($image);
                    var position = $cartIcon.position();
                    $image.animate({
                        top: position.top,
                        left: position.left
                    }, 500, "linear", function() {
                        $image.remove();
                    });
                }

                $('.my-cart-btn').myCart({
                    classCartIcon: 'my-cart-icon',
                    classCartBadge: 'my-cart-badge',
                    affixCartIcon: true,
                    checkoutCart: function(products) {
                        $.each(products, function() {
                            console.log(this);
                        });
                    },
                    clickOnAddToCart: function($addTocart) {
                        goToCartIcon($addTocart);
                    },
                    getDiscountPrice: function(products) {
                        var total = 0;
                        $.each(products, function() {
                            total += this.quantity * this.price;
                        });
                        return total * 1;
                    }
                });

            });
        </script>

</body>

   <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
   <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
   <!--  Charts Plugin -->
   <script src="assets/js/chartist.min.js"></script>
   <!--  Notifications Plugin    -->
   <script src="assets/js/bootstrap-notify.js"></script>
   <!--  Google Maps Plugin    -->
   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
   <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
   <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
   <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
   <script src="assets/js/demo.js"></script>

<script type="text/javascript">
          $(document).ready(function() {

              demo.initChartist();

              $.notify({
                  icon: 'pe-7s-gift',
                  message: "Welcome To <b>Single Product View</b>."

              }, {
                  type: 'info',
                  timer: 4000
              });

          });
      </script>   

</html>