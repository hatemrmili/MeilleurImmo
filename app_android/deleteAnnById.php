<?php 

/// if($_SERVER['REQUEST_METHOD']=='GET'){
 //Getting values 
 $id = $_GET['id'];

 //Creating sql query
 
require_once('bd.php');


// sql to delete a record
 $sql = "Delete FROM bien WHERE id_bien='$id'";

$result=mysqli_query($conn,$sql);
      if ($result)  {
       
     echo "yes";
} else {
     echo "no";
}	 
 
/// }
?>