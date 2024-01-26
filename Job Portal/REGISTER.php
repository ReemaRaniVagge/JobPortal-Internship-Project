<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
      body{
        background-image: url('y.jpg');
        background-size: cover;
      }
      form{
        margin-top: 6em;
        margin-left: 20em;
        margin-right: 20em;
        padding: 30px;
        background-color: white;
        background:rgba(255,255,255,0.8);
        opacity: 0.75;
        box-shadow: 10px 10px 8px 10px #888888;
      }
      form h2{
        text-align: center;
      }
    </style>

    <title>Register</title>
</head>
<body>
  <nav>
    <div>
            <a href="#" style="text-decoration: none;">
                <h1 style="padding-top: 10px; 
                padding-left: 10px;
                color: yellow;">We the Recruiters</h1>
            </a>
        </div>
  </nav>
   <form onsubmit="return validation()" name="submit-to-google-sheet"  action="connect.php "method="POST">
    <h2>Create My Account</h2>
    <div class="mb-3 row">
      <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
      <input type="Name" class="form-control" id="inputName" name="Name" placeholder="Enter your Full Name"/>
      <span id="errorname" style="color:red;"></span>
    </div>
    <div class="mb-3 row">
      <label for="InputEmail" class="col-sm-2 col-form-label">Email</label>
      <input type="email" class="form-control" id="InputEmail" placeholder="email@example.com" name="email">
      <span id="erroremail" style="color:red;"></span>
      <div id="email" class="form-text">We'll not share your email with anyone else.</div>
    </div>
    <div class="mb-3 row">
        <label for="inputNumber" class="col-sm-2 col-form-label">Phone Number</label>
        <input type="number" class="form-control" id="inNumber" name="number"/>
        <span id="errornumber" style="color:red;"></span>
    </div>
    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword" name="password" required/>
    </div>
    <div class="mb-3 row">
      <label for="inputPassword2" class="col-form-label">Confirm Password</label>
      <input type="password" class="form-control" id="inputPassword2" required>
      <span id="error" style="color:red;"></span>
    </div>
    <button type="reset" class="btn btn-primary">Refresh</button>
    <button type="submit" class="btn btn-primary">Submit</button>
    <br>
    <br>
    Already Registered? <a href="login.php">Login</a>
  </form>
  <script>
        function validation(){
            var inputName =document.getElementById('inputName').value;
            var InputEmail= document.getElementById('InputEmail').value;
            var inNumber = document.getElementById('inNumber').value;

            var usercheck = /^[A-Za-z\s]{3,30}$/;
            var emailcheck = /^[a-z_0-9.]{3,}@[a-z]{3,}[.]{1}[a-z.]{2,9}$/;
            var checknumber = /^[9876][0-9]{9}$/;
            

            if(usercheck.test(inputName)){
                document.getElementById('errorname').innerHTML  = " ";
            }
            else{
                document.getElementById('errorname').innerHTML  = "** Invalid Name **";
                return false;
            }
            if(emailcheck.test(InputEmail)){
                document.getElementById('erroremail').innerHTML  = " ";
            }
            else{
                document.getElementById('erroremail').innerHTML  = "** Invalid Email **";
                return false;
            }
            if(checknumber.test(inNumber)){
                document.getElementById('errornumber').innerHTML  = " ";
            }
            else{
                document.getElementById('errornumber').innerHTML  = "** Invalid Number **";
                return false;
            }

            var inputPassword = document.getElementById("inputPassword").value;
            var inputPassword2 = document.getElementById("inputPassword2").value;
            var error = document.getElementById("error");
            if(inputPassword == inputPassword2){
              document.getElementById('error').innerHTML = " ";
            }
            else{
              document.getElementById('error').innerHTML = "** Oh! Password is not matched **";
              return false;
            }
        }
    </script>
    <footer style="color: white;">
      <hr>
      <p>Copyright &copy;2022 We the Recruiters. All rights reserved</p>
    </footer>
</body>
</html>