<?php 
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    //check for username and password in database
    if($username == "admin" && $password == "admin")
    {
    header("Location: admin/dashboard.php");
    }
    else{
        echo("<script>alert('Invalid username or password'); window.location.href='login.php';</script>");
    }
}
else
{
    header("Location: login.php");
}