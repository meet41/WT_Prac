<?php
$con = mysqli_connect("localhost", "root", "", "EmployeeDB");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($con, "SELECT * FROM employees");
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Department</th><th>Designation</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['department']}</td><td>{$row['designation']}</td></tr>";
}
echo "</table>";

mysqli_close($con);
?>