<?php session_start();
	$link=mysql_connect("localhost","root","vertrigo")or die("Can't Connect");
			
	mysql_select_db("ebook-store",$link) or die("Can't Connect to Database");
	
	$name=$_GET['name'];
	
	$q="select * from order_history where username=$name";
	
	$res=mysql_query($q,$link) or die("Can't Execute Query..");
	$row=mysql_fetch_assoc($res);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>

		<?php
			include("includes/head.inc.php");
		?>
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
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
										
									}
									}
								
								?>
							
								</table>						
								</div>
							
						</div>
						
					</div>
					<!-- end content -->
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
