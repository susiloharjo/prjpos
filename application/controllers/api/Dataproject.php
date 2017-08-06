<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dataproject extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('login')=="") {
		// 	redirect('auth');
		// }
		$this->load->helper('text');
		$this->load->model('mproject','person');


	}

	public function index()
	{
		$data['login'] = $this->session->userdata('login');
		$this->load->model('admin/mdiscount');
		// $data['kodePrint'] = $this->mdiscount->get_kodePrint();

		$data['title'] = 'Paper Request';
		$this->load->helper('url');
		$this->load->view('warehouse/header',$data);
		$this->load->view('warehouse/vrequest');
		// $this->load->view('admin3/footer');



	}

  public function ajax_list()
  {


    $list = $this->person->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $person) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = $person->nama;
      $row[] = $person->noprj;
      $row[] = $person->lokasi;
      $row[] = $person->perusahaan;
      $row[] = $person->keterangan;
      // $row[] = $person->progress;
      //add html for action
      if ($person->progress >= '80') {
          $progressbar =  'progress-bar-success';
      }else if ($person->progress >= '50' && $person->progress <= '79' ) {
          $progressbar =  'progress-bar-warning';
      }
       else {
        $progressbar =  'progress-bar-danger';

      }
      $row[] = '  <div class="progress progress-striped active">
                  <div class="progress-bar '.$progressbar.' " style="width: '.$person->progress.'%"></div>
                  </div>
          ';

      //add html for action
      $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
          ';

      $data[] = $row;
    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->person->count_all(),
            "recordsFiltered" => $this->person->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
  }

	public function ajax_edit($id)
	{
		$data = $this->person->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->load->library('form_validation');

    $this->form_validation->set_rules('nama_product', 'nama_product', 'required|is_unique[warehouse.nama_product]');
    $this->form_validation->set_rules('jumlah', 'jumlah', 'required|numeric');


                if ($this->form_validation->run() == FALSE)
                {
                        echo "error";
                        echo json_encode(array("status" => FALSE));

                }
                else
                {
                  $nama_product = $this->input->post('nama_product');
                  $query2 = $this->db->query("select kode_product from products where nama_product='$nama_product' ");
          				//$query = $this->db->get('counter',1);
          				if($query2->num_rows()>0)
          				{
          					foreach ($query2->result() as $row)
          					{
                     // $hargakertas	= $row->harga;
          						$kode_product	= $row->kode_product;
          					}
          				}
                  else {
                    echo " <script>alert('Nama product tidak sesuai!');history.go(-1);</script>";

                  }

		$data = array(
				'nama_product' => $this->input->post('nama_product'),
				'kode_product' => $kode_product,
				'jumlah' => $this->input->post('jumlah'),
				'satuan' => $this->input->post('satuan'),
				'min_stock' => $this->input->post('min_stock'),
				'date_update' => date('Y-m-d'),

			);
		$insert = $this->person->save($data);
		echo json_encode(array("status" => TRUE));
	}
}

	public function ajax_update()
	{

		$nama_product = $this->input->post('nama_product');
    $query2 = $this->db->query("select kode_product from products where nama_product='$nama_product' ");
   //$query = $this->db->get('counter',1);
   if($query2->num_rows()>0)
   {
     foreach ($query2->result() as $row)
     {
       // $hargakertas	= $row->harga;
       $kode_product	= $row->kode_product;
     }
   }
    else {
      echo " <script>alert('Nama product tidak sesuai!');history.go(-1);</script>";

    }

		$data = array(
			'nama_product' => $this->input->post('nama_product'),
			'kode_product' => $kode_product,
			'jumlah' => $this->input->post('jumlah'),
			'satuan' => $this->input->post('satuan'),
			'min_stock' => $this->input->post('min_stock'),
			'date_update' => date('Y-m-d'),

			);
		$this->person->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->person->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

  function	addrequest() {

		$nama_product = $this->input->post('productid');
    $query2 = $this->db->query("select nama_product,jumlah,min_stock from warehouse where nama_product='$nama_product' ");
   //$query = $this->db->get('counter',1);
   if($query2->num_rows()>0)
   {
     foreach ($query2->result() as $row)
     {
       $jumlah	= $row->jumlah;
			 $nama_product	= $row->nama_product;
       $stock	= $row->min_stock;
     }
   }
    else {
      echo " <script>alert('Nama product tidak sesuai!');history.go(-1);</script>";

    }


		$warehouse = array(
			//'nama_product' => $this->input->post('productid'),
			// 'jumlah' => $jumlah - $qoperator,
			'noid' => $this->input->post('noid'),
			'po' => $this->input->post('po'),
			'tanggal' => $this->input->post('tanggal'),
			'quantity' => $this->input->post('quantity'),
			'keterangan' => $this->input->post('keterangan'),
			'productid' => $this->input->post('productid'),
      'customerid' => $this->input->post('customerid'),
			'reqNumber' => $this->input->post('reqNumber'),
      'qoperator' => $this->input->post('qoperator') + $this->input->post('quantity'),

			'status' => 'operator',


		);

    $data = array(

			// 'status' => 'operator',
      'qoperator' => $this->input->post('qoperator') + $this->input->post('quantity'),

			// 'keterangan' => $this->input->post('keterangan'),

		);

		//panggil stock kemudian kurangin dengan request dari request quantity
		$stock = array(
			'jumlah' => $jumlah - $this->input->post('quantity'),
		);

		$quantity = $this->input->post('quantity');

		if ( $jumlah > $quantity ){
			$this->db->where('nama_product',$this->input->post('productid'));
			$this->db->update('warehouse',$stock);
			// echo " <script>alert('Stock barang tidak cukup!');history.go(-1);</script>";
			$this->db->insert('history_request',$warehouse);
			$this->db->where('id',$this->input->post('id'));
			$this->db->update('request',$warehouse);

	    $this->db->where('id',$this->input->post('noid'));
			$this->db->update('order_detail',$data);

			// $this->db->insert('request',$warehouse);
			redirect('warehouse/crequest');

		} else {
			echo " <script>alert('Stock barang tidak cukup!');history.go(-1);</script>";

		}

		// $this->db->where('nama_product',$this->input->post('productid'));
		// $this->db->update('warehouse',$stock);




	}

}
