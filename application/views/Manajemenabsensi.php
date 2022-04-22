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
            <h1>Manajemen Absensi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Absensi</li>
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
                <h3 class="card-title">Data Absensi</h3>



              </div>



              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>

                    <tr>
                      <th>
                        ID Absen
                      </th>
                      <th>
                        ID Pegawai
                      </th>
                      <th>
                        Nama Pegawai
                      </th>
                      <th>
                        Id Tim
                      </th>
                      <?php if ($this->session->userdata('akses') == 'admin') : ?>
                        <th>
                          Akses
                        </th>
                      <?php endif; ?>
                      <th>
                        Tanggal
                      </th>
                      <th>
                        Jam Berangkat
                      </th>
                      <th>
                        Keterangan Berangkat
                      </th>
                      <th>
                        Jam Pulang
                      </th>
                      <th>
                        Keterangan Pulang
                      </th>




                    </tr>
                  </thead>
                  <tbody>


                    <?php if ($this->session->userdata('akses') == 'admin') {
                      foreach ($dataabsensi as $i) :

                        $id_absen = $i['id_absen'];
                        $id_pegawai = $i['id_pegawai'];
                        $nama = $i['nama'];
                        $id_tim = $i['id_tim'];

                        $akses = $i['akses'];

                        $tanggal = $i['tanggal'];
                        $jam_berangkat = $i['jam_berangkat'];
                        $ket_berangkat = $i['ket_berangkat'];
                        $jam_pulang = $i['jam_pulang'];
                        $ket_pulang = $i['ket_pulang'];

                    ?>





                        <tr>
                          <td> <?php echo $id_absen; ?></td>
                          <td> <?php echo $id_pegawai; ?></td>
                          <td><?php echo $nama; ?></td>
                          <td> <?php echo $id_tim; ?></td>

                          <td><?php echo $akses; ?></td>

                          <td><?php $date = date_create($tanggal);
                              echo date_format($date, "d/m/Y"); ?></td>
                          <td><?php echo $jam_berangkat; ?></td>
                          <td><?php echo $ket_berangkat; ?></td>
                          <td><?php echo $jam_pulang; ?></td>
                          <td><?php echo $ket_pulang; ?></td>
                          <!--     <td>-->



                          <!--
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