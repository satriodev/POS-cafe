  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Laporan Bulanan</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                          <li class="breadcrumb-item active">Laporan Bulanan</li>
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
                              <h3 class="card-title">Laporan Bulanan</h3>

                              <div class="card cent">

                              </div>
                              <div class="d-flex justify-content-end"><input type="button" class=" mr-4 btn btn-info" onClick="PrintDiv();" value="Print"></div>


                              <div id="divToPrint">
                                  <div class="card-body">
                                      <div class="d-flex justify-content-center">
                                          <h3 class="align-middle">Laporan Absensi Mulai Tanggal <?php $date = date_create($tanggal1);
                                                                                                    echo date_format($date, "d/m/Y"); ?>
                                              Hingga Tanggal <?php $date = date_create($tanggal2);
                                                                echo date_format($date, "d/m/Y"); ?></h3>
                                      </div>

                                      <table id="example1" class="table table-bordered table-striped">

                                          <thead>

                                              <tr>
                                                  <th>
                                                      ID Pegawai
                                                  </th>
                                                  <th>
                                                      Nama Pegawai
                                                  </th>
                                                  <th>
                                                      Keterangan Berangkat Sesuai
                                                  </th>
                                                  <th>
                                                      Keterangan Berangkat Terlambat
                                                  </th>
                                                  <th>
                                                      Keterangan Pulang Sesuai
                                                  </th>
                                                  <th>
                                                      Keterangan Pulang Tidak Sesuai Jam Pulang
                                                  </th>
                                                  <th>
                                                      Tidak Absen Pulang
                                                  </th>
                                                  <th>
                                                      Ijin
                                                  </th>
                                                  <th>
                                                      Mangkir
                                                  </th>



                                              </tr>
                                          </thead>
                                          <tbody>


                                              <?php if ($this->session->userdata('akses') == 'admin') {
                                                    foreach ($datalaporan as $i) :

                                                        $id_pegawai = $i['id_pegawai'];
                                                        $nama = $i['nama'];
                                                        $ket_berangkat_sesuai = $i['ket_berangkat_sesuai'];
                                                        $ket_berangkat_terlambat = $i['ket_berangkat_terlambat'];

                                                        $ket_pulang_sesuai = $i['ket_pulang_sesuai'];

                                                        $ket_pulang_tidak_sesuai = $i['ket_pulang_tidak_sesuai'];
                                                        $tidak_absen_pulang = $i['tidak_absen_pulang'];
                                                        $mangkir = $i['mangkir'];
                                                        $ijin = $i['ijin'];


                                                ?>





                                                      <tr>
                                                          <td> <?php echo $id_pegawai; ?></td>
                                                          <td> <?php echo $nama; ?></td>
                                                          <td> <?php echo $ket_berangkat_sesuai; ?></td>
                                                          <td><?php echo $ket_berangkat_terlambat; ?></td>
                                                          <td> <?php echo $ket_pulang_sesuai; ?></td>

                                                          <td><?php echo $ket_pulang_tidak_sesuai; ?></td>

                                                          <td><?php echo $tidak_absen_pulang ?></td>
                                                          <td><?php echo $mangkir; ?></td>
                                                          <td><?php echo $ijin; ?></td>

                                                          <!--     <td>-->



                                                          <!--</*
                        echo "<a href='". base_url() ."Manajemenijin/Deleteijin/". $id_absen ."' title='Edit'  class=' confirmation btn-danger'><i class='fas fa-trash-alt'></i> Hapus</a> </td>";
               
                */    
         -->
                                                      </tr>

                                              <?php endforeach;
                                                } ?>





                                              </tfoot>
                                      </table>

                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
      </section>
  </div>