<?php

$conn = new mysqli("localhost","root","Dapbor123#","damame");

$name = $_POST['name'];
$whatsapp = $_POST['whatsapp'];
$address = $_POST['address'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO customers (name, whatsapp, address, password)
        VALUES ('$name', '$whatsapp', '$address', '$password')";

if($conn->query($sql))
{
    echo "Registration successful!";
}
else
{
    echo "Error: " . $conn->error;
}

?>