<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
            <h1>Tambah Data Ijin</h1>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>Home/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Ijin</li>
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
                <h3 class="card-title">Tambah Data Ijin</h3>
              </div>
   
     <form action="<?=base_url()?>Manajemenijin/Aksiaddijin" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                  	 
                    <label for="exampleInputEmail1">Id Pegawai</label>
                    <select name="id_pegawai" class="form-control">
      
<option value="">-----Pilih Pegawai-----</option>
 <?php foreach ($datapegawaipertim as $i):
                    
                $id_pegawai=$i['id_pegawai'];
                $nama=$i['nama'];
                $id_tim=$i['id_tim'];
                ?>
<option value="<?php echo $id_pegawai; ?>"><?php echo $id_pegawai;echo "|"; echo $nama; if($this->session->userdata('akses')=='admin' ):  echo"|"; echo"id tim="; echo $id_tim; endif; ?></option>
<?php endforeach;?>
</select>

                    <label >Id Tim</label>
                    <input type="text" name="id_tim" onChang="redy()" class="form-control" 
                     <?php if($this->session->userdata('akses')=='timleader' ):?>
                      readonly="true"
                    
                    value="<?php echo $this->session->userdata('id_tim');?>" 
                    <?php endif;?>
                      <?php if($this->session->userdata('akses')=='admin' ):?>
                      
                    placeholder="Masukkan Id Tim"
                    value="" 
                    <?php endif;?> >

                     <label >Tanggal</label>
                    <input type="Date" name="tanggal" onChang="redy()" class="form-control" >

                    <label >Alasan Ijin</label>
                    <input type="text" name="alasan_ijin" onChang="redy()" class="form-control" placeholder="Masukkan Alasan Ijin">


                  

 
                
                   

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



          
 





