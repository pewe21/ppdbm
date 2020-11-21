<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Daftar_model');
    }

    public function index()
    {
        views("form-daftar", "Daftar|MA MA'AHID");
    }

    function _api_ongkir($data)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            //CURLOPT_URL => "https://api.rajaongkir.com/starter/province?id=12",
            //CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
            CURLOPT_URL => "https://x.rajaapi.com/MeP7c5ne5ZZHvtG7IvXmVDSCLTB73gd1XwqFjaWUiiTZrz1exj8pLIbFFm/m/wilayah/" . $data,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                /* masukan api key disini*/
                "key: 8e838c4b10b3c5699c1ee43846c8335d"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return  $err;
        } else {
            return $response;
        }
    }
    public function provinsi()
    {
        $provinsi = $this->_api_ongkir('provinsi');
        $data = json_decode($provinsi, true);
        echo json_encode($data['data']);
    }
    public function kota($provinsi = "")
    {

        if (!empty($provinsi)) {
            if (is_numeric($provinsi)) {
                $kota = $this->_api_ongkir('kabupaten?idpropinsi=' . $provinsi);
                $data = json_decode($kota, true);
                echo json_encode($data['data']);
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }
    public function kecamatan($kota = "")
    {

        if (!empty($kota)) {
            if (is_numeric($kota)) {
                $kota = $this->_api_ongkir('kecamatan?idkabupaten=' . $kota);
                $data = json_decode($kota, true);
                echo json_encode($data['data']);
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }

    public function pendaftaran()
    {
        $post = $this->input->post();
        $rules = $this->Daftar_model->rules;
        $this->form_validation->set_rules($rules);
        $this->form_validation->set_message('required', '%s harus diisi!');




        if ($this->form_validation->run() == TRUE) {
            $data = [
                'tgl_daftar' => date('Y-m-d')
            ] + $post;
            # code...
            $isi =  $this->Daftar_model->insert($data);
        } else {

            $this->session->set_flashdata('err', 'Mohon Perhatikan isian semua wajib diisi');
            redirect('daftar', 'refresh');
        }
    }
}

/* End of file Daftar.php */
