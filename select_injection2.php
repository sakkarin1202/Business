<?php
require "connect.php";
echo "<br>"."strCountryName =".$strCountryName;
if (isset($_GET["CountryName"]));
{
    $strCountryName = $_GET [CountryName];
    echo "<br>"."CountryName =".$strCountryName;
    $sql="SELECT * FROM country where CountryName ='".$strCountryName."'";
    echo "<br>"."sql=".$sql."<br>";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    //print_r($result);    
    

    
}
?>
 <table width="300"border="1">
  

  <tr>
    <th width="130">ชื่อประเทศ</th>
    <td><?php echo $result["CountryName"]; ?></td>
  </tr>
 
  <tr>
    <th width="130">รหัสประเทศ</th>
    <td><?php echo $result["CountryCode"]; ?></td>
  </tr>
  
  
  </table>
<?php
$conn = null;
?>