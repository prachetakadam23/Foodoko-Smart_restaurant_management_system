<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $menu_item = $_POST['menu_item'];
    $quantity = $_POST['quantity'];

    // Here you would typically save the order to a database
    // For demonstration, we will just echo the order
    echo "Order placed successfully!<br>";
    echo "Name: " . htmlspecialchars($customer_name) . "<br>";
    echo "Item: " . htmlspecialchars($menu_item) . "<br>";
    echo "Quantity: " . htmlspecialchars($quantity);
}
?>


<?php
$servername = "localhost";
$username = "root"; // Default XAMPP/WAMP username
$password = ""; // Default XAMPP/WAMP password
$dbname = "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $menu_item = $_POST['menu_item'];
    $quantity = $_POST['quantity'];

    // Insert into database
    $sql = "INSERT INTO orders (customer_name, menu_item, quantity) VALUES ('$customer_name', '$menu_item', $quantity)";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
