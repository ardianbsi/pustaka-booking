<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller {

	public function index()
	{
		echo "Selamat datang Sealamat Bel;ajar web programming";
	}

	public function penjumlahan ($n1, $n2)
	{
		$this->load->model('Model_latihan1');
		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
		//$hasil=$this->Model_latihan1->jumlah($n1, $n2);
		//echo "hasil Penjumlahn dari ". $n1 . " + " .$n2. "=" . $hasil;

		$this->load->view('view-latihan1', $data, FALSE);
	}

}

/* End of file Latihan1.php */
/* Location: ./application/controllers/Latihan1.php */