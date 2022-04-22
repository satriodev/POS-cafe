<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1>Edit Data Menu</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data Menu</li>
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
                            <h3 class="card-title">Edit Data Menu</h3>
                        </div>
                        <?php foreach ($datamenu as $i) :

                            $id_menu = $i['id_menu'];
                            $nama_menu = $i['nama_menu'];
                            $harga = $i['harga'];
                        ?>

                            <form action="<?= base_url() ?>Manajemendatamenu/Aksiupdatemenu" onload="myFunction()" method="POST">
                                <div class="card-body">
                                    <div class="form-group">

                                        <label for="exampleInputEmail1">Id Menu</label>
                                        <input type="text" name="id_menu" readonly="true" onChang="redy()" class="form-control" value="<?php echo $id_menu; ?>">



                                        <label>Nama Menu</label>
                                        <input type="text" name="nama_menu" onChang="redy()" class="form-control" value="<?php echo $nama_menu; ?>">

                                        <label>Harga</label>
                                        <input type="text" name="harga" onChang="redy()" class="form-control" value="<?php echo $harga; ?>">





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