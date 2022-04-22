<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
            <h1>Tambah Data Pegawai</h1>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>Home/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Pegawai</li>
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
                <h3 class="card-title">Tambah Data Pegawai</h3>
              </div>
   
     <form action="<?=base_url()?>Manajemenpegawai/Aksiadd" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                  	 
                    <label for="exampleInputEmail1">Id Pegawai</label>
                    <input type="text" required="true" name="id_pegawai" onChang="redy()" class="form-control" placeholder="Masukan Id Pegawai" >

                    <label >Nama Pegawai</label>
                    <input list="tim" type="text" required="true" name="nama" onChang="redy()" class="form-control" placeholder="Masukan Nama Pegawai" >

                     <label >Password</label>
                    <input type="text" name="password" onChang="redy()" class="form-control" required="true" placeholder="Masukan Password Untuk Login Sistem" >

                    <label >Id Tim</label>
                    
<select name="id_tim" class="form-control" required="true">
      
<option value="">-----Pilih Salah Satu-----</option>
 <?php foreach ($datatim as $i):
                    
                $id_tim=$i['id_tim'];?>
<option value="<?php echo $id_tim; ?>"><?php echo $id_tim; ?></option>
<?php endforeach;?>
</select>

                    <label >Akses</label>

                    <select name="akses" class="form-control" required="true">
      
<option value="">-----Pilih Salah Satu-----</option>
 
<option value="timleader">Tim Leader</option>
<option value="pegawai">Pegawai</option>
<option value="admin">Admin</option>
</select>
                   
                
                   

                    <div class="row mt-4">
                
                    	
                       <button type="submit" value="submit" class="btn btn-primary btn-md float-right" onClick="messages()">Simpan</button>
                   
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



          
 





