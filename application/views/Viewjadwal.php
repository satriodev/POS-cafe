<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
            <h1>Edit Jadwal</h1>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>Home/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Edit Jadwal</li>
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
                <h3 class="card-title">Edit Jadwal</h3>
              </div>
   <?php foreach ($datajadwal as $i):
                    
                $id_jadwal=$i['id_jadwal'];
                $jam_masuk=$i['jam_masuk'];
                  $jam_pulang=$i['jam_pulang'];
                ?>
                
     <form action="<?=base_url()?>Updatejadwal/Aksiupdatejadwal" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                  	 
                    <label for="exampleInputEmail1">Jam Masuk</label>
                      <input type="time" name="jam_masuk" onChang="redy()" class="form-control" value="<?php  echo $jam_masuk;?>" >

                  
                     
                        <input type="text" hidden="true" name="id_jadwal" onChang="redy()" class="form-control" value="<?php  echo $id_jadwal;?>" >
                  
                    
                    <label >Jam Pulang</label>

                     <input type="time" name="jam_pulang" onChang="redy()" class="form-control" value="<?php  echo $jam_pulang;?>" >

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



          
 





