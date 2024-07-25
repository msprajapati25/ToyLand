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
        <h1 class="my-4">Product Management</h1>
<br><br>

<center><a href="insert.php" class="btn btn-success">Add New Product</a>
    <center><br><br>
        <table border=1>
                <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Discription</th>
                    <th>Image</th>
					<th>Update</th>
					<th>Delete</th>
                </tr>
            </thead>
                <tbody>
                    <?php
    $mongoConnection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $database = "website39";
    $collection = "item";
	$filter = [];
    $options = [];
    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $mongoConnection->executeQuery("$database.$collection", $query);
	
    foreach ($cursor as $product) {
		echo"<tr>";
		echo "<td>".$product->_id."</td>";
		echo "<td>".$product->name."</td>";
        echo "<td>".$product->price."</td>";
		echo  "<td>".$product->discription."</td>";
		echo  "<td>".$product->image."</td>";
	?>

		<td><a href="upd.php?p_id=<?php echo $product->_id;?>" class="btn btn-primary">UPDATE</a>
		<td><a href="rmv.php?p_id=<?php echo $product->_id;?>" class="btn btn-danger">DELETE</a>
		</tr>
<?php
    }
    ?>
                </tbody>
            </table>
</div>
    <footer>
        <p>Created By<span> @msprajapati </span>| All Rights Reserved </p>
    </footer>
</body>
</html>
