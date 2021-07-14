<?php   
defined('BASEPATH') OR Exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model
{
    private $_table = "mahasiswa";

    public function viewMahasiswa()
    {
        return $this->db->get($this->_table)->result_array();
    }
    public function tambahMahasiswa()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'nim' => $this->input->post('nim', true),
            'jurusan' => $this->input->post('jurusan', true),
            'alamat' => $this->input->post('alamat', true)
        );

       
        $this->db->insert($this->_table, $data);
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }

    public function ubahMahasiswa()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'jurusan' => $this->input->post('jurusan'),
            'alamat' => $this->input->post('alamat')
        );

        
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->_table, $data);

    } 
}
?>