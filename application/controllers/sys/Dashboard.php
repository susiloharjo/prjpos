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
    // cek level function
    $this->session->set_tempdata('login', 'Welcome', 2);

    $this->cek_level();
  }

  function cek_level()  {

    // ini hanya untuk development apabila sudah ok dinonaktifkan saja
    $newdata = array(
        'dept'  => 'Sales',
        'level'     => 'Admin',
        'logged_in' => TRUE
      );

    $this->session->set_userdata($newdata);

    if ($this->session->userdata('dept') == "SAFETY" ) {
      redirect('sys/dashboard/safety');
    }
    else if ($this->session->userdata('dept') == "Sales" ) {
      redirect('sys/dashboard/sales');
    }

    else {
      redirect('Auth');

    }
  }

  function safety()
  {
    if ($this->session->userdata('dept')<>"SAFETY" ) {
      $this->cek_level();
    }

    $data['title'] = 'DASHBOARD ADMIN OK';

    $this->load->view('sys/headersys', $data);
    $this->load->view('sys/dashboard');
    $this->load->view('sys/footer');

  }

public function sales()
  {
    if ($this->session->userdata('dept')<>"Sales" ) {
      $this->cek_level();
    }

    $data['title'] = 'SALES';
    $this->load->view('sys/headersys', $data);
    $this->load->view('sys/sales/sales');
    $this->load->view('sys/sales/footer');

  }



}
