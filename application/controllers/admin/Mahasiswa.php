<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_mahasiswa');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->M_mahasiswa->ambilMahasiswa();
        // print_r($data);
        $this->load->view('admin/MahasiswaView', $data);
    }

    public function tambahMahasiswa()
    {
        $this->load->view('admin/MahasiswaTambahView');
    }
    public function simpanMahasiswa()
    {
        $npm           = $this->input->post('npm');
        $nama          = $this->input->post('nama');
        $kelas         = $this->input->post('kelas');
        $jenis_kelamin = $this->input->post('jenis_kelamin');

        $mahasiswa = array(
            'npm'           => $npm,
            'nama'          => $nama,
            'kelas'         => $kelas,
            'jenis_kelamin' => $jenis_kelamin,
        );
        $this->M_mahasiswa->simpanMahasiswa($mahasiswa);
        redirect('admin/mahasiswa');
    }

    public function editMahasiswa($npm)
    {
        $data = array(
            'mahasiswa' => $this->M_mahasiswa->ambilSatuMahasiswa($npm)
            );
        $this->load->view('admin/MahasiswaEditView', $data);
    }

    public function updateMahasiswa($npm)
    {
    $mahasiswa     = array(
        'npm'       => $npm,
        'nama'      => $this->input->post('nama'),
        'kelas'     => $this->input->post('kelas'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        );
        $this->M_mahasiswa->updateMahasiswa($npm, $mahasiswa);
        redirect('admin/mahasiswa');
    }
    public function hapusMahasiswa($npm)
    {
        $this->M_mahasiswa->deleteMahasiswa($npm);
        redirect ('admin/mahasiswa');
    }
}
