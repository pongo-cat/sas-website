<!--Connects to database to insert into 'emailList' table in 'sasdatabase' database-->

<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sasdatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert into 'emailList' table
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

$sql = "INSERT INTO messageList (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Message sent successfully!')</script>";
    echo"<script>window.location.href='contact.php'</script>";
} else {
    echo "<script>alert('sorry, there was an error sending your message.')</script>";
    echo"<script>window.location.href='contact.php'</script>";
}

// Close connection

$conn->close();
?>
