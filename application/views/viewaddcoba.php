<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1>Tambah Data Tim</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Tim</li>
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
                            <h3 class="card-title">Tambah Data Tim</h3>
                        </div>



                        <form action="<?= base_url() ?>Manajementim/Aksiaddcoba" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="after-add-more">
                                        <label for="exampleInputEmail1">Id Tim</label>
                                        <input type="text" name="id_tim[]" onChang="redy()" class="form-control" placeholder="Masukan Id Tim">
                                        <label>Nama Tim Leader</label>
                                        <select name="nama_tim_leader[]" id="mySelect" class="form-control" required="true">

                                            <option value="">-----Pilih Salah Satu-----</option>
                                            <?php foreach ($nama_tim_leaderall as $d) :

                                                $nama_tim_leaderll = $d['nama']; ?>
                                                <option value="<?php echo $nama_tim_leaderll; ?>"><?php echo $nama_tim_leaderll; ?></option>
                                            <?php endforeach; ?>


                                        </select>



                                        <div class="control-group text-center mt-5">
                                            <button class="btn btn-success add-more mr-4" type="button"> <i class="glyphicon glyphicon-plus"></i> Add</button>

                                            <button class="btn btn-success" type="submit">Submit</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Copy Fields -->
                        <div class="copy hide ">
                            <div class="ini">
                                <label for="exampleInputEmail1">Id Tim</label>
                                <input type="text" name="id_tim[]" onChang="redy()" class="form-control" placeholder="Masukan Id Tim">
                                <label>Nama Tim Leader</label>
                                <select name="nama_tim_leader[]" id="mySelect" class="form-control" required="true">

                                    <option value="">-----Pilih Salah Satu-----</option>
                                    <?php foreach ($nama_tim_leaderall as $d) :

                                        $nama_tim_leaderll = $d['nama']; ?>
                                        <option value="<?php echo $nama_tim_leaderll; ?>"><?php echo $nama_tim_leaderll; ?></option>
                                    <?php endforeach; ?>


                                </select>

                                <div class="input-group-btn">
                                    <button class="btn btn-danger remove mt-2 mb-4" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>