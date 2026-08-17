<?php 
$qry = "SELECT * FROM categories ORDER BY priority ASC";
include 'dbconnection.php';
$categories = mysqli_query($conn, $qry);
include 'closeconnection.php';
?>
<?php include 'header.php'; ?>
    <h2 class="text-2xl font-bold">Create News</h2>
    <hr class="h-1 bg-red-500">
    <form action="actionnews.php" method="POST" enctype="multipart/form-data" class="my-3">
        <select name="category_id" class="w-full block border p-2 rounded-lg shadow my-5" placeholder="Enter Category ID">
            <option value="">Select Category</option>
            <?php while($cat = mysqli_fetch_assoc($categories)) { ?>
                <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
            <?php } ?>
        </select>
        <input type="date" name="news_date" value="<?php echo $row['news_date']; ?>" class="w-full block border p-2 rounded-lg shadow my-5" placeholder="Enter News Date">
        <input type="text" name="title" value="<?php echo $row['title']; ?>" class="w-full block border p-2 rounded-lg shadow my-5" placeholder="Enter News Title">
        <textarea name="description" class="w-full block border p-2 rounded-lg shadow my-5" placeholder="Enter News Content"><?php echo $row['description']; ?></textarea>
        <input type="file" name="photopath" class="w-full block border p-2 rounded-lg shadow my-5">
        <div class="flex justify-center gap-4">
            <input type="submit" name="create" class="bg-blue-500 px-3 py-2 rounded-lg text-white" value="Create News">
            <a href="news.php" class="bg-red-500 px-5 py-2 rounded-lg text-white">Cancel</a>
        </div>
    </form>
<?php include 'footer.php'; ?>