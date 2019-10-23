<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_model extends CI_Model {

    private $_table = "bidang";

    /**
     * function untuk mengambil seluruh atau salah satu data pada table di dalam database
     */
    public function get_data($select, $param=null)
	{
        if ($select == "all") {
            return $this->db->order_by('idbdng','DESC')->get($this->_table)->result();
        }
        elseif ($select == "where") {
            return $this->db->where('idbdng',$param)->get($this->_table)->row();
        }
        elseif ($select == "count") {
            return $this->db->get($this->_table)->num_row();
        }
    }


    // function untuk insert, update, atau delete data ke dalam database
    public function action($param,$data=array(),$id=null)
	{
        if ($param == 'insert') {
            return $this->db->insert($this->_table, $data);
        }
		elseif ($param == 'update') {
            return $this->db->where('idbdng',$id)->update($this->_table, $data);
        }
		elseif ($param == 'delete') {
            return $this->db->delete($this->_table, array('idbdng' => $id));
        }
    }

}

/* End of file Bidang_model.php */
