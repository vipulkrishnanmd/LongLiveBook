<?php
error_reporting(0); 
session_start();
?>

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
	
	if(isset($_SESSION['username']))
	{
		$check= mysqli_query($conn,"SELECT * FROM users
		WHERE username='$_SESSION[username]'");
		
		while($row = mysqli_fetch_array($check))
		{						
						
			$verify=$row['verify'];
			$name=$row['name'];
			$email=$row['email'];
			$mob=$row['mob'];

		}
	
		if($verify!="verified")
		{
		echo '<script language="javascript">

		window.alert("Verify email address to sell a book.. \n We have sent an email verification link to your email id. \n Note : Currently this feature is only available for GCEK students")
		window.location.href="index.php";
		</script>';
		exit;
			
		}
			
	}
	else
	{
		echo '<script language="javascript">
				window.alert("Please log in to continue.....\n Note : Currently this feature is only available for GCEK students ")
				window.location.href="login.php";
			  </script>';
		exit;
	}


	$username=$_SESSION['username'];
	
	$book=$_POST["book"];
	$author=$_POST["author"];
	
	/*search result by name matching*/
	
	if(isset($_POST['sell_submit']))
	{
	
			$result= mysqli_query($conn,"SELECT * FROM books ORDER BY no");
		
			while($row = mysqli_fetch_array($result))
				
			{						
						
						$count=$row['no'];
	
			}	
			$count++;
			
			$aprice= $_POST[aprice];
			$sprice= ($_POST[price]+30);
			$d=date("d/m/y");
		
		
			$data="INSERT INTO books (no, book, auth, user, uprice, aprice, sprice, description, type, cat, subcat, mob, date, status, image)
			VALUES($count,'$_POST[book]','$_POST[author]','$_SESSION[username]','$_POST[price]', '$aprice', '$sprice','$_POST[description]','$_POST[type]','$_POST[cat]','$_POST[scat]','$_POST[mob]','$d','Open for sale','$count.jpg')";
			
			if (!mysqli_query($conn,$data))
			{
				die('Error: ' . mysqli_error($conn));
			}
			
			
			echo '<body>
		
		<div class="container">	
			<!-- Codrops top bar -->
			<div class="codrops-top clearfix">
				<a href="http://longlivebook.com"><img src="template_img/logo.jpg" width="30" height="30" align="left"></img><strong>LongLiveBook.com</strong></a>';
			
				
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
			
			echo '<span class="right"><a href="cart.php"><strong>CART (';
	 
					if(!(isset($_SESSION['no'])))
						echo "0";
					else
						echo ($_SESSION['no']-1); 
					
					echo " )";
			
			echo '</strong></a></span>
				<span class="right"><a href="sell.php"><strong>SELL MY BOOK</strong></a></span>
				<span class="right"><a href="search.php"><strong>BOOKS</strong></a></span>
				
				<span class="right"><a href="index.php"><strong>HOME</strong></a></span>
			
			</div><!--/ Codrops top bar -->
			<header class="clearfix">
				<h1>Long Live Book<span>Book Reborn Here </span></h1>	
				<nav class="codrops-demos">
					
				</nav>
			</header>';
		
		
			echo '<div class="main">
				<table width="100%"cellspacing="0" cellpadding="0">
					<tr>
					<td bgcolor="#C24747" width="30%" height="500px">
					
					<font size="8" color="white">
					<center><strong>Sell My Book</strong></center>
					</font>
					</td>
					
					
					<td bgcolor="#B83D3D" width="70%" height="500px" valign="top">
					
					<form action="foto.php?id='.$count.'" method="post" enctype="multipart/form-data">
					<font color="white" size="4">
					<br><br><br>
					<center>Add an Image: &nbsp  &nbsp  &nbsp   &nbsp  <input type="file" name="image" id="image"><br>
					<br><input type="submit" class="sell_but" name="submit1" value="Submit">
					</center>		
					</font>	
					</form>					
				</table>			
				
			</div>
		</div>			
	
	<SCRIPT>
		window.alert("Book Submitted!Please add an image");
	</SCRIPT>';
	

			echo '<script src="prefixfree.min.js" type="text/javascript"></script></form>';
	}
	else
	{

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
			</header>
		
			<div class="main">
					
				<table width="100%"cellspacing="0" cellpadding="0">
				<tr >
					<td bgcolor="#C24747" width="30%" height="500px">
					
					<font size="8" color="white">
					<center><strong>Sell My Book</strong></center>
					</font>
					</td>
					
					<form id="sell" method="post" action="sell.php">
					<td bgcolor="#B83D3D" width="70%" height="500px" valign="top">
					
						<br><br><br><br>
						
						<table width="100%">
						<tr>
							<td width="10%" bgcolor="">
							<td width="15%" bgcolor="">
					
								<font color="white" size="4">Book name*: </font>
										
										
							<td width="80%" bgcolor="">		
								
								<input type="text" class="in_login" name="book" value="<?php echo $_POST["book"];?>"/>	
								
						<tr>
							<td width="10%" bgcolor="">
							<td width="15%" bgcolor="">
					
								<font color="white" size="4">Author: </font>
										
										
							<td width="80%" bgcolor="">		
								
								<input type="text" class="in_login" name="author" value="<?php echo $_POST["author"];?>"/>	
						
						<tr>
							<td width="10%" bgcolor="">
							<td width="15%" bgcolor="">
					
								<font color="white" size="4">Description: </font>
										
										
							<td width="80%" bgcolor="">		
								
								<input type="text" class="in_login" name="description" />	
								
								
						<tr>
							<td width="10%" bgcolor="">
							<td width="15%" bgcolor="">
					
								<font color="white" size="4"><br>Type*: </font>
										
										
							<td width="80%" bgcolor="">		
								
								 <br>&nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp <input type="radio" name="type" value="printed" checked="checked"><font color="white" size="4"> &nbsp &nbsp Printed  &nbsp  &nbsp  &nbsp   <input type="radio" name="type" value="photostat"><font color="white" size="4"> &nbsp &nbsp Photostat</font>	
						
						
						<tr>
							<td width="10%" bgcolor="">
							<td width="15%" bgcolor="">
					
								<font color="white" size="4"><br>Category: </font>
										
										
							<td width="80%" bgcolor="">		
								
								<br><font color="white" size="4"> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp <input type="checkbox" name="cat" value="engg">  Engineering &nbsp  &nbsp  &nbsp  <input type="checkbox" name="cat" value="degree"> Degree&nbsp  &nbsp  &nbsp  <input type="checkbox" name="cat" value="others"> Others
						
						
						<tr>
							<td width="10%" bgcolor="">
							<td width="15%" bgcolor="">
					
								<font color="white" size="4" valign="top"><br>Sub Category: </font>
										
										
							<td width="80%" bgcolor="" >		
								
								 <br><font color="white" size="4"> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp <input type="checkbox" name="scat" value="me">  Mechanical &nbsp  &nbsp  &nbsp  <input type="checkbox" name="scat" value="ee"> Electrical  &nbsp  &nbsp  &nbsp &nbsp &nbsp <input type="checkbox" name="scat" value="ec"> Electronics
								<br>&nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp <input type="checkbox" name="scat" value="ce"> <font color="white" size="4">  Civil &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  <input type="checkbox" name="scat" value="it"> IT &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="checkbox" name="scat" value="cs"> Computer Science
								<br>&nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp <input type="checkbox" name="scat" value="maths"> <font color="white" size="4">  Mathematics &nbsp <input type="checkbox" name="scat" value="phy">Physics &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp <input type="checkbox" name="scat" value="che"> Chemistry
								<br>&nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp <input type="checkbox" name="scat" value="eco"> <font color="white" size="4">  Economics &nbsp &nbsp &nbsp &nbsp <input type="checkbox" name="scat" value="hum">Humanities &nbsp  &nbsp  &nbsp &nbsp <br>
			
						<tr>
							<td width="10%" bgcolor="">
							<td width="15%" bgcolor="">
					
								<font color="white" size="4"><br>Name*: </font>
										
										
							<td width="80%" bgcolor="">		
								
								<br><input type="text" class="in_login" name="name" value="<?php echo $name;?>" required/>	
								
						<tr>
							<td width="10%" bgcolor="">
							<td width="15%" bgcolor="">
					
								<font color="white" size="4">Mob No.*: </font>
										
										
							<td width="80%" bgcolor="">		
								
								<input type="text" class="in_login" name="mob" value="<?php echo $mob;?>" required/>	
						
						<tr>
							<td width="10%" bgcolor="">
							<td width="15%" bgcolor="">
					
								<font color="white" size="4"><br>Email: </font>
										
								
							<td width="80%" bgcolor="">		
								
								<input type="text" class="in_login" name="email" value="<?php echo $email;?>" required/>	
							
						<tr>
							<td width="10%" bgcolor="">
							<td width="15%" bgcolor="">
					
								<font color="white" size="4"><br>Actual Price: </font>
										
										
							<td width="80%" bgcolor="">		
								
								<input type="text" class="in_login" name="aprice"/>	
						
						<tr>
							<td width="10%" bgcolor="">
							<td width="15%" bgcolor="">
					
								<font color="white" size="4"><br>Expected Price*: </font>
										
										
							<td width="80%" bgcolor="">		
								
								<input type="text" class="in_login" name="price" required/>	
								
						
						</table>
						<br>
						<center>
							<input type="submit" class="sell_but" name="sell_submit" value="Submit" onclick="sell()">
						</center>
						<br><br>
						</form>
						
						<script>
							function sell() {
							document.getElementById("sell").submit();
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
</html>

<?php
	}
?>