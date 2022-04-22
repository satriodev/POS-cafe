<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1>Laporan Penjualan Periodik</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Penjualan Periodik</li>
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
                            <h3 class="card-title">Laporan Penjualan Periodik</h3>
                        </div>


                        <form action="<?= base_url() ?>Laporanperiodik/Getlaporanperiodik" method="POST">
                            <div class="card-body">
                                <div class="form-group">

                                    <label for="exampleInputEmail1">Tanggal Awal</label>
                                    <input type="date" name="tgl1" onChang="redy()" class="form-control" required="true">






                                    <label>Tanggal Akhir</label>

                                    <input type="date" name="tgl2" onChang="redy()" class="form-control" required="true">

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