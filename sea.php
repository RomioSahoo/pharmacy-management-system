<?php
$servername='localhost';
$username='root';
$password='';
$dbname='project';
 $con= new mysqli('localhost','root','','project');
$search_value=$_POST["name"];
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    echo 'Connection Failed: '.$con->connect_error;
    }else{
        $sql="select * from student where name like '%$search_value%'";
        
        $res=$con->query($sql);

        while($row=$res->fetch_assoc()){

        	echo 'search found'.'<br>';
            echo 'name:  '.$row["name"].'<br>'.'quantity: '.$row["quantity"].'<br>'.'category:  '.$row["category"].'<br>'.'description:  '.$row["description"].'<br>'.'Manufacturing Company:  '.$row["company"].'<br>'.'Supplier:  '.$row["supplier"].'<br>'.'Unit Cost:  '.$row["cost"].'<br>';


            }    


        }
       
?>
