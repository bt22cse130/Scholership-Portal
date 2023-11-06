<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login process</title>
    <style>
 .button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
  
}
.button1:hover {
  background-color: #4CAF50;
  color: white;
}
.button4{
  background-color: orange; 
  color: rgb(3, 18, 72);
  border: 2px solid rgb(14, 12, 12);
  
}
.button4:hover {
  background-color:blueviolet;
  color:whitesmoke;
}
h1{
    text-align: center;
    color:red;
}
</style>
</head>
<body>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname='login_db';

$con=mysqli_connect($servername,$username,$password,$dbname);


    $user_unsafe=$_REQUEST['username'];
    $pass_unsafe=$_REQUEST['password'];

    $user=mysqli_real_escape_string($con,$user_unsafe);
    $pass=mysqli_real_escape_string($con,$pass_unsafe);

    $query=mysqli_query($con,"SELECT username,password FROM login_db.login WHERE login.username='$user' AND login.password= '$pass'")or die(mysqli_error($con));
    
    $counter=mysqli_num_rows($query);
   
    if($counter == 0)
    {
        echo "<h1>Username  Or Password Are Incorrect !!!</h1>";echo"<br>";
        echo"<div style='float:right'><button  class='button button1' onclick= location.href='login.php'>login</button></div>";
        echo"<div style='float:left'><button class='button button4' onclick= location.href='signup.php'>Go to sign-up</button></div>";
    }
    else{
     
    $row=mysqli_fetch_assoc($query);
    $name=$row['username'];
    $id=$row['password'];
        session_start();
        $_SESSION["id"] = $id;
        $_SESSION["username"] =$name;   
        
        header("location:home.php");
    }
   
?>
</body>
</html>