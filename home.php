<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trevel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <linl href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php" id="logo"><span>T</span>revel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span><i class="fa-solid fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">

        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>

        
        
        <li class="nav-item">
          <a class="nav-link" href="packages.php">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallary">Gallary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href=" profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="uploadimage.php">upload images</a>
        </li>
        <a href="logout.php"><button class="btn btn-primary" type="button">Log Out</button></a>
      
      </ul>
    
      <form class="d-flex">
      
        <input id="inputsearch"class="form-control me-2" type="text" placeholder="Search" onkeyup="create()">
        <button class="btn btn-primary" type="button">Search</button><br><br>
        
      
        <a href="https://www.bing.com/ck/a?!&&p=ae94e2fae1a4a6ea85aa4257e3331939a488f87b28e5022d853d3ed7f1750a55JmltdHM9MTczNjIwODAwMA&ptn=3&ver=2&hsh=4&fclid=2d95f432-18fd-64e7-38a3-e1511966654f&psq=india+visit+link&u=a1aHR0cHM6Ly93d3cuaW5kaWFoaWdobGlnaHQuY29tLw&ntb=1" style= "position:absolute; z-index:100; margin-top:50px;" 3.id="labelsearch"></a>
      </form>
    </div>
  </div>
</nav>
    <div class="home">
      <div class="content">
        <h5>Welcome To World</h5>
        <h1>Visit <span class="changecontent"></span></h1>
        <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ques, nisi.</p>
        <a href="#book">Book place</a>  
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    function create () {
      var a= document.getElementById("inputsearch").value;
        $.ajax({
            url:"test.php",    //the page containing php script
            type: "post",    //request type,
            dataType: 'json',
            data: {registration: a, name: "xyz", email: "abc@gmail.com"},
            success:function(data){
                console.log(data);
             
                $("#labelsearch").html(data);

            }
        });
    }
</script>

  


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </script>

</body>
  </html>