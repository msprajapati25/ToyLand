<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <style>
	.order-confirmation {
    padding: 20px;
    border: 1px solid #ddd;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.order-confirmation i {
    margin-bottom: 20px;
    color: #28a745;
}

.order-confirmation h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.order-confirmation p {
    font-size: 16px;
    margin-bottom: 20px;
}

	</style>
    <title>Order Confirmation</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <div class="order-confirmation">
                    <i class="fas fa-check-circle fa-5x text-success"></i>
                    <h2>Your Order is Confirmed!</h2>
                    <p>Thank you for shopping with us. Your order has been successfully placed.</p>
                    <a href="home.php" class="btn btn-primary">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
