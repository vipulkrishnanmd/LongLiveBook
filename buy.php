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
$key=$_GET["key"];

$servername = "localhost";
$username = "longlive_user";
$password = "Dreams0nfire0";
$dbname = "longlive_data";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}




if(isset($_SESSION['username']))
{
	$check= mysqli_query($conn,"SELECT * FROM users
		WHERE username='$_SESSION[username]'");
		
		
		
		while($row = mysqli_fetch_array($check))
		{						
						
			$verify=$row['verify'];

		}
	
	if($verify!="verified")
	{
		echo '<script language="javascript">

		window.alert("Verify email address before purchasing \n We have sent an email verification link to your email id.")
		window.location.href="cart.php";
		</script>';
		exit;
			
	}
			
						
			

}
else
{



	echo '<script language="javascript">

			window.alert("Please log in to continue..... ")
				window.location.href="login.php";
	
	</script>';



}


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
					<td bgcolor="#3399CC" width="30%" height="500px">
					
					<font size="8" color="white">
					<center><strong>Order Confirmation</strong></center>
					</font>
					</td>
					
					
					<td bgcolor="#297aa3" width="70%" height="500px" valign="top">
					
					<?php

 

    if(isset($_POST['corder']))
    {
         
    


            $result7 = mysqli_query($conn,"SELECT * FROM orders");
		
		
		
				while($row = mysqli_fetch_array($result7))
				
				{						
						

						$od=$row['orderid'];
                        $slno=$row['slno'];
                                               

						
						
										
				}
            $od++;
            $slno++;
            $oid="OD".$od;
     

            
           for($i=1;$i<$_SESSION['no'];$i++)
           {
               
                    $t5="cart".$i;   
                    $result8 = mysqli_query($conn,"SELECT * FROM books
				WHERE no='$_SESSION[$t5]'");

                               while($row = mysqli_fetch_array($result8))
				
				{						
						

						$book=$row['book'];
                                                $seller=$row['user'];
                                                 $seller_num=$row['mob'];

                                                
                                                
						
						
										
				}
				
				mysqli_query($conn,"UPDATE books SET status='Sold' WHERE no='$_SESSION[$t5]'");


                  



                
                $bids=$_SESSION[$t5]." - ".$book.'<br>'.$bids;
                $sellers=$seller.'<br>'.$sellers;
                $sellers_num=$seller_num.'<br>'.$sellers_num;
				
				
				

         

               
               

           }
            
      
		  
		 $buyername=$_SESSION['buyername'];
		$buyermob=$_SESSION['buyermob'];


			$data="INSERT INTO orders (slno, book,seller,buyer,buyermob,orderid,sellermob)
			VALUES($slno,'$bids','$sellers','$buyername','$buyermob',$od,'$sellers_num')";
			
			
			
			
			if (!mysqli_query($conn,$data))
			{
				die('Error: ' . mysqli_error($conn));
			}









$result9 = mysqli_query($conn,"SELECT * FROM orders
				WHERE slno=$slno");

                               while($row = mysqli_fetch_array($result9))
				
				{						
						

						$bookv=$row['book'];
                                                

                                                
                                                
						
						
										
				}









  
           
           
           for($i=1;$i<$_SESSION['no'];$i++)
           {

               $t="cart".$i; 
               $_SESSION[$t]=NULL;
               

           }

           $_SESSION['no']=1;
		   
		   echo '<SCRIPT>
											window.alert("ORDER CONFIRMED. \n Order No.:'.$oid.'\n Please note down order no. for further reference \n Continue Shopping!")
											window.location.href="index.php";
        
				</SCRIPT>';
											
											

           






    }


else
{

$_SESSION['buyername']=$_POST['nm'];
$_SESSION['buyermob']=$_POST['mn'];
$_SESSION['email']=$_POST['email'];

/*<th bgcolor="gray" height="30" width="70"> Sl No.<th bgcolor="gray" style="min-width:500;"> Book name<th bgcolor="gray">Price';*/
echo '
	<br>
	<table width="100%">
		<tr>
		<td width="8%">
		<td><font size="4" color="white">Name : '.$_POST['nm'].'<br>Mob No. : '.$_POST['mn'].'<br>Email : '.$_POST['email'].

	'</table><br>


</font><table width="100%">';



$total=0;

for($i=1;$i<$_SESSION['no'];$i++)

{
 $t="cart".$i;     
 $result1 = mysqli_query($conn,"SELECT * FROM books
				WHERE no='$_SESSION[$t]'");
		
		
		
				while($row = mysqli_fetch_array($result1))
				
				{						
						

						$book=$row['book'];
                                                $sprice=$row['sprice'];

						
						
										
				}


       $total=$total+$sprice;
      
      echo '<tr height=40><td align="center" style="border-bottom: 1px solid;">'.$i.'</td><td width =500 style="border-bottom: 1px solid;">'.$book.'<td width=60 style="border-bottom: 1px solid;" align="center">'.$sprice.'</tr>';




}


echo '<tr height=50><td style="border-bottom: 3px double;"><td align="center" style="border-bottom: 3px double;"><b>Total</b><td align="center" style="border-bottom: 3px double;">'.$total.'</table>';



echo '
<br>
<center>
      
 
     <form id="branch30" action="buy.php" method="post">
     <input type="hidden" name="buy" value="'.$total.'">
     <input type="submit" name="corder" value=" Confirm Order " align="center" class="buy_but" style="font-size:18px; width:250px;" onclick="myFunction30()"></form>    
	 
	 
	 <script>
							function myFunction30() {
							document.getElementById("branch30").submit();
							}
	</script>
	&nbsp &nbsp  &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp  
     <form action="cart.php" mehod="get"><input type="submit" name="clear" value="Cancel Order" class="buy_but" style="font-size:18px; width:150px;"  align="left"> </form>'.


'</center>';


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
</html

	


