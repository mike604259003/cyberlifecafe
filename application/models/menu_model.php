<?php defined('BASEPATH') OR exit('No direct script access allowed');

class menu_model extends CI_Model {

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
         
		function menu_insert($data){
			$this->db->insert('menu',$data);
        }
        
		function _delete_menu_id($id){
			$this->db->where('menu_id', $id);
			$this->db->delete('menu');  
		}
		
		
		function _getCategory(){
			$category['data'] = $this->db->get('category');
			return $category;
		}

		function _getShop(){
			$shop['datashop'] = $this->db->get('shop');
			return $shop;
		}

		function _getMenuByID($cid){
			$query['query'] = $this->db->get_where('menu', array('menu_id' => $cid));
 		 	return $query;
		}

		function menu_edit($data,$cid){
			$this->db->where('menu_id',$cid);
			$this->db->update('menu',$data);
		}

		function _getMenu(){
			$menu['data'] = $this->db->get('menu');
			return $menu;
		}
}
