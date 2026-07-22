<?php include 'header.php'; ?>
    <h2 class="text-2xl font-bold">Create Category</h2>
    <hr class="h-1 bg-red-500">
    <form action="actioncategory.php" method="POST" class="my-3">
        <input type="text" name="priority" class="w-full block border p-2 rounded-lg shadow my-5" placeholder="Enter Priority">
        <input type="text" name="name" class="w-full block border p-2 rounded-lg shadow my-5" placeholder="Enter Category Name">
        <div class="flex justify-center gap-4">
            <input type="submit" name="create" class="bg-blue-500 px-3 py-2 rounded-lg text-white" value="Create Category">
            <a href="categories.php" class="bg-red-500 px-5 py-2 rounded-lg text-white">Cancel</a>
        </div>
    </form>
<?php include 'footer.php'; ?>