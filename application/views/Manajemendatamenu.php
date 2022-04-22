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
                      <h1>Manajemen Data Menu</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                          <li class="breadcrumb-item active">Manajemen Data Menu</li>
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
                              <h3 class="card-title">Data Data Menu</h3>



                              <button class="btn btn-primary float-sm-right" onClick="location.href='<?= base_url() ?>Manajemendatamenu/Viewaddmenu'">
                                  <i class='fas fa-plus-square mr-2'></i>


                                  Tambah Data Menu

                              </button>

                          </div>



                          <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">

                                  <thead>

                                      <tr>
                                          <th>
                                              ID Menu
                                          </th>
                                          <th>
                                              Nama Menu
                                          </th>
                                          <th>
                                              Harga
                                          </th>


                                          <th>
                                              Aksi
                                          </th>


                                      </tr>
                                  </thead>
                                  <tbody>


                                      <?php foreach ($datamenu as $i) :

                                            $id_menu = $i['id_menu'];
                                            $nama_menu = $i['nama_menu'];
                                            $harga = $i['harga'];



                                        ?>


                                          <tr>
                                              <td> <?php echo $id_menu; ?></td>
                                              <td> <?php echo $nama_menu; ?></td>
                                              <td><?php echo $harga; ?></td>

                                              <td>

                                                  <?php
                                                    echo "<a href='" . base_url() . "Manajemendatamenu/Viewupdatemenu/" . $id_menu . "' title='Edit'  class=' btn-warning'><i class='fas fa-pencil-alt'></i> Edit</a> ";

                                                    ?>

                                                  <?php
                                                    echo "<a href='" . base_url() . "Manajemendatamenu/Deletemenu/" . $id_menu . "' title='Hapus'  class=' tombol-hapus btn-danger ml-3'><i class='fas fa-trash-alt'></i> Hapus</a> </td>";

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