<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - product</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add your custom CSS if needed -->
    <style>
        /* Add your custom CSS styles here */
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Order Management</h1>
<br><br>
       <table border=1>
       <table class="table table-bordered">
                <thead>
                    <tr>
						<th>ORDER _ID</th>
						<th>PRODUCT_ID</th>
						<th>EMAIL-ID</th>
						<th>USER_ADD</th>
						<th>Phone</th>
						<th>TOTAL_AMT</th>
					</tr>
                </thead>
                <tbody>
                    <?php
	$mongoConnection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
	$database = "website39";
    $collection = "order";
	$filter = [];
    $options = [];
    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $mongoConnection->executeQuery("$database.$collection", $query);
	
    foreach ($cursor as $product) {
		echo"<tr>";
		echo "<td>".$product->_id."</td>";
        echo "<td>".$product->product_id."</td>";
        echo "<td>".$product->cust_email."</td>";
		echo "<td>".$product->address."</td>";
		echo "<td>".$product->phone."</td>";
		echo  "<td>".$product->total_amt."</td>";
		echo "</tr>";
    }
    ?>
                </tbody>
            </table>
    </main>
    <footer>
        <p>Created By<span> @msprajapati </span>| All Rights Reserved</p>
    </footer>
</body>
</html>
