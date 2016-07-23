<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
<script type="text/javascript" src="js/sliderman.1.3.8.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	<link rel="stylesheet" type="text/css" href="default.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<?php
			include("includes/head.inc.php");
		?>
		<script>
            $(document).ready(function(){
                $("#onclick").click(function() {
				$("#SliderName_2").hide();
$("#history").css("display", "block");
});
$("#cancel5").click(function() {
$(this).parent().parent().hide();
$("#SliderName_2").show();
});
            });
		</script>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				<div id="wrapper">
					<div id="examples_outer">
						<div id="slider_container_2">
			
					<?php
							include("includes/logo.inc.php");
					?>
						</div>
					</div>
				</div>
			<!-- end header -->
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">My Cart</h1>
							<div class="entry">
						
							<form action="download_script.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<Td> <b>No
									<td> <b>Category
									<td> <b>Product
									<td> <b>Qty
									<td> <b>Rate
									<td> <b>Price
									<td> <b>Delete
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											<td> <a href="cartpr.php?id='.$id.'">Delete</a>
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
										
										
									}
									}
									
									$con = mysql_connect("localhost","root","vertrigo")or die("Can't Connect");
							mysql_select_db("ebook-store",$con) or die("Can't Connect to Database...");
							
								$i = 1;
								$today = getdate();
								$val=$x['qty']*$x['rate'];
								$data = "INSERT INTO order(O_no,username,Date,Price) VALUES ('$i', '$id', '$today', '$val');";
						
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
														
							</form>
							<a id="onclick">Purchase</a>
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
						<div id="history">
<form  method = "post" name="ipregister" id="theForm" action= "download_script.php"> 
<img src="button_cancel.png" class="img5" id="cancel5" height="25px" width="25px"/>
<h2>Order Confirmation</h2>
<table width="100%" border="0">
								<tr >
									<Td> <b>No
									<td> <b>Category
									<td> <b>Product
									<td> <b>Price
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> '.($x['qty']*$x['rate']).'
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;										
										
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Pay Amount:</h4>
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							
								</table>

<fieldset class="account-action" align="center">
            
			<label><button  align="right" alt="Submit" type="submit" value="Submit" class="Login">Download</button></label>			
		   
</fieldset>

</form>
</div>
		</div>
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end page -->
			
			<!-- start footer -->
			<div id="footer">
						<?php
							include("includes/footer.inc.php");
						?>
			</div>
			<!-- end footer -->
</body>
</html>
