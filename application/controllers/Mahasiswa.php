<?php

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Mahasiswa');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->M_Mahasiswa->viewMahasiswa();
        $this->load->view('mahasiswa', $data);
    }

    public function tambah()
    {
        $validation = $this->form_validation; 

        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('nim', 'NIM', 'required');
        $validation->set_rules('jurusan', 'Jurusan', 'required');
        $validation->set_rules('alamat', 'Alamat', 'required');

        if($validation->run() == FALSE) 
        {
            $this->load->view('tambah');
        } else {
          $this->M_Mahasiswa->tambahMahasiswa();
          redirect('mahasiswa');
        }
    }
    public function hapus($id)
    {
        $this->M_Mahasiswa->hapus($id);
        redirect('mahasiswa');
    }
    public function ubah($id)
    {
        $validation = $this->form_validation; 
        $data['mahasiswa'] = $this->M_Mahasiswa->getById($id);

        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('nim', 'NIM', 'required');
        $validation->set_rules('jurusan', 'Jurusan', 'required');
        $validation->set_rules('alamat', 'Alamat', 'required');

        if ($validation->run() == FALSE)
        {
            $this->load->view('ubah', $data);
        } else {
            $this->M_Mahasiswa->ubahMahasiswa();
            redirect('mahasiswa');
        }
        
    }

}