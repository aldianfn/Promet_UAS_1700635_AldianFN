<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_motor extends CI_Controller {

	var $API ="";

	function __construct() {
		parent::__construct();
		$this->API="https://api.akhmad.id/uaspromnet/";
    $this->curl->http_header("X-Nim", "1700635");
    $this->load->helper('url');
	}

	// proses yang akan di buka saat pertama masuk ke controller
	public function index()
  {
		$data['user'] = json_decode($this->curl->simple_get($this->API.'/user'))->data;

    $this->load->view('header');
		$this->load->view('V_user', $data);
	}

  public function get_motor()
  {
    $data['motor'] = json_decode($this->curl->simple_get($this->API.'/motor'))->data;

    $this->load->view('header');
		$this->load->view('V_motor', $data);
  }

  public function get_cicilan()
  {
    $data['cicil'] = json_decode($this->curl->simple_get($this->API.'/cicil'))->data;

    $this->load->view('header');
		$this->load->view('V_cicil', $data);
  }

  public function get_uangmuka()
  {
    $data['uangmuka'] = json_decode($this->curl->simple_get($this->API.'/uangmuka'))->data;

    $this->load->view('header');
		$this->load->view('V_uangmuka', $data);
  }

  public function get_penjualan()
  {
    $data['penjualan'] = json_decode($this->curl->simple_get($this->API.'/penjualan'))->data->terjual;

    $this->load->view('header');
		$this->load->view('V_penjualan', $data);
  }

	// proses untuk menambah data
	// insert data kontak
	function add(){

		$data = array(
			'id_motor'      =>  $this->input->post('id_motor'),
			'id_cicil'      =>  $this->input->post('id_cicil'),
			'id_uang_muka'      =>  $this->input->post('id_uang_muka'),
			'cicilan_pokok'    =>  $this->input->post('cicilan_pokok'),
			'cicilan_bunga'	  =>  $this->input->post('cicilan_bunga'),
			'cicilan_total' =>  $this->input->post('cicilan_total'));
		$insert =  $this->curl->simple_post($this->API.'/penjualan', $data, array(CURLOPT_BUFFERSIZE => 0));

		if($insert)
		{
			$this->session->set_flashdata('hasil','Insert Data Berhasil');
		}else
		{
			$this->session->set_flashdata('hasil','Insert Data Gagal');
		}

		redirect('C_karyawan/get_penjualan');

	}


	// proses untuk menghapus data pada database
	function delete($id){
		if(empty($id)){
			redirect('C_karyawan');
		}else{
			$delete =  $this->curl->simple_delete($this->API.'/Karyawan', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
			if($delete)
			{
				$this->session->set_flashdata('hasil','Delete Data Berhasil');
			}else
			{
				$this->session->set_flashdata('hasil','Delete Data Gagal');
			}

			redirect('C_karyawan');
		}
	}

	//TUGAS : bikin fungsi update di client menggunakan service
	//
	//
}
