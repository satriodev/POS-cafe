<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1>Edit Data Bahan Baku</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data Bahan Baku</li>
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
                            <h3 class="card-title">Edit Data Bahan Baku</h3>
                        </div>
                        <?php foreach ($databahanbaku as $i) :

                            $id_bahan_baku = $i['id_bahan_baku'];
                            $nama_bahan_baku = $i['nama_bahan_baku'];
                            $harga = $i['harga'];
                            $jumlah = $i['jumlah'];
                            $satuan = $i['satuan']; ?>

                            <form action="<?= base_url() ?>Manajemenbahanbaku/Aksiupdatebahanbaku" onload="myFunction()" method="POST">
                                <div class="card-body">
                                    <div class="form-group">

                                        <label for="exampleInputEmail1">Id Bahan Baku</label>
                                        <input type="text" name="id_bahan_baku" readonly="true" onChang="redy()" class="form-control" value="<?php echo $id_bahan_baku; ?>">



                                        <label>Nama Bahan Baku</label>
                                        <input type="text" readonly="true" name="nama_bahan_baku" onChang="redy()" class="form-control" value="<?php echo $nama_bahan_baku; ?>">

                                        <label>Harga</label>
                                        <input type="text" name="harga" onChang="redy()" class="form-control" value="<?php echo $harga; ?>">

                                        <label>Jumlah</label>
                                        <input type="text" name="jumlah" onChang="redy()" class="form-control" value="<?php echo $jumlah; ?>">




                                        <label>Satuan</label>
                                        <input type="text" name="satuan" onChang="redy()" class="form-control" value="<?php echo $satuan; ?>">




                                        <div class="row mt-4">
                                        <?php endforeach; ?>

                                        <button type="submit" class="btn btn-primary btn-md float-right" onClick="messages()">Update</button>

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