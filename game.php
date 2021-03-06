<?php

require("res/include.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("res/head.php"); ?>
		<link href="/css/bootstrap.min.css" rel="stylesheet" />
		<meta charset="UTF-8" />
	</head>
	<body>
		<?php include("res/nav.php"); ?>
		<div class="container">
			
			<h1>GAME TITLE</h1>
			<div class="col-md-4">
				<table class="table">
					<tr><td colspan="2" style="text-align:center; border-top: none;"><img src="http://i.imgur.com/t7boxK2.jpg" height="150" /></td></tr>
					<th>Item</th><th>Score</th>
					<tr><td>Frame rate</td><td>Capped 60</td></tr>
					<tr><td>Resolution</td><td>Max 4k</td></tr>
					<tr><td>Optimization</td><td>Great</td></tr>
					<tr><td>Mod support</td><td>Unofficial</td></tr>
					<tr><td>Servers</td><td>Acceptable</td></tr>
					<tr><td>DLC</td><td>No Day 1 DLC, dlc is cosmetic only</td></tr>
					<tr><td>Glitches</td><td>Some glitches, not game breaking</td></tr>
					<tr><td>Settings</td><td>Full Settings</td></tr>
					<tr><td>Controls</td><td>Keyboard re-mappable, gamepad support</td></tr>
					<tr><td>DRM</td><td>Unlimited Install</td></tr>
				</table>
			</div>
			<div class="col-md-8">
				<p>GAME description goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac nulla at arcu egestas convallis eget id odio. Curabitur magna felis, congue quis pretium id, pulvinar sed turpis. Praesent ac tortor tortor. In hac habitasse platea dictumst. Morbi fringilla sapien in lectus ultrices, quis varius sapien condimentum. Vivamus fringilla condimentum risus, nec egestas libero sagittis nec. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. </p>
			<br/>	
			<table class="table">
				<th>*</th><th>Individual reviews</th>
				<tr><td style="width: 25px"><img src="img/badges/r_tiny.jpg" alt="R" height="20"></td><td>review by /u/pedro19</td></tr>
			</table>
			</div>
		</div>
		<?php include("res/footer.php"); ?>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="/js/bootstrap.js"></script>
	</body>
</html>
