<?php 
if (isset($_POST['submit'])) {
	
	$dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "unilas";

  $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

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


	$sql ="INSERT INTO students (ID,Sno,Year_of_Study,Semester,programme,coursecode,test1,test2,performance,Grades) VALUES ('$id','$studentnumber','$year','$semester','$program','$courseno','$test1','$test2','$total','$grade')";
$result = $conn->query($sql);
	

	 print "Following data added: $id', '$studentnumber', '$year', '$semester', '$program','$courseno', '$test1', '$test2', '$total', '$grade'";

	
}
else{
	echo "error sumitting";
}