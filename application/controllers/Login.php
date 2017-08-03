<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	//parent::__construct();

	//$this->load->model('Mauth');
	public function __construct()
    {
        parent::__construct();
		    $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
				$this->output->set_header("Pragma: no-cache");
				$this->load->library('form_validation');
			}

	public function index()
	{
				if ($this->session->userdata('level') == "Admin") {
					redirect('dashboard/Dashboard');
			 		}
				else if ($this->session->userdata('level') == "Penulis") {
						redirect('penulis/Dashboard');
					}


					 // load codeigniter captcha helper
					 $this->load->helper('captcha');

					 $vals = array(
							 'img_path'	 => './assets/captcha/',
							 'img_url'	 => base_url().'assets/captcha/',
							 'font_path' => FCPATH.'assets/captcha/fonts/Verdana.ttf',
							 'img_width'	 => '280',
							 'img_height' => 40,
							 'word_length'   => 6,
							 'font_size'     => 18,
							 'border' => 0,
							 'expiration' => 7200,

					 );

					 // create captcha image
					 $cap = create_captcha($vals);

					 if ($cap !== FALSE) {
						 $data['image'] = $cap['image'];

} else {
    die('No captcha was created');
}

					 // store image html code in a variable

					 // store the captcha word in a session
					 $this->session->set_userdata('mycaptcha', $cap['word']);

					 $this->load->view('login',$data);



	}

	public function cek_login()
	{
		//$this->form_validation->set_rules('noid', 'username', 'trim|required|min_length[5]');
		//$this->form_validation->set_rules('passwd', 'password', 'trim|required');

		//echo var_dump($this->input->post('security_code'));
		//echo var_dump($this->session->userdata('mycaptcha'));

		$this->load->library('session');

		$data = array('noid' => $this->input->post('username') ,
					  'passwd' => md5($this->input->post('password')),
					  );

		$this->load->model('Mauth');
		$hasil = $this->Mauth->cek_user($data);

		if (( $this->input->post('security_code') == $this->session->userdata('mycaptcha')) && $hasil->num_rows() == 1){
			foreach($hasil->result() as $sess)
            {
              $sess_data['level'] = $sess->level;
              $sess_data['noid'] = $sess->noid;
              $sess_data['nama'] = $sess->nama;
							$sess_data['status'] = $sess->status;
              $this->session->set_userdata($sess_data);
            }
			if ( ($this->session->userdata('level')=='Admin') && ($this->session->userdata('status') == 'aktif')){

				 								$data['nama'] = $this->session->userdata('nama');
                        $data['noid'] = $this->session->userdata('noid');
                        date_default_timezone_set('Asia/Jakarta');
                        $tanggal = date(DATE_RFC850);
                        $data = array(

                            "nama"          =>  $this->session->userdata('nama'),
                            "noid"          =>  $this->session->userdata('noid'),
                            "tanggal"       =>  $tanggal,

                            );

                            $this->db->insert('log',$data);
														redirect('dashboard/Dashboard');


			}
			elseif ($this->session->userdata('level')=='Penulis' && $this->session->userdata('status')=='aktif'  ){
												$data['nama'] = $this->session->userdata('nama');
                        $data['noid'] = $this->session->userdata('noid');
                        date_default_timezone_set('Asia/Jakarta');
                        $tanggal = date(DATE_RFC850);

                        $data = array(

                            "nama"          =>  $this->session->userdata('nama'),
                            "noid"          =>  $this->session->userdata('noid'),
                            "tanggal"       =>  $tanggal,

                            );

                            $this->db->insert('log',$data);

							redirect('penulis/Dashboard');
			}
			/*
			else if  ($this->input->post() && ($this->input->post('secutity_code') == $this->session->userdata('mycaptcha'))) {
				redirect('dashboard/Dashboard');
			}
			*/
			else {
				$this->session->sess_destroy();
				echo " <script>alert('Gagal Login, password anda salah atau account belum diaktifkan');history.go(-1);</script>";
				}
		}

		else
		{
			$this->session->sess_destroy();
			echo " <script>alert('Gagal Login, password anda salah atau account belum diaktifkan');history.go(-1);</script>";
		}

	}


	public function logout() {

		$this->session->sess_destroy();
		redirect('Beranda');
	}

}
