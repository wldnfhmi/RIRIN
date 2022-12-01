<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->api="http://localhost/restfulapi/api/tas/";
        $this->load->library('Curl.php');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index()
    {
        $data['tas'] = json_decode($this->curl->simple_get($this->api), true);
        $this->load->view('listtas', $data);
    }

    function create()
    {
        if(isset($_POST['submit'])){
            $data = array(
                'kd_tas' => $this->input->post('kd_tas'),
                'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran'),
                'warna' => $this->input->post('warna'),
                'harga' => $this->input->post('harga')
            );
            $insert = $this->curl->simple_post($this->api . '/add', $data, array(CURLOPT_BUFFERSIZE => 10));
            redirect('http://localhost/frontend/tas');
        } else {
            $this->load->view('createtas');
        }
    }

    function delete($kd_tas)
    {
        if(empty($kd_tas)){
            redirect('http://localhost/frontend/tas');
        } else {
            $kd_tas = $this->uri->segment(3);
            $data['tas'] = json_decode($this->curl->simple_delete($this->api . '/delete/' . $kd_tas), true);
            redirect('http://localhost/frontend/tas');
        }
    }

    // function edit()
    // {
    //     if(isset($_POST['submit'])){
    //         $kd_tas = $this->input->post('kd_tas');
    //         $data = array(
    //             'merk' => $this->input->post('merk'),
    //             'ukuran' => $this->input->post('ukuran'),
    //             'warna' => $this->input->post('warna'),
    //             'harga' => $this->input->post('harga')
    //         );
    //         $update = $this->curl->simple_put($this->api . '/update/' . $kd_tas, $data, array(CURLOPT_BUFFERSIZE => 10));
    //         redirect('http://localhost/frontend/tas');
    //     } else {
    //         $kd_tas = $this->uri->segment(3);
    //         $data['tas'] = json_decode($this->curl->simple_get($this->api . '/kode/' . $kd_tas), true);
    //         $this->load->view('edittas', $data);
    //     }
    // }
}