<?php  
if(isset($_POST['delete']))
{
    
   $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "unilas";

  $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
   
  
   $delete = mysqli_real_escape_string($conn, $_POST['stu']);
   
           
   
   $query = "DELETE FROM students WHERE ID = $delete ";
   
   $result = mysqli_query($conn, $query);
  echo "Deleted From Database";
   }
   else{
    echo "Couldn't delete";
   }

   ?>