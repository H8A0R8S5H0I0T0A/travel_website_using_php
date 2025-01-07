<html>
    <body>
        <?php
           $yourname=$_POST["yourname"];
         
           $password=$_POST["password"];
           
           $email=$_POST["email"];
           $repeatpassword=$_POST['repeatpassword'];

        if($password === $repeatpassword){

  $mysqli = new mysqli("localhost", "root", "root","username", 3302);
  $result = $mysqli->query("insert into contect values('$yourname','$password','$email')");
  
  
  if($result){
    echo "now login ";
    session_start();
    $_SESSION['username']=$yourname;
    $_SESSION['password']=$password;
    $_SESSION['email']=$email;
  
    header("Location: packages.php");
  }
  else{
    echo "data not login";
  }
  }
  else{
    echo "<script type='text/javascript'>alert('password did not match');</script>";
  }




?>
</body>
    </html>