<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    // Auth process
    if ($this->session->userdata('level')<>"Admin" ) {
      redirect('Auth');
    }

    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = 'DASHBOARD ADMIN';

    $this->load->view('sys/header', $data);
    $this->load->view('sys/dashboard');
  }

}