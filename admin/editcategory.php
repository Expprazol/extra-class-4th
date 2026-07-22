<?php
$id = $_GET['id'];
$qry = "SELECT * FROM categories WHERE id = $id";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($result);
include 'closeconnection.php';
?>
<?php include 'header.php'; ?>
    <h2 class="text-2xl font-bold">Edit Category</h2>
    <hr class="h-1 bg-red-500">
    <form action="actioncategory.php" method="POST" class="my-3">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="priority" value="<?php echo $row['priority']; ?>" class="w-full block border p-2 rounded-lg shadow my-5" placeholder="Enter Priority">
        <input type="text" name="name" value="<?php echo $row['name']; ?>" class="w-full block border p-2 rounded-lg shadow my-5" placeholder="Enter Category Name">
        <div class="flex justify-center gap-4">
            <input type="submit" name="update" class="bg-blue-500 px-3 py-2 rounded-lg text-white" value="Update Category">
            <a href="categories.php" class="bg-red-500 px-5 py-2 rounded-lg text-white">Cancel</a>
        </div>
    </form>
<?php include 'footer.php'; ?>