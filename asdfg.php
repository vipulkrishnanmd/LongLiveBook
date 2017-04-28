<?php

$con=mysqli_connect("localhost","longlive_user","Dreams0nfire0","longlive_data");


if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
  
session_start();
  
?>

<?php

session_start();
?>




<?php
echo '<link rel="stylesheet" type="text/css" href="css_ip/normalize.css" />';
	echo	'<link rel="stylesheet" type="text/css" href="css_ip/demo.css" />';
	echo '<link rel="stylesheet" type="text/css" href="css_ip/component.css" />';



	if(isset($_SESSION['username']))
			
	{	

		$t1=$_SESSION['username'];	
		$t2=$_SESSION['password'];
		
		

	
		if(($t1=="admin123") && ($t2="admin456"))
		{
		
		
			
			echo '<html>
			<link href="template.css" rel="stylesheet">
			<body>
			<div id="header" align="right">
			
				<div style="background-color: #6D7B8D; font-size:20px">
					<font color="white" >
					<a href="index.php" style="color:white; text-decoration:none;">
					<div id="menu">
					
					&nbsp &nbsp Home &nbsp </a></div>|<div id="menu"><a href="sell.php" style="color:white; text-decoration:none;">
					
					
					&nbsp &nbspSell My Book &nbsp</a></div>|<a href="login.php" style="color:white; text-decoration:none;"><div id="menu">					
					&nbsp &nbsp Log in &nbsp </a></div>|<div id="menu"><a href="signup.php" style="color:white; text-decoration:none;">
					
					
					&nbsp &nbspSign Up &nbsp</a>
					</div>|<div id="menu"><a href="proceed.php" style="color:white; text-decoration:none;"></a>
					</div>
					</div>
				
				<center>

				<font color="white" size=5>
				<h2>LongLiveBook.com</h2>
				<br>

				</font>
				</center>


			</div>
			
		<div id="data" align="center">
			<br>
			
			
			<div style="background:#0099FF; width:80%">
			<br><br>
			<b>
			<font size="4" color="red">
			
			
			<li><a href="order_asdfg.php">Order Details</a><br><br></li>
			<li><a href="">Order Details</a><br><br></li>
			<li><a href="">Order Details</a><br><br></li>
			</font></b>
			<br><br></div>
			
		</div>';
			
		}
	
		else
		{
							
			
				
			session_unset();
			session_destroy();
			
			
			echo '<SCRIPT>
			window.alert("Invalid Log in")
			window.location.href="index.php";
			</SCRIPT>';
		}


			
	}
				
	else
	{				
		$_SESSION['username']=$_POST['username'];	
		$_SESSION['password']=$_POST['password'];
		$t1=$_SESSION['username'];	
		$t2=$_SESSION['password'];
		

	
		if(($t1=="admin123") && ($t2="admin456"))
		{
				
			
			echo '<html>
			<link href="template.css" rel="stylesheet">
			<body>
			<div id="header" align="right">
			
				<div style="background-color: #6D7B8D; font-size:20px">
					<font color="white" >
					<a href="index.php" style="color:white; text-decoration:none;">
					<div id="menu">
					
					&nbsp &nbsp Home &nbsp </a></div>|<div id="menu"><a href="sell.php" style="color:white; text-decoration:none;">
					
					
					&nbsp &nbspSell My Book &nbsp</a></div>|<a href="login.php" style="color:white; text-decoration:none;"><div id="menu">					
					&nbsp &nbsp Log in &nbsp </a></div>|<div id="menu"><a href="signup.php" style="color:white; text-decoration:none;">
					
					
					&nbsp &nbspSign Up &nbsp</a>
					</div>|<div id="menu"><a href="proceed.php" style="color:white; text-decoration:none;"></a>
					</div>
					</div>
				
				<center>

				<font color="white" size=5>
				<h2>LongLiveBook.com</h2>
				<br>

				</font>
				</center>


			</div>
			
			<div id="data" align="center">
			<br><br><br>
			
			
			<div style="background:green; width:50%">
			<b>
			<font size="4" color="red">
			
			
			<li><a href="order_asdfg.php">Order Details</a><br><br></li>
			<li><a href="">Order Details</a><br><br></li>
			<li><a href="">Order Details</a><br><br></li>
			</font></b>
			
		</div>';

			
			
			
			
		}

		else
		{


		

		echo '
		<html>
			<link href="template.css" rel="stylesheet">
			<body>
			<div id="header" align="right">
			
				<div style="background-color: #6D7B8D; font-size:20px">
					<font color="white" >
					<a href="index.php" style="color:white; text-decoration:none;">
					<div id="menu">
					
					&nbsp &nbsp Home &nbsp </a></div>|<div id="menu"><a href="sell.php" style="color:white; text-decoration:none;">
					
					
					&nbsp &nbspSell My Book &nbsp</a></div>|<a href="login.php" style="color:white; text-decoration:none;"><div id="menu">					
					&nbsp &nbsp Log in &nbsp </a></div>|<div id="menu"><a href="signup.php" style="color:white; text-decoration:none;">
					
					
					&nbsp &nbspSign Up &nbsp</a>
					</div>|<div id="menu"><a href="proceed.php" style="color:white; text-decoration:none;"></a>
					</div>
					</div>
				
				<center>

				<font color="white" size=5>
				<h2>LongLiveBook.com</h2>
				<br>

				</font>
				</center>


			</div>
			
			<div id="data" align="center">xxxxxxx';
			
			echo '
			
			
			<br><br>
	
			<table width="100%">
			<tr bgcolor="blue" >
			<td width="66%" height=45 style="box-shadow: 4px 4px 5px rgba(50, 50, 50, 0.75); padding-left:10px;"><font size="5" color="white"><b>Sign in....</b></td>
			</tr>

			</table>
			<br>
			<br><br><br>
			<form action="asdfg.php" method="post">
					
					
					<ul class="pricing_table" style="width:66%;  position: absolute; left: 0; right: 0; margin: auto;">
							<li class="price_block"style="width:400px;   position: absolute; left: 0; right: 0; margin: auto;;font-family: Ubuntu, arial, verdana; @import url(http://fonts.googleapis.com/css?family=Ubuntu);">
								<h3>REGISTERED USERS</h3>
								
							<ul class="features" align="center">
								<center>
									<li><span class="input input--hoshi" >
					<input class="input__field input__field--hoshi" type="text" id="input-5" name="username" style="font-size:20px;" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
						<span class="input__label-content input__label-content--hoshi"><font size="4">Username</font></span>
					</label>
				</span><br>
				
				<span class="input input--hoshi" >
					<input class="input__field input__field--hoshi" type="password" id="input-6" name="password" style="font-size:20px;" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-3" for="input-6">
						<span class="input__label-content input__label-content--hoshi"><font size="4">Password</font></span>
					</label>	
				</span>	<br>
				
				</li>
								</center>
							</ul>
						
							
							
							
							
							<div class="footer">
								<input type="submit"  class="action_button" name="submit" value="Log in" >
							</div>
							
							
							<ul class="features" align="center">
								<center>
									<a href="signup.php">Not a member yet!!Sign Up Now</a><br>
								</center>
							</ul>
							
							</li>
		
						</ul>
	
			</form>

		<script src="prefixfree.min.js" type="text/javascript"></script>
	
		</form>
		</div>';
		
			session_unset();
			session_destroy();

			
			
		}	
			

			
			
		

	}
	
?>