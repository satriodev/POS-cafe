<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1>Data Komposisi Per-Menu</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Data Komposisi Per-Menu</li>
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
                            <h3 class="card-title">Pilih Menu</h3>
                        </div>


                        <form action="<?= base_url() ?>Viewkomposisi/Viewdatakomposisi" method="POST">
                            <div class="card-body">
                                <div class="form-group">

                                    <label for="exampleInputEmail1">Menu</label>
                                    <select name="id_menu" id="mySelect" class="form-control" required="true">

                                        <option value="0">-----Pilih Salah Satu-----</option>
                                        <?php foreach ($datamenu as $d) :
                                            $id_menu = $d['id_menu'];

                                            $nama_menu = $d['nama_menu']; ?>
                                            <option value="<?php echo $id_menu; ?>"><?php echo $nama_menu; ?></option>
                                        <?php endforeach; ?>


                                    </select>






                                    <div class="row mt-4">


                                        <button type="submit" class="btn btn-primary btn-md float-right" onClick="messages()">Lihat Data</button>

                                    </div>

                                </div>


                            </div>
                            <!-- /.card-body -->


                        </form>


                    </div>
                </div>



            </div>
        </div>
    </section>
</div>