<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
<style>
#container{
	text-align:left ;
}

.op{
	margin-left:450px;

}
</style>

</head>
<body>

<div id="container">
	<form action="" method="post">
	<h1 style="text-align:center">Menu</h1>
	<div class="op">
	<label for="muid">Menu ID :</label>
	<input style="margin-left:60px" type="text" name="muid" id="muid">
	</div>
	<br>
	<div class="op">
	<label for="muid">Menu Name :</label>
	<input style="margin-left:40px" type="text" name="muid" id="muid">
	</div>
	<br>
	<div class="op">
	<label for="muid">Category ID :</label>
	<select style="margin-left:40px" name="sh_size">
			<option value="S">เล็ก</option>
			<option value="M">กลาง</option>
			<option value="L">ใหญ่</option>
			<option value="XL">ใหญ่มาก</option>
		</select>
	</div>
	<br>
	<div class="op">
	<label for="muid">Shop ID :</label>
	<select style="margin-left:65px" name="sh_size">
			<option value="S">เล็ก</option>
			<option value="M">กลาง</option>
			<option value="L">ใหญ่</option>
			<option value="XL">ใหญ่มาก</option>
		</select>
	</div>
	<br>
	<div class="op">
	<button style="margin-left:80px" type="submit">Add Menu</button>
	<button type="reset">Reset Menu</button>
	</div>
	</form>
</div>

</body>
</html>