<?php
    $server='localhost';
          $username='root';
          $password='';
          $database='connect';     
          $conn=mysqli_connect($server,$username,$password,$database);

          if($conn->connect_error){
            die("Connection failed:".$conn->connect_error);
          }
      echo "";
    if(isset($_POST['applyi'])){
        $name=$_POST['name'];
        $apply=$_POST['apply'];
        $qualification=$_POST['qualification'];
        $year=$_POST['year'];

        $sql="INSERT INTO `register`( `name`, `apply`, `qualification`, `year`) VALUES ('$name','$apply','$qualification','$year')";
        if(mysqli_query($conn,$sql)){
            header("location:career.php");
        }
        else{
            echo "ERROR:Failed to post the Job $sql.".mysqli_error($conn);
        }
    }
    
?>

