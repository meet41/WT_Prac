<?php
$con = mysqli_connect("localhost", "root", "", "EmployeeDB");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    department VARCHAR(100),
    designation VARCHAR(100)
);";
if (mysqli_query($con, $sql)) {
    echo "Employee Table created successfully!";
} else {
    echo "Error creating table: " . mysqli_error($con);
}
mysqli_close($con);
?>