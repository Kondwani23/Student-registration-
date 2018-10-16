<?php

// php code to Update data from mysql database Table

if(isset($_POST['sub']))
{
    
   $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "unilas";

  $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
   
   // get values form input text and number
   $search = mysqli_real_escape_string($conn, $_POST['search']);
   
   // mysql query to Update data
   $query = "SELECT * FROM `students` WHERE `Sno` like '%$search%' OR `ID` like '%$search%'";
   
   $result = mysqli_query($conn, $query);
   $count = mysqli_num_rows($result);
   if ($count == 0) {
   	echo "No info found";
   		# code...
   	}
   	else{

      echo "<table border='1' id= results>
          <tr>
          <th>ID</th>
          <th>S_No</th>
          <th>Year_of_Study</th>
          <th>Program</th>
          <th>Course Code</th>
          <th>test1</th>
          <th>test2</th>
          <th>Performance</th>
          <th>Grades</th>
          <th>Mark4</th>
          
          </tr>";
   		while ($row = mysqli_fetch_array($result)) {
      
   			echo"<tr><td>". $row['ID']."</td>";
        echo"<td>". $row['Sno']."</td>";
        echo"<td>". $row['Year_of_Study']."</td>";
        echo"<td>". $row['programme']."</td>";
        echo"<td>". $row['coursecode']."</td>";
        echo"<td>". $row['test1']."</td>";
        echo"<td>". $row['test2']."</td>";
        echo"<td>". $row['performance']."</td>";
        echo"<td>". $row['Grades']."</td>";
        echo"<td>". $row['Mark4']."</td></tr>";

   			


   			
   		}
   	}

   
   
   
   mysqli_close($conn);
}

?>