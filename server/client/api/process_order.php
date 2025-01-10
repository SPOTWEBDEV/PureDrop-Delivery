<?php
include('../../connection.php');

// Get JSON data from the request
$data = json_decode(file_get_contents('php://input'), true);

// Extract user and cart data
$formData = $data['formData'];
$cartData = $data['cartData'];
$paymentMethod = $data['paymentMethod'];

if ($formData) {
    $email = $formData['email'];
    $phone = $formData['phone'];
    
    // Check if user exists
    $query = mysqli_query($connection, "SELECT id FROM users WHERE email = '$email'");
    
    if (!mysqli_num_rows($query)) {
        // User doesn't exist, insert new user
        $firstName = $formData['first_name'];
        $address = $formData['address'];
        $date = date("Y-m-d H:i:s");

        $insertUserQuery = "INSERT INTO users (name, email, phone, address, date) 
                            VALUES ('$firstName', '$email', '$phone', '$address', '$date')";

            
        
        if (mysqli_query($connection, $insertUserQuery)) {
            $userId = mysqli_insert_id($connection);
            
            // Create invoice
           $invoice_id = rand(111111111111,999999999999);
            $insertInvoiceQuery = "INSERT INTO invoice (user_id,invoice_id, payment_method) 
                                   VALUES ('$userId','$invoice_id', '$paymentMethod')";
            
            if (mysqli_query($connection, $insertInvoiceQuery)) {
                
                
                // Insert cart items into invoice_items table
                foreach ($cartData as $item) {
                    $productName = $item['name'];
                    $quantity = $item['quantity'];
                    $price = $item['price'];
                    $total = $quantity * $price;
                    
                    $insertInvoiceItemQuery = "INSERT INTO invoice_items (invoice_id, product_name, quantity, price, total) 
                                               VALUES ('$invoice_id', '$productName', '$quantity', '$price', '$total')";
                    mysqli_query($connection, $insertInvoiceItemQuery);
                }

                // Send success response
                echo json_encode(['success' => true, 'message' => 'Order processed successfully']);
            } else {
                echo json_encode(['error' => 'Failed to create invoice']);
            }
        } else {
            echo json_encode(['error' => 'Failed to insert user']);
        }
    } else {
        // User exists, return user data (optional)
        $user = mysqli_fetch_assoc($query);
        echo json_encode(['email' => $email, 'userId' => $user['id']]);
    }
} else {
    echo json_encode(['error' => 'Form data is missing']);
}
?>
