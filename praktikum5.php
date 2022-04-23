<?php
    include_once "header.php";
    include_once "sidebar.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">PRAKTIKUM 05</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <h3 style="text-align: center;">DISPENSER</h3>
                <?php

class Dispenser{
    public $volume;
    public $hargaSegelas;
    public $volumeGelas;
    public $namaMinuman;
    public const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari, $tinggi){
        $this -> jari_jari = $jari;
        $this -> tinggi = $tinggi;
        echo "<br/>Jari-jari : " . $jari . " cm";
        echo "<br/>Tinggi : " . $tinggi . " cm";
    }

    public function VolumeWadah(){
        return self::PHI * $this -> jari_jari * $this -> jari_jari * $this -> tinggi;
    }
}
class Harga extends Dispenser{
    public function __construct($hargaSegelas){
        $this -> hargaSegelas = $hargaSegelas;
        echo"<br>";
        echo "<br/> Diketahui : ";
        echo "<br/>Harga satu gelas : " . $hargaSegelas;
    }

    public function Harga(){
        return $this -> hargaSegelas * 5 ;
    }
  }    
    echo "<br/>  PHI : " . Dispenser :: PHI;
    $volumeWadah = new Dispenser(40, 80);
    $harga = new Harga(1000);
    echo "<br/> Volume Wadah : " . $volumeWadah -> VolumeWadah() . " cm3";
    echo "<br/> Harga 5 Gelas : " . $harga -> Harga();

?>
                </br>
                <button type="button" class="btn btn-outline-dark">
                 <a href="index.php">BACK</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php
    include_once "footer.php";
?>