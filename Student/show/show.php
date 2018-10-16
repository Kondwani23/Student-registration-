<?php  
if(isset($_POST['show']))
{
    
   $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "studentinfo";

  $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
   
  
   $showinfo = mysqli_real_escape_string($conn, $_POST['info']);
   
           
   
   $query = "SELECT * FROM student WHERE studentno LIKE '%$showinfo%' OR fullname LIKE '%$showinfo%'";
   
   $found = mysqli_query($conn, $query);

   $infor = mysqli_num_rows($found);
   if($infor > 0)
   {
    echo "<table border='1' id= results>
          <tr>
          <th>Student Name</th>
          <th>Student Number</th>
          <th>Course</th>
          <th>Mark</th>
          <th>Grade</th>
          
          </tr>";
       while ($row = mysqli_fetch_array($found)) {
   			$fullname = $row['fullname'];
   			$studentnumber = $row['studentno'];
   			$course = $row['course'];
   			$mark = $row['mark'];
   			$grade = $row['grade'];

        echo"<tr><td>". $row['fullname']."</td>";
        echo"<td>". $row['studentno']."</td>";
        echo"<td>". $row['course']."</td>";
        echo"<td>". $row['mark']."</td>";
        echo"<td>". $row['grade']."</td></tr>";
            
                     
   		


   			
   		}
       
   }
   else{
       echo 'Data Not found';
   }
   mysqli_close($conn);
}




?>