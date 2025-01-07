<html>
    <body>
        <?php
           $username=$_POST["username"];
         
           $password=$_POST["password"];
           
           $email=$_POST["email"];
           
           

$mysqli = new mysqli("localhost", "root", "root","username", 3302);


$result = $mysqli->query("select * from contect where email='$email' and password='$password'");

         

$check=0;

while($row = mysqli_fetch_array($result)) {


   echo $row['email'];    

   $check=1;
    
}


if($check){

echo "logged in";
session_start();
$_SESSION['email']=$email;
$_SESSION['logincheck']=1;

$_SESSION['username']=$username;
$_SESSION['password']=$password;

header("Location: home.php");
}

else{
   echo "<script type='text/javascript'>alert('password not updates');</script>";
}

echo $result;
 

      ?>
</body>
    </html>