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
	
		
						
						

	
	

?>


<?php
if(isset($_POST['clear']))
{

       for($i=1;$i<$_SESSION['no'];$i++)
       {

               $t="cart".$i; 
               $_SESSION[$t]=NULL;
               

       }

       $_SESSION['no']=1;

		echo '<SCRIPT>
        window.alert("Cart Cleared")
		window.location.href="index.php";
        
        </SCRIPT>';





}

for($j=1;$j<$_SESSION['no'];$j++)
{
	if(isset($_POST[$j]))
	{
		$num=$_SESSION['no'];
		
		$x="cart".$j; 
        $_SESSION[$x]=NULL;
		for($k=$j;$k<$num-1;$k++)
		{
			$y="cart".$k;
			$z="cart".($k+1);
			
			$_SESSION[$y]=$_SESSION[$z];
		
		}
	
	$_SESSION['no']--;

		
		
		
		

	}



}
?>
	

<?php


	
	$total=0;
	
	
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
					<td bgcolor="#3399CC" width="30%" height="500px">
					
					<font size="8" color="white">
					<center><strong>Carted Items</strong></center>
					</font>
					</td>
					
					<form id="branch17" method="post" action="cart.php">
					<td bgcolor="#297aa3" width="70%" height="500px" valign="center">
					
						
							<table align="left" width="100%" border="1">
									
								<form action="cart.php" method="post">
										<tr height=40 bgcolor="#216283">
											<th width="8%" align="center">
												<font color="white" size="4">Sl No.
											<th width="60%" align="center">
												<font color="white" size="4">Book											
											<th width="12%" align="center">
												<font color="white" size="4">Price
											<th width="15%" align="center">
												<font color="white" size="4">Change
											
										<?php

										for($i=1;$i<$_SESSION['no'];$i++)
										{
												
											$t="cart".$i;     
											$result1 = mysqli_query($conn,"SELECT * FROM books WHERE no='$_SESSION[$t]'");
				
											while($row = mysqli_fetch_array($result1))
				
											{						
						

												$book=$row['book'];
                                                $sprice=$row['sprice'];

						
						
										
											}


											$total=$total+$sprice;
      
											echo '
											<tr height=40>
												<td align="center" style="border-bottom: 1px solid;">'.$i.'</td><td width =500 style="border-bottom: 1px solid;"><font color="white" size="4">'.$book.'<td width=60 style="border-bottom: 1px solid;" align="center"><font color="white" size="4">'.$sprice.'
												<td align="center" style="border-bottom: 1px solid;"><input type="submit" name="'.$i.'" value=" x " onclick="myFunction17()"></input></tr>';




										}


										if(isset($_GET['id']))
										{

											$t1="id";
											$result2 = mysqli_query($conn,"SELECT * FROM books WHERE no='$_GET[$t1]'");

											while($row = mysqli_fetch_array($result2))
				
											{						
						

												$book=$row['book'];
                                                $sprice=$row['sprice'];
						
						
										
											}


											echo '<tr height=40><td align="center" style="border-bottom: 1px solid;">'.($i).'<td width =500 style="border-bottom: 1px solid;">'.$book.'<td width=60 style="border-bottom: 1px solid;" align="center">'.$sprice.'
													<td align="center" style="border-bottom: 1px solid;">
													<input type="submit" name="'.($i).'" value=" x " onclick="myFunction17()"></input></tr>';


											if(!(isset($_SESSION['no'])))
												$_SESSION['no']=1;

											$t3=$_SESSION['no'];
											$t4="cart".$t3;

											$_SESSION[$t4]=$_GET['id'];
											$total=$total+$sprice;
											$_SESSION['no']++;


											echo '<SCRIPT>
											window.alert("Cart Added")
											window.location.href="cart.php";
        
											</SCRIPT>';


										}
										echo '<tr height=50><td style="border-bottom: 3px double;">&nbsp<td align="center" style="border-bottom: 3px double;"><b>Total</b><td align="center" style="border-bottom: 3px double;">'.$total.
										'<td align="center" style="border-bottom: 3px double;"><form action="cart.php" mehod="get"><input type="submit" name="clear" class="buy_but" style="font-size: 15px; height:45px;" value="Clear all carts" align="left" onclick="myFunction18()"> </form>
									
									
									</table>';



										$n=$_SESSION['username'];
										$result4 = mysqli_query($conn,"SELECT * FROM users WHERE name='$n'");

										while($row = mysqli_fetch_array($result4))
				
										{						
						

											$nm=$row['name'];
                                            $mob=$row['mob'];
											$email=$row['email'];
																
										}
								echo '</form>';

								echo '<form action="buy.php" method="post">
										<br><table>
											<tr><td width="15%">Name : <td width="35%"><input name="nm" class="in_buy" style="font-size: 18px;" value="'.$nm.'" required>';
											echo '<td width="15%">Mobile No. : <td width="35%"><input name="mn" class="in_buy" height="30" style="font-size: 18px;" value="'.$mob.'" required><br></tr>
											
										</table>';

							echo '
							<br>
							<center>
							<input type="hidden" name="buy" value="'.$total.'">
							<input type="submit" name="b" value=" Buy " class="buy_but" align="center" ></form>    
															

							</form>';		
						
						?>
						</table>	
										
						<script>
							function myFunction17() {
							document.getElementById("branch17").submit();
							}
						</script>
						
						<script>
							function myFunction18() {
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

	


