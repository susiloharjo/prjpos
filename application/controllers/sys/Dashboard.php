<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    // Auth process
    if ($this->session->userdata('level')<>"Admin" ) {
      redirect('Auth');
    //Codeigniter : Write Less Do More
  }

  }

  function index()
  {
    if ($this->session->userdata('dept') == "SAFETY" ) {
      redirect('sys/dashboard/admins');
    }
    else if ($this->session->userdata('dept') == "Marketing" ) {
      redirect('sys/dashboard/admins');
    }

    $data['title'] = 'DASHBOARD ADMIN';
    // echo $this->session->userdata('dept');
    $this->load->view('sys/header', $data);
    $this->load->view('sys/dashboard');
  }

  function admins()
  {
    $data['title'] = 'DASHBOARD ADMIN OK';

    $this->load->view('sys/header', $data);
    $this->load->view('sys/dashboard');

  }

}
