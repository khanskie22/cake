<?php
session_start();
$receipt = $_SESSION['receipt'] ?? null;

if (!$receipt) {
    echo "No receipt found.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Receipt</title>
    <style>
        body {
            font-family: Arial;
            padding: 50px;
            background: #f7f7f7;
        }
        .receipt {
            max-width: 400px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        h2 {
            text-align: center;
        }
        .line {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>
    <div class="receipt">
        <h2>Order Receipt</h2>
        <div class="line"><strong>Product:</strong> <span><?= htmlspecialchars($receipt['product']) ?></span></div>
        <div class="line"><strong>Price:</strong> <span>₱<?= number_format($receipt['price'], 2) ?></span></div>
        <div class="line"><strong>Quantity:</strong> <span><?= $receipt['quantity'] ?></span></div>
        <div class="line"><strong>Total:</strong> <span>₱<?= number_format($receipt['total'], 2) ?></span></div>
        <br>
        <p style="text-align: center;">Thank you for your order!</p>
    </div>
</body>
</html>
