<?php
 include("db.php");
	$id = $_GET['id'];
    $sql = "SELECT products.*, categories.category_name FROM products INNER JOIN categories on products.product_category=categories.id WHERE product_id ='$id'";
    $result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
?>



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
         <!--
            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag
            
            -->
         <div class="sidebar-wrapper">
            <div class="logo">
               <a href="index.php" class="simple-text">
               Creative Tim
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
                            <p>category</p>
                        </a>
                    </li>
					   <li>
                        <a href="category_view.php">
                            <i class="pe-7s-user"></i>
                            <p>category view</p>
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
                            <p>Product view</p>
                        </a>
                    </li>
					
                </ul>
         </div>
      </div>
      <div class="main-panel">
         <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Dashboard</a>
               </div>
               <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                       <li>
                                <a href="login.php">
                                    <p>Log out</p>
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
                        <div class="row">
                           <div class="col-6">
                              <h1>Product Form</h1>
                              <form action="product_insert.php" method="post" enctype="multipart/form-data">
                                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                                 <div class="form-group">
                                    <label for="product_category">Product Category</label>
                                    <select class="form-control" id="product_category" name="product_category">
									  <option value="<?php echo $row['product_category']; ?>"><?php echo $row['category_name']; ?>
                    </option>
									
                                        <?php

									  $sql = "SELECT * FROM categories ORDER BY category_name";
									  $result = mysqli_query($con,$sql);
								   
										while($rows = mysqli_fetch_assoc($result)) 
										{

										  if($row['product_category'] != $rows['id'])
										  {
										?>

											 <option value="<?php echo $rows['id']; ?>"><?php echo $rows['category_name']; ?></option>

											<?php
										  }
										  }
								  ?>
															
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="product_name">Product name</label>
                                    <input class="form-control" id="product_name" name="product_name" value="<?php echo $row['product_name']; ?>" type="text" placeholder="">
                                 </div>
                                 <div class="form-group">
                                    <label for="product_details">Product details</label>
                                    <textarea class="form-control" id="product_details" name="product_details"><?php echo $row['product_details']; ?></textarea>
                                 </div>
                                 <div class="form-group">
                                    <label for="product_price">Product price</label>
                                    <input class="form-control" id="product_price" name="product_price" value="<?php echo $row['product_price']; ?>" type="text" placeholder="">
                                 </div>
                                 <div class="form-group">
                                    <label for="product_image">Product image</label>
                                    <input class="form-control" id="product_image" name="product_image" type="file" placeholder="">
		  
                                     <img src="./<?php echo $row['product_image']; ?>" height="100" width="100" class="my_img">
                                 </div>
                                   <div class="form-group">
									<label for="product_status">Product status</label>
									<select class="form-control" id="product_status" name="product_status">

									  <?php
									  if($row['product_status']==1)
									  {
										?>
										<option value="1">Active</option>
										<option value="0">Pending</option>
										<?php
									  }
									  else
									  {
										 ?>
										 <option value="0">Pending</option>
										<option value="1">Active</option>
										
										<?php
									  }
									  ?>
										
									</select>
								  </div>
                                 <button type="submit" class="btn btn-primary btn-block">Submit</button>
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
   <!--
      <script type="text/javascript">
          $(document).ready(function() {
      
              demo.initChartist();
      
              $.notify({
                  icon: 'pe-7s-gift',
                  message: "Welcome to <b>Light Bootstrap Dashboard</b>."
      
              }, {
                  type: 'info',
                  timer: 4000
              });
      
          });
      </script>
      -->
</html>

