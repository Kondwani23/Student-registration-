<?php

// php code to Update data from mysql database Table



    
   $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "unilas";

  $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
   
   
   
   // mysql query to Update data
   $query = "SELECT Mode_of_Study, COUNT(StudentName) AS NoS FROM students3 GROUP BY Mode_of_Study ORDER BY Mode_of_Study";
   
   $result = mysqli_query($conn, $query);
 

 echo "<table border='1' id= results>
          <tr>
          <th>Mode_of_Study</th>
          <th>Number of Students</th>
          
          </tr>";
      while ($row = mysqli_fetch_array($result)) {
    
        
       echo"<tr><td>". $row['Mode_of_Study']."</td>";
        echo"<td>". $row['NoS']."</td></tr>";
  }    
    
mysqli_close($conn);

?>