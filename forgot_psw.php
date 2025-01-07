<html>
    <body>
        <?php
       
           $password=$_POST['password'];
           echo "password";
           $email=$_POST['email'];
           echo "email";
           $newpassword=$_POST['newpassword'];

           $atcheck=0;
           $dotcheck=0;
        for( $i=0;$i<strlen($email);$i++){
            if($email[$i]=="@")
            $atcheck=1;
            if($email[$i]=="."){
                $dotcheck=1;
            }
            
        }
            if($atcheck and $dotcheck){
            
                $mysqli = new mysqli("localhost", "root", "root","username" ,3302);

                    
           $result = $mysqli->query("select * from contect where email='$email' and password='$password'");
           $check=0;
           while($row = mysqli_fetch_array($result)){

            if($row['email'])
                $check=1;

        }   

        if($check)
        {
            
            $result = $mysqli->query("update contect set password='$newpassword' where email='$email'");
            if($result)
             echo "password updated";
        }
             
          else{
              echo "<script type='text/javascript'>alert('password not updates');</script>";
            }
             
     }
     echo "$result";
     ?>
</body>
    </html>