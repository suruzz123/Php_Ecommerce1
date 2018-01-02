
<?php 
    include("db.php");
	$id = $_REQUEST['id'];
    $query ="DELETE FROM `products` WHERE product_id = '$id'";
	$res = mysqli_query($con, $query);
	if(!$res)
	{
		header("location: Product_view.php");
	}
	else
	{
		//echo 1;
		header("location: Product_view.php");
	}	
 ?>