<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_menu extends CI_Controller {


	function __construct(){
		parent::__construct();
		//$this->load->database();
		$this->load->model('menu_model','Menu');
	}

	public function index()
	{
		
		$category = $this->Menu->_getCategory();
		$this->load->view('view_add_menu',$category);
		
	}

	public function getcategory(){
		$result = $this->Menu->_getCategory();
		$this->load->view('view_add_menu',$result);
	}

	public function insert_menu(){
		$data = array(
			'menu_id' => $this->input->post('muid'),
			'menu_name' => $this->input->post('muname'),
			'mcategory_id' => $this->input->post('catid'),
			'mshop_id' => $this->input->post('shopid')
		);
		$this->Menu->menu_insert($data);
		$result = $this->Menu->_getCategory();
		$this->load->view('view_add_menu',$result);
		
	}

	public function delete_menu(){
		$del_cid = $this->input->get('del_id');
		$this->Menu->_delete_menu_id($del_cid);
		echo "<center>";
		echo "ลบประเภท".$del_cid."เรียบร้อยแล้ว";
		echo "<a href='http://localhost/cyberlifecafe/index.php/Manage_menu/showmenu'>Back</a>";
	}

	public function edit_menu(){
		$editid = $this->input->get('editid');
		$result = $this->Menu->_getMenuByID($editid);
		$this->load->view('view_edit_menu',$result);
	}


	public function edit_menu_totable(){
		$cid = $this->input->post('catid');
		$data = array(
			'menu_name' => $this->input->post('muname'),
			'menu_name' => $this->input->post('catid'),
			'menu_name' => $this->input->post('catname')
		);
		$this->Menu->menu_edit($data,$cid);
		$result = $this->Mune->_getMenu();
		$this->load->view('view_menu',$result);
		
	}

	public function showmenu(){
		$result = $this->Menu->_getMenu();
		$this->load->view('view_menu',$result);

	}



}
