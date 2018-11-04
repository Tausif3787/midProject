<?php?>
<html>

<head>
    <title>SignIn</title>
	<link href='style.css' rel='stylesheet'>
</head>

<body>
      <header> 
	  
	  <div class="row">
		<ul class="main-nav">
		    <li><a href="index.php">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
		</div>
	  
	    <div class="box">
		     <h2>Sign in</h2>
			 <form name="" method="post" action="validation.php">
			    <div class="inputBox">
				   <input type="text" name="uName" required="">
				   <label>UserName</label>
				</div>
				
				<div class="inputBox">
				   <input type="password" name="uPass" required="">
				   <label>Password</label>
				</div>
				<input type="submit" name="btnSubmit" value="Sign in">
			 </form>
		</div>
	
	           
	  </header>
</body>