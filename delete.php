<?php
$con = mysqli_connect("localhost", "root", "", "EmployeeDB");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];

$sql = "DELETE FROM employees WHERE id=$id";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>