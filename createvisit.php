<?php

include_once "private/connection.php";

// get visitor id and employee from the form
$visitorId = $_POST['visitor'];
$employeeId = $_POST['employee'];
$purpose =$_POST['purpose'];


// record visit in database indicating associating the visitor with the employee
$query = "INSERT INTO visits (visitor_id, user_id, purpose) VALUES ($visitorId, $employeeId, '$purpose')";
mysqli_query($db, $query) or die(mysqli_error($db));
$visitId = mysqli_insert_id($db);

header("Location: confirmvisit.php?visit=$visitId");

?>