<html>
    <body>
        <?php
           $username=$_POST["username"];
           echo "name";
           $password=$_POST["password"];
           echo "password";
           $email=$_POST["email"];
           echo "email";

$mysqli = new mysqli("localhost", "root", "root","username" 3302);

$result = $mysqli->query("select * from contect where name =$username and $password and $email)");
$initial=0;
        while($row=mysqli_fetch_array($result))
        {
            $initial=$initial+1;

        }
        if($initial === 1){
            echo" logged in" 
        }




    
      ?>
</body>
    </html>