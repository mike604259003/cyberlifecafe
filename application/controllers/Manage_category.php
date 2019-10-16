<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_category extends CI_Controller {


	function __construct(){
		parent::__construct();
		//$this->load->database();
		$this->load->model('category_model','Category');
	}

	public function index()
	{
		$result = $this->Category->_getCategory();
		$this->load->view('view_add_category',$result);
	}

	public function insert_category(){
		$data = array(
			'category_id' => $this->input->post('catid'),
			'category_name' => $this->input->post('catname')
		);
		$this->Category->category_insert($data);
		$result = $this->Category->_getCategory();
		$this->load->view('view_add_category',$result);
		
	}

	public function delete_category(){
		$del_cid = $this->input->get('del_id');
		$this->Category->_delete_category_id($del_cid);
		echo "<center>";
		echo "ลบประเภท".$del_cid."เรียบร้อยแล้ว";
		echo "<a href='http://localhost/cyberlifecafe/index.php/Manage_category/'>Back</a>";
	}

	public function edit_category(){
		$editid = $this->input->get('editid');
		$result = $this->Category->_getCategoryByID($editid);
		$this->load->view('view_edit_category',$result);
	}


	public function edit_category_totable(){
		$cid = $this->input->post('catid');
		$data = array(
			'category_name' => $this->input->post('catname')
		);
		$this->Category->category_edit($data,$cid);
		$result = $this->Category->_getCategory();
		$this->load->view('view_add_category',$result);
		
	}

	
}
