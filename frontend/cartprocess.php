<?php
$mongoClient = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$con = new MongoDB\Driver\BulkWrite;

	$add=$_POST['d_address'];
	$number=$_POST['d_number'];
	$pid=$_POST['pid'];
	$price=$_POST['price'];
	$qnt=$_POST['qnt'];
	$total=$price*$qnt;
	$email=$_POST['email'];
$neworder = [
        "address"=>$add,
		"phone"=>$number,
		"cust_email"=>$email,
		"product_id"=>$pid,
		"total_amt"=>$total
];
$con->insert($neworder);
$insertResult = $mongoClient->executeBulkWrite('website39.order', $con);
if ($insertResult->getInsertedCount()==1)
{
        header("Location:done.php");
	$mongoClient->close();
}

 else {
    foreach ($errors as $error) {
		header("location:error_page.php");
    }
}

