<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link href="<?php echo base_url(); ?>/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
	<form action="./insert_menu" method="post">
	<h1 style="text-align:center">Menu</h1>
	<div class="op">
	<label for="muid">Menu ID :</label>
	<input style="margin-left:65px" type="text" name="muid" id="muid">
	</div>
	<br>
	<div class="op">
	<label for="muid">Menu Name :</label>
	<input style="margin-left:40px" type="text" name="muname" id="muname">
	</div>
	<br>
	<div class="op">
	<label for="muid">Category Name :</label>
	<select style="margin-left:15px" name="catid">
    <?php 
    foreach($data->result() as $row){
    ?>
			<option value="<?php echo $row->category_id ?>"><?php echo $row->category_name ?></option>
	<?php } ?>
		</select>
	</div>
	<br>
	<div class="op">
	<label for="muid">Shop ID :</label>
	<select style="margin-left:65px" name="shopid">
		<option value="1">Nine9</option>
        <option value="2">M&M</option>
    </select>
	</div>
	<br>
	<div class="op">
	<button style="margin-left:80px" type="submit">Add Menu</button>
	<button type="reset">Reset Menu</button>
	</div>
	</form>
    <center><h1><a href="http://localhost/cyberlifecafe/index.php/manage_menu/showmenu">แสดงรายการทั้งหมด</a></h1></center>

    
</div>

</body>
</html>