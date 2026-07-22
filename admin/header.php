<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex">
        <div class="w-52 h-screen bg-gray-100 p-4">
            <h1 class="text-xl font-bold mb-4 text-center">Admin Portal</h1>
            <nav class="flex flex-col space-y-2">
                <a href="dashboard.php" class="block px-4 py-2 rounded hover:bg-gray-200">Dashboard</a>
                <a href="categories.php" class="block px-4 py-2 rounded hover:bg-gray-200">Categories</a>
                <a href="news.php" class="block px-4 py-2 rounded hover:bg-gray-200">News</a>
                <a href="logout.php" class="block px-4 py-2 rounded hover:bg-gray-200">Logout</a>
            </nav>
        </div>
        <div class="flex-1 p-4">