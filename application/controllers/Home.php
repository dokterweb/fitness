<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_jenis_latihan');
		$this->load->model('m_home');
	}

	public function index()
	{
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, OPTIONS");
		$data['title'] = 'Data Latihan';
		$data['jenis_lat'] = $this->m_jenis_latihan->showlatihan()->result();
		$this->load->view('home', $data);
	}

	function input_ajax()
	{
		// $this->m_usulan->insert_temp();
		$r_jenis_lat       = $_GET['r_jenis_lat'];
		$r_repetisi        = $_GET['r_repetisi'];

		$data   =   array(
			'jenis_lat_id'   	=> $r_jenis_lat,
			'repetisi'        	=> $r_repetisi,
			'status'            => '0'
		);

		$this->db->insert('latihan_detail', $data);
	}


	function load_temp()
	{
		echo "<table class='table table-striped'>
		<tr>
		  <th scope='col'>No</th>
		  <th scope='col'>Jenis Latihan</th>
		  <th scope='col'>Repetisi</th>
		  <th scope='col'>Action</th>
		</tr>";
		$no = 1;
		$data =  $this->m_home->tampilkan_temp()->result();
		foreach ($data as $d) {
			echo "<tr id='dataku$d->latihan_detail_id'>
                <td>$no</td>
                <td>$d->nama_latihan</td>
                <td>$d->repetisi</td>
				<td style='text-align: center' onClick='hapus($d->latihan_detail_id)'>
				<button class='btn btn-danger btn-sm'>Hapus</button></td>
                </tr>";
			$no++;
		}
		echo "</table>";
	}


	function hapus_temp()
	{
		$id = $_GET['id'];
		$this->m_home->hapus_temp($id);
	}
	function chekout()
	{
		$id = $this->m_home->chekout();
		$this->m_home->ubah_status($id);
	}
}
