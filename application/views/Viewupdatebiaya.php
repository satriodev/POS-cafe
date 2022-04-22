<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1>Edit Data Biaya</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data Biaya</li>
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
                            <h3 class="card-title">Edit Data Biaya</h3>
                        </div>
                        <?php foreach ($databiaya as $i) :

                                                        
                                $id_biaya = $i['id_biaya'];
                                $no_nota = $i['no_nota'];
                                $total_nominal_biaya = $i['total_nominal_biaya'];
                                $keterangan_biaya = $i['keterangan_biaya'];
                                $tgl_biaya = $i['tgl_biaya'];
                        ?>

                            <form action="<?= base_url() ?>Manajemenbiaya/Aksiupdatebiaya"  method="POST">
                                <div class="card-body">
                                    <div class="form-group">

                                    <input type="text" required="true" name="id_biaya"  value="<?php echo $id_biaya; ?>"  class="form-control" hidden="true">



                                    <label>Nomor Nota</label>
                                    <input type="text" required="true" name="no_nota"  value="<?php echo $no_nota; ?>"  class="form-control" placeholder="Masukan Nomor Nota" >

                                    <label>Total Nominal Biaya</label>
                                    <input type="number" name="total_nominal_biaya"  value="<?php echo $total_nominal_biaya; ?>"  class="form-control" required="true" placeholder="Masukan Nominal Total Biaya">

                                    
                                    <label>Keterangan Biaya</label>
                                   <input type="text" name="keterangan_biaya"  value="<?php echo $keterangan_biaya; ?>"  class="form-control" required="true" placeholder="Masukan Keterangan Biaya">

                                    
                                    <label>Tanggal Biaya</label>
                                    <input type="date" name="tgl_biaya"  value="<?php echo $tgl_biaya; ?>"  class="form-control" required="true" placeholder="Masukan Tanggal Biaya">





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