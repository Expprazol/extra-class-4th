<?php 
if(isset($_POST['create']))
{
    $priority = $_POST['priority'];
    $name = $_POST['name'];
    $qry = "INSERT INTO categories(priority, name) VALUES($priority, '$name')";
    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include 'closeconnection.php';
    if($result)
    {
        echo "<script>alert('Category created successfully.'); window.location.href='categories.php';</script>";
    }
}

if(isset($_POST['update']))
{
    $priority = $_POST['priority'];
    $name = $_POST['name']; 
    $id = $_POST['id'];
    $qry = "UPDATE categories SET priority=$priority, name='$name' WHERE id=$id";
    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include 'closeconnection.php';
    if($result)
    {
        echo "<script>alert('Category updated successfully.'); window.location.href='categories.php';</script>";
    }
}

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $qry = "DELETE FROM categories WHERE id=$id";
    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include 'closeconnection.php';
    if($result)
    {
        echo "<script>alert('Category deleted successfully.'); window.location.href='categories.php';</script>";
    }
}