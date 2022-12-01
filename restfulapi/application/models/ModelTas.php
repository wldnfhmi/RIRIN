<?php
class ModelTas extends CI_Model
{
    public function get_tas()
    {
        $query = $this->db->get('tas');
        return $query->result();
    }

    public function get_tas_bykode($kd_tas)
    {
        $this->db->where('kd_tas', $kd_tas);
        $query = $this->db->get('tas');
        return $query->row();
    }

    public function get_tas_bymerk($merk)
    {
        $this->db->where('merk', $merk);
        $query = $this->db->get('tas');
        return $query->result();
    }

    public function get_tas_bysize($ukuran)
    {
        $this->db->where('ukuran', $ukuran);
        $query = $this->db->get('tas');
        return $query->result();
    }

    public function get_tas_byprice($harga)
    {
        $this->db->where('harga', $harga);
        $query = $this->db->get('tas');
        return $query->result();
    }

    public function post_tas($data)
    {
        return $this->db->insert('tas', $data);
    }

    public function del_tas($kd_tas)
    {
        return $this->db->delete('tas', ['kd_tas' => $kd_tas]);
    }

    // public function put_tas($kd_tas, $data)
    // {
    //     $this->db->where('kd_tas', $kd_tas);
    //     return $this->db->update('tas', $data);
    // }
}