<html>
<body>

<?php

include 'config.php';
echo "<br>";
$query="SELECT * FROM students";
$result=$link->query($query);
if(!$result) {
 echo "<br> BAD QUERY <br>";
}

  else {
   echo 'Number of Results from 3D Printer Query: [' . $result->num_rows . '] <br />';
   while ($row = $result->fetch_assoc()) {
    foreach($row as $field => $value) {
     echo $value . " ";
    }
   echo '<br>';
   }
  }

$query="SELECT * FROM MPC1";
$result=$link->query($query);
if(!result) {
 echo "<br> BAD QUERY <br>";
}

   else {
    echo '<br />Number of Results from MPC #1 Query: [' . $result->num_rows . '] <br />';
    while ($row = $result->fetch_assoc()) {
     foreach($row as $field=>$value) {
      echo $value . " ";
     }
    echo '<br>';
    }
   }


$query="SELECT * FROM MPC2";
$result=$link->query($query);
if(!result) {
 echo "<br> BAD QUERY <br>";
}

   else {
    echo '<br />Number of Results from MPC #2 Query: [' . $result->num_rows . '] <br />';
    while ($row = $result->fetch_assoc()) {
     foreach($row as $field=>$value) {
      echo $value . " ";
     }
    echo '<br>';
    }
   }


$query="SELECT * FROM SoundStudio";
$result=$link->query($query);
if(!result) {
 echo "<br> BAD QUERY <br>";
}

   else {
    echo '<br />Number of Results from Sound Studio Query: [' . $result->num_rows . '] <br />';
    while ($row = $result->fetch_assoc()) {
     foreach($row as $field=>$value) {
      echo $value . " ";
     }
    echo '<br>';
    }
   }

$link->close();

?>
<br><a href="index.html">Return to Directory</a>
  </body>
  </html>
