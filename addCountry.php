<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add country</title>
</head>

<body>
    <h1>Add Country</h1>
    <form action="addcountry.php"method="POST">
        <input type="text"placeholder="Enter Country code" name="CountryCode">
    <br><br>
        <input type="text"placeholder="Enter Country name" name="CountryName">
    <br><br>
    <input type="submit">
</form>
</body>
</html>

<?php
if(!empty($_POST['CountryCode'])&&!empty($_POST['CountryName'])):
    require 'connect.php';
        $sql_insert="insert into country values (:CountryCode, :CountryName)";

        $stmt=$conn->prepare($sql_insert);
        $stmt->bindParam(':CountryCode',$_POST['CountryCode']);
        $stmt->bindParam(':CountryName',$_POST['CountryName']);

        if($stmt->execute()):
            $message ='เพิ่มประเทศสำเร็จ';
            //header("Location:/business/selectCountry1.php");
        
        else:
            $message ='เพิ่มประเทศไม่สำเร็จ';
        endif;
        echo $message;
        $conn =null;
    endif;
    ?>         
