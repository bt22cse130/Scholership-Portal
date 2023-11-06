<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
   body{
         
         background-image: url("bgimg.jpg");
         background-repeat: repeat;
         
     }
     .box
     {   display :flex;
         justify-content:center;
         left:200px;
         top:10px;
         padding-top: 200px;
         margin=0 ;
        padding=0 ;
        box-sizing:border-box;
        font-family:'Poppins',sans-serif;
       position:relative;
       width:380px;
       height : 420px;
       background:blue;
       border-radius:8px;
     }
     .box form
     {
         position:absolute;
         inset:4px;
         background:blanchedalmond;
         padding:20px 40px;
         border-radius:8px ;
         z-index:2;
         display:flex;
         flex-direction:column ;
     }
     .box form h1{
         color:black;
         font-weight: 500;
         text-align:center;
         letter-spacing:0.1em;
     }
     .box form.inputbox{
         position:relative;
         width:300px;
         margin-top:35px;
     }
     .box form.inputbox input{
         position :relative;
         width:100%;
         padding :20px 10px 10px;
         background:transparent;
         outline:none;
         border:none;
         box-shadow:none;
         color: #23242a;
         font-size:1em;
         letter-spacing:0.05em;
         transition:0.5 ;
         z-index:10;
     }
     input{
         height:60px ;
         text-align: center;
         font-size:1.5em;
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
   </style>
</head>
<body>
<br>
<div class="box"> 
<form action="login_process.php" method="POST">
<h1>Login</h1>
<div class="inputbox">
<input type="text"  name="username" placeholder="User-Name"/><br>
<br>
<input type="text" name="password" placeholder="Password"/><br>
<br>

<br>
<button  class="button button4"  type="submit" name="login" default>login</button>

</form>
<button class="button button5" onclick="location.href='signup.php'">Sign-up</button>
</div>

</div>

</body>
</html>