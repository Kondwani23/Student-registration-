<?php

// php code to Update data from mysql database Table



    
   $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "unilas";

  $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
   
   
   
   // mysql query to Update data
   $query = "SELECT DISTINCT programme,Mode_of_Study, count(Mode_of_Study) AS Nos, Year_of_Study,Results, performance  FROM students,students2,students3 GROUP BY `performance`,`Results`,`Mode_of_Study`";
   
   $result = mysqli_query($conn, $query);
 

 echo "<table border='1' id= results>
          <tr>
          <th>Program</th>
          <th>Mode of Study</th>
          <th>Number of Students</th>
          <th>Results</th>
          <th>Performance</th>
          
          </tr>";
      while ($row = mysqli_fetch_array($result)) {
    
        echo"<tr><td>". $row['programme']."</td>";
        echo"<td>". $row['Mode_of_Study']."</td>";
        echo"<td>". $row['Nos']."</td>";
        echo"<td>". $row['Results']."</td>";
        echo"<td>". $row['performance']."</td></tr>";
  }    
    
mysqli_close($conn);

?>