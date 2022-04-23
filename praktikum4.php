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
                <h3 class="card-title">PRAKTIKUM 04</h3>

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
              <h3 style="text-align: center;">PERSEGI PANJANG</h3>
                <?php
                class persegipanjang{
                public $panjang;
                public $lebar;

                public function luasp(){
                $luas=$this->panjang*$this->lebar;
                return "Luas :".$luas;
                }
                public function kelilingp(){
                $keliling=2*($this->panjang+$this->lebar);
                return "Keliling :".$keliling;
                }

                public function setLebar($lebar){
                return $this->lebar=$lebar;
                }
                public function setPanjang($panjang){
                return $this->panjang=$panjang;
                }
              }
                $LuasPersegi=new persegipanjang();
                echo "Panjang :".$LuasPersegi->setPanjang(25);
                echo "<br>";
                echo "Lebar :".$LuasPersegi->setLebar(7);
                echo "<br>";
                echo $LuasPersegi->luasp();
                echo "<br>";
                echo $LuasPersegi->kelilingp();

              ?>
              <br>
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