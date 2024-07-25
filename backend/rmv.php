<?php
$pid=$_GET['p_id'];
$cn = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bw = new MongoDB\Driver\BulkWrite;
$bw->delete(['_id' =>"$pid"]);
$cn->executeBulkWrite('web_practice.item', $bw);
if($cn==TRUE)
{
	header("location:product.php");
}
?>
