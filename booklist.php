<?php session_start();

	
	$link=mysql_connect("localhost","root","vertrigo")or die("Can't Connect");
	
	mysql_select_db("ebook-store",$link) or die("Can't Connect to Database");
	
	$cat=$_GET['subcatid'];
	
	$totalq="select count(*) from book where b_subcat='$cat'";
	
	$totalres=mysql_query($totalq,$link) or die("Can't Execute Query");
	$totalrow=mysql_fetch_assoc($totalres);
	
	
	$page_per_page=6;
	
	$page_total_rec=$totalrow['total'];
	
	$page_total_page=ceil($page_total_rec/$page_per_page);
	
	
	if(!isset($_GET['page']))
	{
		$page_current_page=1;
	}
	else
	{
		$page_current_page=$_GET['page'];
	}
	
	
	

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
									<h1 class="title"><?php echo $_GET['subcatnm'];?></h1>
									<div class="entry">
										
										<table border="4" width="100%" >
											<br><br><br><br><br>
											<?php
												
												$k=($page_current_page-1)*$page_per_page;
											
												$query="select *from book where b_subcat='$cat' LIMIT ".$k .",".$page_per_page;
	
												$res=mysql_query($query,$link) or die("Can't Execute Query...");
	
												$count=0;
												while($row=mysql_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}	
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['b_id'].'&cat='.$_GET['subcatnm'].'">
														<img src="'.$row['b_img'].'" width="80" height="100">
														<br>'.$row['b_nm'].'</a>
													</td>';
													$count++;							
													
													if($count==2)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
										
										
										<br><br><br>
										<center>
										<?php
											
											if($page_total_page>$page_current_page)
											{
												echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page+1).'">Next</a>';
											}
											
											for($i=1;$i<=$page_total_page;$i++)
											{
												echo '&nbsp;&nbsp;<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
											}
											
											if($page_current_page>1)
											{	
												echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page-1).'">Previous</a>';
											}
											
										?>
										</center>
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
