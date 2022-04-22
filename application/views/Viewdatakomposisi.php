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
                      <h1>Manajemen Data Komposisi Per Menu</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                          <li class="breadcrumb-item active">Manajemen Data Komposisi Per Menu</li>
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
                              <h3 class="card-title">Manajemen Data Komposisi Per Menu</h3>





                          </div>



                          <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">

                                  <thead>

                                      <tr>
                                          <th>
                                              ID Kebutuhan Bahan Baku
                                          </th>

                                          <th>
                                              Nama Menu
                                          </th>
                                          <th>
                                              Nama Bahan Baku
                                          </th>
                                          <th>
                                              Jumlah Kebutuhan
                                          </th>

                                          <th>
                                              Aksi
                                          </th>


                                      </tr>
                                  </thead>
                                  <tbody>


                                      <?php foreach ($datakomposisi as $i) :

                                            $id_kebutuhan = $i['id_kebutuhan'];
                                            $id_menu = $i['id_menu'];
                                            $nama_menu = $i['nama_menu'];
                                            $nama_bahan_baku = $i['nama_bahan_baku'];
                                            $jumlah_kebutuhan = $i['jumlah_kebutuhan'];


                                        ?>


                                          <tr>
                                              <td> <?php echo $id_kebutuhan; ?></td>
                                              <td> <?php echo $nama_menu; ?></td>
                                              <td><?php echo $nama_bahan_baku; ?></td>
                                              <td> <?php echo $jumlah_kebutuhan; ?></td>

                                              <td>

                                                  <?php
                                                    echo "<a href='" . base_url() . "Viewkomposisi/Viewupdatekomposisi/" . $id_kebutuhan . "' title='Edit'  class=' btn-warning'><i class='fas fa-pencil-alt'></i> Edit</a> ";

                                                    ?>

                                                  <?php
                                                    echo "<a href='" . base_url() . "Viewkomposisi/Deletekomposisi/" . $id_kebutuhan . "/" . $id_menu . "' title='Hapus'  class=' tombol-hapus btn-danger ml-3'><i class='fas fa-trash-alt'></i> Hapus</a> </td>";

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