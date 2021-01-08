<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="test1";

//create connection
$conn =new mysqli($servername,$username,$pass,$dbname);
//check connection
if($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);

}
if(isset($_POST['submit'])){
    $NAME=$_POST['fullname'];
    $EMAIL=$_POST['email'];
    $PHONENO=$_POST['phno'];
    $PASSWORD=$_POST['password'];
    $ADDRESS=$_POST['address'];
    $CITY=$_POST['city'];
    
    
    
    $sql="INSERT INTO test1  VALUES('$NAME','$EMAIL',$PHONENO,'$PASSWORD','$ADDRESS','$CITY')";
  $emailquery="select * from  test1 where  email='$EMAIL'";
  $query=mysqli_query($conn,$emailquery);
  $emailcount=mysqli_num_rows($query);
    if($conn->query($sql)==TRUE){
        if($emailcount>0){
           echo "invalid credintals"; 
        }
        echo "New record successfully";
    
    }
    else{
        echo "Error:".$sql ."<br>" .$conn->error;
    }
}
