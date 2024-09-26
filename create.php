<?php
require 'connect.php';

if( isset($_POST["submit"])){
    add($_POST, "visitor");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Entry</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-teal-100">
    <div class="flex flex-row justify-center items-center">
        <div class="max-w-md mx-auto mt-8 bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-lg font-bold mb-4 bg-teal-100 p-2 text-center rounded-lg">New Visitor</h2>
            <form action="" method="post">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-900">Name</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-4">
                    <label for="contact" class="block text-sm font-medium text-gray-900">Contact</label>
                    <input type="text" name="contact" id="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-4">
                    <label for="amount" class="block text-sm font-medium text-gray-900">Amount</label>
                    <input type="text" name="amount" id="amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-950 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center duration-700">Add Visitor</button>
            </form>
        </div>
    </div>
    <div class="flex justify-center items-center mx-auto bg-blue-600 h-10 w-32 rounded-md mt-10 hover:bg-blue-950 cursor-pointer transition-all duration-700 ease-in-out shadow-lg">
        <a href="./index.php">Back?</a>
    </div>
</body>
</html>
