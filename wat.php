<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		ol{
			list-style: none;
		}
		ul li{
			display: none;
		}
		a ol li:hover{
			background-color: darkcyan;
		}
		.ne:hover{
			background-color: darkcyan;
		}

	.btn{
		background-color: skyblue;
		border: 1px solid;
		padding: 10px;
		border-radius: 10px;
	}	
.btn:hover{
	background-color:darkcyan;
}
	</style>
</head>
<body style="background-image: url(bg.jpg);">

	<center><h1>AVOID POUR FLOW</h1></center>
	<div class="ne"  style="height:260px; width: 200px;background-color:aliceblue;">
		
			<center><b><label>DASH BORD</label></center></b>

	<a href="home.php" style="text-decoration: none;color: black;"><ol><li><label>HOME</label></li></a>
	</ol>
	<a href="eq.php"  style="text-decoration: none;color: black;"><ol><li><label>EQUIPMENT</label></li></ol></a>
	<a href="wat.php" style="text-decoration: none;color: black;"><ol ><li><label>POUR</label></li></ol></a>
	<a href="how.php" style="text-decoration: none;color: black;"><ol ><li><label>HOW TO POUR WATER</label></li></ol></a>
	<a href="cont.php" style="text-decoration: none;color: black;"><ol ><li><label>CONTACT US</label></li></ol></a>

</div>
<form method="POST">
	<center>
	<fieldset style="width: 200px;height: 200px; background-color: skyblue; border-color: black;">
		<b><label>POUR WATER</label></b><br><br>
		<label>Enter money</label><br><br>
		<input type="number" name="frw" placeholder="enter money" required><br><br>
		<input type="submit" name="submit" class="btn" value="ENTER">
	</fieldset>
</center>
<footer style="background-color:aliceblue;">
	&copyright &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="w.jfif" style="width: 50px;padding-right: 25px;">Whatsapp
	<img src="f.png"style="width: 50px;padding-right: 20px;">Facebook
	<img src="is.jfif"style="width: 50px;padding-right:20px;">Instagram
	<img src="t.png"style="width: 50px;padding-right: 20px">Twitter
</footer>
</form>
</body>
</html>
<?php
include 'conn.php';
if(isset($_POST['submit'])) {
	$a=$_POST['frw'];
	$insert=mysqli_query($con,"insert into sensor values('$a')");
}
?>