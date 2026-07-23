<?php

$conn = new mysqli("localhost","root","Dapbor123#","damame");

$whatsapp = $_POST['whatsapp'];
$password = $_POST['password'];

$sql = "SELECT * FROM customers WHERE whatsapp='$whatsapp'";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    $user = $result->fetch_assoc();

    if(password_verify($password, $user['password']))
    {
        echo "Login Successful!";
    }
    else
    {
        echo "Wrong Password!";
    }
}
else
{
    echo "User not found!";
}

?>