<?php
    $cname = $_POST['cname'];
    $position = $_POST['position'];
    $jobdescription = $_POST['jobdescription'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $conn =new mysqli('localhost','root','','connect');
    if($conn->connect_error){
        die('Connection Failed:' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into jobs(cname,position,jobdescription,skills,CTC)values(?,?,?,?,?)");
        $stmt->bind_param("sssss",$cname,$position,$jobdescription,$skills,$CTC);
        $stmt->execute();
        header("location:index.php");
    }
    $stmt->close();
    $conn->close();
    
?>
?>