<?php 

require 'connect.php';

 $id = $_GET["id"];  

if( deletePlace($id) > 0 ){
   echo "
         <script> alert('Delete Succesed!');
         document.location.href = 'index.php';
         </script>";
}else{
   echo "
         <script> alert('Delete Failed!');
         document.location.href = 'index.php';
         </script>";
}

function deletePlace($id){
   global $connect;
   $query = "DELETE FROM place WHERE id = $id";
   mysqli_query($connect, $query);
   return mysqli_affected_rows($connect);
}

echo deletePlace($id);

?>