<?php session_start();?>

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
							<h1 class="title">Welcome to the Ebook Store
							
							</h1>
							<div class="entry">
								<br>
								<p>
								E-Book store is currently new in marketplace.
								Provides a wide collection of e-books to customer's interest.
								You can discover all-new,rising author books.
								Books are segregate by providing genres like Astrology,Sports,
								Business,Tourism etc.
								</p>
								<br>		
								
								<object width="550" height="400">
								
								<embed src="books.swf" width="550" height="400">
								</embed>
								</object>
								<br><br>
								<p>
								The E-book store is started as an online bookseller.
								We're glad to have you in the E-Book store community.
								</p>
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
