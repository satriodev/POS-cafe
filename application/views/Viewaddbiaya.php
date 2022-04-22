<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1>Tambah Data Biaya</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Biaya</li>
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
                            <h3 class="card-title">Tambah Data Biaya</h3>
                        </div>

                        <form action="<?= base_url() ?>Manajemenbiaya/Aksiaddbiaya" method="POST">
                            <div class="card-body">
                                <div class="form-group">

                                

                                    <label>Nomor Nota</label>
                                    <input type="text" required="true" name="no_nota"  class="form-control" placeholder="Masukan Nomor Nota">

                                    <label>Total Nominal Biaya</label>
                                    <input type="number" name="total_nominal_biaya"  class="form-control" required="true" placeholder="Masukan Nominal Total Biaya">

                                    
                                    <label>Keterangan Biaya</label>
                                    <input type="text" name="keterangan_biaya"  class="form-control" required="true" placeholder="Masukan Keterangan Biaya">

                                    
                                    <label>Tanggal Biaya</label>
                                    <input type="date" name="tgl_biaya"  class="form-control" required="true" placeholder="Masukan Tanggal Biaya">




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