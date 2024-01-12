<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Faculty</title>
  <link rel="stylesheet" href="faculty.css" />
</head>

<body>
  <nav>
    <img src="logot.png" alt="" class="logo" />

    <ul>
      <li><a href="journal.html">Journal Publication</a></li>
      <li><a href="book.html">Book Publication</a></li>
      <li><a href="patent.html">Patents</a></li>
      <li><a href="fdp.html">FDP</a></li>
      <li><a href="report.html">Reports</a></li>

      <li><a href="faculty.html">Add Faculty</a></li>
      <li><a href="register.html">Registered Faculty</a></li>
      <li><a href="index.html">Home</a></li>
    </ul>
  </nav>

  <div class="container">


    <div class="form1">
      <!--<form action="connect.php" method="get">
          <form onsubmit="myfunction()">-->
      <form action="faculty.php" method="post">
        <label for="id"> <b>Faculty Id :</b></label> &emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="text" required class="id" id="facultyid" name="facultyid" /> <br /><br />

        <label for="create-password"> <b>Create Password :</b></label> &emsp;&emsp;
        <input type="password" required class="password" id="create Password" name="password" /> <br><br>

        <!-- <label for="confirm-password"> <b>Confirm Password :</b></label>   &emsp;
          <input type="password" required class="name2" id="confirm password" /> <br /><br />-->

        <label for="name"> <b>Name :</b></label> &emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="text" required class="name" id="facultyname" name="facultyname" /><br /><br />

        <label for="designation"> <b>Designation :</b></label> &emsp;&emsp;&emsp;&emsp;
        <select id="designation" class="designation" name="designation">
          <option value="NA">Select your designation</option>
          <option value="asst.professor">Assistant Professor</option>
          <option value="asso.professor">Associate Professor</option>
          <option value="professor">Professor</option>
          <option value="hod">Head Of Department</option>
        </select><br /><br />
        <!--<input type="text" required class="name4"> <br><br>-->

        <label for="DOJ"> <b>Date Of Joining:</b></label> &emsp; &emsp;
        <input type="date" required class="doj" id="doj" name="doj" /> <br /><br />

        <label for="department"><b>Department :</b></label>&emsp;&emsp;&emsp;&emsp;
        <select id="department" class="department" name="department">
          <option value="department">Select your department</option>
          <option value="mca">MCA</option>
          <option value="mba">MBA</option>
          <option value="cse">CSE</option>
          <option value="it">IT</option>
          <option value="ml">ML</option>
          <option value="cs">CS</option>
          <option value="csit">CSIT</option>
          <option value="me">ME</option>
          <option value="aiml">AI-ML</option>
          <option value="bpharma">B-PHARMA</option>
          <option value="mpharma">M-PHARMA</option>
        </select><br /><br />
        <!--<input type="text" required class="name6"> <br><br>-->

        <label for="email"> <b>Email Id :</b></label>&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="email" required class="email" id="email" name="email" /><br /><br />

        <label for="phone"> <b>Phone :</b></label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="number" required class="phone" id="phoneno" name="mobile" />
        <br /><br />
        &emsp;
        <input type="submit" value="Submit" class="btn" name="submit" /> &emsp;
        <a href="data.php">
        <input type="button" value="View" class="btn" name="view"/></a>
      </form>
    </div>
  </div>
  



  <!-- <script>
    
    function myfunction() {
      var facultyid = document.getElementById("facultyid");
      var Password = document.getElementById("create Password");
      var facultyname = document.getElementById("facultyname").value;
      var designation = document.getElementById("designation").value;
      var doj = document.getElementById("doj").value;
      var department = document.getElementById("department").value;
      var emailid = document.getElementById("email").value;
      var phoneno = document.getElementById("phoneno").value;
      document.write("Faculty id = " + facultyid.value + "<br>");
      document.write("Password = " + Password.value + "<br>");
      document.write("Faculty name = " + facultyname + "<br>");
      document.write("Designation = " + designation + "<br>");
      document.write("Date Of Joining = " + doj + "<br>");
      document.write("Department = " + department + "<br>");
      document.write("Email id = " + emailid + "<br>");
      document.write("Phone no = " + phoneno + "<br>");

    }

  </script> -->

</body>

</html>
<?php
$con = mysqli_connect('localhost', 'root', '', 'facultydb');
//echo'Connected successfuly';
if (isset($_POST["submit"])) {
  $facultyid = $_POST["facultyid"];
  $password = $_POST["password"];
  $facultyname = $_POST["facultyname"];
  $designation = $_POST["designation"];
  $doj = $_POST["doj"];
  $department = $_POST["department"];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];

  $sql = "insert into facultytbl values('$facultyid','$password','$facultyname','$designation','$doj','$department','$email','$mobile')";
  mysqli_query($con, $sql);
  echo "<script> alert('saved successfully')</script>";
}

if (isset($_POST["view"])) {
  $sql="select * from facultytbl";
  $data=mysqli_query($con,$sql);
  while($rows=mysqli_fetch_assoc($data))
  {
    echo $rows["id"];
    echo $rows["password"];
    echo $rows["name"];
    
  }
  }
?>