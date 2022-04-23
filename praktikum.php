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
                <h3 class="card-title"></h3>

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
              <?php
      $ar_nilai = [
        ["id" => 1, "Nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78],

        ["id" => 1, "Nim" => "01121", "uts" => 70, "uas" => 50, "tugas" => 68],

        ["id" => 1, "Nim" => "01130", "uts" => 60, "uas" => 86, "tugas" => 70],

        ["id" => 1, "Nim" => "01134", "uts" => 90, "uas" => 91, "tugas" => 82],
      ];

    ?>
    <h1 style="text-align: center; margin-top: 50px;">Data Siswa</h1>
      <table class="table table-success table-striped" style="width:600px; height: 100px; margin-left: 400px;">
        <tr>
          <td>No</td>
          <td>Nim</td>
          <td>Uts</td>
          <td>Uas</td>
          <td>Tugas</td>
          <td>Nilai Akhir</td>
        </tr>
        <?php $nomor = 1; ?>
        <?php foreach ($ar_nilai as $ns) :?>
          <?php $nilai_akhir = ($ns["uts"] + $ns["uas"] + $ns["tugas"])/3;?>
          <tr>
            <td><?= $nomor;?></td>
            <td><?= $ns["Nim"];?></td>
            <td><?= $ns["uts"];?></td>
            <td><?= $ns["uas"];?></td>
            <td><?= $ns["tugas"];?></td>
            <td><?= number_format($nilai_akhir,2,",","."); ?></td>
            <?php $nomor++;?>
            <?php endforeach ;?>
          </tr>
        </table>
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php
    include_once "footer.php";
?>