<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
            <h1>Edit Data Pegawai</h1>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>Home/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Pegawai</li>
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
                <h3 class="card-title">Edit Data Pegawai</h3>
              </div>
   <?php foreach ($datapegawai as $i):
                    
                $id_pegawailama=$i['id_pegawai'];
                $nama=$i['nama'];
                  $password=$i['password'];
                $id_tim=$i['id_tim'];
                $akses=$i['akses'];?>
                
     <form action="<?=base_url()?>Manajemenpegawai/Aksiupdate" onload="myFunction()" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                  	 
                    <label for="exampleInputEmail1">Id Pegawai</label>
                    <input type="text" name="id_pegawai" onChang="redy()" class="form-control" value="<?php echo $id_pegawailama;?>" >

                    <input type="text" hidden="true" name="id_pegawailama" class="form-control" value="<?php echo $id_pegawailama;?>" >

                    <label >Nama Pegawai</label>
                    <input type="text" name="nama" onChang="redy()" class="form-control" value="<?php  echo $nama;?>" >

                     <label >Password</label>
                    <input type="text" name="password" onChang="redy()" class="form-control" value="<?php  echo $password;?>" >

                    <label >Id Tim</label>


                        <select name="id_tim" id="mySelect" class="form-control" required="true">
      
                              <option value="">-----Pilih Salah Satu-----</option>
                               <?php foreach ($datatim as $d):
                                                  
                                              $id_timall=$d['id_tim'];?>
                              <option value="<?php echo $id_timall; ?>"><?php echo $id_timall; ?></option>
                              <?php endforeach;?>

                              <script>

                                window.onload = function myFunction() {
  document.getElementById("mySelect").value = "<?php echo $id_tim;?>";
  document.getElementById("myAkses").value = "<?php echo $akses;?>"
                              }
                             
                              </script>
                          </select>


                    <label >Akses</label>

                    <select name="akses" id="myAkses" class="form-control" required="true">
      
                              <option value="">-----Pilih Salah Satu-----</option>
                              
                              <option value="pegawai">Pegawai</option>
                              <option value="timleader">Timleader</option>
                              <option value="admin">Admin</option>
                            

                           
                          </select>
          

                    <div class="row mt-4">
                    <?php endforeach;?>
                    	
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



          
 





