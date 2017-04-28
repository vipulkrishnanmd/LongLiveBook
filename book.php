<?php

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
					<td bgcolor="#3399CC" width="70%" height="500px">
					
					<font size="6" color="white">

					
					

<?php

if(!(isset($_POST['bid'])))
{




}
else if(isset($_SESSION['no']))
    {
      //  echo "set";
        $t="cart".$_SESSION['no'];
     //   echo $t;
        if(isset($_POST['cart']))
{

         $_SESSION[$t]= $_POST['bid'];      
         $_SESSION['no']++;
//echo "<br>".$_SESSION['$t'];

	echo '<SCRIPT>
        window.alert("Cart Added")
        
        </SCRIPT>';

}
    //    echo ".<br>".$_POST['bid'];
    }
    

else
    {

         if(isset($_POST['cart']))
         {

             $_SESSION['cart1']=$_POST['bid'];
             $_SESSION['no']=1;
             $_SESSION['no']++;
			 echo '<SCRIPT>
			window.alert("Cart Added")
			</SCRIPT>';
 

         }

   }


?>

<?php
							$id=$_GET["id"];

							$servername = "localhost";
							$username = "longlive_user";
							$password = "Dreams0nfire0";
							$dbname = "longlive_data";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " . $conn->connect_error);
							} 


							$sql = "SELECT * FROM books WHERE no=$id";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) 
							{
    
								// output data of each row
								while($row = $result->fetch_assoc()) 
								{

									echo '<div align="left" style="">
											<table id="datain" bgcolor="" width="99.2%" style=" margin-top:-54px; margin-left:3px;">
												<tr bgcolor="#3399CC">
													<td  height=45 style="
    border-bottom: 2px white solid ; padding:5px; ">
														<font size="5" color="white">'.$row["book"].'<font size="3" color="white"> by '.$row["auth"].'
													</td>
												</tr>
												
												<tr>
												<td height="10%" width="8%" bgcolor="">
													<table bgcolor="" width="100%">
														<tr>
															<td style="padding-left:15px;" valign="top" width=20% height=80% bgcolor="">
																<br><img src="fotos/'.$row["image"].'" width="90%"  >
															</td>
			
															<td width="55%" valign="top" bgcolor="">
																<font size="5">
																<table bgcolor="" width="100%">
				
																	<tr>
																		<td style="padding: 20px; border-bottom:1px gray solid;">
																			<i><font face="Comic Sans" size="4" color="#424242"><br>Type: '.$row["type"].
																			'<br>Category: '.$row["cat"].'<br>Subcategory: '.$row["subcat"].
																			'<br>Last Updated on: '.$row["date"].'</i>
																		</td>
																	</tr>

																	<tr>
																		<td style="padding: 20px;">
																			<i><font face="Comic Sans" size="4" color="#424242">
																			<div id="bubble">Description: '.$row["description"].'</div></i>
																		</td>
																	</tr>
										
																	<tr>
																		<td>
					
																			<font size="3" color="black">
																			Rs. <del>'.$row["aprice"].'</del></font><br><font size="6" color="black">Rs. '.$row["sprice"].'</font>
																			<font size="3" color="black">(FREE DELIVERY)<br><br>
																	<tr height="20">
																		<td bgcolor="">
							
																			<table width="100%">
																				<tr>
																					<td width="50%">
						
																						<div style="background-color:#990099; width:100%;">
	
																							<link rel="shortcut icon" href="../favicon.ico"> 				
																							<link rel="stylesheet" type="text/css" href="css_button/default.css" />
																							<link rel="stylesheet" type="text/css" href="css_button/component.css" />
																							<script src="js_button/modernizr.custom.js"></script>
		
		
																							<form action="" method="post"> 
       
																								<button class="btn btn-5 btn-5a icon-cart" name="cart">
																								<span><font color="white">ADD TO CART</font></span>
																								</button>
																								<input type="hidden" name="bid" value="'.$row["no"].'" >
																							</form>
																						</div>
								
																					<td bgcolor="" width="50%" >
						
																						<div style="background-color:#33CC00; width:100%; ">

																							<form method="get" action="cart.php">
																								<button class="btn btn-5 btn-5b icon-cart-2" name="id" value="'.$row["no"].'"><span><font color="white">BUY NOW</font></span></button>
																							</form>
								
									
																						</div>
																			</table>
																
																</table>
														
													</div>';
		


}}



		$numbers = array();
		$temp="Open for sale";
		$result10 = mysqli_query($conn,"SELECT * FROM books");
		while($row = mysqli_fetch_array($result10))
				
		{						
						
			if($row['status']==$temp)
				$numbers[] = $row['no'];
						
						
										
		}
		
		//print_r(array_rand($numbers,1));
		$pos = array_rand($numbers, 1);
		$rand = $numbers[$pos];

		
		
		//print_r($numbers);$friends[$winner]
		
		$result1 = mysqli_query($conn,"SELECT * FROM books");
		while($row = mysqli_fetch_array($result1))
				
		{						
						
						$max=$row['no'];
						
						
										
		}
		

			echo '<table bgcolor="" width="100%" >';
		 
		
               $result2 = mysqli_query($conn,"SELECT * FROM books WHERE no=$rand");
		while($row = mysqli_fetch_array($result2))
				
		{						
						
						$b1=$row['book'];
                        $id1=$row['no'];
						$a1=$row['auth'];
						$p1=$row['sprice'];
						$ap1=$row['aprice'];
                        $im1=$row['image'];

						
										
		}
                $pos = array_rand($numbers, 1);
				$rand = $numbers[$pos];

               $result3 = mysqli_query($conn,"SELECT * FROM books WHERE no=$rand" );
		while($row = mysqli_fetch_array($result3))
				
		{						
						
						$b2=$row['book'];
                        $id2=$row['no'];
						$a2=$row['auth'];
						$p2=$row['sprice'];
						$ap2=$row['aprice'];
                        $im2=$row['image'];
						
										
		}
                $pos = array_rand($numbers, 1);
				$rand = $numbers[$pos];

                $result4 = mysqli_query($conn,"SELECT * FROM books WHERE no=$rand");
		while($row = mysqli_fetch_array($result4))
				
		{						
						
						$b3=$row['book'];
						$id3=$row['no'];
						$a3=$row['auth'];
						$p3=$row['sprice'];
						$ap3=$row['aprice'];
                        $im3=$row['image'];
						
										
		}
		
		
				$rand=rand(1, $max);
		       $result5 = mysqli_query($conn,"SELECT * FROM books WHERE no=$rand");
		while($row = mysqli_fetch_array($result5))
				
		{						
						
						$b4=$row['book'];
                        $id4=$row['no'];
						$a4=$row['auth'];
						$p4=$row['sprice'];
						$ap4=$row['aprice'];
                        $im4=$row['image'];
						
										
		}
		
		
	$pos = array_rand($numbers, 1);
		$rand = $numbers[$pos];

		       $result6 = mysqli_query($conn,"SELECT * FROM books WHERE no=$rand");
		while($row = mysqli_fetch_array($result6))
				
		{						
						
						$b5=$row['book'];
                        $id5=$row['no'];
						$a5=$row['auth'];
						$p5=$row['sprice'];
						$ap5=$row['aprice'];
                        $im5=$row['image'];
						
										
		}
		
		
		$pos = array_rand($numbers, 1);
		$rand = $numbers[$pos];

		       $result7 = mysqli_query($conn,"SELECT * FROM books WHERE no=$rand");
		while($row = mysqli_fetch_array($result7))
				
		{						
						
						$b6=$row['book'];
                        $id6=$row['no'];
						$a6=$row['auth'];
						$p6=$row['sprice'];
						$ap6=$row['aprice'];
                        $im6=$row['image'];
						
										
		}
		
		
		$pos = array_rand($numbers, 1);
		$rand = $numbers[$pos];

		       $result8 = mysqli_query($conn,"SELECT * FROM books WHERE no=$rand");
		while($row = mysqli_fetch_array($result8))
				
		{						
						
						$b7=$row['book'];
                        $id7=$row['no'];
						$a7=$row['auth'];
						$p7=$row['sprice'];
						$ap7=$row['aprice'];
                        $im7=$row['image'];
						
										
		}
		
		
		$pos = array_rand($numbers, 1);
		$rand = $numbers[$pos];

		       $result9 = mysqli_query($conn,"SELECT * FROM books WHERE no=$rand");
		while($row = mysqli_fetch_array($result9))
				
		{						
						
						$b8=$row['book'];
                        $id8=$row['no'];
						$a8=$row['auth'];
						$p8=$row['sprice'];
						$ap8=$row['aprice'];
                        $im8=$row['image'];
						
										
		}
		
