<?php
    $Name=$_POST['Name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];


    $conn =new mysqli('localhost','root','','connect');
    if($conn->connect_error){
    	die('Connection Failed:' .$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into registration(Name,email,number,password)values(?,?,?,?)");
    	$stmt->bind_param("ssis",$Name,$email,$number,$password);
    	$stmt->execute();
    	header("location:login.php");

    }
    $stmt->close();
    $conn->close();
    
?>

