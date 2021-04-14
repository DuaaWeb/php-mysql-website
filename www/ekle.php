<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from ayse_users where user_id='$session_id'")or die('Hatalı Bilgiler');
if (!$result) {
	header('location:index.php');
} 
?>

<html lang="tr">
<head> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Giriş</title>
		<style type="text/css">
		body {
		  color: #fff;
		  font: 87.5%/1.5em 'Open Sans', sans-serif;
		  background:url(img/bg.jpg)no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;}
		.form-wrapper {
		  width:300px;
		  height:370px;
		  position: absolute;
		  top: 50%;
		  left: 48%;
		  margin: -184px 0px 0px -155px;
		  background: rgba(0,0,0,0.27);
		  padding: 15px 25px;
		  border-radius: 5px;
		  box-shadow: 0px 1px 0px rgba(0,0,0,0.6),inset 0px 1px 0px rgba(255,255,255,0.04);
		}
		.form-item {
		width:100%;
		}
		h3{
		  font-size: 25px;
		  font-weight: 640;
		  margin-bottom: 10px;
		  color: #e7e7e7;
		  padding:6px;
		  font-family:'sans-serif','helvetica';
		}
		.form-item input{
		  border: none;
		  background:transparent;
		  color: #000;
		  margin-top:11px;
		  font-family: 'Open Sans', sans-serif;
		  font-size: 1.2em;
		  height: 49px;
		  padding: 0 16px;
		  width: 100%;
		  padding-left: 55px;

		}
		.form-item input:focus {
		  outline: none;
		  border:1.4px solid #cfecf0;
		}
		.button-panel {
		  margin-bottom: 20px;
		  padding-top: 10px;
		  width: 100%;
		}
		.button-panel .button {
		  background: #00b6df;
		  border: none;
		  color: #fff;
		  cursor: pointer;
		  height: 50px;
		  font-family: 'helvetica','Open Sans', sans-serif;
		  font-size: 1.2em;
		  text-align: center;
		  text-transform: uppercase;
		  transition: background 0.6s linear;
		  width: 100%;
		  margin-top:10px;
		}
		.button:hover {
		  background: #6eb7cb;
		}
		.form-item input, .button-panel .button {
		  border-radius: 2px
		}
		.reminder {
		  text-align: center;
		}
		.reminder a {
		  color: #fff;
		  text-decoration: none;
		  transition: color 0.3s;
		}
		.reminder a:hover {
		  color: #cab6bf;
		}
		.button {
		  background-color: #4CAF50; /* Green */
		  border: none;
		  color: white;
		  padding: 16px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  transition-duration: 0.4s;
		  cursor: pointer;
		}

		.button1 {
		  background-color: white; 
		  color: black; 
		  border: 2px solid #4CAF50;
		}

		.button1:hover {
		  background-color: #4CAF50;
		  color: white;
		}  
	</style>
</head>
<body>

<center>
	<div style="width: 70%; background-repeat: no-repeat; background: rgba(0,0,0,0.7); box-shadow: 0px 1px 0px rgba(0,0,0,0.6),inset 0px 1px 0px rgba(255,255,255,0.04);border:1.4px solid #cfecf0;">
		 <form method="post" action="process.php">
			<table style="width: 100%; margin: 10px; border:1px" cellspacing="10" cellpadding="10">
				<tr>
					<td><center><input type="text" style="width: 100%; height: 100%; padding: 10px" placeholder="kodu" name="kodu" required="required" /></center></td>
				</tr> 
					<td><center><input type="text" style="width: 100%; height: 100%; padding: 10px" placeholder="unvani" name="unvani" required="required" /></center></td>
				</tr> 
					<td><center><input type="text" style="width: 100%; height: 100%; padding: 10px" placeholder="il" name="il" required="required" /></center></td>
				</tr> 
					<td><center><input type="text" style="width: 100%; height: 100%; padding: 10px" placeholder="ilce" name="ilce" required="required" /></center></td>
				</tr> 
				<tr> 
					<td><input type="submit" name="save" value="submit" class="button button1" style="width: 100%"></td>
				</tr> 
			</table>
		</form>
	</div>
</center>

 
 



</body>
</html>