<?php
require "connect.php";
// ลองให้โชว์ข้อมูล customer
$sql = "SELECT * FROM customer"; 
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();
($result);

foreach ($result as $r){
     print $r['CustomerID'].'--'. $r['Name'].'--'. $r['OutstandingDebt'].'--'. $r['CountryCode'].'<br>';
    }
