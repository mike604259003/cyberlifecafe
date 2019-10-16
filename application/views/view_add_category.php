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
	<form action="./insert_category" method="post">
	<h1 style="text-align:center">Category</h1>
	<div class="op">
	<label for="muid">Category ID :</label>
	<input style="margin-left:60px" type="text" name="catid" id="muid">
	</div>
	<br>
	<div class="op">
	<label for="muid">Category Name :</label>
	<input style="margin-left:40px" type="text" name="catname" id="muid">
	</div>
	<br>
	
	<div class="op">
	<button style="margin-left:80px" type="submit">Add Menu</button>
	<button type="reset">Reset Menu</button>
	</div>
	</form>

    <br>
    <table style="text-align:center" class="table table-bordered">
        <tr class="table-danger">
            <th>Category ID</th>
            <th>Category Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach($data->result() as $row){
        ?>
        <tr class="table-primary">
            <td><?php echo $row->category_id ?></td>
            <td><?php echo $row->category_name ?></td>
            <td><a href="http://localhost/cyberlifecafe/index.php/Manage_category/edit_category?editid=<?php echo $row->category_id ?>"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="http://localhost/cyberlifecafe/index.php/Manage_category/delete_category?del_id=<?php echo $row->category_id ?>"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>