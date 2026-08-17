<?php 
    $qry = "SELECT * FROM news ORDER BY priority ASC";N
    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include 'closeconnection.php';
?>
<?php include 'header.php'; ?>
    <h2 class="text-2xl font-bold">News</h2>
    <hr class="h-1 bg-red-500">
    <div class="my-3 flex justify-end">
        <a href="createnews.php" class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg">Add News</a>
    </div>
    <table class="w-full">
        <tr>
            <th class="border p-2 bg-blue-600 text-white">News Date</th>
            <th class="border p-2 bg-blue-600 text-white">Picture</th>
            <th class="border p-2 bg-blue-600 text-white">News Title</th>
            <th class="border p-2 bg-blue-600 text-white">News Description</th>
            <th class="border p-2 bg-blue-600 text-white">Action</th>
        </tr>
        <?php 
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr class="text-center">
            <td class="border p-2"><?php echo $row['news_date']; ?></td>
            <td class="border p-2">
                <img src="../uploads/<?php echo $row['photopath']; ?>" class="w-20 h-20 object-cover mx-auto" alt="News Image">
            </td>
            <td class="border p-2"><?php echo $row['title']; ?></td>
            <td class="border p-2 line-clamp-4"><?php echo $row['description']; ?></td>
            <td class="border p-2">
                <a href="" class="bg-blue-500 text-white rounded-lg px-2 py-1">Edit</a>
                <a href="" onclick="return confirm('Are you sure you want to delete this category?');" class="bg-red-500 text-white rounded-lg px-2 py-1">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
<?php include 'footer.php'; ?>