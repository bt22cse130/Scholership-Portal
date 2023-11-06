<?php
 $servername='localhost';
 $username='root';
 $password='';
 $dbname='login_db';
 
 $con=mysqli_connect($servername,$username,$password,$dbname);

 $query=mysqli_query($con,"SELECT * FROM login_db.login ")or die(mysqli_error($con));
    
 $counter=mysqli_num_rows($query);

 $row=mysqli_fetch_assoc($query);

echo $row['name'];
echo"<br>";
echo"<br>";
echo $row['mid'];
echo"<br>";
echo"<br>";
echo $row['last'];
echo"<br>";
echo"<br>";
echo $row['email'];
echo"<br>";
echo"<br>";
echo $row['mobile_number'];
echo"<br>";
echo"<br>";
echo $row['country'];
echo"<br>";
echo"<br>";
echo $row['caste'];
echo"<br>";
echo"<br>";
echo $row['graduation'];
echo"<br>";
echo"<br>";
echo $row['qualification'];
echo"<br>";
echo"<br>";
echo $row['state'];
echo"<br>";
echo"<br>";
echo $row['scheme'];
echo"<br>";
echo"<br>";








?>



