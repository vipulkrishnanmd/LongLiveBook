<?php

$con=mysqli_connect("localhost","longlive_user","Dreams0nfire0","longlive_data");


if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
  
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
				<table border="1">
				<tr>
				<th>Sl No.
				<th>Book
				<th>Buyer
				<th>Seller
				<th>Buyer Mob
				<th>Seller Mob
				<th>Order Id
				</tr>';
				
				
			$result1 = mysqli_query($con,"SELECT * FROM orders ORDER BY slno");
			while($row = mysqli_fetch_array($result1))
			{
				
				echo '<tr>
					<td>';
				echo $row['slno'].'</td><td>';
				echo $row['book'].'</td><td>';
				echo $row['buyer'].'</td><td>';
				echo $row['seller'].'</td><td>';
				echo $row['buyermob'].'</td><td>';
				echo $row['sellermob'].'</td><td>';
				echo $row['orderid'].'</td>';
				
				echo '</tr>';
				
				
				
				
			}	
			echo '</table>
	
	
	
			</font></b>
			<br><br>
			
			
			</div>
			
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
		
		session_unset();
		session_destroy();
			
			
			echo '<SCRIPT>
			window.alert("Invalid Log in")
			window.location.href="index.php";
			</SCRIPT>';

	}
	
?>