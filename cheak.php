<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking scholership</title>
    <style>
      .cast{
        text-align: center;
        box-sizing: 400px;
      } 
      .cv{
        color:blue ;
      } 
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
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
.k{
    color:red;
}

        </style>
</head>
<body>
    <form action=" " method="post">
 
  <br>
  <br>
  <div class="cast">
  <input type="text" name="cast" required placeholder="Your Cast "><div class="cv">*Enter Your Cast</div>
  <br>
  <br>
  <button  class="button button2"  type="submit" name="check">Check</button>
  <button  class="button button2" onclick="location.href='home.php'">Home</button>
<form>
</body>
</html>
<?php
if(isset($_POST['check'])){
    $servername='localhost';
    $username='root';
    $password='';
    $dbname='login_db';
    
    $con=mysqli_connect($servername,$username,$password,$dbname);
    
    $sal=$_POST['cast'];
      
     $query=mysqli_query($con,"SELECT schol ,money,cast FROM login_db.chek where chek.cast = '$sal' ")or die(mysqli_error($con));
    
    $counter=mysqli_num_rows($query);
    

    if($counter > 0)
    {  echo"<h1>Your Able To Take Following Scholerships : </h1> ";
        while($row = $query->fetch_assoc())
        {   echo"<br>";
            echo"<br>";
            echo"<br>";
            echo $row['schol'];
            echo"        ";
            echo "<div class='k'>BUT Your Parents Annual Income Should Be Less Than </div>";
            echo $row['money']; 
                 
        }
    }
    else{
        echo"no";
    }
}


?>