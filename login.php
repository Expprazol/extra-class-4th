<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>
<body>
    <div class="px-4 sm:px-32 py-10">
    <form action="auth.php" method="POST" class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-3xl font-bold mb-4">LOGIN</h2>
        <input type="text" name="username" placeholder="Username" class="border border-gray-300 rounded-md px-4 py-2 mb-4 w-full">
         <input type="password" name="password" placeholder="Password" class="border border-gray-300 rounded-md px-4 py-2 mb-4 w-full">
        <button class="bg-blue-500 text-white rounded-md px-4 py-2 w-full hover:bg-blue-600 transition-colors duration-300">Login</button>
                <p class="mt-2 text-sm">Don't have an account? <a href="register.php" class="text-blue-500 hover:underline">Register here</a></p>
            </form>
</div>
    </div>
</body>
</html>
<?php include 'includes/footer.php'; ?>