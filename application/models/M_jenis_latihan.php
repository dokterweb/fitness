<?php

class M_jenis_latihan extends CI_model
{

    public function showlatihan()
    {
        return $this->db->query("SELECT * FROM jenis_latihan");
    }

    public function ambildata($table)
    {
        return   $this->db->get($table);
    }

    public function tambahdata($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function ambilId($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function updatelatihan($jenis_lat_id, $nama_latihan)
    {
        $hsl = $this->db->query("UPDATE jenis_latihan set nama_latihan='$nama_latihan' where jenis_lat_id='$jenis_lat_id'");
        return $hsl;
    }


    public function updatedata($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function delete($id)
    {
        $this->db->where('jenis_lat_id', $id);
        $this->db->delete('jenis_latihan');
    }
}