echo '</td></tr>
     </table>


</td>
</tr></table></td></tr></table></td>


</font>';

$conn->close();

?>

					</font>
					</td>
					
					
					<td bgcolor="#2D87B4" width="30%" height="500px" valign="top">
						<table bgcolor="" width="96%" style=" margin-top:4px; margin-left:6px;">
							<tr bgcolor="#2D87B4">
								<td  height=45 style="box-shadow: 4px 4px 5px rgba(50, 50, 50, 0.75); ">
						
								<font size="4" color="white"><i>Similar Books</i>
						
							<tr>
								<td>
									<br>
									<table>
										<tr>
											<td>
												<div id="box">
													<a href="book.php?id=<?php echo $id1;?>">
													<table style="min-width:100%;">
														<tr height="95" >
															<td  width="30%" >
																<img src="fotos/<?php echo $im1;?>" height="95" width="100">
        
															</td>
															
															<td class="m1" width="90%"><font size="4" color="black">
																<font size="4" color="white">
																<?php echo $b1;?> 
																</font><font size="3" color="white"><br>
																&nbsp by
																<?php echo $a1;?> 
																</font>
																<left>
																	<br><font size="5" color="white">Rs. <font size="3" color="white"><del><?php echo $ap1;?> </del></font> <?php echo $p1;?> </font><font size="3" color="white">
																
																</left>
															</td>
													</table>
													</a>
												</div>
												
										<tr>
											<td>
												<div id="box">
													<a href="book.php?id=<?php echo $id2;?>">
													<table style="min-width:100%;">
														<tr height="95" >
															<td  width="30%" >
																<img src="fotos/<?php echo $im2;?>" height="95" width="100">
        
															</td>
															
															<td class="m1" width="90%"><font size="4" color="black">
																<font size="4" color="white">
																<?php echo $b2;?> 
																</font><font size="3" color="white"><br>
																&nbsp by
																<?php echo $a2;?> 
																</font>
																<left>
																	<br><font size="5" color="white">Rs. <font size="3" color="white"><del><?php echo $ap2;?> </del></font> <?php echo $p2;?> </font><font size="3" color="white">
																
																</left>
															</td>
													</table>
													</a>
												</div>
												
										<tr>
											<td>
												<div id="box">
													<a href="book.php?id=<?php echo $id3;?>">
													<table style="min-width:100%;">
														<tr height="95" >
															<td  width="30%" >
																<img src="fotos/<?php echo $im3;?>" height="95" width="100">
        
															</td>
															
															<td class="m1" width="90%"><font size="4" color="black">
																<font size="4" color="white">
																<?php echo $b3;?> 
																</font><font size="3" color="white"><br>
																&nbsp by
																<?php echo $a3;?> 
																</font>
																<left>
																	<br><font size="5" color="white">Rs. <font size="3" color="white"><del><?php echo $ap3;?> </del></font> <?php echo $p3;?> </font><font size="3" color="white">
																
																</left>
															</td>
													</table>
													</a>
												</div>
												
										<tr>
											<td>
												<div id="box">
													<a href="book.php?id=<?php echo $id4;?>">
													<table style="min-width:100%;">
														<tr height="95" >
															<td  width="30%" >
																<img src="fotos/<?php echo $im4;?>" height="95" width="100">
        
															</td>
															
															<td class="m1" width="90%"><font size="4" color="black">
																<font size="4" color="white">
																<?php echo $b4;?> 
																</font><font size="3" color="white"><br>
																&nbsp by
																<?php echo $a4;?> 
																</font>
																<left>
																	<br><font size="5" color="white">Rs. <font size="3" color="white"><del><?php echo $ap4;?> </del></font> <?php echo $p4;?> </font><font size="3" color="white">
																
																</left>
															</td>
													</table>
													</a>
												</div>
											</table>
										</table>
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