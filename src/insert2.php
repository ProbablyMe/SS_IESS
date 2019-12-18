<html>
<body>

<?php

include 'config.php';
$first='unset';
$last='unset';
$begin='unset';
$end='unset';

if(isset($_POST['first'])){
 $first = $_POST['first'];
}

if(isset($_POST['last'])){
 $last = $_POST['last'];
}

if(isset($_POST['begin'])){
 $last = $_POST['begin'];
}

if(isset($_POST['end'])){
 $last = $_POST['end'];
}

$first = $link->real_escape_string($first);
$last = $link->real_escape_string($last);
$begin = $link->real_escape_string($begin);
$end = $link->real_escape_string($end);

$query="INSERT INTO MPC1 (firstName, lastName, requestTime, endTime) VALUES ('".$first."','".$last."','".$begin."','".$end."')";
//echo $query;
$result=$link->query($query);
if(!$result) {
 echo "<br> BAD QUERY <br>";
}
 else {
  echo "<br> INSERTED INTO MPC 1! <br>";
 }

$link->close();

?>
<br><a href="index.html">Return to Directory</a>
<br><a href="data.php">Go Back to Data Form</a>
</body>
</html>
