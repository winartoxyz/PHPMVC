<?php
class Mahasiswa_model{

    private $mhs = [
        [
          "nama"=>"Sandhika Galih",
          "nrp"=>"043040023",
          "email"=>"sandhikagalih@unpas.ac.id",
          "jurusan"=>"Teknik Informatika"
        ],
        [
            "nama"=>"Doddy Ferdiansyah",
            "nrp"=>"133050321",
            "email"=>"doddy@unpas.ac.id",
            "jurusan"=>"Teknik Mesin"
        ],
        [
            "nama"=>"Erick Doank",
            "nrp"=>"163030123",
            "email"=>"erick@unpas.ac.id",
            "jurusan"=>"Teknik Industri"
        ],
    ];

    public function getAllMahasiswa(){
        return $this->mhs;
    }
}