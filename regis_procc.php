<?php
 $servername='localhost';
 $username='root';
 $password='';
 $dbname='login_db';
 
 $con=mysqli_connect($servername,$username,$password,$dbname);

  $firstname=$_POST['name'];
  $middname=$_POST['mid'];
  $lastname=$_POST['last'];
  $email=$_POST['email'];
  $mobilno=$_POST['mobile_number'];
  $country=$_POST['country'];
  $cast=$_POST['caste'];
  $qualification=$_POST['graduation'];
  $current=$_POST['qualification'];
  $state=$_POST['state'];
  $schol=$_POST['scheme'];
     

  $sql="INSERT INTO `reg` (`firstname`, `middelname`, `lastname`, `email`, `mobilno`, `country`, `cast`,
   `qualification`, `current`, `state`, `schol`) VALUES ('$firstname', '$middname', ' $lastname', '$email', '$mobilno','$country',
   '$cast','$qualification','$current','$state','$schol')"; 
  $result=mysqli_query($con,$sql);
  if($sql==true)
  {
     
      echo"<script type='text/javascript'>
      alert('REGISTER SUCCESHULLY');
      </script>";
      header("location:home.php");
  }
  else{
      echo"REGISTER Failed";
      header("location:home.php");
  }



?>