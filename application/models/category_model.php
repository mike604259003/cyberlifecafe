<?php defined('BASEPATH') OR exit('No direct script access allowed');

class category_model extends CI_Model {

		function __construct(){
            parent::__construct();
        }
        
		function getAllShops($sid){
			$this->db->select('shop_id, shop_name_th, shop_name_en');
			//$result = $this->db->get('shop');
			$result = $this->db->get_where('shop', array('shop_province' => $sid));
			return $result;
		}

 		// function _queryUsers(){
		// 	$query = $this->db->query("select * from users where id='3'");
 		// 	return $query;
         // }	
         
		function category_insert($data){
			$this->db->insert('category',$data);
        }
        
		function _delete_category_id($id){
			$this->db->where('category_id', $id);
			$this->db->delete('category');  
		}
		
		
		function _getCategory(){
			$category['data'] = $this->db->get('category');
			return $category;
		}

		function _getCategoryByID($cid){
			$query['query'] = $this->db->get_where('category', array('category_id' => $cid));
 		 	return $query;
		}

		function category_edit($data,$cid){
			$this->db->where('category_id',$cid);
			$this->db->update('category',$data);
		}
}
