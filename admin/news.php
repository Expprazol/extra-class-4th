<?php 
// fetch data from database here. 
    $qry = "SELECT * FROM categories ORDER BY priority";
    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include 'closeconnection.php';
?>
<?php include 'header.php'; ?>
    <h2 class="text-2xl font-bold">Categories</h2>
    <hr class="h-1 bg-red-500">
    <div class="my-3 flex justify-end">
        <a href="createnews.php" class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg">Add Category</a>
    </div>
    <table class="w-full">
        <tr>
            <th class="border p-2 bg-blue-600 text-white">News Date</th>
            <th class="border p-2 bg-blue-600 text-white">Picture</th>
            <th class="border p-2 bg-blue-600 text-white">News Title</th>
            <th class="border p-2 bg-blue-600 text-white">News Description</th>
            <th class="border p-2 bg-blue-600 text-white">Action</th>
        </tr>
        <tr class="text-center">
            <td class="border p-2"></td>
            <td class="border p-2"></td>
            <td class="border p-2"></td>
            <td class="border p-2"></td> 
            <td class="border p-2">
                <a href="editnews.php?id=<?php echo $row['id'];?>" class="bg-blue-500 text-white rounded-lg px-2 py-1">Edit</a>
                <a href="actionnews.php?deleteid=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete this news?');" class="bg-red-500 text-white rounded-lg px-2 py-1">Delete</a>
</td>
        </tr>

    </table>
<?php include 'footer.php'; ?>