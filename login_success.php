<?php
	if(!isset($_COOKIE['loggedin']))
	{
		header("location:index.php");
	}
?>

<html>
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
  
  <h1>Welcome!</h1>
	<a href="logout.php">Logout</a>
  
</div>

  <div id="footer">
    
  </div>

    
    
   
  </body>
		
</html>