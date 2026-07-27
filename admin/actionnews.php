<?php
if(isset($_POST['create']))
{
    $category_id = $_POST['category_id'];
    $new_date = $_POST['new_date'];
    $name = $_POST['title'];
    $description = $_POST['description'];

    $filename = $_FILES['photopath']['name'];
    $tempname = $_FILES['photopath']['tmp_name'];
    $upload_dir = "uploads/" . $filename;
    $photopath = $upload_dir;
    move_uploaded_file($tempname, $upload_dir);
      include 'dbconnection.php';
    $qry = "INSERT INTO news(category_id, new_date, title, description, photopath) VALUES($category_id, '$new_date', '$title', '$description', '$photopath')";
    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
  
    if($result)
    {
        echo "<script>alert('News created successfully.'); window.location.href='news.php';</script>";
    }
    header("Location: news.php");
}