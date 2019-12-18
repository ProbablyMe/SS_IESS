<?php

$link = new mysqli('localhost', 'user', 'pass', 'user');

if($link->connect_errno) {
	echo "<li>Failed to Connect " . $link->connect_errno . " " . $link->connect_error . "</li>";
}

else {
	echo "<li>Connected to Database! </li>";
}

?>
