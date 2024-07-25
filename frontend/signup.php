<?php
$mongoClient = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$con = new MongoDB\Driver\BulkWrite;

session_start();
$_SESSION['user']=$_POST['username'];
$_SESSION['email']=$_POST['email'];

$username=$_SESSION['user'];
$email=$_SESSION['email'];
$city=$_POST['city'];
$address=$_POST['adress'];
$phone=$_POST['phone'];
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
        "username" =>$username,
        "email" =>$email,
        "password" =>$password,
		"phone"=>$phone,
        "city"=>$city,
        "address"=>$address
];

if (empty($errors)) {
$con->insert($newcust);


$insertResult = $mongoClient->executeBulkWrite('website39.customer', $con);
if ($insertResult->getInsertedCount()==1)
{
        header("Location: home.php");
	$mongoClient->close();
}

} else {
    foreach ($errors as $error) {
		header("location:error_page.php");
    }
}



?>
