<?php


if(isset($_POST["btnSubmit"]))
{
    $users = simplexml_load_file("student.xml");
    $u = $users->addChild("user");
    $u->addChild("studentId",$_POST["sId"]);
    $u->addChild("studentName",$_POST["sName"]);
    $u->addChild("studentUserName",$_POST["sUn"]);
    $u->addChild("studentPass",$_POST["sPw"]);



    file_put_contents("student.xml",$users->asXML());

}


?>
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
	  
	    <div class="box1">
		     <h2>Sign up</h2>
			 <form name="" method="post" action="#">
			    <div class="inputBox1">
				   <input type="text" name="sId" required="">
				   <label>Student Id</label>
				</div>
				
			    <div class="inputBox1">
				   <input type="text" name="sName" required="">
				   <label>Name</label>
				</div>
				
				<div class="inputBox1">
				   <input type="text" name="sUn" required="">
				   <label>UserName</label>
				</div>
				
				<div class="inputBox1">
				   <input type="password" name="sPw" required="">
				   <label>Password</label>
				</div>
				<input type="submit" name="btnSubmit" value="Submit">
			 </form>
		</div>
	
	           
	  </header>
</body>