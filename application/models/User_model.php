<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // variabel yang hanya dapat diakses pada model ini
	private $_table 	= "user";

    /**
     * function untuk mengambil seluruh atau salah satu data pada table di dalam database
     */
    public function get_data($select, $id=null,$data=array())
	{
        if ($select == "all") {
            return $this->db->order_by('idusr','DESC')->get($this->_table)->result();
        }
        elseif ($select == "where") {
            return $this->db->where('idusr',$id)->get($this->_table)->row();
        }
        elseif ($select == "where_login") {
            return $this->db->get_where($this->_table, $data)->row();
        }
        elseif ($select == "count") {
            return $this->db->get($this->_table)->num_row();
        }
        elseif ($select == "count_login") {
            return  $this->db->get_where($this->_table, $data)->num_rows();
        }
    }


    // function untuk insert, update, atau delete data ke dalam database
    public function action($param,$data=array(),$id=null)
	{
        if ($param == 'tambah') {
            return $this->db->insert($this->_table, $data);
        }
		elseif ($param == 'ubah') {
            return $this->db->where('idusr',$id)->update($this->_table, $data);
        }
		elseif ($param == 'hapus') {
            return $this->db->delete($this->_table, array('idusr' => $id));
        }
    }

}

/* End of file User_model.php */
