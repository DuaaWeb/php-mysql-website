<?php
include_once 'dbcon.php';

if(isset($_POST['save']))
{	 
	 $kodu = $_POST['kodu'];
	 $unvani = $_POST['unvani']; 
	 $il = $_POST['il']; 
	 $ilce = $_POST['ilce']; 
	 
 


	 $sqls = "INSERT INTO ayse_islem (kodu, unvani, il, ilce, satis)
	 VALUES ('$kodu', '$unvani', '$il', '$ilce', '0')";
 
	 if (mysqli_query($con, $sqls)) {
		echo "TMM";
		header( "refresh:2;url=home.php" );
	 } else {
		echo "Error: " . $sqls . "\n" . mysqli_error($conn);
	 }
	 mysqli_close($con);
}
?>

