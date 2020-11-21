<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_model extends CI_Model
{

    protected $table_name = 'pendaftar';

    public $rules = [
        'nama_pendaftar' => array(
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|required'

        ),
        'nisn' => array(
            'field' => 'nisn',
            'label' => 'NISN',
            'rules' => 'trim|required'

        ),
        'tempat_lahir' => array(
            'field' => 'tempat',
            'label' => 'Tempat Lahir',
            'rules' => 'trim|required'

        ),
        'tgl_lahir' => array(
            'field' => 'tgl',
            'label' => 'Tanggal Lahir',
            'rules' => 'trim|required'

        ),
        'jk' => array(
            'field' => 'jk',
            'label' => 'Jenis Kelamin',
            'rules' => 'trim|required'

        ),
        'agama' => array(
            'field' => 'agama',
            'label' => 'Agama',
            'rules' => 'trim|required'

        ),
        'asal_seklah' => array(
            'field' => 'asal_seklah',
            'label' => 'Asal Sekolah',
            'rules' => 'trim|required'

        ),
        'nsm' => array(
            'field' => 'nsm',
            'label' => 'NSS',
            'rules' => 'trim|required'

        ),
        'npsn' => array(
            'field' => 'npsn',
            'label' => 'NPSN',
            'rules' => 'trim|required'

        ),
        'telp' => array(
            'field' => 'telp',
            'label' => 'WA',
            'rules' => 'trim|required'

        ),
        'email' => array(
            'field' => 'email',
            'label' => 'Email Lahir',
            'rules' => 'trim|required|email'

        ),
        'provinsi' => array(
            'field' => 'provinsi',
            'label' => 'PROV',
            'rules' => 'trim|required'

        ),
        'kabupaten' => array(
            'field' => 'kabupaten',
            'label' => 'KAB',
            'rules' => 'trim|required'

        ),
        'kecamatan' => array(
            'field' => 'kecamatan',
            'label' => 'KEC',
            'rules' => 'trim|required'

        ),
        'alamat' => array(
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'trim|required'

        ),
        'nama_ayah' => array(
            'field' => 'nama_ayah',
            'label' => 'Ayah',
            'rules' => 'trim|required'

        ),
        'nama_ibu' => array(
            'field' => 'nama_ibu',
            'label' => 'Ibu',
            'rules' => 'trim|required'

        )
    ];

    public function insert($data)
    {
        return  $this->db->insert($this->table_name, $data);
    }
}

/* End of file Daftar_model.php */
