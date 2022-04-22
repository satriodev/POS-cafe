  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>">

  </div>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manajemen Data Bahan Baku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Data Bahan Baku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Data Bahan Baku</h3>



                <button class="btn btn-primary float-sm-right" onClick="location.href='<?= base_url() ?>Manajemenbahanbaku/Viewaddbahanbaku'">
                  <i class='fas fa-plus-square mr-2'></i>


                  Tambah Data Bahan Baku

                </button>

              </div>



              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>

                    <tr>
                      <th>
                        ID Bahan Baku
                      </th>
                      <th>
                        Nama Bahan Baku
                      </th>
                      <th>
                        Harga
                      </th>
                      <th>
                        Jumlah
                      </th>
                      <th>
                        Satuan
                      </th>

                      <th>
                        Aksi
                      </th>


                    </tr>
                  </thead>
                  <tbody>


                    <?php foreach ($databahanbaku as $i) :

                      $id_bahan_baku = $i['id_bahan_baku'];
                      $nama_bahan_baku = $i['nama_bahan_baku'];
                      $harga = $i['harga'];
                      $jumlah = $i['jumlah'];
                      $satuan = $i['satuan'];


                    ?>


                      <tr>
                        <td> <?php echo $id_bahan_baku; ?></td>
                        <td> <?php echo $nama_bahan_baku; ?></td>
                        <td><?php echo $harga; ?></td>
                        <td> <?php echo $jumlah; ?></td>
                        <td><?php echo $satuan; ?></td>
                        <td>

                          <?php
                          echo "<a href='" . base_url() . "Manajemenbahanbaku/Viewupdatebahanbaku/" . $id_bahan_baku . "' title='Edit'  class=' btn-warning'><i class='fas fa-pencil-alt'></i> Edit</a> ";

                          ?>

                          <?php
                          echo "<a href='" . base_url() . "Manajemenbahanbaku/Deletebahanbaku/" . $id_bahan_baku . "' title='Hapus'  class=' tombol-hapus btn-danger ml-3'><i class='fas fa-trash-alt'></i> Hapus</a> </td>";

                          ?>



                      </tr>
                    <?php endforeach; ?>
                    </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>