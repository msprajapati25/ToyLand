<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add your custom CSS styles here */
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 30px;
        }
        .jumbotron {
            background-color: #fff;
        }
    </style>
</head>
<body>
<?php
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer.php">Customer</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Welcome  Admin !!!</h1>
            <p class="lead"></p>
            <hr class="my-4">
            <!-- Main Content -->
    <div class="container">
        <h1 class="my-4">Admin Dashboard</h1>

        <div class="row">
            <!-- Card 1: Users -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <h5><?php
$database = 'website39';
$collection2= 'customer';

$command2= new MongoDB\Driver\Command([
    'count' => $collection2,
]);

try {
    $cursor = $manager->executeCommand($database, $command2);
    $response = current($cursor->toArray());

    $productount = $response->n;
		echo  $productount ;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?></h5>
                        <a href="customer.php" class="btn btn-primary">View Users</a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Orders -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>
                        <h5><?php
$database = 'website39';
$collection2= 'order';

$command2= new MongoDB\Driver\Command([
    'count' => $collection2,
]);

try {
    $cursor = $manager->executeCommand($database, $command2);
    $response = current($cursor->toArray());

    $productount = $response->n;
		echo  $productount ;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?></h5>
                        <a href="order.php" class="btn btn-primary">View Orders</a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Products -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Products</h5>
                        <h5><?php
$database = 'website39';
$collection2= 'item';

$command2= new MongoDB\Driver\Command([
    'count' => $collection2,
]);

try {
    $cursor = $manager->executeCommand($database, $command2);
    $response = current($cursor->toArray());

    $productount = $response->n;
		echo  $productount ;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?></h5>
                        <a href="product.php" class="btn btn-primary">View Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
<!-- ... (previous code) -->
<br><br><br>
<!-- Footer -->
<footer class="bg-light text-dark text-center py-3">
    <div class="container">
        <p>Created By<span> @msprajapati </span>| All Rights Reserved</p>
    </div>
</footer>

<!-- Add Bootstrap JS and jQuery (same as previous code) -->
</body>
</html>

 