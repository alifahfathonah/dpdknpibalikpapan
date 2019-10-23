<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi_model extends CI_Model {

    private $_table = "organisasi";

    /**
     * function untuk mengambil seluruh atau salah satu data pada table di dalam database
     */
    public function get_data($select, $param=null)
	{
        if ($select == "all") {
            return $this->db->order_by('idorg','DESC')->get($this->_table)->result();
        }
        elseif ($select == "count") {
            return $this->db->get($this->_table)->num_rows();
        }
        elseif ($select == "where") {
            return $this->db->where('idorg',$param)->get($this->_table)->row();
        }
        elseif ($select == "where_jns") {
            return $this->db->where('jnsorg',$param)->get($this->_table)->result();
        }
        elseif ($select == "count_pk") {
            return $this->db->where('jnsorg','PK')->get($this->_table)->num_rows();
        }
        elseif ($select == "count_okp") {
            return $this->db->where('jnsorg','OKP')->get($this->_table)->num_rows();
        }
        elseif ($select == "cari") {
            return $this->db->where('jnsorg','OKP')->like('namaorg', $param)->get($this->_table)->result();
        }
    }

    /**
     * function untuk proses query pagination codeigniter
     */
    public function get_pagination($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result();
    }


    // function untuk insert, update, atau delete data ke dalam database
    public function action($param,$data=array(),$id=null)
	{
        if ($param == 'insert') {
            return $this->db->insert($this->_table, $data);
        }
		elseif ($param == 'update') {
            return $this->db->where('idorg',$id)->update($this->_table, $data);
        }
		elseif ($param == 'delete') {
            return $this->db->delete($this->_table, array('idorg' => $id));
        }
    }

}

/* End of file Organisasi_model.php */
