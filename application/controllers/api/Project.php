<?php

require APPPATH . '/libraries/REST_Controller.php';

class project extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
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
        $data = array(
                    'nama'           => $this->post('nama'),
                    'noprj'          => $this->post('noprj'),
                    'lokasi'    => $this->post('lokasi'),
                    'perusahaan'        => $this->post('perusahaan'),
                    'createDate'        => $this->post('createDate'),
                    'UpdateDate'        => $this->post('UpdateDate'),
                  );
        $insert = $this->db->insert('project', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // update data mahasiswa
    function data_put() {
        $id = $this->put('id');
        $data = array(
                  'nama'           => $this->post('nama'),
                  'noprj'          => $this->post('noprj'),
                  'lokasi'         => $this->post('lokasi'),
                  'perusahaan'     => $this->post('perusahaan'),
                  'createDate'     => $this->post('createDate'),
                  'UpdateDate'     => $this->post('UpdateDate'),
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
        $nim = $this->delete('nim');
        $this->db->where('nim', $nim);
        $delete = $this->db->delete('mahasiswa');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
