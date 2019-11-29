
<?php
require 'my.php';
$name=$_GET["name"];
$quantity=$_GET["quantity"];
$category=$_GET["category"];
$description=$_GET["description"];
$company=$_GET["company"];
$supplier=$_GET["supplier"];
$cost=$_GET["cost"];


$sql="INSERT INTO student(name,quantity,category,description,company,supplier,cost) 
VALUES('$name','$quantity','$category','$description','$company','$supplier','$cost')";
$result=mysqli_query($conn,$sql);
if ($result!=NULL) 
{
    echo 'new record created successfully' ;
}
 else 
 {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
 }
 mysqli_close($conn);
?>
