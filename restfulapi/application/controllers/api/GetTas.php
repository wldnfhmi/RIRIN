<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH. "libraries/Format.php";
require APPPATH. "libraries/RestController.php";
use chriskacerguis\RestServer\RestController;

class GetTas extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelTas');
    }

    public function index_get()
    {
        $tas = new ModelTas;
        $resulttas = $tas->get_tas();
        $this->response($resulttas, 200);
    }

    public function TasByKode_get($kd_tas)
    {
        $tas = new ModelTas;
        $resulttas = $tas->get_tas_bykode($kd_tas);
        $this->response($resulttas, 200);
    }

    public function TasByMerk_get($merk)
    {
        $tas = new ModelTas;
        $resulttas = $tas->get_tas_bymerk($merk);
        $this->response($resulttas, 200);
    }

    public function TasBySize_get($ukuran)
    {
        $tas = new ModelTas;
        $resulttas = $tas->get_tas_bysize($ukuran);
        $this->response($resulttas, 200);
    }

    public function TasByPrice_get($harga)
    {
        $tas = new ModelTas;
        $resulttas = $tas->get_tas_byprice($harga);
        $this->response($resulttas, 200);
    }

    public function AddTas_post()
    {
        $tas = new ModelTas;
        $data = [
            'kd_tas' => $this->input->post('kd_tas'),
            'merk' => $this->input->post('merk'),
            'ukuran' => $this->input->post('ukuran'),
            'warna' => $this->input->post('warna'),
            'harga' => $this->input->post('harga')
        ];
        $addtas = $tas->post_tas($data);
        if($addtas > 0){
            $this->response(
                [
                    'status' => true,
                    'pesan' => 'Insert Berhasil'
                ], RestController::HTTP_OK
            );
        } else {
            $this->response(
                [
                    'status' => false,
                    'pesan' => 'Insert Gagal'
                ], RestController::HTTP_BAD_REQUEST
            );
        }
    }

    public function DeleteTas_delete($kd_tas)
    {
        $tas = new ModelTas;
        $deltas = $tas->del_tas($kd_tas);
        if($deltas > 0){
            $this->response(
                [
                    'status' =>true,
                    'pesan' =>'Delete Berhasil'
                ], RestController::HTTP_OK
            );
        } else {
            $this->response(
                [
                    'status' =>false,
                    'pesan' =>'Delete Gagal'
                ], RestController::HTTP_BAD_REQUEST
            );
        }
    }

    public function UpdateTas_put($kd_tas)
    {
         $tas = new ModelTas;
         $data = [
             'merk' => $this->put('merk'),
             'ukuran' => $this->put('ukuran'),
             'warna' => $this->put('warna'),
             'harga' => $this->put('harga')
         ];
         $puttas = $tas->put_tas($kd_tas, $data);
         if($puttas > 0){
             $this->response(
                 [
                     'status' =>true,
                     'pesan' =>'Update berhasil'
                 ], RestController::HTTP_OK
             );
         } else {
             $this->response(
                 [
                     'status' =>false,
                     'pesan' =>'Update gagal'
                 ], RestController::HTTP_BAD_REQUEST
             );
         }
     }
}