<html>
<body>

<?php

include 'config.php';

$inputClassID='1';

if(isset($_POST['inputClassID'])) {
 $inputClassID = $_POST['inputClassID'];
}

$inputClassID=$link->real_escape_string($inputClassID);

$query="SELECT students.firstName, students.lastName FROM students INNER JOIN attending ON attending.studentID = students.studentID WHERE attending.classID = $inputClassID";
//echo $query;
$result=$link->query($query);
if(!$result) {
 echo "<br> BAD QUERY <br>";
}

  else {
   echo '<br /> List of Students in Class ' . $inputClassID . '<br />';
   echo '<br /> Number of Results from query [' . $result->num_rows . '] <br />';
   while ($row = $result->fetch_assoc()) {
    foreach($row as $field => $value) {
     echo $value . " ";
    }
   echo '<br>';
   }
  }

$link->close();

?>

<br><a href="index.html">Return to Directory</a>
<br><a href="list.php">Go Back to List Form</a>
</body>
</html>
