<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KriteriaModel extends CI_Model
{

    function get_all_kriteria()
    {
        $this->db->from('tb_kriteria');
        $query = $this->db->get();
        return $query->result();
    }

    function get_by_id($id)
    {
        $this->db->from('tb_kriteria');
        $this->db->where('id_kriteria', $id);
        $query = $this->db->get();

        return $query->row();
    }

    public function insert_kriteria()
    {
        $data = array(
            'nama_kriteria' => $this->input->post('nama_kriteria'),
            'tipe' => $this->input->post('tipe'),
            'bobot' => $this->input->post('bobot'),
        );

        $this->db->insert('tb_kriteria', $data);    
    }

    public function update_kriteria($id)
    {
        $data = array(
            'nama_kriteria' => $this->input->post('nama_kriteria'),
            'tipe' => $this->input->post('tipe'),
            'bobot' => $this->input->post('bobot'),
        );

        $this->db->set($data);
        $this->db->where('id_kriteria', $id);
        $this->db->update('tb_kriteria', $data);
    }

    public function delete_kriteria($id)
    {
        $this->db->where('id_kriteria', $id);
        $this->db->delete('tb_kriteria');
    }
}
