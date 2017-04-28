<?php

session_start();
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60010865-1', 'auto');
  ga('send', 'pageview');

</script>



<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Long Live Book</title>
		

		<meta name="description" content="Long Live Book: for selling and buying books at an exceptional price" />
		<meta name="keywords" content="books, longlivebook, old books, engineering books, degree books, electronics books, engineering maths, sell my book, gcek, govt. college of engineering kannur, books reborn, book reborn here, start up kerala, gcek start up, sell old books" />
		<meta name="author" content="longlivebook.com" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/climacons.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		
		
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css_select/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css_select/demo.css" />
		<link rel="stylesheet" type="text/css" href="css_select/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css_select/cs-skin-elastic.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="icon" type="image/png" href="template_img/logo.png" />
		
	</head>
	<body>
		<div class="container">	
			<!-- Codrops top bar -->
			<div class="codrops-top clearfix">
				<a href="http://longlivebook.com"><strong>LongLiveBook.com: </strong>Books reborn</a>
				
				
				
				<?php	
				if(isset($_SESSION['username'])) 
				{ 
					
					echo '<span class="right"><a href="logout.php"><strong>LOG OUT</strong></a></span>
						<span class="right"><a href="manage.php"><strong>MANAGE</strong></a></span>';
				}
				else
				{
					echo '<span class="right"><a href="login.php"><strong>SIGN IN</strong></a></span>
						<span class="right"><a href="signup.php"><strong>SIGN UP</strong></a></span>';
					echo '<script language="javascript">

					window.alert("You have not logged in!! \n Log in to continue")
					window.location.href="login.php";
	
					</script>';
					exit;
					
				}
				?>
				<span class="right"><a href="cart.php"><strong>CART (
				<?php 
					if(!(isset($_SESSION['no'])))
						echo "0";
					else
						echo ($_SESSION['no']-1); 
					
					echo " )";
				?>
				</strong></a></span>
				<span class="right"><a href="sell.php"><strong>SELL MY BOOK</strong></a></span>
				<span class="right"><a href="list.php"><strong>BOOKS</strong></a></span>
				
				<span class="right"><a href="index.php"><strong>HOME</strong></a></span>





			</div><!--/ Codrops top bar -->
			<header class="clearfix">
				<h1>Long Live Book<span>The live book store</span></h1>	
				<nav class="codrops-demos">
					
				</nav>
			</header>
			<div class="main">
					
					
					
				<table width="100%"cellspacing="0" cellpadding="0">
				<tr >
					<td bgcolor="#2DB4B4" width="30%" height="500px">
					
					<font size="8" color="white">
					<center><strong>Manage Books</strong></center>
					</font>
					</td>
					
					
					<td bgcolor="#29A3A3" width="70%" height="500px" valign="top">
					<?php
						
						$username=$_SESSION['username'];
						$servername = "localhost";
						$username = "longlive_user";
						$password = "Dreams0nfire0";
						$dbname = "longlive_data";
						$conn = new mysqli($servername, $username, $password, $dbname);
						
						
						$i=1; 
					?>
					
					
					
					<?php

						$temp=$_POST['option'];
						$bid=$_POST['bno'];
						$date=date("d/m/y");

						if(isset($_POST['change']))
						{
	
							mysqli_query($conn,"UPDATE books SET status='$temp', date='$date' WHERE no='$bid'");
						}
		
					?>


						<table  width="100%" align="center">
							<tr bgcolor="#218484">
								<th><font size="4" color="white">Sl No.</th>
								<th><font size="4" color="white">Book</th>
								<th><font size="4" color="white">Status</th>
								<th><font size="4" color="white">Change Status</th>
								<th><font size="4" color="white">Last Updated On</th>
								
							</tr>
					
					<?php	
						
						$r=$_SESSION['username'];
						
						$result1 = mysqli_query($conn,"SELECT * FROM books WHERE user='$r'"); 	
							
						if ($result1->num_rows > 0) 
						{
						
							while($row = mysqli_fetch_array($result1))
							{
								echo '<tr><td style="border-bottom: 1px white solid;" align="center">'.$i.'</td><td style="border-bottom: 1px white solid;" align="left">';
								echo $row["book"].'</td><td style="border-bottom: 1px white solid;" align="center"><font color="red">'.$row["status"].
								'<td style="border-bottom: 1px white solid;"  align="left">
								<form action="manage.php" method="post"> 
								<input type="hidden" name="bno" value="'.$row["no"].'">

								<br>
								<input type="radio" name="option" value="Open for sale">Open for sale<br>
								<input type="radio" name="option" value="Closed">Closed<br>
								<input type="radio" name="option" value="Sold">Sold<br>
								
								
								<center><input type="submit" name="change" value="Change" style="vertical-align:middle;"><br></center>
								</form></a><br><td style="border-bottom: 1px white solid;"  align="center">'.$row["date"].'</tr>';
								$i++;
								
								
					
					
					
							}
							
						}
						
						else
						{
							echo '<SCRIPT>
					
								window.alert("You haven not submitted any book");
	
        
								</SCRIPT>';
						}
						
							
						
					
					?>
					
									
					</td>
				</tr>
				</table>
					
					
			
			
			
			
			
			</div>
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/jquery.fittext.js"></script>
		<script src="js/boxgrid.js"></script>
		<script>
			$(function() {

				Boxgrid.init();
				

			});
		</script>
	
	</body>
</html>