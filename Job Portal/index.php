<?php include 'header.php'?> 
<br>
<br>
<br>

<div class="sidebar" style="width: 20%;margin-top: 2px;z-index: auto">
  <a class="active" href="index.php">Jobs</a>
  <a href="jobs.php">Candidates Applied</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
</div>

<!-- Page content -->

<div class="content" style="margin-left: 23%;">
  <p>

  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
     Post a Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <form action="hh.php" method="POST">
  <div class="mb-3">
    <label for="Name of The Comapany" class="form-label">Comapany Name</label>
    <input type="text" class="form-control" id="Name of The Comapany" name="cname">
  </div>
  <div class="mb-3">
    <label for="Position" class="form-label"> Position</label>
    <input type="text" class="form-control" id="Position" name="position">
  </div>
  <div class="mb-3">
    <label for="Description" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="Description" name="jobdescription">
  </div>
  <div class="mb-3">
    <label for="Skills" class="form-label">Skills Requireed</label>
    <input type="text" class="form-control" id="Skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>

    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="heu">Upload</button>
</form>
</div>
</div>
<h1 style="text-align: center; margin-left: 12px; color: purple;">Recruitments</h1>
<table class="table  table-success table-striped">
  <thead>
    <tr>
       <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
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

      $sql="SELECT cname,position,CTC from jobs";
      $result=mysqli_query($conn,$sql);
      $i=0;
      if ($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
          echo"
            <tbody>
              <tr>
                  <td>".++$i."</td>
                  <td>".$row['cname']."</td>
                  <td>".$row['position']."</td>
                  <td>".$row['CTC']."</td>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>