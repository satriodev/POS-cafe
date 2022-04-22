<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <h1>Input Komposisi Menu</h1>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Input Komposisi Menu</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Input Komposisi Menu</h3>
                            </div>



                            <form action="<?= base_url() ?>Inputkomposisi/Aksiaddkomposisi" method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="after-add-more">
                                            <label for="exampleInputEmail1">Nama Menu</label>
                                            <select name="id_menu" id="menu" class="form-control" required="true">

                                                <option value="">-----Pilih Salah Satu-----</option>
                                                <?php foreach ($datamenu as $d) :
                                                    $idmenu = $d['idmenu'];

                                                    $nama_menu = $d['nama_menu']; ?>
                                                    <option value="<?php echo $idmenu; ?>"><?php echo $nama_menu; ?></option>
                                                <?php endforeach; ?>


                                            </select>





                                            <div class="control-group text-center mt-5">
                                                <button class="btn btn-success add-more mr-4" type="button"> <i class="glyphicon glyphicon-plus"></i> Tambah Komposisi</button>

                                                <button class="btn btn-success" type="submit">Simpan</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Copy Fields -->
                            <div class="copy hide ">
                                <div class="ini">
                                    <label for="exampleInputEmail1">Bahan Baku</label>
                                    <select name="id_bahan_baku[]" id="mySelect" class="form-control" required="true">

                                        <option value="0">-----Pilih Salah Satu-----</option>
                                        <?php foreach ($databahanbaku as $d) :
                                            $id_bahan_baku = $d['id_bahan_baku'];

                                            $nama_bahan_baku = $d['nama_bahan_baku']; ?>
                                            <option value="<?php echo $id_bahan_baku; ?>"><?php echo $nama_bahan_baku; ?></option>
                                        <?php endforeach; ?>


                                    </select>
                                    <label>Jumlah Kebutuhan</label>
                                    <input type="number" name="jumlah_kebutuhan[]" onChang="redy()" class="form-control input-angka" placeholder="Masukan Jumlah Kebutuhan">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger remove mt-2 mb-4" type="button"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>