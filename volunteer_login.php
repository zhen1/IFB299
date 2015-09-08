<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Migrant Signup</title>
        <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

<div id="main">
  <div id="banner">

  </div>
  <div id="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
      <li><a href="suppliers.php">Suppliers</a></li>
      <li><a href="members.php">Members</a></li>
    </ul>
  </div>

    <form action="login.php" method="POST">
		<p>Username:</p><input type="text" name="user" />
		<p>Password:</p><input type="password" name="pass" />
		<br />
		<input type="submit" value="Login" />
	</form>

	<form action="volunteer_signup.php">
		<input type="submit" value="Signup">
	</form>
</div>

    
    
    
    
    
  </body>
</html>
