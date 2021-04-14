<?php 
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from ayse_users where user_id='$session_id'")or die('Hatalı Bilgiler');
if (!$result) {
	header('location:index.php');
} 
$rowss=mysqli_fetch_array($result);
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
		  color: #000;
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
		input[type='password']{
			background: #FFF url("img/pass.jpg") no-repeat;
			background-position: 10px 50%;
		}
		input[type='text']{
			background: #FFF url("img/user.jpg") no-repeat;
			background-position: 10px 50%;
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


        .pie-chart {
            width: 600px;
            height: 400px;
            margin: 0 auto;
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>

<center>
	<div style="width: 85%; background-repeat: no-repeat; background: #fff; box-shadow: 0px 1px 0px rgba(0,0,0,0.6),inset 0px 1px 0px rgba(255,255,255,0.04);border:1.4px solid #cfecf0;">
		    <center><h3>Merhaba: <?php echo $rowss['name']; ?> | <a href="logout.php">Çıkış</a></h3></center>
		    <br>
		    <a href="ekle" target="_blank"><button class="button button1">Kayıt Ekle</button></a>
		    <br>
	<table style="width: 100%; max-width: 100% margin: 10px; border:1px; background: rgba(0,0,0,0.7);" cellspacing="10" cellpadding="10">
		<tr>
			<td><center>ID</center></td>
			<td><center>MÜŞSTERİ KODU</center></td>
			<td><center>MÜŞTERİ ÜNVANI</center></td>
			<td><center>İL</center></td>
			<td><center>İLÇE</center></td>
			<td><center>SATIŞ</center></td>
			<td><center>İŞLEM</center></td>
		</tr>

		<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];


$resultsa=mysqli_query($con, "select * from ayse_islem where id='$id'");
$rowsa=mysqli_fetch_array($resultsa);


$e = $rowsa['satis'] + 1;
$msg=mysqli_query($con,"UPDATE ayse_islem SET satis = $e where id='$id'");
	if($msg)
	{
	echo "EKLENDİ";
	}
}
?>
                              <?php $ret=mysqli_query($con,"SELECT * from ayse_islem");




							  while($row=mysqli_fetch_array($ret))



							  {?>	


					<tr>
					<td><center><?php echo $row['id'];?></center></td>
					<td><center><?php echo $row['kodu'];?></center></td>
					<td><center><?php echo $row['unvani'];?></center></td>
					<td><center><?php echo $row['il'];?></center></td>
					<td><center><?php echo $row['ilce'];?></center></td>
					<td><center><?php echo $row['satis'];?></center></td> 
					<td><center><a href="home.php?id=<?php echo $row['id'];?>"><button class="button button1"
						onClick="return confirm('ID\'Sİ : <?php echo $row['id'];?> OLAN MÜŞTERİ +1 EKLENSİN Mİ');">Satış Yap</button></a></center></td> 
					</tr> 

				<?php }?>
 
	</table>


	<br>


	<?php
	$chartQuery = "SELECT * FROM ayse_islem";
    $chartQueryRecords = mysqli_query($con,$chartQuery);
	?>
<div id="chartDiv" class="pie-chart"></div>

<script type="text/javascript">
    window.onload = function() {
        google.load("visualization", "1.1", {
            packages: ["corechart"],
            callback: 'drawChart'
        });
    };
    function drawChart() {
        var data = new google.visualization.arrayToDataTable([
            ['Language', 'Rating'],
            <?php
                while($row = mysqli_fetch_assoc($chartQueryRecords)){
                    echo "['".$row['il']."', ".$row['satis']."],";
                }
            ?>
        ]);

        var options = {
            title: '',
        };
  
        var chart = new google.visualization.PieChart(document.getElementById('chartDiv'));
        chart.draw(data, options);
    }
</script> 
</center>

 
 


<script src="https://www.google.com/jsapi"></script> 

</body>
</html>