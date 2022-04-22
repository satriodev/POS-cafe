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
                      <h1>Transaksi Penjualan</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                          <li class="breadcrumb-item active">Transaksi Penjualan</li>
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
                              <h3 class="card-title">Transaksi</h3>



                             

                          </div>


                          <form action="" method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="after-add-more">



                                            <label for="exampleInputEmail1">ID Transaksi</label>
                                            <input type="text" required="true" name="id_trx" readonly="true" value="<?php echo $idtrx ?>" id="idtrx" onChang="redy()" class="form-control" placeholder="Masukan Jumlah">
                                            <label for="exampleInputEmail1" class="mt-4">Diskon Transaksi</label>
                                          
                                            <input type="number" required="true" name="diskon_trx" readonly="true" id="diskon_trx" value="" class="form-control" placeholder="Masukan Diskon Transaksi">
                                            <div class="form-check mt-4">
                                            <input type="checkbox" class="form-check-input" id="cekboxdiskontrx">
                                            <label class="form-check-label" for="cekboxdiskontrx">Gunakan Diskon</label>
                                                </div>






                                        </div>
                                    </div>
                                </div>
                            
                            <!-- Copy Fields -->
                    <div class="card-body">
                    <div class="form-group">
                           
                                
                                    <label for="exampleInputEmail1">Nama Menu</label>
                                    <select name="id_menu[]" id="menu" class="form-control" required="true">

                                        <option value="">-----Pilih Salah Satu-----</option>
                                        <?php foreach ($datamenu as $d) :
                                            $idmenu = $d['idmenu'];

                                            $nama_menu = $d['nama_menu']; ?>
                                            <option value="<?php echo $idmenu; ?>"><?php echo $nama_menu; ?></option>
                                        <?php endforeach; ?>


                                    </select>

                                   

                                    <label for="exampleInputEmail1">Jumlah</label>
                                    <input type="number" required="true" name="jumlah[]" id="jumlah"onChang="redy()" class="form-control input-angka" placeholder="Masukan Jumlah">

                                    <label for="exampleInputEmail1">Diskon Menu</label>
                                    <input type="number" required="true" name="diskon" id="diskonmenu" onChang="redy()" class="form-control input-angka" placeholder="Masukan Diskon Menu">
                                    
                                    <div class="input-group-btn">
                                    <button class="btn btn-warning add-mores mt-2 mb-4 ml-4" type="button"> <i class="glyphicon glyphicon-plus"></i> Input Menu</button>
                                        <button class="btn btn-warning mt-2 mb-4 ml-4" id="sipan" >Checkout</button>
                                    </div>
                          <div class="card-body" id="iddtmenu">
                             
                                      
                          </div>
                      
                  
              </div>
          </div>
      </section>
  </div>