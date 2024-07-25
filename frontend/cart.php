<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
   <style>
		.cart-item {
    margin-bottom: 20px;
    border: 1px solid #ddd;
    padding: 10px;
}

.cart-summary {
    border: 1px solid #ddd;
    padding: 10px;
}

img.img-fluid {
    max-width: 100%;
}

	</style>
</head>
<body>

<div class="container mt-5">
	<h1>Your Shopping Cart</h1>
<?php
session_start();
$pid=$_GET['p_id'];
$email=$_SESSION['email'];
$t=time();
$dte=date("h:i:s d-m-y",$t);


$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$collectionName = 'website39.item';
$idToFind = new MongoDB\BSON\ObjectID($pid);
$query = new MongoDB\Driver\Query(['_id' => $idToFind]);
$cursor = $manager->executeQuery($collectionName, $query);
$document = current($cursor->toArray());
//$document = current($cursor->toArray());
if ($document) { ?>
<form action="cartprocess.php" method="post">
<div class="row">
            <div class="col-md-15">
                <div class="cart-item">
                    <div class="row">
                        <div class="col-md-3">
					<image src="image/<?php echo $document->image; ?>"class='img-fluid'></image>
					</div>
                        <div class="col-md-4">
					<h3><?php echo $document->name; ?></h3>
                            <p><?php echo $document->discription;?></p>
                        </div>
						<div class="col-md-2">
                            <p><?php echo $document->price;?></p>
                        </div>
						<div class="col-md-2">
                            <input type="number" class="form-control" value="1" name="qnt">
                        </div>
						</div>
                </div>
			</div>

<div class="col-md-4">
                <div class="cart-summary">
                    <h3>ORDER FORM</h3>
                    <div class="row">
                        <div class="col-md-6">
						
                            <p>DELIVERY ADDRESS:</p>
                        </div>
                        <div class="col-md-6">
                            <p><input type="text" name="d_address" placeholder="ADDRESS"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
						<form action="cart2.php" method="post">
                            <p>DELIVERY PHONE NUMBER:</p>
                        </div>
                        <div class="col-md-6">
                            <p><input type="text" name="d_number" placeholder=" PHONE NUMBER"></p>
							<input type="hidden" name="pid" value="<?php echo $pid ?>" >
							<input type="hidden" name="price" value="<?php echo $document->price ?>" >
							<input type="hidden" name="email" value="<?php echo $email ?>">
	
                        </div>
                    </div>
                    <button type="submit"class="btn btn-primary btn-block">Proceed to Checkout</button>
					</form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>