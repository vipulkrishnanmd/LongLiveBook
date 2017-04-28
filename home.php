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




	if(isset($_SESSION['username']))
			
	{	

		$t1=$_SESSION['username'];	
		$t2=$_SESSION['password'];
		
		$result = mysqli_query($con,"SELECT * FROM users
			WHERE username='$t1' AND password='$t2'");

	

	
		if(mysqli_num_rows($result))
		{
		
		
			header('Location:index.php');
			
		}
	
		else
		{
							
			echo 'Username not found Log in again....';
				
			session_unset();
			session_destroy();
		}


			
	}
				
	else
	{				
		$_SESSION['username']=$_POST['username'];	
		$_SESSION['password']=$_POST['password'];
		$t1=$_SESSION['username'];	
		$t2=$_SESSION['password'];
	
		$result = mysqli_query($con,"SELECT * FROM users
			WHERE username='$t1' AND password='$t2'");

	

	
		if(mysqli_num_rows($result))
		{
				
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			if(!(isset($_POST['bid'])))
			{




			}
			else if(isset($_SESSION['no']))
			{
			
				$t="cart".$_SESSION['no'];

				if(isset($_POST['cart']))
				{

					$_SESSION[$t]= $_POST['bid'];      
					$_SESSION['no']++;


					echo '<SCRIPT>
					window.alert("Cart Added")
        
					</SCRIPT>';


				}

			}
    

			else
			{

				if(isset($_POST['cart']))
				{

					$_SESSION['cart1']=$_POST['bid'];
					$_SESSION['no']=1;
					$_SESSION['no']++;
 

				}

			}


			?>


			<html>
			<link href="template.css" rel="stylesheet">
			<body>
			<div id="header" align="right">
			
					<div style="background-color: #6D7B8D; font-size:20px">
					<font color="white" >
					<a href="index.php" style="color:white; text-decoration:none;">
					<div id="menu">
					
					&nbsp &nbsp Home &nbsp </a></div>|<div id="menu"><a href="sell.php" style="color:white; text-decoration:none;">
					
					
					&nbsp &nbspSell My Book &nbsp</a></div>|<a href="logout.php" style="color:white; text-decoration:none;"><div id="menu">					
					&nbsp &nbsp Log out &nbsp </a></div>|<div id="menu"><a href="proceed.php" style="color:white; text-decoration:none;"> &nbsp &nbsp  Cart (
					
					<?php
					if(!(isset($_SESSION['no'])))
						echo "0";
					else
						echo ($_SESSION['no']-1); 
					
					?>
					)  &nbsp &nbsp </a></font>
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

				<br><br>
				<form action="index.php" method="get"> 
				<input class="textbox"type="text" placeholder="Enter the book name............." value="<?php echo $_GET['key']?>" name="key"> 
				<br><br> 
				<input id="bigbutton" type="submit" value="Search"/>
				<br>
				</form>

				<?php
				$key=$_GET["key"];
				$servername = "mysql15.000webhost.com";
				$username = "a9261839_a";
				$password = "dreams0nfire";
				$dbname = "a9261839_a";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) 
				{
					die("Connection failed: " . $conn->connect_error);
				} 

				for($index=1;$index<4;$index++)
				{
					$sql = "SELECT no,book, auth, uprice, sprice, aprice FROM books WHERE no=$index";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) 
					{
    
						// output data of each row
						while($row = $result->fetch_assoc()) 
						{
							if(stristr($row["book"], $key)!="")
							{
								echo '<a href="book.php?id='.$row["no"].'"><div id="res"  align="left" ><table><tr><td width="400"><b><font face="Lucida Bright" size="3" ><a href="book.php?id='.$row["no"].'" style="color: #2E2E2E; text-decoration: none;">'.$row["book"].'</b></font><br><font face="Courier" size="3" color="#424242"> &nbsp &nbsp '.$row["auth"].'</td><td bgcolor=""><font size="5" color="#B40404">Rs. </font></td><td width=100><b><font size="4" color="#B40404">'.$row["sprice"].'</b></font><br>&nbsp<font size="2" color=""><strike>'.$row["aprice"].'</strike></td><td><a href="book.php?id='.$row["no"].'" style="color: #2E2E2E; text-decoration: none;"><a href="proceed.php?id='.$row["no"].'"><img src="http://ccproduct.com/images/buy.png" width=150 height=50 ></a></td>
								<td>
								<form action="" method="post"> 
								<input type="submit" name="cart" value="Add to Cart" >
								<input type="hidden" name="bid" value="'.$row["no"].'" >
								</form>
								</td></tr> </table></a></div></font><br>';
        
							}
						}
    
					}
					else 
					{
						echo "...";
					}
				}

				echo "</table>";
				$conn->close();
				


			echo '</div>
			</body>
			</html>';
			?>
			









































































































			
			
			
			
			
			
			
			
			
		<?php
		}
	
		else
		{
							
			//echo 'Username not found';	
			
			
			
			if(!(isset($_POST['bid'])))
			{




			}
			else if(isset($_SESSION['no']))
			{
			
				$t="cart".$_SESSION['no'];

				if(isset($_POST['cart']))
				{

					$_SESSION[$t]= $_POST['bid'];      
					$_SESSION['no']++;


					echo '<SCRIPT>
					window.alert("Cart Added")
        
					</SCRIPT>';


				}

			}
    

			else
			{

				if(isset($_POST['cart']))
				{

					$_SESSION['cart1']=$_POST['bid'];
					$_SESSION['no']=1;
					$_SESSION['no']++;
 

				}

			}


			


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
					</div>|<div id="menu"><a href="proceed.php" style="color:white; text-decoration:none;"> &nbsp &nbsp  Cart ( ';
					
					
					if(!(isset($_SESSION['no'])))
						echo "0";
					else
						echo ($_SESSION['no']-1); 
					
					echo ')  &nbsp &nbsp </a></font>
					</div>
				</div>
				
				<center>

				<font color="white" size=5>
				<h2>LongLiveBook.com</h2>
				<br>

				</font>
				</center>


			</div>
			
			<div id="data" align="center">';

			
			
			
			
			
			



			echo '<br><br><br><br><br><br><br><br><br><br>
				<table>
				<tr height="30"><td bgcolor="blue" width="400" >
				<font color="white">
				Username/Password not found!!
				
				
				<tr height="100" style="border: blue 1px solid;"><td align="center" border="1" style="border: blue 1px solid;"> 
				Try another username/password.
				<a href="login.php"> Sign in again</a><br>
				<br>Or 
				<br>
				<a href="signup.php">Sign Up Now</a><br>
				<a href="index.php">Continue as a guest</a><br>
				</table>';
				
				
			echo '</div>
			</body>
			</html>';





			
			session_unset();
			session_destroy();
		}

	}
	
?>