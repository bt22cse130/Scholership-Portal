<?php session_start();
if(empty($_SESSION['id'])):
      header('Location:login.php');  

endif;  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
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

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
.button3 {
  background-color:yellow; 
  color:rgb(3, 18, 72); 
  border: 2px solid rgb(14, 12, 12);
}

.button3:hover {
  background-color:blue;
  color:white ;
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
.button5{
  background-color: yellowgreen; 
  color: rgb(3, 18, 72);
  border: 2px solid rgb(14, 12, 12);
  
}
.button5:hover {
  background-color:blueviolet;
  color:whitesmoke;
}
 .w{
  text-align: center;
 }
</style>
<body>
<script type="text/javascript">
  alert("SUCCESFULLY LOG-IN");
</script>
  <div style="float:right"><button class="button button1" onclick="location.href='logout_process.php'">Logout</button> </div>  
  <div style="float:left"><button class="button button2"onclick="location.href='signup.php'">sign-up</button></div>
 <div class="w"> <h1>Welcome To Homepage....!</h1> </div> 
 <br>
 <button  class="button button3" onclick="location.href='cheak.php'">Cheack Getting Schemes</button>
 <span align="center"><button  class="button button4" onclick="location.href='regis.php'">APPLY FOR SCHOLERSHIP</button></span>
 <div style="float:right"><button  class="button button5" onclick="location.href='apply.php'">Applied Scheme</button></div>
 
</body>
</html>