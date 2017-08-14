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
    $noid = $this->session->userdata('noid');
    $query=$this->db->query("SELECT * from todo where noid='$noid'");
    $datas = $query->result();

    $this->load->view('sys/headersys', $data);
    // $this->load->view('sys/sales/todo');
    $this->load->view('sys/sales/todo',array('data'=>$datas));
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

  public function add() {
    $data = array(
                  'noid' => $this->session->userdata('noid'),
                  'todo' => $this->input->post('todo'),
                  'status' => 'progress',
                  'createDate' => date('Y-m-d H:i:s'),
                  'updateDate' => date('Y-m-d H:i:s'),
                );
    echo var_dump($data);
    $this->db->insert('todo',$data);
    redirect('sys/todo');


  }

  public function delete($id) {
    $this->db->where('id',$id);
    $this->db->delete('todo');
    redirect('sys/todo');


  }

}
