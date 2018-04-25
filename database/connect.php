<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "telco_site";
$Nom =$_POST['Nom'];
$Email =$_POST['Email'];
$Téléphone =$_POST['Téléphone'];
$Message =$_POST['Message'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO visiteurs (Nom, Email, Téléphone, Message)
VALUES ('$Nom', '$Email', '$Téléphone','$Message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>