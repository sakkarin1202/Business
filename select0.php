<?php
require "connect.php";
// ลองให้โชว์ข้อมูล customer
$sql = "SELECT * FROM customer where CustomerID='Cus005' "; 
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();
print_r($result);
