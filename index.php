<?php 

require 'connect.php';
$places = getData("SELECT * FROM place");
$visited = getData("SELECT * FROM visitor");
$bookings = getData("SELECT * FROM booking");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funari</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>   
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
    <style>
    body {
        font-family: 'Poppins';
    }
    .icon-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        transition: background-color 0.3s, color 0.3s;
    }
    .icon-button:hover {
        background-color: #f1f1f1;
        color: #000;
    }
    .icon-pencil:hover {
        color: #1e90ff;
    }
    .icon-trash:hover {
        color: #ff6347;
    }
    </style>
</head>
<body class="bg-teal-400 py-10">
    <div class="flex flex-col px-44 py-8 gap-8 bg-gradient-to-br from-teal-200 to-teal-950 w-fit mx-auto rounded-lg shadow-xl shadow-white">
        <h1 class="justify-center item-center flex text-4xl text-white font-bold">Yuk Wisata😍</h1>
        <table class="border-b-4 border-white " border="1" cellpadding="10" cellspacing="1">
            <tr class="text-left text-white">
                <th class="bg-teal-500 rounded-sm border">No.</th>
                <th class="bg-teal-500 rounded-sm border">Name</th>
                <th class="bg-teal-500 rounded-sm border">Contact</th>
                <th class="bg-teal-500 rounded-sm border">Amount</th>
                <th class="bg-teal-500 rounded-sm border text-center">Act</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($visited as $visit) :?>
            <tr>
                <td><?= $no ?></td>
                <td><?= htmlspecialchars($visit['name']) ?></td>
                <td><?= htmlspecialchars($visit['contact']) ?></td>
                <td><?= htmlspecialchars($visit['amount']) ?></td>
                <td class="flex justify-center space-x-2">
                    <a class="text-white bg-blue-700 rounded-md hover:bg-blue-300 p-1 icon-button icon-pencil" href="create.php?id=<?= $visit["id"]?>">
                    <i class="ph ph-plus"></i>
                    </a>
                    <a class="text-white bg-blue-700 rounded-md hover:bg-blue-300 p-1 icon-button icon-pencil" href="change.php?id=<?= $visit["id"]?>">
                        <i class="ph ph-pencil"></i>
                    </a>
                    <a class="text-white bg-red-700 rounded-md hover:bg-red-300 p-1 icon-button icon-trash" href="delete.php?id=<?= $visit["id"] ?>&table=visitor" onclick="return confirm('Want to Delete?');">
                    <i class="ph ph-trash"></i>
                    </a>
                </td>
            </tr>
            <?php $no++ ?>
            <?php endforeach; ?>
        </table>
        <br><br>
        <table class="border-b-4 border-white" border="1" cellpadding="10" cellspacing="1">
            <tr class="text-left text-white">
                <th class="bg-teal-500 rounded-sm border">No.</th>
                <th class="bg-teal-500 rounded-sm border">Place Name</th>
                <th class="bg-teal-500 rounded-sm border">Location</th>
                <th class="bg-teal-500 rounded-sm border">Price</th>
                <th class="bg-teal-500 rounded-sm border text-center">Act</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($places as $place) :?>
            <tr>
                <td><?= $no ?></td>
                <td><?= htmlspecialchars($place['name']) ?></td>
                <td><?= htmlspecialchars($place['location']) ?></td>
                <td><?= htmlspecialchars($place['price']) ?></td>
                <td class="flex justify-center space-x-2">
                    <a class="text-white bg-blue-700 rounded-md hover:bg-blue-300 p-1 icon-button icon-pencil" href="createp.php?id=<?= $place["id"]?>">
                    <i class="ph ph-plus"></i>
                    </a>
                    <a class="text-white bg-blue-700 rounded-md hover:bg-blue-300 p-1 icon-button icon-pencil" href="changep.php?id=<?= $place["id"]?>">
                        <i class="ph ph-pencil"></i>
                    </a>
                    <a class="text-white bg-red-700 rounded-md hover:bg-red-300 p-1 icon-button icon-trash" href="delete2.php?id=<?= $place["id"] ?>&table=place" onclick="return confirm('Want to Delete?');">
                    <i class="ph ph-trash"></i>
                    </a>
                </td>
            </tr>
            <?php $no++ ?>
            <?php endforeach; ?>
        </table>
        <br><br>
        <table class="border-b-4 border-white" border="1" cellpadding="10" cellspacing="1">
            <tr class="text-left text-white">
                <th class="bg-teal-500 rounded-sm border">No.</th>
                <th class="bg-teal-500 rounded-sm border">Bookinger</th>
                <th class="bg-teal-500 rounded-sm border">Contact</th>
                <th class="bg-teal-500 rounded-sm border">Date</th>
                <th class="bg-teal-500 rounded-sm border text-center">Act</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($bookings as $booking) :?>
            <tr>
                <td><?= $no ?></td>
                <td><?= htmlspecialchars($booking['visitor']) ?></td>
                <td><?= htmlspecialchars($booking['tourist']) ?></td>
                <td><?= htmlspecialchars($booking['date']) ?></td>
                <td class="flex justify-center space-x-2">
                    <a class="text-white bg-blue-700 rounded-md hover:bg-blue-300 p-1 icon-button icon-pencil" href="createb.php?id=<?= $booking["id"]?>">
                    <i class="ph ph-plus"></i>
                    </a>
                    <a class="text-white bg-blue-700 rounded-md hover:bg-blue-300 p-1 icon-button icon-pencil" href="changeb.php?id=<?= $booking["id"]?>">
                        <i class="ph ph-pencil"></i>
                    </a>
                    <a class="text-white bg-red-700 rounded-md hover:bg-red-300 p-1 icon-button icon-trash" href="delete3.php?id=<?= $booking["id"] ?>&table=booking" onclick="return confirm('Want to Delete?');">
                    <i class="ph ph-trash"></i>
                    </a>
                </td>
            </tr>
            <?php $no++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
