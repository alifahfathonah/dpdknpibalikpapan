<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

    private $_table = "berita";

    /**
     * function untuk mengambil seluruh atau salah satu data pada table di dalam database
     */
    public function get_data($select, $param=null)
	{
        if ($select == "all") {
            return $this->db->order_by('idbrt','DESC')->get($this->_table)->result();
        }
        elseif ($select == "where") {
            return $this->db->where('idbrt',$param)->get($this->_table)->row();
        }
        elseif ($select == "count") {
            return $this->db->get($this->_table)->num_rows();
        }
        elseif ($select == "slug") {
            return $this->db->where('slugbrt',$param)->get($this->_table)->row();
        }
        elseif ($select == "limit") {
            return $this->db->order_by('idbrt','DESC')->limit($param)->get($this->_table)->result();
        }
        elseif ($select == "cari") {
            return $this->db->like('namabrt', $param)->get($this->_table)->result();
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
            return $this->db->where('idbrt',$id)->update($this->_table, $data);
        }
		elseif ($param == 'delete') {
            return $this->db->delete($this->_table, array('idbrt' => $id));
        }
    }

}

/* End of file Berita_model.php */
