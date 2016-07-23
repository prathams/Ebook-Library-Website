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
				<div id="SliderName_2" class="SliderName_2">
					<img src="img/1.jpg" width="700" height="450" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
					<map name="img1map">
						<area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
						<area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
					</map>
					<div class="SliderName_2Description"><strong>Open a free account</strong></div>
					<img src="img/2.jpg" width="700" height="450" alt="Demo2 second" title="Demo2 second" />
					<div class="SliderName_2Description"><strong>Large collection of best books</strong></div>
					<img src="img/3.jpg" width="700" height="450" alt="Demo2 third" title="Demo2 third" />
					<div class="SliderName_2Description"><strong>No renewals, no extra charge</strong></div>
					<img src="img/4.jpg" width="700" height="450" alt="Demo2 fourth" title="Demo2 fourth" />
					<div class="SliderName_2Description"><strong>Check out our library</strong></div>
				</div>
				<div id="SliderNameNavigation_2"></div>
				<script type="text/javascript">
					effectsDemo2 = 'rain,stairs,fade';
					var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 700, height: 450, effects: effectsDemo2,
						display: {
							autoplay: 3000,
							loading: {background: '#000000', opacity: 0.5, image: 'img/loading.gif'},
							buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
							description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
							navigation: {container: 'SliderNameNavigation_2', label: '<img src="img/clear.gif" />'}
						}
					});
				</script>
			</div>
			</div>
			
			</div>
			<!-- end header -->
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						
						
 

 <table border='1' align='center'>
<tr>
<th>Order No. </th>
<th>Purchaser</th>
<th>Date</th>
<th>Amount Paid</th>
</tr>
<?php
 $conn = mysqli_connect('localhost','root','vertrigo','ebook-store');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$_SESSION['username']= username;
$name = $_POST['username'];
mysqli_select_db($conn,"ebook-store");
$name=$_GET['username'];
$order1="SELECT * FROM order where username ='$name' ";
$data = mysqli_query($conn,$order1);
$result = mysqli_num_rows($data);
while ($row=mysqli_fetch_array($data)) 
{	
  	echo '
											<tr>
											<td> '.$row['O_no'].'</td>
											<td> '.$row['username'].'</td>
											<td> '.$row['Date'].'</td>
											<td> '.$row['Price'].'</td>
											</tr>
										';
}
mysqli_close($conn);
?>
</table>

						
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
