<?php 

require 'connect.php';

 $id = $_GET["id"];  

if( deleteBooking($id) > 0 ){
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

function deleteBooking($id){
   global $connect;
   $query = "DELETE FROM booking WHERE id = $id";
   mysqli_query($connect, $query);
   return mysqli_affected_rows($connect);
}

echo deleteBooking($id);

?>