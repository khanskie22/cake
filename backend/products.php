<?php
require 'db.php';

$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch and loop through all rows
    while ($row = $result->fetch_assoc()) {
        return $row;
        
         
        
        // Display product name
    }
} else {
    echo "No products found.";
}
?>