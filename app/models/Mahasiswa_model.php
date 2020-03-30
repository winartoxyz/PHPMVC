<?php
class Mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    
    public function getAllMahasiswa(){
       $this->db->query('select * from ' . $this->table);
       return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query('select * from '. $this->table . ' where id=:id');
        $this->db->bind('id', $id);
        return $this->db->single(); 
    }

    public function tambahDataMahasiswa($data){
        $query = "insert into mahasiswa
                   values
                   ('', :nama, :nrp, :email, :jurusan) 
                 ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']); 

        $this->db->execute();
        return $this->db->rowCount(); 

    }
}