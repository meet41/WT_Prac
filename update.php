<?php
$con = mysqli_connect("localhost", "root", "", "EmployeeDB");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$name = $_POST['name'];
$department = $_POST['department'];
$designation = $_POST['designation'];

$sql = "UPDATE employees SET name='$name', department='$department', designation='$designation' WHERE id=$id";
if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>