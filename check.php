<?php

$whatsapp = $_POST['whatsapp'];

$conn = new mysqli("localhost","root","Dapbor123#","damame");

$sql = "SELECT * FROM customers WHERE whatsapp='$whatsapp'";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    // Customer exists
    echo '
    <form action="login.php" method="post">
        <input type="hidden" name="whatsapp" value="'.$whatsapp.'">

        Password:
        <input type="password" name="password" required>

        <input type="submit" value="Login">
    </form>';
}
else
{
    // New customer
    echo '
    <form action="register.php" method="post">
        <input type="hidden" name="whatsapp" value="'.$whatsapp.'">

        Name:
        <input type="text" name="name" required><br>

        Address:
        <textarea name="address" required></textarea><br>

        Password:
        <input type="password" name="password" required><br>

        <input type="submit" value="Register">
    </form>';
}
?>