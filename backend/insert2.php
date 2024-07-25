<?php
$pname=$_POST['name'];
$pdprice=$_POST['Price'];
$pddis=$_POST['Discription'];
$pdimg=$_POST['Img'];
$cn = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bw = new MongoDB\Driver\BulkWrite;
$doc = ['name'=>"$pdcat",'price'=>$pdprice,'discription'=>"$pddis",'image'=>"$pdimg"];
$bw->insert($doc);
$cn->executeBulkWrite('website39.item', $bw);
if($cn==TRUE)
{
	header("location:insertalert.html");
}


?>
