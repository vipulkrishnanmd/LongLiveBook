<?php

session_start();
?>



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


?>

<?php
if(isset($_GET['clear']))
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
if(isset($_SESSION['username']))
{
	echo '<html>
			<link href="template.css" rel="stylesheet">
			<body>
			<div id="header" align="right">
			
					<div style="background-color: #6D7B8D; font-size:20px">
					<font color="white" >
					<a href="index.php" style="color:white; text-decoration:none;">
					<div id="menu">
					
					&nbsp &nbsp Home &nbsp </a></div>|<div id="menu"><a href="sell.php" style="color:white; text-decoration:none;">
					
					
					&nbsp &nbspSell My Book &nbsp</a></div>|<a href="logout.php" style="color:white; text-decoration:none;"><div id="menu">					
					&nbsp &nbsp Log out &nbsp </a></div>|<div id="menu"><a href="proceed.php" style="color:white; text-decoration:none;"> &nbsp &nbsp  Cart (';
					
					
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


			</div>';




}

else
{
	echo '<html>
			<link href="template.css" rel="stylesheet">
			<body>
			<div id="header">
			
				<div id="top" align="right">
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

				
				<table width="100%" bgcolor="">
					<tr>
					<td width="12%">
									
						<img src="template_img/logo1.jpg" width="100%" height="100%" align="left" style=" margin-left:0%;vertical-align: text-top; font-family:Comic Sans; ">
						
						</img>
					
					<td  style=" margin-left:0%;vertical-align: text-top; font-family:Comic Sans; ">
						<table width="98%" bgcolor="">
						<tr>
						<td width="30%">
							<font color="white" size="7" face="Trebuchet MS" color="green">	
							LongLiveBook
						
						<tr>
						<td bgcolor="" width="45%">
									<font size="4" color="black" face="Courier New">
									<i><ul><ul><ul><ul>books reborn</i>
									</font>
									
						<td align="right" bgcolor="" width="55%">
							<form action="index.php" method="get">
							<table valign="middle" bgcolor="" width="100%"> 
								<tr>
								<td width="60%">
									<input class="textbox" type="text" placeholder="Enter the book name...." value="'.$_GET['key'].'" name="key"> 




									<link rel="shortcut icon" href="../favicon.ico"> 
									<link href="http://fonts.googleapis.com/css?family=Raleway:400,300,700" rel="stylesheet" type="text/css">
									<link rel="stylesheet" type="text/css" href="css_select/normalize.css" />
									<link rel="stylesheet" type="text/css" href="css_select/demo.css" />
									<link rel="stylesheet" type="text/css" href="css_select/cs-select.css" />
									<link rel="stylesheet" type="text/css" href="css_select/cs-skin-elastic.css" />
									<!--[if IE]>
									<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
									<![endif]-->
	


		
			
	
			
								<td width="35%">	
									<select class="cs-select cs-skin-elastic" name="subcat">
										<option value="all" disabled selected >Select Catagory</option>
										<option data-class="flag-france" value="ec">Electronics: Engg</option>
										<option  data-class="flag-brazil" value="ee">Electrical: Engg</option>
										<option  data-class="flag-argentina" value="cs">Computer Science: Engg</option>
										<option  data-class="flag-safrica" value="me">Mechanical: Engg</option>
									</select>
			
	
		<script src="js_select/classie.js"></script>
		<script src="js_select/selectFx.js"></script>
		<script>
			(function() {
				[].slice.call( document.querySelectorAll( "select.cs-select" ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
		</script>
	

								<td width="5%"><input id="but" type="submit" value=" "/>
								</tr>
							</table>
							</form>

					
					
							
							
							

						</table>
				</table>
			</div>';


}




?>


<div id="data" align="center">

<br><br><br>
<?php




echo '<form action="proceed.php" method="post"><table ><th bgcolor="gray" height="30" width="70"> Sl No.<th bgcolor="gray" style="min-width:500;"> Book name<th bgcolor="gray">Price<th bgcolor="gray">Change';

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
      
      echo '<tr height=40><td align="center" style="border-bottom: 1px solid;">'.$i.'</td><td width =500 style="border-bottom: 1px solid;">'.$book.'<td width=60 style="border-bottom: 1px solid;" align="center">'.$sprice.'
			<td align="center" style="border-bottom: 1px solid;"><input type="submit" name="'.$i.'" value="x"</input></tr>';




}


if(isset($_GET['id']))
{

$t1="id";
$result2 = mysqli_query($conn,"SELECT * FROM books
				WHERE no='$_GET[$t1]'");

                               while($row = mysqli_fetch_array($result2))
				
				{						
						

						$book=$row['book'];
                                                $sprice=$row['sprice'];
						
						
										
				}


      echo '<tr height=40><td align="center" style="border-bottom: 1px solid;">'.($i).'<td width =500 style="border-bottom: 1px solid;">'.$book.'<td width=60 style="border-bottom: 1px solid;" align="center">'.$sprice.'
			<td align="center" style="border-bottom: 1px solid;">
			<input type="submit" name="'.($i).'" value="x"</input></tr>';


if(!(isset($_SESSION['no'])))
       $_SESSION['no']=1;

$t3=$_SESSION['no'];
$t4="cart".$t3;

$_SESSION[$t4]=$_GET['id'];
$total=$total+$sprice;
$_SESSION['no']++;


echo '<SCRIPT>
        window.alert("Cart Added")
		window.location.href="proceed.php";
        
        </SCRIPT>';


}
echo '<tr height=50><td style="border-bottom: 3px double;">&nbsp<td align="center" style="border-bottom: 3px double;"><b>Total</b><td align="center" style="border-bottom: 3px double;">'.$total.'<td align="center" style="border-bottom: 3px double;">&nbsp

<tr><td>
<td align="">';



$n=$_SESSION['username'];
$result4 = mysqli_query($conn,"SELECT * FROM users
				WHERE name='$n'");

                               while($row = mysqli_fetch_array($result4))
				
				{						
						

						$nm=$row['name'];
                                                $mob=$row['mob'];
						
						
										
				}
echo '</form>';

echo '<form action="buy.php" method="post">
     <table>
     <tr><td>Name : <td><input name="nm" value="'.$nm.'"></tr>';
echo '<tr><td>Mobile No. : <td><input name="mn" value="'.$mob.'"><br></tr></table>';



echo '<tr><td>
<td align="center">
<br>
      
 
     
     <input type="hidden" name="buy" value="'.$total.'">
     <input type="submit" name="b" value=" Buy "align="center" style="width: 100px; height:30px;"></form>    
     </tr>
     <tr><td><td align="center">
     <form action="proceed.php" mehod="get"><input type="submit" name="clear" value="Clear all carts" align="left"> </form>
     </tr>
     
</table>';








?>	






</div>
</body>
</html>				