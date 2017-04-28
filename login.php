<?php

$con=mysqli_connect("localhost","longlive_user","Dreams0nfire0","longlive_data");


if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
  
session_start();
  


?>



<?php

if(isset($_SESSION['username']))
			{
			echo '<script language="javascript">

					window.alert("Already Logged In...\n Continue..... ")
					window.location.href="index.php";
	
				</script>';
				exit;
				
			
				
				
		
				
				
		
	
			}
	
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


	
	/*search result by name matching*/
	
	if(isset($_POST["username"]))
	{
		
		
	
	
	
		$temp=$_POST['username'];
		$temp1=$_POST['password'];
		$check= mysqli_query($conn,"SELECT * FROM users
				WHERE username='$temp'");
		
		
			while($row = mysqli_fetch_array($check))
				
			{						
						
						$pass=$row['password'];
						$name=$row['name'];
	
			}	
			
		if($temp1==$pass)
		{
			
		
		
		
			
		$_SESSION['username']=$_POST['username'];	
		$_SESSION['password']=$_POST['password'];
		$_SESSION['name']=$name;
		
		
		
		if(isset($_SESSION['cart1']))
		{
				echo '<script language="javascript">

					window.location.href="cart.php";
	
				</script>';
				
		}
		else
		{
			echo '<script language="javascript">

					window.alert("Successfully Logged In...\n Continue..... ")
					window.location.href="index.php";
	
				</script>';
				
				
		}	
				
			
				
		
		
		}
			
		
		
		else
		{
			echo '<script language="javascript">

					window.alert("Invalid username / password \nTry Again..")
					window.location.href="login.php";
	
				</script>';
		}
		
	}	

	
	else
	{
						
						

	
	

?>
	



<body>
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
			</header>
			<div class="main">
					
					
					
				<table width="100%"cellspacing="0" cellpadding="0">
				<tr >
					<td bgcolor="#99CC99" width="30%" height="500px">
					
					<font size="8" color="white">
					<center><strong>Log In</strong></center>
					</font>
					</td>
					
					<form id="login" method="post" action="login.php">
					<td bgcolor="#85C185" width="70%" height="500px" valign="top">
					
						<br><br><br><br>
										<table align="left" width="100%" >
										
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												<font color="white" size="4">Username : 
											<td width="50%" align="left">
												<input  type="text" class="in_login" name="username" required>
											
											
										
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												<font color="white" size="4">Password: 
											<td width="50%" align="left">
												<input  type="password" class="in_login" name="password" required>
											
											
										
											
												
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
											<td width="5%" align="center">
											
											<br><input type="submit" class="login_but" name="sign" value="Log In" onclick="login()" >   &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 
										</table>	
										
										</form>
										
										<script>
											function login() {
											document.getElementById("login").submit();
											}
										</script>
										
					<br>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <font color="white" size="4"><a href="signup.php">Not yet Rgistered! Sign up now!</a>

									
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

	
<?php 	
}
?>


