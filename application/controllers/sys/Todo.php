<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class todo extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = 'SALES';

    $this->load->view('sys/sales/header', $data);
    $this->load->view('sys/sales/todo');
    $this->load->view('sys/sales/footer');
  }

  public function ajax_list()
	{
    header("Content-Type: application/json");
    $this->db->select('*');
    $this->db->from('todo');
    $query = $this->db->get();

    echo json_encode($query->result());

  }

}
