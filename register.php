<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   .container{
    font-size:20px;
  text-align:center;
  
 
}
body{
  background-image:url("http://ts1.mm.bing.net/th?id=OIP.APFRfbS9RcYc12sR9BWxCAHaE5&pid=15.1");
  background-repeat: no-repeat;
    background-size: cover; 
    padding: auto;
  min-height:50vh;
}
  
  .login{
    
  }
body {font-family: Arial, Helvetica, sans-serif;
}
    
form {border: 3px solid #f1f1f1;}
h1{
    text-align: center;
    text-shadow: 0px 1px 1px  white;
    font-weight: 600;
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
  </style>
  </head>
<body>


<h1><span>R</span>egistration From</h1>

<div class="register">
<form  method="post" action="cregister.php">
  
  <div class="container">
    <label for="yourname"><b>your name</b></label>
    <input type="text" placeholder="Enter yourname" name="yourname" required><br><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br><br>
    <label for="password"><b>Email</b></label>
    <input type="email" placeholder="Enter email" name="email" required><br><br>
        <b>repeat password</b>
        <input type="password" placeholder="Enter your repeat password" name="repeatpassword" required><br><br>
    <button  type="submit">register</button>

      
</div>
</form>
</body>
</html>