<?php

require 'connect.php';

$id = $_GET["id"];
$wisata = showData($id, "booking");

if ( isset ($_POST["submit"])) {
    $data = $_POST;
    
    if(change($data, $id, "booking") > 0 ) {
        echo "<script>alert('data berhasil diubah!');
        document.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('data gagal diubah!');
        document.location.href = 'index.php';</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=  "width=device-width, initial-scale=1.0">
    <title>Add</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-slate-200">

<div class="flex flex-row justify-center items-center">
        <div class="max-w-md mx-auto mt-8 bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-lg font-bold mb-4 bg-teal-100 p-2 text-center rounded-lg">Update Bookinger</h2>
            <form action="" method="post">
                <div class="mb-4">
                    <label for="visitor" class="block text-sm font-medium text-gray-900">Visitor</label>
                    <input type="text" name="visitor" id="visitor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="<?= $wisata [0]["visitor"]?>"/>
                </div>
                <div class="mb-4">
                    <label for="tourist" class="block text-sm font-medium text-gray-900">Tourist</label>
                    <input type="text" name="tourist" id="tourist" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="<?= $wisata [0]["tourist"]?>"/>
                </div>
                <div class="mb-4">
                    <label for="date" class="block text-sm font-medium text-gray-900">Date</label>
                    <input type="text" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="<?= $wisata [0]["date"]?>"/>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-950 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center duration-700">Update Visitor</button>
            </form>
        </div>
</div>       
    <div class="flex justify-center items-center mx-auto bg-blue-600 h-10 w-32 rounded-md mt-10 hover:bg-blue-950 cursor-pointer transition-all duration-700 ease-in-out shadow-lg">
        <a href="./index.php">Back?</a>
    </div>
</body>
</html>