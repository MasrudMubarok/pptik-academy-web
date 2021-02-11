<?php
class Siswa_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getAllSwa()
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('ambil_kursus', 'siswa.id_siswa = ambil_kursus.id_siswa');
    $this->db->join('kursus', 'ambil_kursus.id_kursus = kursus.id_kursus');
    $query = $this->db->get();
    return $query->result();
  }

  public function getAllAkrs()
  {
    $this->db->select('*');
    $this->db->from('ambil_kursus');
    $query = $this->db->get();
    return $query->result();
  }

  public function getAllKrss()
  {
    $this->db->select('*');
    $this->db->from('kursus');
    $query = $this->db->get();
    return $query->result();
  }

  public function getswas()
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $query = $this->db->get();
    return $query->result();
  }

  public function getSwa($id_siswa)
  {
    return $this->db->where('id_siswa', $id_siswa)->get('siswa')->row();
  }

  public function insert1($data1)
  {
    $this->db->insert('siswa', $data1);
    return $this->db->affected_rows();
  }

  public function insert2($data2)
  {
    $this->db->insert('ambil_kursus', $data2);
    return $this->db->affected_rows();
  }

  public function update($id_siswa, $data)
  {
    $this->db->where('id_siswa', $id_siswa)->update('siswa', $data);
    return $this->db->affected_rows();
  }

  public function delete($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa)->delete('siswa');
    return $this->db->affected_rows();
  }
}
