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
<center><h1>Menu List</h1></center>
    <table style="text-align:center" class="table table-bordered">
        <tr class="table-danger">
            <th>Menu ID</th>
            <th>Menu Name</th>
            <th>Category ID</th>
            <th>Shop ID</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach($data->result() as $row){
        ?>
        <tr class="table-primary">
            <td><?php echo $row->menu_id ?></td>
            <td><?php echo $row->menu_name ?></td>
            <td><?php echo $row->mcategory_id ?></td>
            <td><?php echo $row->mshop_id ?></td>
            <td><a href="http://localhost/cyberlifecafe/index.php/Manage_menu/edit_menu?editid=<?php echo $row->menu_id ?>"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="http://localhost/cyberlifecafe/index.php/Manage_menu/delete_menu?del_id=<?php echo $row->menu_id ?>"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php } ?>
    </table>
    <center><a href="http://localhost/cyberlifecafe/index.php/manage_menu/">Add Menu</a></center>
</div>

</body>
</html>