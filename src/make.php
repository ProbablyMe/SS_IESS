<html>
<body>
<?php

include 'config.php';

echo 'Hello! Welcome to the Stryke Scheduler!<br>';

$query = "DROP TABLE students";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> 3D Printer dropped<br>";
 }

$query="CREATE TABLE students (studentID SERIAL PRIMARY KEY, firstName VARCHAR(255), lastName VARCHAR(255), requestTime VARCHAR(255), endTime VARCHAR(255))";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> 3D Printer created<br>";
 }

$query = "INSERT INTO students (firstName, lastName, requestTime, endTime) VALUES('Justin','G', '12:55PM', '1:30AM')";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> Inserted! <br>";
 }


$query = "INSERT INTO students (firstName, lastName, requestTime, endTime) VALUES('Julia','C', '4:00PM', '5:00PM')";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> Inserted! <br>";
 }

echo "<br> ------------------------- <br>";


$query = "DROP TABLE MPC1";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> MPC #1 dropped<br>";
 }

$query="CREATE TABLE MPC1 (studentID SERIAL PRIMARY KEY, firstName VARCHAR(255), lastName VARCHAR(255), requestTime VARCHAR(255), endTime VARCHAR(255))";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> MPC #1 created<br>";
 }

$query = "INSERT INTO MPC1 (firstName, lastName, requestTime, endTime) VALUES('Justin','G', '3:55PM', '4:30PM')";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> Inserted! <br>";
 }


$query = "INSERT INTO MPC1 (firstName, lastName, requestTime, endTime) VALUES('Julia','C', '2:45PM', '4:00PM')";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> Inserted! <br>";
 }



echo "<br> ------------------------- <br>";


$query = "DROP TABLE MPC2";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> MPC #2 dropped<br>";
 }

$query="CREATE TABLE MPC2 (studentID SERIAL PRIMARY KEY, firstName VARCHAR(255), lastName VARCHAR(255), requestTime VARCHAR(255), endTime VARCHAR(255))";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> MPC #2 created<br>";
 }

$query = "INSERT INTO MPC2 (firstName, lastName, requestTime, endTime) VALUES('Justin','G', '3:55PM', '4:30PM')";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> Inserted! <br>";
 }


$query = "INSERT INTO MPC2 (firstName, lastName, requestTime, endTime) VALUES('Julia','C', '2:45PM', '4:00PM')";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> Inserted! <br>";
 }



 echo "<br> ------------------------- <br>";


 $query = "DROP TABLE SoundStudio";
 $result = $link->query($query);
 if(!$result) {
   echo "<br> bad query <br>";
 }
  else {
    echo "<br> Sound Studio dropped<br>";
  }

 $query="CREATE TABLE SoundStudio (studentID SERIAL PRIMARY KEY, firstName VARCHAR(255), lastName VARCHAR(255), requestTime VARCHAR(255), endTime VARCHAR(255))";
 $result = $link->query($query);
 if(!$result) {
   echo "<br> bad query <br>";
 }
  else {
    echo "<br> Sound Studio created<br>";
  }

 $query = "INSERT INTO SoundStudio (firstName, lastName, requestTime, endTime) VALUES('Justin','G', '3:55PM', '4:30PM')";
 $result = $link->query($query);
 if(!$result) {
   echo "<br> bad query <br>";
 }
  else {
    echo "<br> Inserted! <br>";
  }


 $query = "INSERT INTO SoundStudio (firstName, lastName, requestTime, endTime) VALUES('Julia','C', '2:45PM', '4:00PM')";
 $result = $link->query($query);
 if(!$result) {
   echo "<br> bad query <br>";
 }
  else {
    echo "<br> Inserted! <br>";
  }































/*//$query = "DROP TABLE classID";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query<br>";
}
 else {
   echo "<br> classID dropped<br>";
 }

$query = "CREATE TABLE classID (classID SERIAL PRIMARY KEY, department VARCHAR(255), number INT NOT NULL, sectionNumber INT NOT NULL)";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> classID created <br>";
 }

$query = "INSERT INTO classID (department, number, sectionNumber) VALUES ('CSI','360','10')";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> inserted CSI 360 10 <br>";
 }

$query = "INSERT INTO classID (department, number, sectionNumber) VALUES ('MUS','110','11')";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo"<br> inserted MUS 110 11 <br>";
 }

echo"<br> ------------------------- <br>";

$query = "DROP TABLE className";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> className dropped <br>";
 }

$query = "CREATE TABLE className (department VARCHAR(255), number INT NOT NULL, name VARCHAR(255), PRIMARY KEY (department, number), FOREIGN KEY (department) REFERENCES classID(department), FOREIGN KEY (number) REFERENCES classID(number))";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> className created <br>";
 }

$query = "INSERT INTO className (department, number, name) VALUES ('CSI','360','Database Systems')";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> inserted CSI 360 Database Systems <br>";
 }

$query = "INSERT INTO className (department, number, name) VALUES ('MUS','110','Music Theory II')";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> inserted MUS 110 MUSIC Theory II <br>";
 }

echo "<br> ------------------------- <br>";

$query = "DROP TABLE attending";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> attending dropped <br>";
 }

$query = "CREATE TABLE attending (studentID INT NOT NULL, classID INT NOT NULL, FOREIGN KEY (studentID) REFERENCES students(studentID), FOREIGN KEY (classID) REFERENCES classID(classID))";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> className dropped <br>";
 }

$query = "INSERT INTO attending (studentID, classID) VALUES ('1','1')";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> className dropped <br>";
 }

$query = "INSERT INTO attending (studentID, classID) VALUES ('2','1')";
$result = $link->query($query);
if(!$result) {
  echo "<br> bad query <br>";
}
 else {
   echo "<br> className dropped <br>";
 }
 */

$link->close();
?>

<br><a href="index.html">Return to Directory</a>

</body>
</html>
