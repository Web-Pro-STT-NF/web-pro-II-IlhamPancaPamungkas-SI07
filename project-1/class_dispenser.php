<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;
    public $duit;

    function __construct($namaMinuman, $volumeGelas, $hargaSegelas){
        $this->namaMinuman = $namaMinuman;
        $this->volumeGelas = $volumeGelas;
        $this->hargaSegelas = $hargaSegelas; 
    }

    public function isi($vol){
        $this->volume = $vol;
    }

    function transaksi($duit){
        $this->duit = $duit;
        return $this->duit = $this->duit - $this->hargaSegelas;
    }

    function volumeSetelahDijual(){
        return $this->volume = $this->volume - $this->volumeGelas;
    }

    function cetak(){
        echo 'Nama Minuman : '. $this->namaMinuman;
        echo '<br/>Harga Segelas : '. $this->hargaSegelas;
        echo '<br/>Kembalian uang : '. $this->duit;
        echo '<br/>Sisa Volume Galon : '. $this->volume;
        echo '<hr/>';
    }

}
?>