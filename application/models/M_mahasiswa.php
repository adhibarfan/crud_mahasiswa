<?php
/**
 * @Author: Adhib Arfan<adhib.arfan@gmail.com>
 * @Date:   2016-09-19 14:45:30
 * @Last Modified by:   arfan
 * @Last Modified time: 2016-09-19 14:56:20
 */

class M_mahasiswa extends CI_Model
{
    public function ambilSatuMahasiswa($npm)
    {
        $this->db->where('npm', $npm);
        return $this->db->get('tb_mahasiswa')->result();
    }
    
    public function ambilMahasiswa()
    {
        return $this->db->get('tb_mahasiswa')->result();
    }

    public function simpanMahasiswa($mahasiswa)
    {
        return $this->db->insert('tb_mahasiswa', $mahasiswa);
    }
    public function updateMahasiswa($npm, $mahasiswa)
    {
        $this->db->where('npm', $npm);
        $this->db->update('tb_mahasiswa', $mahasiswa);
    }
    public function deleteMahasiswa($npm)
    {
        return $this->db->delete('tb_mahasiswa', array('npm' => $npm));
    }
}
