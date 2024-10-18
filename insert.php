<?php
$con = mysqli_connect("localhost", "root", "", "EmployeeDB");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$department = $_POST['department'];
$designation = $_POST['designation'];

$sql = "INSERT INTO employees (name, department, designation) VALUES ('$name', '$department', '$designation')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>