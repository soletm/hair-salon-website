<?php


include 'db.php';

$query = "DELETE FROM Rezervari WHERE id='" . $_GET["id"] . "'"; // Delete data from the table customers using id

 if (mysqli_query($dbCon, $query)) {
    $msg = 3;
 } else {
    $msg = 4;
 }

header ("Location: Admin.php?msg=".$msg."");


?>
