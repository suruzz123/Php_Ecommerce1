<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin Panel</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="index.php" class="simple-text">
                    Suruzzaman Super Shop
                </a>
                </div>

                  <ul class="nav">
                    <li class="active">
                        <a href="index.php">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="category.php">
                            <i class="pe-7s-user"></i>
                            <p>Category</p>
                        </a>
                    </li>
                       <li>
                        <a href="category_view.php">
                            <i class="pe-7s-user"></i>
                            <p>category View</p>
                        </a>
                    </li>
                    
                       <li>
                        <a href="Product.php">
                            <i class="pe-7s-user"></i>
                            <p>Product</p>
                        </a>
                    </li>
                       <li>
                        <a href="Product_view.php">
                            <i class="pe-7s-user"></i>
                            <p>Product View</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">                        
                            <li>
                                <a href="login.php">
                                    <p>Log Out</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="container-fluid">
								<div class="card-header" style="text-align:center">
                                    <i class="fa fa-table"></i> 
									Insert New Categories Here : 
									<i class="fa fa-table"></i>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h1>Category Form</h1>
                                        <form action="category_insert.php" method="post">

                                            <input type="hidden" name="id" value="0">

                                            <div class="form-group">
                                                <label for="category_name">Category Name</label>
                                                <input class="form-control" id="category_name" name="category_name" type="text" placeholder="Enter category name" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="category_details">Category Details</label>
                                                <input class="form-control" id="category_details" name="category_details" type="text" placeholder="Enter category details" required>
                                            </div>
                                      <div class="col-md-5">
                                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                       </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

</body>

<!--   Core JS Files   -->
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
            message: "Insert <b>New Category</b>."

        }, {
            type: 'info',
            timer: 4000
        });

    });
</script>



</html>