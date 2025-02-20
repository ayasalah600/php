<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['submit'] == 'Login') {
       
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo "<h3>Login done</h3>";
        echo "<p>Username:  $username</p>";
        echo "<p>Email:  $email</p>";
        echo "<p>Password:  $password</p>";
    } elseif ($_POST['submit'] == 'register') {
       
        $username = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        echo "<h3>Register done</h3>";
        echo "<p>Username:  $username</p>";
        echo "<p>Email:  $email</p>";
        echo "<p>Mobile:  $mobile</p>";
        echo "<p>Address:  $address</p>";
        echo "<p>Password:  $password</p>";
    }
}
?>
