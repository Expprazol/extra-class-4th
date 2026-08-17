<?php 
if(isset($_POST['create'])){
    $category_id = $_POST['category_id'];
    $news_date = $_POST['news_date'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $filename = $_FILES['photopath']['name'];
    $tempname = $_FILES['photopath']['tmp_name'];
    $upload_dir = '../uploads/';
    $photopath = time() . '_' . $filename;

    move_uploaded_file($tempname, $upload_dir . $photopath);

    include 'dbconnection.php';
    $qry = "INSERT INTO news (category_id,title,description,news_date,photopath) VALUES ('$category_id', '$title', '$description', '$news_date', '$photopath')";
    $result = mysqli_query($conn, $qry);
    include 'closeconnection.php';
    if($result)
    {
        echo "<script>alert('News created successfully.'); window.location.href='news.php';</script>";
    }

    header('Location: news.php');
}