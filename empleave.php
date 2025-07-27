<?php

require_once ('process/dbh.php');

$sql = "SELECT * from `employee_leave`";


$result = mysqli_query($conn, $sql);
echo $result;
?>



