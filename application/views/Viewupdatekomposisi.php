<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1>Edit Data Komposisi</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data Komposisi</li>
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
                            <h3 class="card-title">Edit Data Komposisi</h3>
                        </div>
                        <?php foreach ($datakomposisi as $i) :

                            $id_kebutuhan = $i['id_kebutuhan'];
                            // $id_menu = $i['id_menu'];
                            $nama_menu = $i['nama_menu'];
                            $id_bahan_baku = $i['id_bahan_baku'];
                            $nama_bahan_baku = $i['nama_bahan_baku'];

                            $jumlah_kebutuhan = $i['jumlah_kebutuhan'];
                        ?>

                            <form action="<?= base_url() ?>Viewkomposisi/Aksiupdatekomposisi" onload="myFunction()" method="POST">
                                <div class="card-body">
                                    <div class="form-group">

                                        <label for="exampleInputEmail1">Id Kebutuhan</label>
                                        <input type="text" name="id_kebutuhan" readonly="true" onChang="redy()" class="form-control" placeholder="enak" value="<?php echo $id_kebutuhan; ?>">



                                        <label>Nama Menu</label>


                                        <input type="text" name="nama_menu" readonly="true" onChang="redy()" class="form-control" value="<?php echo $nama_menu; ?>">


                                        <label>ID Menu</label>

                                        <input type="text" name="id_menu" id="menuid" readonly="true" onChang="redy()" class="form-control" value="">





                                        </select>


                                        <label>Bahan Baku</label>
                                        <select name="id_bahan_baku" id="idbahanbaku" class="form-control" required="true">

                                            <option value="0">-----Pilih Salah Satu-----</option>
                                            <?php foreach ($databahanbaku as $b) :

                                                $idbahanbaku = $b['idbahanbaku'];
                                                $nama_bahan_baku = $b['nama_bahan_baku'];

                                            ?>
                                                <option value="<?php echo $idbahanbaku; ?>"><?php echo $nama_bahan_baku; ?></option>
                                            <?php endforeach; ?>


                                        </select>

                                        <label>Jumlah <?php echo $id_bahan_baku; ?></label>
                                        <input type="text" name="jumlah_kebutuhan" onChang="redy()" class="form-control" value="<?php echo $jumlah_kebutuhan; ?>">


                                        <script>
                                            window.onload = function myFunction() {
                                                document.getElementById("menuid").value = "<?php echo $i['id_menu']; ?>";
                                                document.getElementById("idbahanbaku").value = "<?php echo $id_bahan_baku; ?>"
                                            }
                                        </script>
                                        </select>





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