<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $contact = $_POST['contact'];
    $reservation_time = $_POST['reservation_time'];
    $table_number = $_POST['table_number'];

    // Here you would typically save the reservation to a database
    // For demonstration, we will just echo the reservation details
    echo "Reservation made successfully!<br>";
    echo "Name: " . htmlspecialchars($customer_name) . "<br>";
    echo "Contact: " . htmlspecialchars($contact) . "<br>";
    echo "Reservation Time: " . htmlspecialchars($reservation_time) . "<br>";
    echo "Table Number: " . htmlspecialchars($table_number);
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
    $contact = $_POST['contact'];
    $reservation_time = $_POST['reservation_time'];
    $table_number = $_POST['table_number'];

    // Insert into database
    $sql = "INSERT INTO reservations (customer_name, contact, reservation_time, table_number) VALUES ('$customer_name', '$contact', '$reservation_time', $table_number)";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation made successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
