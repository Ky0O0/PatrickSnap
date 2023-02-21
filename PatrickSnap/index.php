<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="About clean potrick house.">
	<link rel="icon" type="icon" href="icon/icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Potrick Snap by Combo Bomb Games</title>
</head>
<body>
	<div id="container">
		<div id="image">
			<img src="images/4rnidg.png" class="rnidg_img">
		</div>
		<div id="left_sec">
			<p><b>Story</b></p>
			<p>you clean potrick house but there is something strange in the house but potrick did't want to tell you what happend in this house.</p>
			<img src="images/LhiKah.png" class="LhiKah_image">
			<p><b>How to play:</b></p>
			<p>&nbsp;&nbsp;W</p>
			<p>A S D: Move</p>
			<p>F: Flashlight</p>
			<p>V: Lighter </p>
			<p>E: interact</p>
			<p>1: Pistol</p>
			<img src="images/LhiKah.png" class="LhiKah_image">
			<p><b>WARNING</b></p>
			<p>This game have jumpscares and very short.</p>
			<img src="images/LhiKah.png" class="LhiKah_image">
			<p><b>ALL BUGS FIXED BUT IF THERE IS BUGS TELL ME IN COMMENTS</b></p>
			<h1>Purchase</h1>
			<div id="button_container">
				<a href="https://hossa-and-hazem.itch.io/potricksnap" target="_blank"><button class="button_buy">Buy Now</button></a>
				<h2>$1.00 USD</h2>
				<h3>or more</h3>
			</div>
			<br>
			<p>In order to download this game you must purchase it at or above the minimum price of $1 USD. You will get access to the following files:</p>
			<br>
			<div id="windows1_div">
				<p style="float: left;"><b>Potrick Snap Update.rar</b></p>
				<span id="windows_logo"><b>959MB</b><i class="gg-windows"></i></span>
			</div>
			<br>
			<div id="windows2_div">
				<p style="float: left;"><b>PotrickSnap.7z</b></p>
				<span id="windows_logo"><b>850MB</b><i class="gg-windows"></i></span>
			</div>
			<h1>Comments</h1>
			<div id="comments_div">
				<form action="index.php" method="POST">
					<input type="text" name="content" class="input_text" placeholder="Write your comment...">
					<input type="submit" class="input_submit" value="Post comment" name="submit">
				</form>
				<?php
					if (isset($_POST['content']) && $_POST['content'] !=""){
						$content = $_POST['content'];
						$base = mysqli_connect("localhost", "root", "", "patrick");
						$que1 = "INSERT INTO data VALUES('1', '$content')";
						mysqli_query($base, $que1);
						mysqli_close($base);
					}
				?>
				<br>
				<div id="comments_div2">
					<?php
						$base = mysqli_connect("localhost", "root", "", "patrick");
						$que2 = "SELECT * FROM data";
						$result = mysqli_query($base, $que2);
						while($a = mysqli_fetch_array($result)){
							echo "<img src='images/frog.png'> `Your Nick`<br>".$a['content']."<br><br>";
						}
						mysqli_close($base);
					?>
				</div>
			</div>
		</div>
		<div id="right_sec">
			<video width="100%" height="200px" controls>
				<source src="video/trailer.mp4" type="video/mp4">
			</video>
			<p style="margin-top: 10px;">
				<img src="images/uFAGM9.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/AbB8Ny.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/sDsglX.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/GRil75.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/YW_UKh.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/S2evRl.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/_zthsv.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/aPTfSf.png" width="100%" height="200">
			</p>
		</div>
	</div>
</body>
</html>