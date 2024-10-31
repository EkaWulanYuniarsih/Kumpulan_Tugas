<?php
class Buku {
    private $judul;
    private $penulis;

    public function __construct($judul, $penulis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    
    public function setJudul($judul){
        $this->judul = $judul;
    }
    
    public function getJudul(){
        return $this->judul;
    }
}

$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getJudul();
?>
