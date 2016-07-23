<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
<script>
	$(document).ready(function(){
            $("#submit").click(function(){
                var element= document.getElementsByName("mail").value;
                $.ajax({
                    type:'POST',
                    url:'registerpr.php',
                    data: {'mail': element},
                    success: function(data){
                        $("#response").html(data);
                    }
                });
            });
        });
				</script>
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
									<h1 class="title">Welcome to Registeration.</h1>
						
									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">You are successfully Registered..</font>';
												echo '<br><br>';
											}
										
										?>
									
										<table>
											<form action="registerpr.php" method="POST">
												<tr>
													<td><b>Full Name :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='fnm' onblur="validateEmptyF(this)"><br>
													<span id="firstname" class=r></span></td>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													 <td><b>User Name :</b>&nbsp;&nbsp;</td>
													 <td><input type='text' size="30" maxlength="30" name='unm' id="usrname" onblur="validateEmptyU(this)"><br>
													 <span id="username" class=r></span></td>
													 <td>&nbsp;</td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Password :</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='pwd' size="30" onblur="validatePassword(this)"><br>
													 <span id="epwd" class=r></span>
													 </td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Confirm Password:</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='cpwd' size="30" onblur="validatePassword(this)"><br>
													<span id="epwd" class=r></span>
													</td>
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Gender:</b>&nbsp;&nbsp;</td>
													<td><input type="radio"  value="Male" name="gender" id='m'><label> Male</label>&nbsp;&nbsp;&nbsp;
														<input type="radio" value="Female" name="gender" id='f'><label>Female</label></td>
														<td>&nbsp;</td>
												</tr>
												
												<tr><td>&nbsp;</tr>
																				
												<tr>
													<td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='mail' size="30" onblur="validateEmail(this)"><br>
													 <span id="eaddress" class=r></span></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Contact No.:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='contact' size="30" onblur="validatePhone(this)"><br>
													 <span id="phone" class=r></span></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												

												<tr><td>&nbsp;</tr>
												
												
												
												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="  REGISTER  " id="submit">
													</td>
												</tr>
											</form>
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
