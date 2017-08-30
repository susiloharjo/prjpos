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
    $data['header_active'] = 'active';
    $noid = $this->session->userdata('noid');
    $query=$this->db->query("SELECT * from todo where noid='$noid'");
    $datas = $query->result();

    $this->load->view('sys/headersys', $data);
    // $this->load->view('sys/sales/todo');
    $this->load->view('sys/sales/todo',array('data'=>$datas));
    $this->load->view('sys/sales/footer');
  }



  public function ajax_add()
	{
    $data = array(
                  'noid' => $this->session->userdata('noid'),
                  'todo' => $this->input->post('todo'),
                  'status' => 'progress',
                  'createDate' => date('Y-m-d H:i:s'),
                  'updateDate' => date('Y-m-d H:i:s'),
                );
		$insert =  $this->db->insert('todo',$data);
		echo json_encode(array("status" => TRUE));
	}

  public function ajax_update()
	{
    $data = array(
                  'noid' => $this->session->userdata('noid'),
                  'todo' => $this->input->post('todo'),
                  'status' => 'progress',
                  // 'createDate' => date('Y-m-d H:i:s'),
                  'updateDate' => date('Y-m-d H:i:s'),
                );

      $this->db->where('id',$this->input->post('id'));
      $this->db->update('todo',$data);

		echo json_encode(array("status" => TRUE));
	}

  public function checked($id)
	{
    $this->db->select('checked');
    $this->db->where('id',$id);
    $query = $this->db->get('todo');

    if($query->num_rows()>0)
    {
      foreach ($query->result() as $row)
      {
        $checked	= $row->checked;
        //$namakertas	= $row->nama_product;
      }
    }


    if ($checked == 'checked') {
      $check = '0';
      $progress = 'progress';
      $label = 'label-danger';
    }
    else {
      $check = 'checked';
      $progress = 'done';
      $label = 'label-success';

    }

    $data = array(
                  // 'checked' => 'checked',
                  'checked' => $check,
                  'status' => $progress,
                  'label' => $label,

                );

      $this->db->where('id',$id);
      $this->db->update('todo',$data);

		echo json_encode(array("status" => TRUE));
	}


  public function delete($id) {
    $this->db->where('id',$id);
    $this->db->delete('todo');
    redirect('sys/todo');


  }


  public function ajax_list()
	{
    header("Content-Type: application/json");
    $this->db->select('*');
    $this->db->from('todo');
    $query = $this->db->get();

    echo json_encode($query->result());

  }

  public function ajax_edit($id)
	{
    $this->db->where('id',$id);
		$data = $this->db->get('todo');
    // $query = $this->db->get();

    echo json_encode($data->result());

	}

  public function ajax_delete($id)
	{
    $this->db->where('id',$id);
    $this->db->delete('todo');
		echo json_encode(array("status" => TRUE));
	}

}
