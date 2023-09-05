<?php

global $Name;
global $Mobile;
global $Email;
global $Message;

$servername = "localhost";
$username = "root";
$password = "MUroot@123";
$database = "FASSFOOD";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection failed' . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];
}





$sql = "INSERT INTO contact(Name,Email,Message) VALUES('$Name', '$Email', '$Message')";

if(mysqli_query($conn, $sql)){
     
}
else{
    echo "Failed to send";
}
mysqli_close($conn);
?>