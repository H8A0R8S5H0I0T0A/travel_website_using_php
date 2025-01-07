<html>
<body>
    <head>
        <style>
.container{
    font-size:20px;
    text-align:center;
    }
body{
    background-image:url("https://th.bing.com/th/id/OIP.5ogUC7MnhVtgWkHW0D9JtQHaEo?w=284&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7");
  background-repeat: no-repeat;
    background-size: cover; 
    padding: auto;
  min-height:50vh;
}
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



 </style>
</head>
<body>
<h1><span>R</span>ESET PASSWORD</h1>
<div class="reset">

<form method="POSt"action="forgot_psw.php">
<div class="container">
<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter your email" name="email" required><br><br>
    

<label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br><br>
    <label for="new paasword"><b>New password</b></label>
    <input type="password" placeholder="new password" name="newpassword" required> <br><br>

    <button type="submit">Reset password</button>
</div>
</form>
</div>
</body>
    </html>