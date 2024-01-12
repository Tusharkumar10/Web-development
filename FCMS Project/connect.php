<?php
$facultyid=$_POST['id'];
$password=$_POST['password'];
$name=$_POST['name'];
$designation=$_POST['designation'];
$dateofjoining=$_POST['doj'];
$department=$_POST['department'];
$emailid=$_POST['email'];
$phone=$_POST['phone'];

//database connection
$conn = new mysqli('localhost','root','','facultydb');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into facultytbl(id,password,name,designation,dateofjoining,department,emailid,phone)values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$id,$password,$name,$designation,$dateofjoining,$department,$emailid,$phone);
    $stmt->execute();
    echo"registration successfully...";
    $stmt->close();
    $conn->close();
}
?>


 