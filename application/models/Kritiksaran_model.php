<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kritiksaran_model extends CI_Model
{
    public function getKritikSaranByIdUser($id)
    {
        $query = $this->db->query("SELECT * FROM kritiksaran ks JOIN tanaman a on ks.id_tanaman = a.id_tanaman WHERE ks.id_user = $id");
        return $query->result_array();
    }

    public function getKritikSaranById($id)
    {
        $query = $this->db->query("SELECT * FROM kritiksaran ks JOIN tanaman a on ks.id_tanaman = a.id_tanaman JOIN user u ON ks.id_user = u.id_user WHERE ks.id_kritiksaran = $id");
        return $query->result_array();
    }

    public function tambahKritikSaran()
    {
        $data = [
            "id_tanaman" => $this->input->post('id_tanaman'),
            "id_user" => $this->session->userdata('id_user'),
            "kritik" => $this->input->post('kritik'),
            "saran" => $this->input->post('saran'),
            "created" => date('d-m-Y')
        ];
        $this->db->insert('kritiksaran', $data);
    }

}
