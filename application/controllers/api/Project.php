<?php

require APPPATH . '/libraries/REST_Controller.php';

class project extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        if ($this->session->userdata('level')== "" ) {
          redirect('Auth');
        }
        $this->load->model('mproject','person');


    }

    // show data mahasiswa
    function data_get() {
        $id = $this->get('id');

        if ($id == '') {
            $project = $this->db->get('project')->result();
            $this->response($project, 200);

        } else if ($id > 0){
            $this->db->where('id', $id);
            $project = $this->db->get('project')->result();
            $this->response($project, 200);
        }
    }

    // insert new data to mahasiswa
    function data_post() {
        $loc = $this->input->post('loc');
        $data = array(
                    'nama'           => $this->post('nama'),
                    'noprj'          => $this->post('noprj'),
                    'lokasi'         => $this->post('lokasi'),
                    'perusahaan'     => $this->post('perusahaan'),
                    'keterangan'     => $this->post('keterangan'),
                    'createDate'     => date('Y-m-d'),
                    'UpdateDate'     => $this->post('UpdateDate'),
                  );



        $insert = $this->db->insert('project', $data);
        if ($insert) {
          $this->session->set_tempdata('sukses', 'input sukses', 2);

            redirect($loc);
            $this->response($data, 200);


        } else {
            $this->session->set_tempdata('sukses', 'input gagal', 2);
            redirect($loc);
            $this->response(array('status' => 'fail', 502));
        }
    }

    // update data mahasiswa
    function data_put() {
        $id = $this->put('id');
        $data = array(
                    'id'            => $this->put('id'),
                    'nama'          => $this->put('nama'),
                    'noprj'         => $this->put('noprj'),
                    'lokasi'        => $this->put('lokasi'),
                    'perusahaan'    => $this->put('perusahaan'),
                    'keterangan'     => $this->post('keterangan'),
                    'updateDate'    => date('Y-m-d'),
                    'createDate'    => $this->put('createDate'),
                  );
        $this->db->where('id', $id);
        $update = $this->db->update('project', $data);
        if ($update) {
            $this->response($data, 200);

        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // delete mahasiswa
    function data_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('project');
        if ($delete) {
            $this->response(array('status' => 'deleted'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }



}
