<?php

class M_aktifitas extends CI_model
{

    public function showlist()
    {
        return $this->db->query("SELECT * FROM latihan");
    }

    public function get_latihanby($id)
    {
        return $this->db->query("SELECT * FROM latihan WHERE latihan_id='$id'");
    }

    public function showdetail($id)
    {
        return $this->db->query("SELECT det.latihan_detail_id, det.repetisi, lat.*, jl.nama_latihan 
        FROM latihan_detail AS det LEFT JOIN jenis_latihan AS jl ON jl.jenis_lat_id=det.jenis_lat_id 
        LEFT JOIN latihan AS lat ON lat.latihan_id=det.latihan_id WHERE det.latihan_id='$id'");
    }

    function delete($id)
    {
        return $this->db->query("DELETE latihan_detail, latihan FROM latihan_detail, latihan 
        WHERE latihan_detail.latihan_id=latihan.latihan_id AND latihan.latihan_id='$id'");
    }
}
