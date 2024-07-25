<?php
$mongoClient = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$con = new MongoDB\Driver\BulkWrite;

session_start();
$_SESSION['user']=$_POST['name'];
$_SESSION['email']=$_POST['email'];

$username=$_SESSION['user'];
$email=$_SESSION['email'];
$password=$_POST['password'];

$errors = [];

if (empty($username)) {
    $errors[] = "Username is required.";
}

if (empty($email)) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

if (empty($password)) {
    $errors[] = "Password is required.";
} elseif (strlen($password) < 4) {
    $errors[] = "Password must be at least 4 characters.";
}


$newcust = [
        "username" =>$name,
        "email" =>$email,
        "password" =>$password,
];

if (empty($errors)) {
$con->insert($newcust);


$insertResult = $mongoClient->executeBulkWrite('website39.admin', $con);
if ($insertResult->getInsertedCount()==1)
{
        header("Location: home.php");
	$mongoClient->close();
}

} else {
    foreach ($errors as $error) {
		
    }
}



?>
