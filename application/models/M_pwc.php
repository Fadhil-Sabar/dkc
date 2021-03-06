<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pwc extends CI_Model
{

    public function tambah_data_pwc($data)
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap', true),
            'jenis_peserta' => $this->input->post('jenis_peserta', true),
            'no_hp' => $this->input->post('no_hp', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'pangkalan' => $this->input->post('pangkalan', true),
            'ranting' => $this->input->post('ranting', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'penyakit' => $this->input->post('penyakit', true),
            'email' => $this->input->post('email', true),
            'sertifikat_vaksin' => $data['sertif_vaksin'],
            'surat_kesehatan' => $data['surat_sehat'],
            'surat_mandat' => $data['surat_mandat']
        ];

        $this->db->insert('db_peserta_pwc', $data);
        return $this->db->insert_id();
    }

    //  FUNGSI EDIT BELOM FINISH
    // public function edit_data_pwc($id_peserta_pwc,sertifikatPeserta)
    // {
    //     $data = [
    //         'nama_lengkap' => $this->input->post('nama_lengkap', true),
    //         'no_hp' => $this->input->post('no_hp', true),
    //         'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
    //         'pangkalan' => $this->input->post('pangkalan', true),
    //         'ranting' => $this->input->post('ranting', true),
    //         'tempat_lahir' => $this->input->post('tempat_lahir', true),
    //         'tanggal_lahir' => $this->input->post('tanggal_lahir',true),
    //         'email' => $this->input->post('email', true),
    //         'sertifikat_vaksin' => $filename
    //     ];
    //     $this->db->set($data);
    //     $this->db->where('id_peserta_pwc', $id_peserta_pwc);
    //     $this->db->update('db_peserta_pwc');
    // }

    // public function hapus_data_pwc($id_peserta_pwc)
    // {
    //     $this->db->delete('db_peserta_pwc', array('id_peserta_pwc' => $id_peserta_pwc));
    // }

    public function get_all_pwc()
    {
        return $this->db->get('db_peserta_pwc')->result();
    }

    public function get_pwc_by_id($id_peserta_pwc)
    {
        return $this->db->get_where('db_peserta_pwc', array('id_peserta_pwc' => $id_peserta_pwc))->result_array();
    }
}
