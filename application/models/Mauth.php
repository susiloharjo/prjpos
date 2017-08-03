<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mauth extends CI_Model
{
	 function cek_user($data){
		$query = $this->db->get_where('login',$data);
		return $query;
	}

	 function generate_session(){
		$query = $this->db->get('login');
		return $query;
	}


}
