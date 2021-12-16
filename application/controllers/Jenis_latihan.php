<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_latihan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_jenis_latihan');
    }

    function index()
    {
        $data['title'] = 'Data Jenis Latihan';
        $data['row'] = $this->m_jenis_latihan->showlatihan()->result();
        $this->load->view('master/v_jenis_lat', $data);
    }

    function add()
    {
        if (isset($_POST['submit'])) {

            $data['nama_latihan']     = $this->input->post('nama_latihan', true);
            $this->m_jenis_latihan->tambahdata($data, 'jenis_latihan');
            redirect('jenis_latihan');
        } else {
            // $data['row']  =  $this->m_jenis_latihan->showkelas()->result();
            // $data['ust']  =  $this->ustadz_m->showustadz()->result();
            $this->load->view('master/v_jenis_lat');
        }
    }

    function edit()
    {
        $jenis_lat_id       = $this->input->post('jenis_lat_id');
        $nama_latihan       = $this->input->post('nama_latihan');
        $this->m_jenis_latihan->updatelatihan($jenis_lat_id, $nama_latihan);
        redirect('jenis_latihan');
    }

    function del()
    {
        $id =  $this->uri->segment(3);
        $this->m_jenis_latihan->delete($id);
        redirect('jenis_latihan');
    }
}
