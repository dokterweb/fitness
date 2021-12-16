<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aktifitas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_aktifitas');
    }

    function index()
    {
        $data['title'] = 'List Latihan';
        $data['row'] = $this->m_aktifitas->showlist()->result();
        $this->load->view('v_aktifitas', $data);
    }

    function detail($id)
    {
        $data['getlatihan']  =  $this->m_aktifitas->get_latihanby($id)->result();
        $data['latdetail'] = $this->m_aktifitas->showdetail($id)->result();
        $this->load->view('latihan_detail', $data);
    }

    function del()
    {
        $id =  $this->uri->segment(3);
        $this->m_aktifitas->delete($id);
        redirect('aktifitas');
    }
}
