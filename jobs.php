 <?php include 'header.php'?>

<div class="w3-sidebar w3-bar-block w3-white sidebar" style="width:20%; margin-top:0; z-index:auto;">
        <a href="index.php" class="w3-bar-item w3-button">Home</a>
        <a href="jobs.php" class="w3-bar-item w3-button active">Candidates Applied</a>
        <a href="contact.php" class="w3-bar-item w3-button ">Contact</a>
        <a href="about.php" class="w3-bar-item w3-button">About</a>
    </div>

<div class="content" style="margin-left: 20%; margin-top: 75px;">
  <h1 style="text-align: center;">Applications</h1>
	<table class="table  table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Canditate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Resume</th>
      <th scope="col">Contact No</th>
    </tr>
  </thead>
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

      $sql="SELECT name,apply,qualification,year from register";
      $result=mysqli_query($conn,$sql);
      $i=0;
      if ($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
          echo"
            <tbody>
              <tr>
                  <td>".++$i."</td>
                  <td>".$row['name']."</td>
                  <td>".$row['apply']."</td>
                  <td>".$row['qualification']."</td>
                  <td>".$row['year']."</td>
              </tr>
            </tbody>";
        }
      }
      else{
        echo"";
      }
  ?>
</table>
</div>
</div>
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
    <a href="tel: +919912120506"><i class="fa-brands fa-whatsapp"></i></a>|
    <a href="mailto: gamarnath_ece190470@mgit.ac.in"><i class='fa-solid fa-envelope'></i></a>
  </div>
  <hr>
  <p>Copyright &copy;2022 We the Recruiters. All rights reserved</p>
</footer>
</body>
</html>