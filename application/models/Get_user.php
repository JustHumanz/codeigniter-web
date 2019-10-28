<?php

class Get_user extends CI_Model{
	function get_data(){
		return $this->db->get('users');
	}
}
