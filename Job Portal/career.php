<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        .hyy{
            background-image: url('img1.jpg');
            background-size: cover;
            padding: 150px;
            font-size: 35px;
            font-weight: bolder bold;
            color: purple;
            text-shadow: 1px 1px red;
        }
        .hyy .hey h1{
            font-size: 55px;
            font-weight: bolder;
            color: red;
            text-shadow: 1px 1px grey;
        }
  .row .jobs{
    border: 1px dotted red;
    padding: 15px;
    margin: 15px;
    box-shadow: 10px 10px 6px 5px grey;
  }

      footer{
            position:sticky;
            text-align: center;
            background-color: #99A3A4;
            padding: 50px;
        }
        footer .logo{
            text-align: left;
            padding-right: 100%;
        }
        footer .contact{
            text-align:center ;
        }
        footer .contact h3{
            color: black;
            font-size: 20px;
            font-family: cosmic,sans-serif;
            padding: 5px;
        }
        footer p{
            text-align: left;
        }
        footer .social{
            text-align: center;
        }
        footer .social h3{
            color: black;
            font-size: 20px;
            font-family: cosmic,sans-serif;
            padding: 5px;
        }
        footer .social a{
            text-decoration: none;
            font-size: 30px;
            color: skyblue;
            margin: 10px;
        }
        footer .social a:hover{
            color: purple;
        }
        footer .contact{
            text-align: center;
        }
        footer .contact h3{
            color: black;
            font-size: 20px;
            font-family: cosmic,sans-serif;
            padding: 5px;
        }
        footer .contact a{
            text-decoration: none;
            font-size: 30px;
            color: orange;
            margin: 10px;
        }
        footer .contact a:hover{
            color: purple;
        }

    </style>
    <title>Career</title>
</head>
<body>
          <div class="hyy">
            <h1 class="hey">Job Portal</h1>
            <p class="lead">Best Jobs available matching your skills</p>
          </div>
    <div class="row">
        <?php
            $server='localhost';
            $username='root';
            $paswd='';
            $database='connect';
        
            $conn= mysqli_connect($server,$username,$paswd,$database);
        
            if($conn->connect_error){
                die("Connection failed:".$conn->connect_error);
            }
            echo"";
            $sql = "Select cname, position, jobdescription, skills, CTC from jobs";
            $result=mysqli_query($conn,$sql);
            if($result->num_rows > 0){
                    while($row =$result->fetch_assoc()){
                        echo'
                            <div class="col-md-4">
                                <div class="jobs">
                                    <h3 style="text-align: center;">'.$row['cname'].'</h3>
                                    <h4 style="text-align: center;">'.$row['position'].'</h4>
                                    <p style="color: black; text-align: justify;">'.$row['jobdescription'].'</p>
                                    <p style="color: black; text-align: justify;"><b>Skills Required:</b>'.$row['skills'].'</p>
                                    <p style="color: black; text-align: justify;"><b>CTC:</b>'.$row['CTC'].'</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="text-align: center;">
                                        Apply Now
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Here you are</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="ho.php" method="POST">
                                                        <div class="mb-3">
                                                            <label for="Name" class="form-label">Full Name</label>
                                                            <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="Applying_for" class="form-label">Applying for</label>
                                                            <input type="text" class="form-control" id="exampleInputPosition" name="apply">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="Qualification" class="form-label">Qualification</label>
                                                            <input type="text" class="form-control" id="JobDesc" name="qualification">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="Year_Passout" class="form-label">Year Passout</label>
                                                            <input type="text" class="form-control" id="CTC" name="year">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary" name="applyi">Apply</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                }
        ?>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <footer>
        <div>
            <a href="index.php" style="text-decoration: none;">
                <h1 style="color: yellow; text-align:left;">We the Recruiters</h1>
            </a>
        </div>
        <div class="social">
            <h3>Follow us</h3>
            <a href="https://www.facebook.com"  target="_blank"><i class="fa-brands fa-facebook"></i></a>|
            <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>|
            <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>|
            <a href="https://twitter.com"  target="_blank"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="contact">
            <h3>Contact Us</h3>
            <a href="tel: +919010712772"><i class="fa-brands fa-whatsapp"></i></a>|
            <a href="mailto: vreemarani_ece1904b9@mgit.ac.in"><i class='fa-solid fa-envelope'></i></a>
        </div>
        <hr>
        <p>Copyright &copy;2022 We the Recruiters. All rights reserved</p>
    </footer>
</body>
</html>