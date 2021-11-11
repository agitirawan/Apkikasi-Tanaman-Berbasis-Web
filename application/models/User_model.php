<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');

		$result   = $this->db->where('username',$username)
							 ->where('password',$password)
							 ->limit(1)
							 ->get('user');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}


    function registerUser()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'username' => 'None',
            'alamat' => 'None',
            'gender' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'no_telepon' => htmlspecialchars($this->input->post('email', true)),
            'password' => htmlspecialchars(MD5($this->input->post('password'))),
            'role_id' => '2'
        ];
        $this->db->insert('user', $data);
    }
}
