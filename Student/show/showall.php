<!DOCTYPE html>
<html>
<head>
	<title>students data</title>
</head>
<body>
<?php
 $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "unilas";

  $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

 $showall = "SELECT * FROM students";

 $result = mysqli_query($conn,$showall);

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
  mysqli_close($conn);


  ?>
</body>
</html>

