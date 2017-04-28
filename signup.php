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
		

		<meta name="description" content="Long Live Book : for selling and buying books at an exceptional price" />
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
	
	
<?php 
					
						
	$servername = "localhost";
	$username = "longlive_user";
	$password = "Dreams0nfire0";
	$dbname = "longlive_data";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);


	$book=$_POST["book"];
	$author=$_POST["author"];
	
	/*search result by name matching*/
	
	if(isset($_POST["name"]))
	{
		
		$temp=$_POST['username'];
		$check= mysqli_query($conn,"SELECT * FROM users
				WHERE username='$temp'");
		if( $_POST["name"]==NULL || $_POST["username"]==NULL || $_POST["password"]==NULL || $_POST["email"]==NULL || $_POST["mob"]==NULL)
		{
		
			echo '<script language="javascript">

					window.alert("Please fill all forms")
					exit;
					
	
				</script>';
		}
		
		else if(mysqli_num_rows($check))
		{
			
			
			echo '<script language="javascript">

					window.alert("Username Already Exist!!Try Another Username")

					
	
				</script>';
			

			
						
			
			
		}
		else
		{
			$result= mysqli_query($conn,"SELECT * FROM users");
		
			while($row = mysqli_fetch_array($result))
				
			{						
						
						$count=$row['id'];
	
			}	
			$count++;
			
			
			$rand=rand(1, 10000);
			$temp=$_POST[username].$rand;
			
		
		
			$data="INSERT INTO users (id, name, username, password, email, mob, temp, verify)
			VALUES($count,'$_POST[name]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[mob]','$temp','not verified')";
			
			
			$to = $_POST[email];
			$subject = "Email Verification";
			$txt = 'Click the below link to verify your email www.longlivebook.com/verify.php?var='.$temp;
			$headers = "From: Longlivebook" . "\r\n";

			mail($to,$subject,$txt,$headers);
			
			
			
			if (!mysqli_query($conn,$data))
			{
				die('Error: ' . mysqli_error($conn));
			}
			
			
			echo '<script language="javascript">

					window.alert("Successfully Registered!! \n Verify your email by clicking on the link in your inbox or in spam folder. \n Log in Now")
					window.location.href="login.php";
	
				</script>';
			
				

			exit;
						
			session_unset();
			session_destroy();
			
		}
		
		
	}			
						
						

	
	

?>
	

<?php


	
	
	
	
?>



<body>
		<div class="container">	
			<div class="container">	
			<!-- Codrops top bar -->
			<div class="codrops-top clearfix">
				<a href="http://longlivebook.com"><img src="template_img/logo.jpg" width="30" height="30" align="left"></img><strong>LongLiveBook.com</strong></a>
			
				
				
				
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
			</header>	<div class="main">
					
					
					
				<table width="100%"cellspacing="0" cellpadding="0">
				<tr >
					<td bgcolor="#FFCC66" width="30%" height="500px">
					
					<font size="8" color="white">
					<center><strong>Sign Up Now</strong></center>
					</font>
					</td>
					
					<form id="branch17" method="post" action="signup.php">
					<td bgcolor="#FFC247" width="70%" height="500px" valign="top">
					
						<br><br><br><br>
										<table align="left" width="100%" >
										
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												<font color="white" size="4">Name : 
											<td width="50%" align="left">
												<input  type="text" class="in_login" name="name" value="<?php echo $_POST['name'];?>" required>
											
											
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												<font color="white" size="4">Username: 
											<td width="50%" align="left">
												<input  type="text" class="in_login" name="username" width="150"required>
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												<font color="white" size="4">Password: 
											<td width="50%" align="left">
												<input  type="password" placeholder="minimum 6 characters"  class="in_login" name="password" value="<?php echo $_POST['password'];?>" style="font-size:15px;" required>
											
											
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												<font color="white" size="4">Email: 
											<td width="50%" align="left">
												<input  type="email" class="in_login" placeholder="verify email after sign up"  name="email" width="150" value="<?php echo $_POST['email'];?>" style="font-size:15px;" required>
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												<font color="white" size="4">Mob: 
											<td width="50%" align="left">
												<input  type="number"  class="in_login" name="mob"  value="<?php echo $_POST['mob'];?>" required>
											
											
												
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
											<td width="5%" align="center">
											
											<br><input type="submit" class="signup_but" name="sign" value="Sign Up" onclick="myFunction17()" >   &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 
										</table>	
										
										</form>
										
										<script>
											function myFunction17() {
											document.getElementById("branch17").submit();
											}
										</script>
					
					

									
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

	
	




