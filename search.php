<?php
	session_start(); //starts session
	error_reporting(0); //turns off all error reporting
?>

<?php
	if(!(isset($_POST['bid']))) //checks if bid set
	{
	}
	else if(isset($_SESSION['no'])){
        $t="cart".$_SESSION['no'];
		if(isset($_POST['cart'])){
			$_SESSION[$t]= $_POST['bid'];      
			$_SESSION['no']++;
			echo '<SCRIPT>window.alert("Cart Added")</SCRIPT>';
		}
	}
	else{
		if(isset($_POST['cart'])){
			$_SESSION['cart1']=$_POST['bid'];
            $_SESSION['no']=1;
            $_SESSION['no']++;
			echo '<SCRIPT>window.alert("Cart Added")</SCRIPT>';
		}
	}
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
				</strong></a>
			</span>
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
				<td bgcolor="#3399CC" width="30%" height="500px">
					<font size="8" color="white">
					<center><strong>Find Your Book!!</strong></center>
					</font>
				</td>
				
				<td bgcolor="#2D87B4" width="70%" height="500px" valign="top">
					<br><br><br><br>
					<form id="search" method="get" action="search.php">
		
					<table width="100%">
						<tr>
							<td width="50%" bgcolor="">
								<input type="text" class="in1" name="key" placeholder="Enter the book name...." value="<?php echo $_GET["key"];?>"/>
							<td width="25%" bgcolor="">		
										<select class="cs-select cs-skin-elastic" name="subcat">
											<option value="all" disabled selected >Select Catagory</option>
											<option data-class="flag-france" value="ec">Electronics: Engg</option>
											<option  data-class="flag-brazil" value="ee">Electrical: Engg</option>
											<option  data-class="flag-argentina" value="cs">Computer Science: Engg</option>
											<option  data-class="flag-safrica" value="me">Mechanical: Engg</option>
											<option data-class="flag-france" value="ce">Civil: Engg</option>
											<option data-class="flag-france" value="maths">Mathematics: Degree</option>
											<option data-class="flag-france" value="phy">Physics: Degree</option>
											<option data-class="flag-france" value="che">Chemistry: Degree</option>
											<option data-class="flag-france" value="ebm">Economics: Degree</option>
											<option data-class="flag-france" value="hum">Humanites: Degree</option>
											<option data-class="flag-france" value="other">Others</option>
										</select>
										<script src="js_select/classie.js"></script>
										<script src="js_select/selectFx.js"></script>
										<script>
											(function() {
												[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
												new SelectFx(el);
											} );
											})();
										</script>
		
							<td width="25%" bgcolor="" >
										<style>
											#as{
												background-color:NONE;
	
												background-image:url("template_img/search1.png");
												background-size:100%;
												margin-top:15px;
												margin-left:3px;
												
												shadow:none;
												width:52px;
												height:52px;}
										
										</style>
										<br>
										<input class="buy_but" style="font-size:18px; height:52px; " type="submit"  onclick="myFunction1()" value="Search">
										 
										 
											
									<script>
										function myFunction1() {
										document.getElementById("search").submit();
										}
									</script>
									
									
									<br><br>
						</table>
						</form>
									
									
									
									
