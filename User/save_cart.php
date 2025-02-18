<?php

$host = 'localhost'; 
$dbname = 'CafeChords'; 
$username = 'root'; 
$password = ''; 

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = json_decode(file_get_contents('php://input'), true);

    if ($data) {
        $cartItems = json_encode($data['cartItems']); 
        $totalPrice = $data['totalPrice']; 
        $countCartItems = $data['cartCount']; 

        $sql = "INSERT INTO `order_details` (`cart_items`, `total_price`, `count_cart_items`) 
                VALUES (:cart_items, :total_price, :count_cart_items)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':cart_items', $cartItems);
        $stmt->bindParam(':total_price', $totalPrice);
        $stmt->bindParam(':count_cart_items', $countCartItems);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Order placed successfully.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to place order.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid input data.']);
    }
} catch (PDOException $e) {

    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>
