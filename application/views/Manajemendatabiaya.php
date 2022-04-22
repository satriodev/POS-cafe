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
                      <h1>Manajemen Data Biaya</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                          <li class="breadcrumb-item active">Manajemen Data Biaya</li>
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
                              <h3 class="card-title">Data Data Biaya</h3>



                              <button class="btn btn-primary float-sm-right" onClick="location.href='<?= base_url() ?>Manajemenbiaya/Viewaddbiaya'">
                                  <i class='fas fa-plus-square mr-2'></i>


                                  Tambah Data Biaya

                              </button>

                          </div>



                          <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">

                                  <thead>

                                      <tr>
                                          <th>
                                              ID Biaya
                                          </th>
                                          <th>
                                              Nomor Nota
                                          </th>
                                          <th>
                                              Total Nominal Biaya
                                          </th>


                                          <th>
                                              Keterangan Biaya
                                          </th>


                                          <th>
                                              Tanggal
                                          </th>

                                          <th>
                                              Aksi
                                          </th>




                                      </tr>
                                  </thead>
                                  <tbody>


                                      <?php foreach ($databiaya as $i) :

                                            $id_biaya = $i['id_biaya'];
                                            $no_nota = $i['no_nota'];
                                            $total_nominal_biaya = $i['total_nominal_biaya'];
                                            $keterangan_biaya = $i['keterangan_biaya'];
                                            $tgl_biaya = $i['tgl_biaya'];

                                        ?>


                                          <tr>
                                              <td> <?php echo $id_biaya; ?></td>
                                              <td> <?php echo $no_nota; ?></td>
                                              <td><?php echo $total_nominal_biaya; ?></td>
                                              <td><?php echo $keterangan_biaya; ?></td>
                                              <td><?php echo $tgl_biaya; ?></td>

                                              <td>

                                                  <?php
                                                    echo "<a href='" . base_url() . "Manajemenbiaya/Viewupdatebiaya/" . $id_biaya . "' title='Edit'  class=' btn-warning'><i class='fas fa-pencil-alt'></i> Edit</a> ";

                                                    ?>

                                                  <?php
                                                    echo "<a href='" . base_url() . "Manajemenbiaya/Deletebiaya/" . $id_biaya . "' title='Hapus'  class=' tombol-hapus btn-danger ml-3'><i class='fas fa-trash-alt'></i> Hapus</a> </td>";

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