<?php 
$servername = "localhost";
$username = "longlive_user";
$password = "Dreams0nfire0";
$dbname = "longlive_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

	$result3 = mysqli_query($conn,"SELECT * FROM books ORDER BY no");
	while($row = mysqli_fetch_array($result3))
	{
		
		$count=$row["no"];
	
	
	}
	$key=$_GET["key"];
	$subcat=$_GET["subcat"];
	
	/*search result by name matching*/
	
	$temp=0;		
	for($index1=1;$index1<=$count;$index1++)
	{
		$result1 = mysqli_query($conn,"SELECT * FROM books WHERE no='$index1' AND status='Open for sale'"); 
		if ($result1->num_rows > 0) 
		{
		
			while($row = mysqli_fetch_array($result1))
				
			{	
				if(stristr($row["book"], $key)!="" )
				{
					$temp++;
					if(($temp%2)==0)
					{
						echo '<div id="list1"><a href="book.php?id='.$row["no"].'">';
						echo '<table width="100%">
								<tr>
									<td valign="center" width="5%">
										<img src="fotos/'.$row["image"].'" height="58" width="58">
									<td width="40%">
										<font color="white" size="4">'.
										$row["book"].
										'<br>
										<font color="white" size="2">
										&nbsp  &nbsp &nbsp  &nbsp - '.
										$row["auth"].'
									<td width="3%">
										<font color="white" size="5">
										Rs.
									<td width="5%">
										<font color="white" size="3"><del>'.
										$row["aprice"].
										'</del><br>
										<font color="white" size="4">'.
										$row["sprice"].
									'<td width="10%" bgcolor="">
									
										
										<link rel="shortcut icon" href="../favicon.ico"> 				
										<link rel="stylesheet" type="text/css" href="css_button/default.css" />
										<link rel="stylesheet" type="text/css" href="css_button/component.css" />
										<script src="js_button/modernizr.custom.js"></script>
									
										<a href="book.php?id='.$row["no"].'" style="color: #2E2E2E; text-decoration: none;">
										<form method="get" action="book.php">
											<button class="btn btn-5 btn-5b icon-cart-2" name="id" value="'.$row["no"].'">
											<span><font color="white" size="3">Buy Now</font></span></button>
										</form>
									<td width="10%" bgcolor="">
										<form action="" method="post"> 
											<button class="btn btn-5 btn-5a icon-cart" name="cart">
											<span><font color="white" size="3">Add to cart</font></span>
											</button>
											<input type="hidden" name="bid" value="'.$row["no"].'" >
										</form>
									
										
										
										
									
							</table>';
						echo '</a></div>';
					
					}
					
					else
					{
						echo '<div id="list2"><a href="book.php?id='.$row["no"].'">';
						echo '<table width="100%">
								<tr>
									<td valign="center" width="5%">
										<img src="fotos/'.$row["image"].'" height="58" width="58">
									<td width="40%">
										<font color="white" size="4">'.
										$row["book"].
										'<br>
										<font color="white" size="2">
										&nbsp  &nbsp &nbsp  &nbsp - '.
										$row["auth"].'
									<td width="3%">
										<font color="white" size="5">
										Rs.
									<td width="5%">
										<font color="white" size="3"><del>'.
										$row["aprice"].
										'</del><br>
										<font color="white" size="4">'.
										$row["sprice"].
									'<td width="10%" bgcolor="">
									
										
										<link rel="shortcut icon" href="../favicon.ico"> 				
										<link rel="stylesheet" type="text/css" href="css_button/default.css" />
										<link rel="stylesheet" type="text/css" href="css_button/component.css" />
										<script src="js_button/modernizr.custom.js"></script>
									
										<a href="book.php?id='.$row["no"].'" style="color: #2E2E2E; text-decoration: none;">
										<form method="get" action="book.php">
											<button class="btn btn-5 btn-5b icon-cart-2" name="id" value="'.$row["no"].'">
											<span><font color="white" size="3">Buy Now</font></span></button>
										</form>
									<td width="10%" bgcolor="">
										<form action="" method="post"> 
											<button class="btn btn-5 btn-5a icon-cart" name="cart">
											<span><font color="white" size="3">Add to cart</font></span>
											</button>
											<input type="hidden" name="bid" value="'.$row["no"].'" >
										</form>
							</table>';
						echo '</a></div>';
					}
				}		
			}
		}
		
		else
			{
				echo 'No books found!! ';
			}
					
	}	

	/*Related results. search result by subcategory matching*/ 
	$temp=0;		
	for($index1=1;$index1<=$count;$index1++)
	{
		$result1 = mysqli_query($conn,"SELECT * FROM books WHERE no='$index1' AND status='Open for sale'"); 
		if ($result1->num_rows > 0) 
		{
				
			while($row = mysqli_fetch_array($result1))
				
			{	
				if(stristr($row["subcat"], $subcat)!="" )
				{
					$temp++;
					if(($temp%2)==0)
					{
						echo '<div id="list1"><a href="book.php?id='.$row["no"].'">';
						echo '<table width="100%">
								<tr>
									<td valign="center" width="5%">
										<img src="fotos/'.$row["image"].'" height="58" width="58">
									<td width="40%">
										<font color="white" size="4">'.
										$row["book"].
										'<br>
										<font color="white" size="2">
										&nbsp  &nbsp &nbsp  &nbsp - '.
										$row["auth"].'
									<td width="3%">
										<font color="white" size="5">
										Rs.
									<td width="5%">
										<font color="white" size="3"><del>'.
										$row["aprice"].
										'</del><br>
										<font color="white" size="4">'.
										$row["sprice"].
									'<td width="10%" bgcolor="">
									
										
										<link rel="shortcut icon" href="../favicon.ico"> 				
										<link rel="stylesheet" type="text/css" href="css_button/default.css" />
										<link rel="stylesheet" type="text/css" href="css_button/component.css" />
										<script src="js_button/modernizr.custom.js"></script>
									
										<a href="book.php?id='.$row["no"].'" style="color: #2E2E2E; text-decoration: none;">
										<form method="get" action="book.php">
											<button class="btn btn-5 btn-5b icon-cart-2" name="id" value="'.$row["no"].'">
											<span><font color="white" size="3">Buy Now</font></span></button>
										</form>
									<td width="10%" bgcolor="">
										<form action="" method="post"> 
											<button class="btn btn-5 btn-5a icon-cart" name="cart">
											<span><font color="white" size="3">Add to cart</font></span>
											</button>
											<input type="hidden" name="bid" value="'.$row["no"].'" >
										</form>
									
										
										
										
									
							</table>';
						echo '</a></div>';
					
					}
					
					else
					{
						echo '<div id="list2"> <a href="book.php?id='.$row["no"].'">';
						echo '<table width="100%">
								<tr>
									<td valign="center" width="5%">
										<img src="fotos/'.$row["image"].'" height="58" width="58">
									<td width="40%">
										<font color="white" size="4">'.
										$row["book"].
										'<br>
										<font color="white" size="2">
										&nbsp  &nbsp &nbsp  &nbsp - '.
										$row["auth"].'
									<td width="3%">
										<font color="white" size="5">
										Rs.
									<td width="5%">
										<font color="white" size="3"><del>'.
										$row["aprice"].
										'</del><br>
										<font color="white" size="4">'.
										$row["sprice"].
									'<td width="10%" bgcolor="">
									
										
										<link rel="shortcut icon" href="../favicon.ico"> 				
										<link rel="stylesheet" type="text/css" href="css_button/default.css" />
										<link rel="stylesheet" type="text/css" href="css_button/component.css" />
										<script src="js_button/modernizr.custom.js"></script>
									
										<a href="book.php?id='.$row["no"].'" style="color: #2E2E2E; text-decoration: none;">
										<form method="get" action="book.php">
											<button class="btn btn-5 btn-5b icon-cart-2" name="id" value="'.$row["no"].'">
											<span><font color="white" size="3">Buy Now</font></span></button>
										</form>
									<td width="10%" bgcolor="">
										<form action="" method="post"> 
											<button class="btn btn-5 btn-5a icon-cart" name="cart">
											<span><font color="white" size="3">Add to cart</font></span>
											</button>
											<input type="hidden" name="bid" value="'.$row["no"].'" >
										</form>
									
										
										
										
									
							</table>';
						echo '</a></div>';
					
					
					}
						
				}		
										
			}
		}
		
		else
			{
				echo ' ';
			}
					
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