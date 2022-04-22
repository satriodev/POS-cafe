<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1>Tambah Data Bahan Baku</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Bahan Baku</li>
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
                            <h3 class="card-title">Tambah Data Bahan Baku</h3>
                        </div>

                        <form action="<?= base_url() ?>Manajemenbahanbaku/Aksiaddbahanbaku" method="POST">
                            <div class="card-body">
                                <div class="form-group">

                                    <label>Nama Bahan Baku</label>
                                    <input type="text" required="true" name="nama_bahan_baku" onChang="redy()" class="form-control" placeholder="Masukan Nama Bahan Baku">

                                    <label>Harga</label>
                                    <input type="text" name="harga" onChang="redy()" class="form-control" required="true" placeholder="Masukan Harga Bahan Baku">

                                    <label>Jumlah</label>
                                    <input type="text" name="jumlah" onChang="redy()" class="form-control" required="true" placeholder="Masukan Jumlah Awal Bahan Baku">



                                    <label>Satuan</label>

                                    <input type="text" name="satuan" onChang="redy()" class="form-control" required="true" placeholder="Masukan Satuan Bahan Baku">




                                    <div class="row mt-4">


                                        <button type="submit" value="submit" class="btn btn-primary btn-md float-right">Simpan</button>

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