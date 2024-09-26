<?php 

require 'connect.php';

$id = $_GET["id"];  
$table = $_GET["table"]; 

if( deleteAll($id, $table) > 0 ){
   echo "
         <script> alert('Delete Succeeded!');
         document.location.href = 'index.php';
         </script>";
}else{
   echo "
         <script> alert('Delete Failed!');
         document.location.href = 'index.php';
         </script>";
}

?>
