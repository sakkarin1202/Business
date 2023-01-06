
<?php
try {
    require 'connect.php';
    $sql = "SELECT * FROM country"; 
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //แบบที่ 1
   //while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //echo '<br>' .
        //   'รหัสประเทศ  : ' .
         //   $result['CountryCode'] .
          // 'ชื่อประเทศ : ' .
          //  $result['CountryName'] ;
           
    //}
    // แบบที่2
    while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
        echo '<br>' .
           'รหัสประเทศ : ' .
            $result['0'] .
            ' ชื่อประเทศ : ' .
           $result['1'] 
           ;
    }
}

 catch (PDOException $e) {
    echo 'ไม่สามารถประมวลผลข้อมูลได้ : ' . $e->getMessage();
}

$conn = null;
?>

</body>
</html>
