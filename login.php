<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  .container{
    font-size:20px;
  text-align:center;
  background-image:url("https://th.bing.com/th/id/OIP.6PHOIrRF5kLnqCWXjCH08gHaEo?w=306&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7");
  background-repeat: no-repeat;
    background-size: cover; 
    padding: auto;
  min-height:50vh;
}
  
  .login{
    text-align:center;
   
    align-items:center;
 
    
  }
body {font-family: Arial, Helvetica, sans-serif;
}
    
form {border: 3px solid #f1f1f1;}
h1{
  text-shadow: 0px 1px 1px  white;
    font-weight: 600;
    text-align:center;
}
h1 span{
    color: #ffa500;
 }
input[type=text], input[type=password],input[type=email] {
  width: 30%;
  padding: 10px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 8px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  text-align:center;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 15px;
  background-color: #f44336;
}

span.psw {
  float: center;
  padding-top: 10px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 100px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 150%;
  }
}
.h{
   align-items:center;
   justify-content:center;
}
</style>
</head>
<body>
<div class="login">
  <div class="h">
<h1><span>L</span>ogin</h1>
</div>

<form  method="post" action="new.php">
  
  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br><br>
    <label for="password"><b>Email</b></label>
    <input type="email" placeholder="Enter email" name="email" required><br><br>
    
        
    <button  type="submit">Login</button><br><br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>

  <div class="container" style="background-color: #f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button><br>
    <span class="psw">Forgot <a href="reset.php">password?</a></span>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

















