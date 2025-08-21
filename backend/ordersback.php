<?php
session_start(); // ADD THIS AT THE TOP

require './products.php'; // DB connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cake_name = $_POST['name'] ?? '';
    $order_qty = intval($_POST['quantity']);

    if (empty($cake_name) || $order_qty <= 0) {
        http_response_code(400);
        echo "Invalid data.";
        exit;
    }

    // Get product
    $stmt = $conn->prepare("SELECT * FROM products WHERE name = ?");
    $stmt->bind_param("s", $cake_name);
    $stmt->execute();
    $product = $stmt->get_result()->fetch_assoc();

    if (!$product) {
        http_response_code(404);
        echo "Product not found.";
        exit;
    }

    // Check stock
    if ($product['quantity'] < $order_qty) {
        http_response_code(409);
        echo "Not enough stock.";
        exit;
    }

    // Calculate total
    $price = floatval($product['price']);
    $total = $order_qty * $price;

    // Insert into orders table
    $insert = $conn->prepare("INSERT INTO orders (order_price, order_qty, total) VALUES (?, ?, ?)");
    $insert->bind_param("ddd", $price, $order_qty, $total);
    $insert->execute();

    // Update stock
    $newStock = $product['quantity'] - $order_qty;
    $update = $conn->prepare("UPDATE products SET quantity = ? WHERE id = ?");
    $update->bind_param("ii", $newStock, $product['id']);
    $update->execute();

    // Store in session
    $_SESSION['receipt'] = [
        'product' => $cake_name,
        'price' => $price,
        'quantity' => $order_qty,
        'total' => $total
    ];

    // Redirect
    echo "redirect";
}
?>
