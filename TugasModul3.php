<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="Style.css" type="text/css">
</head>
<body>
<h2>Login Form </h2>

<form action = "Terusan.php" method="post"> 
  <div class="imgcontainer">
    <img src="man-159847_960_720.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <button type="submit">Masuk</button>
    </form> 
    <a href="SignUp.php"><button type="button" class="cancelbtn">Sign Up</button></a>
    <span class="psw"><a href="#">Lupa Password?</a></span>
  </div>
    
  </div>
</body>
</html>