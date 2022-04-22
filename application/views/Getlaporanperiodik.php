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
                      <h1>Laporan Periodik</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                          <li class="breadcrumb-item active">Laporan Periodik</li>
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
                              <h3 class="card-title">Laporan Periodik</h3>

                              <div class="card cent">

                              </div>
                           


                              <div id="divToPrint">
                                  <div class="card-body">
                                      <div class="d-flex justify-content-center">
                                          <h3 class="align-middle">Laporan Transaksi Mulai Tanggal <?php $date = date_create($tanggal1);
                                                                                                    echo date_format($date, "d/m/Y"); ?>
                                              Hingga Tanggal <?php $date = date_create($tanggal2);
                                                                echo date_format($date, "d/m/Y"); ?></h3>
                                      </div>

                                      <table id="example5" class="table table-bordered table-striped">

                                          <thead>

                                              <tr>
                                                  <th>
                                                      ID Transaksi
                                                  </th>
                                                  <th>
                                                      Nama Menu
                                                  </th>
                                                  <th>
                                                      Harga Menu
                                                  </th>
                                                  <th>
                                                      Jumlah Menu Terjual
                                                  </th>
                                                  <th>
                                                      Diskon Menu
                                                  </th>
                                                  <th>
                                                      Total Bayar per-Menu
                                                  </th>
                                                  <th>
                                                      Total Bayar Transaksi
                                                  </th>
                                                  <th>
                                                      Tanggal
                                                  </th>
                                                  
                                                  <th>
                                                      Nama Kasir
                                                  </th>
                                                  


                                              </tr>
                                          </thead>
                                          <tbody>


                                              <?php 
                                              $total_penjualan=0;
                                                    foreach ($transaksi as $i) :

                                                        $id_trx = $i['id_trx'];
                                                        $nama_menu = $i['nama_menu'];
                                                        $harga = $i['harga'];
                                                        $jumlah = $i['jumlah'];
                                                        $diskonmenu = $i['diskonmenu'];
                                                        $totalbayar = $i['totalbayar'];
                                                        $jumlah_bayar = $i['jumlah_bayar'];
                                                        
                                                        $tgl_waktu1 = $i['tgl_waktu'];
                                                        $tgl_waktu = date("d-m-Y H:i", strtotime($tgl_waktu1));
                                                        $kasir_user = $i['kasir_user'];
                                                        $total_penjualan=$total_penjualan+$totalbayar;

                                                ?>





                                                      <tr>
                                                          <td> <?php echo $id_trx; ?></td>
                                                          <td> <?php echo $nama_menu; ?></td>
                                                          <td> <?php echo $harga; ?></td>
                                                          <td> <?php echo $jumlah; ?></td>
                                                          <td> <?php echo $diskonmenu; ?></td>
                                                          <td> <?php echo $totalbayar; ?></td>
                                                          <td> <?php echo $jumlah_bayar; ?></td>
                                                          <td> <?php echo  $tgl_waktu ?></td>
                                                        
                                                          <td><?php echo $kasir_user; ?></td>
                                              </tr>

                                              <?php endforeach;
                                                 ?>


                                                 


                                              </tfoot>
                                              
                                      </table>
                                      <div class="row">
                                    <div class="col-12">
                                                     <h3>   Nominal Total Penjualan Rp <?php echo number_format("$total_penjualan",0,",",".");?> </h3>
                                                    </div>
                                                    </div>

                                  </div>
                              </div>
                              




                          </div>
                      </div>
                  </div>
            
      </section>




      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h3 class="card-title">Laporan Bahan Baku Periodik</h3>

                              <div class="card cent">

                              </div>
                           


                              <div id="divToPrint2">
                                  <div class="card-body">
                                      <div class="d-flex justify-content-center">
                                          <h3 class="align-middle">Laporan Bahan Baku Periodik Mulai Tanggal <?php $date = date_create($tanggal1);
                                                                                                    echo date_format($date, "d/m/Y"); ?>
                                              Hingga Tanggal <?php $date = date_create($tanggal2);
                                                                echo date_format($date, "d/m/Y"); ?></h3>
                                      </div>

                                      <table id="example3" class="table table-bordered table-striped">

                                          <thead>

                                              <tr>
                                                 
                                                  <th>
                                                      Nama Bahan Baku
                                                  </th>
                                                  <th>
                                                      Harga Bahan Baku
                                                  </th>
                                                  <th>
                                                      Jumlah Bahan Baku Digunakan
                                                  </th>
                                                  <th>
                                                      Jumlah Cost Bahan Baku
                                                  </th>
                                                 
                                                  


                                              </tr>
                                          </thead>
                                          <tbody>


                                              <?php 
                                             
                                                    foreach ($kebutuhan as $w) :

                                                        $id_trx = $w['id_trx'];
                                                        $nama_bahan_baku = $w['nama_bahan_baku'];
                                                        $harga_bahan_baku = $w['harga_bahan_baku'];
                                                        $jumlah = $w['jumlah'];
                                                        $cost_total = $w['cost_total'];
                                                        
                                                        


                                                ?>





                                                      <tr>
                                                         
                                                          <td> <?php echo $nama_bahan_baku; ?></td>
                                                          <td> <?php echo $harga_bahan_baku; ?></td>
                                                          <td> <?php echo $jumlah; ?></td>
                                                          <td> <?php echo $cost_total; ?></td>
                                                          
                                              </tr>

                                              <?php endforeach;
                                                 ?>





                                              </tfoot>
                                      </table>

                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
      </section>




      
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h3 class="card-title">Laporan Biaya Pengeluaran</h3>

                              <div class="card cent">

                              </div>
                           


                              <div id="divToPrint3">
                                  <div class="card-body">
                                      <div class="d-flex justify-content-center">
                                          <h3 class="align-middle">Laporan Biaya Pengeluaran Mulai Tanggal <?php $date = date_create($tanggal1);
                                                                                                    echo date_format($date, "d/m/Y"); ?>
                                              Hingga Tanggal <?php $date = date_create($tanggal2);
                                                                echo date_format($date, "d/m/Y"); ?></h3>
                                      </div>

                                      <table id="example4" class="table table-bordered table-striped">

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





                                      </tr>
                                          </thead>
                                          <tbody>


                                          <?php 
                                           $total_biaya=0;
                                          
                                          foreach ($databiaya as $i) :


                                            $id_biaya = $i['id_biaya'];
                                            $no_nota = $i['no_nota'];
                                            $total_nominal_biaya = $i['total_nominal_biaya'];
                                            $keterangan_biaya = $i['keterangan_biaya'];
                                            $tgl_biaya = $i['tgl_biaya'];
                                            
                                            $total_biaya=$total_nominal_biaya+$total_biaya;

                                            ?>




                                                    
                                          <tr>
                                              <td> <?php echo $id_biaya; ?></td>
                                              <td> <?php echo $no_nota; ?></td>
                                              <td><?php echo $total_nominal_biaya; ?></td>
                                              <td><?php echo $keterangan_biaya; ?></td>
                                              <td><?php echo $tgl_biaya; ?></td>

                                            

                                                          
                                              </tr>

                                              <?php endforeach;
                                                 ?>





                                              </tfoot>
                                      </table>
                                            
                                      <div class="row">
                                    <div class="col-12">
                                                     <h3>   Nominal Total Biaya Pengeluaran Rp <?php echo number_format("$total_biaya",0,",",".");?> </h3>
                                    </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
      </section>



  </div>