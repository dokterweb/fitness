<?php

class M_home extends CI_model
{

    public function showlatihan()
    {
        return $this->db->query("SELECT * FROM latihan");
    }


    function tampilkan_temp()
    {
        $query = "SELECT l.*, j.* FROM latihan_detail AS l, jenis_latihan AS j WHERE l.jenis_lat_id=j.jenis_lat_id AND l.status='0'";
        return $this->db->query($query);
    }


    function hapus_temp($id)
    {
        $this->db->where('latihan_detail_id', $id);
        $this->db->delete('latihan_detail');
    }


    function chekout()
    {
        $judul          =   $_GET['judul'];
        $tgl_latihan    =   $_GET['tgl_latihan'];

        $data       =   array(
            'judul'             => $judul,
            'tgl_latihan'       => $tgl_latihan
        );
        $this->db->insert('latihan', $data);
        $get_id     = $this->db->get_where('latihan', $data)->row_array();
        return $get_id['latihan_id'];
    }


    function ubah_status($id)
    {
        // $id =  $this->uri->segment(3);
        $this->db->query("UPDATE latihan_detail SET status='1', latihan_id='$id' where status='0'");
    }

    public function tambahdata($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function updatedata($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapusdata($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
