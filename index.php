<?php
	session_start(); //starts thre session
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
			
				<?php	//Selects the actions that hhas to be shown in the upper right corner
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
				
				<?php //displays the number of items in the cart
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

				<ul id="rb-grid" class="rb-grid clearfix">
					<li class="icon-clima-1 rb-span-2" align="left">
						<h3>Find Your Book!</h3><span class="rb-temp"><font size="4">Grab your favourite book at an exceptional price<br>...</font></span>
						<div class="rb-overlay">
							<span class="rb-close">close</span>
							<div class="rb-week">
								<div><span class="rb-city">Search...</span><span class="icon-clima-2"></span><span><font size="6"><center>Enter the book name <br>Select a category</center></font></span></div>
								<div id="m" align="left">
								
									<font size="5">
									<br><br><br><br><br><br><br><br>Enter Book Name
									</font>
									
									<form id="search" method="get" action="search.php">
										<input type="text" class="in" name="key"/>
										<select class="se" name="subcat">
											<option value="all" disabled selected >Select Catagory</option>
											<option value="ec">Electronics: Engg</option>
											<option value="ee">Electrical: Engg</option>
											<option value="cs">Computer Science: Engg</option>
											<option value="me">Mechanical: Engg</option>
											<option value="ce">Civil: Engg</option>
											<option value="maths">Mathematics: Degree</option>
											<option value="phy">Physics: Degree</option>
											<option value="che">Chemistry: Degree</option>
											<option value="ebm">Economics: Degree</option>
											<option value="hum">Humanites: Degree</option>
											<option value="other">Others</option>
										</select><input type="button" onclick="search1()" value="Search" class="buy_but" style="font-size:18px; height:48px; vertical-align:bottom;">
											
										<script>
											function search1() {
											document.getElementById("search").submit();
											}
										</script>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li class="icon-clima-3" align="left">
						<h3>Engineering Books</h3><span class="rb-temp"><font size="4">Browse Engineering books</font></span>
						<div class="rb-overlay">
							<span class="rb-close">close</span>
							<div class="rb-week">
								<div>
									<span class="rb-city">Engineering Books</span><span class="icon-clima-1"></span><span><font size="8"><center>Select a category<center></font></span></div>
								<div id="men6" style="background-color:#33cbc0;">
									<form id="brancha1" action="list.php">
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="All Books" onclick="myFunctiona1()" >
									</form>
									<a href="list.php" onclick="myFunctiona1()"><span class="icon-clima-2" style="opacity:0.6; color:white"></span></a>
									<script>
										function myFunctiona1() {
											document.getElementById("brancha1").submit();
										}
									</script>
								</div>
								
								<div id="men6" style="background-color:#2DB4B4;">
									<form id="branch1" method="get" action="list.php">
										<input  type="hidden" name="cat" value="me" >
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="ME Books" onclick="myFunction1()" >
									</form>
									<a href="list.php" onclick="myFunction1()"><span class="icon-clima-2" style="opacity:0.6; color:white"></span></a>
									<script>
										function myFunction1() {
											document.getElementById("branch1").submit();
										}
									</script>
								</div>
								
								<div id="men6" style="background-color:#29A3A3;">
									<form id="branch2" method="get" action="list.php">
										<input  type="hidden" name="cat" value="ec" >
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="EC Books" onclick="myFunction2()" >
									</form>
									<a href="list.php" onclick="myFunction2()"><span class="icon-clima-2" style="opacity:0.6; color:white;"></span></a>
									<script>
										function myFunction2() {
											document.getElementById("branch2").submit();
										}
									</script>
								</div>
								
								
								
								<div id="men6" style="background-color:#259393;">
									<form id="branch3" method="get" action="list.php">
										<input  type="hidden" name="cat" value="cse" >
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="CSE Books" onclick="myFunction3()" >
									</form>
									<a href="list.php" onclick="myFunction3()"><span class="icon-clima-2" style="opacity:0.6; color:white"></span></a>
									<script>
										function myFunction3() {
											document.getElementById("branch3").submit();
										}
									</script> 
								</div>
								
								<div id="men6" style="background-color:#218383;">
									<form id="branch4" method="get" action="list.php">
										<input  type="hidden" name="cat" value="ee" >
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="EE Books" onclick="myFunction4()" >
									</form>
									<a href="list.php" onclick="myFunction4()"><span class="icon-clima-2" style="opacity:0.6; color:white"></span></a>
									<script>
										function myFunction4() {
											document.getElementById("branch4").submit();
										}
									</script>
								</div>
								
								<div id="men6" style="background-color:#1D7272;">
									<form id="branch5" method="get" action="list.php">
										<input  type="hidden" name="cat" value="ce" >
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="CE Books" onclick="myFunction5()" >
									</form>
									<a href="list.php" onclick="myFunction5()"><span class="icon-clima-2" style="opacity:0.6; color:white"></span></a>
									<script>
										function myFunction5() {
											document.getElementById("branch5").submit();
										}
									</script> 
								
								</div>
								
								<div id="men6" style="background-color:#186262;">
									<form id="branch6" method="get" action="list.php">
										<input  type="hidden" name="cat" value="oth1" >
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="Others" onclick="myFunction6()" >
									</form>
									<a href="list.php" onclick="myFunction6()"><span class="icon-clima-2" style="opacity:0.6; color:white"></span></a>
										
									<script>
										function myFunction6() {
											document.getElementById("branch6").submit();
										}
									</script>
								</div>
								
							</div>
						</div>
					
					</li>
					<li class="icon-clima-4" align="left">
						<h3>Degree Books</h3><span class="rb-temp"><font size="4">Most useful Degree books</font></span>
						<div class="rb-overlay">
							<span class="rb-close">close</span>
							<div class="rb-week">
								<div><span class="rb-city">Degree Books</span><span class="icon-clima-1"></span><span><font size="8"><center>Select a category</center></font></span></div>
								<div id="men6" style="background-color:#9d6c9d;">
									<form id="branch7a"  action="list.php">
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="All Books" onclick="myFunction7a()" >
									</form>
									<a href="list.php" onclick="myFunction7a()"><span class="icon-clima-2" style="opacity:0.6; color:white"></span></a>
									<script>
										function myFunction7a() {
											document.getElementById("branch7a").submit();
										}
									</script>
								</div>
								
								<div id="men6" style="background-color:#936293;">
									<form id="branch7" method="get" action="list.php">
										<input  type="hidden" name="cat" value="mat" >
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="Maths" onclick="myFunction7()" >
									</form>
									<a href="list.php" onclick="myFunction7()"><span class="icon-clima-2" style="opacity:0.6; color:white"></span></a>
									<script>
										function myFunction7() {
											document.getElementById("branch7").submit();
										}
									</script>
								</div>
								
								<div id="men6" style="background-color:#875A87;">
									<form id="branch8" method="get" action="list.php">
										<input  type="hidden" name="cat" value="phy" >
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="Physics" onclick="myFunction8()" >
									</form>
									<a href="list.php" onclick="myFunction8()"><span class="icon-clima-2" style="opacity:0.6; color:white"></span></a>
									<script>
										function myFunction8() {
											document.getElementById("branch8").submit();
										}
									</script>
								</div>
								
								<div id="men6" style="background-color:#7A527A;">
									<form id="branch9" method="get" action="list.php">
										<input  type="hidden" name="cat" value="che" >
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="Chemistry" onclick="myFunction9()" >
									</form>
									<a href="list.php" onclick="myFunction9()"><span class="icon-clima-2" style="opacity:0.6; color:white"></span></a>
									<script>
										function myFunction9() {
											document.getElementById("branch9").submit();
										}
									</script>
								</div>
								
								<div id="men6" style="background-color:#6E496E;">
									<form id="branch10" method="get" action="list.php">
										<input  type="hidden" name="cat" value="eco" >
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="Economics" onclick="myFunction10()" >
									</form>
									<a href="list.php" onclick="myFunction10()"><span class="icon-clima-2" style="opacity:0.6; color:white"></span></a>
									<script>
										function myFunction10() {
											document.getElementById("branch10").submit();
										}
									</script>
								</div>
								
								<div id="men6" style="background-color:#624162;">
									<form id="branch11" method="get" action="list.php">
										<input  type="hidden" name="cat" value="hum" >
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="Humanities" onclick="myFunction11()" >
									</form>
									<a href="list.php" onclick="myFunction11()"><span class="icon-clima-2" style="opacity:0.6; color:white"></span></a>
									<script>
										function myFunction11() {
											document.getElementById("branch11").submit();
										}
									</script>
								</div>
								
								<div id="men6" style="background-color:#563956;">
									<form id="branch8" method="get" action="list.php">
										<input  type="hidden" name="cat" value="oth2" >
										<input type="button" style="cursor: pointer; background  : none; border:none; height:350px; width:100%; vertical-align:top; color:white; font-family: Cambria; font-weight: 500; font-size: 30px;"  value="Others" onclick="myFunction12()" >
									</form>
									<a href="list.php" onclick="myFunction12()"><span class="icon-clima-2" style="opacity:0.6; color:white"></span></a>
									<script>
										function myFunction12() {
											document.getElementById("branch12").submit();
										}
									</script>
								</div>
							</div>
						</div>
					</li>
					
					<li class="icon-clima-6" align="left">
						<h3>Sell My Book</h3><span class="rb-temp"><font size="4">Sell your books and earn more</font></span>
						<div class="rb-overlay">
							<span class="rb-close">close</span>
							<div class="rb-week">
								<div><span class="rb-city">Sell My Book</span><span class="icon-clima-6"></span><span><font size="8"><center>Fill the details<center></font></span></div>
								<div id="m" style="background-color:#B83D3D;">
								
									<div style="background-color: #993333; height:500px;">
										<br><br><br>
										<form id="branch14" method="post" action="sell.php">
										<table align="left" width="100%" >
										
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												Book name*: 
											<td width="50%" align="left">
												<input  type="text" class="in_login" name="book" required>
											
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												Author: 
											<td width="50%" align="left">
												<input  type="text" class="in_login" name="author" width="150">
										
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
											<td width="5%" align="center">
											
											<br><input type="button" class="sell_but" value="Next" onclick="myFunction14()" >   &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 
										</table>	
										
										</form>
										<br><br><br><br><br><br><br><br><br><br><br><br><br><br><a href="sell.php" onclick="myFunction14()"><span class="icon-clima-2" style="opacity:0.6; color:#FA5882"></span></a>
										
										<script>
											function myFunction14() {
												document.getElementById("branch14").submit();
											}
										</script>
									</div>
								</div>
							</div>
						</div>
					</li>
					
					<li class="icon-clima-7" align="left">
						<h3>Newly Added Books</h3><span class="rb-temp"><font size="4">Most recently added books</font></span>
						<div class="rb-overlay">
							<span class="rb-close">close</span>
							<div class="rb-week">
								<div><span class="rb-city">Newly Added Books</span><span class="icon-clima-7"></span><span><center><font size=7>Recently added books</font></center></span></div>
								<div id="m" style="background-color:#E05C3E;">
									<center>
									<br><br><br><br><br><br><br><br><br><br>
									<form id="search5" method="get" action="search.php">
										
										<select class="se" name="subcat">
											<option value="all" disabled selected >Select Catagory</option>
											<option value="ec">Electronics: Engg</option>
											<option value="ee">Electrical: Engg</option>
											<option value="cs">Computer Science: Engg</option>
											<option value="me">Mechanical: Engg</option>
											<option value="ce">Civil: Engg</option>
											<option value="maths">Mathematics: Degree</option>
											<option value="phy">Physics: Degree</option>
											<option value="che">Chemistry: Degree</option>
											<option value="ebm">Economics: Degree</option>
											<option value="hum">Humanites: Degree</option>
											<option value="other">Others</option>
										</select><input type="button" onclick="search5()" value="Search" class="buy_but" style="font-size:18px; height:48px; vertical-align:bottom;">
											
										<script>
											function search5() {
												document.getElementById("search5").submit();
											}
										</script>
									</form>
									</center>
								</div>
							</div>
						</div>
					</li>
					
					<li class="icon-clima-9" align="left">
						<h3>Sign Up</h3><span class="rb-temp"><font size="4">Not yet Registerd!</font></span>
						<div class="rb-overlay">
							<span class="rb-close">close</span>
							<div class="rb-week">
								<div><span class="rb-city">Sign Up</span><span class="icon-clima-8"></span><span><font size="8"><center>Enter details</center></font></span></div>
								<div id="m" style="background-color:#FFC247">
								
										<form id="branch16" method="post" action="signup.php">
										<table align="left" width="100%" >
										
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												Name : 
											<td width="50%" align="left">
												<input  type="text" class="in_login" name="name" required>
										
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												Username: 
											<td width="50%" align="left">
												<input  type="text" class="in_login" name="username" width="150" required>
										
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												Password: 
											<td width="50%" align="left">
												<input  type="password" class="in_login" name="password" required>
											
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												Email: 
											<td width="50%" align="left">
												<input  type="text" placeholder="verify email after sign up" class="in_login" name="email" width="150" style="font-size:15px;" required>
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
												Mob: 
											<td width="50%" align="left">
												<input  type="text"  class="in_login" name="mob" required>
											
										<tr>
											<td width="5%" align="left">
											<td width="10%" align="left">
											<td width="5%" align="center">
											
											<br><input type="submit" class="signup_but" name="sign" value="Sign Up" onclick="myFunction16()" >   &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 
										</table>	
										
										</form>
										<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><a href="signup.php" onclick="myFunction16()"><span class="icon-clima-2" style="opacity:0.6; color:#FE9A2E"></span></a>
										
										<script>
											function myFunction16() {
												document.getElementById("branch16").submit();
											}
										</script>
								</div>
							</div>
						</div>
					</li>
					
					<li class="icon-clima-10" align="left">
						<h3>Log In</h3><span class="rb-temp"><font size="4">Explore more</font></span>
						<div class="rb-overlay">
							<span class="rb-close">close</span>
							<div class="rb-week">
								<div><span class="rb-city">Log in</span><span class="icon-clima-10"></span><span><font size="8"><center>Books Reborn</center></font></span></div>
								<div id="m" style="background-color:#6AB46A;">
									<div style="background-color: #4B954B; height:250px;">
										<br><br><br>
										<form id="branch13" method="post" action="login.php">
										
											Username:<input  type="text" class="in_login" name="username"><br>
											Password:<input  type="password" class="in_login" name="password"><br><br>
											<center><input type="button" class="login_but" value="Log in" onclick="myFunction13()" ></center>
											
										</form>
										<a href="login.php" onclick="myFunction13()"><span class="icon-clima-2" style="opacity:0.6; color:#4B954B"></span></a>
										
										<script>
											function myFunction13() {
												document.getElementById("branch13").submit();
											}
										</script>
									</div>
								</div>
							</div>
						</div>
					</li>
					
					<li class="icon-clima-11 rb-span-4">
						<h3>LongLiveBook</h3><span class="rb-temp">Books Reborn</span>
						<div class="rb-overlay">
							<span class="rb-close">close</span>
							<div class="rb-week">
								<div><span class="rb-city"><font size="9">LongLiveBook</font></span><span class="icon-clima-11"></span><span><font size="7">Books Reborn</font></span></div>
								<div id="m" style="background-color:#629393;">
									<font size=10">
										<br><br><br>
										<div style="background-color:#496E6E;">
										<center>Keep Supporting<br>
										<img src="template_img/fbicon.png" height=50 width=50 href="https://www.facebook.com/pages/LongliveBook/783050291778462" />
										<a href="https://www.facebook.com/pages/LongliveBook/783050291778462">/ Longlivebook</a>
										</center>
										</div>
									</font>
								</div>
							</div>
						</div>
					</li>
				</ul>
		
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
