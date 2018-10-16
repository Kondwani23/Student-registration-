<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "unilas";

  $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
   
   // get values form input text and number
   $id =  $_POST['id'];
  $studentnumber = $_POST['studentno'];
  $year =  $_POST['year'];
  $semester =  $_POST['semester'];
  $program =  $_POST['program'];
  $courseno = $_POST['courseno'];
  $test1 =  $_POST['test1'];
  $test2 =  $_POST['test2'];
  $total =  $_POST['total'];
  $grade =  $_POST['grade'];
           
   // mysql query to Update data
   $query = "UPDATE `students` SET `ID`='".$id."',`Sno`= '".$studentnumber."', `Year_of_Study`= '".$year."', `Semester`= '".$semester."',`programme`= '".$program."',`coursecode`= '".$studentnumber."',`test1`= '".$test1."',`test2`= '".$test2."',`performance`= '".$total."',`Grades`= '".$grade."'  WHERE `ID` = $id";
   
   $result = mysqli_query($conn, $query);
   
   if($result)
   {
       echo 'Data Updated';
       
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($conn);
}

?>