<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
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
									<h1 class="title">Contact us</h1>
									
									<div class="entry" >
									
										<form action="contactpr.php" method="POST">
												

											<br>Name :<br>
												<input type='text' name='nm' size=35>
												<br><br><br>
												
												E-mail ID:<br>
												<input type='text' name='email' size=35>
												<br><br><br>
												
												Query:<br>
												<textarea cols="40" rows="10" name='query' ></textarea>
												<br><br><br>

												<input  type='submit' name='btn' value='   Send Enquiry   '  >

												
										</form>
									
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
