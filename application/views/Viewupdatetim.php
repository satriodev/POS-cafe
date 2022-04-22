<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
            <h1>Edit Data Tim</h1>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>Home/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Tim</li>
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
                <h3 class="card-title">Edit Data Tim</h3>
              </div>
   <?php foreach ($datatim as $i):
                    
                $id_tim_lama=$i['id_tim'];
                $nama_tim_leader=$i['nama_tim_leader'];
                ?>
                
     <form action="<?=base_url()?>Manajementim/Aksiupdatetim" onload="myFunction()"method="POST" >
                <div class="card-body">
                  <div class="form-group">
                  	 
                    <label for="exampleInputEmail1">Id Tim</label>
                      <input type="text" name="id_tim" onChang="redy()" class="form-control" value="<?php  echo $id_tim_lama;?>" >

                  
                     

                  
                    
                    <label >Nama Tim Leader</label>


                    <select name="nama_tim_leader" id="mySelect" class="form-control" required="true"   >
      
                              <option value="">-----Pilih Salah Satu-----</option>
                               <?php foreach ($nama_tim_leaderall as $d):
                                                  
                                              $nama_tim_leaderll=$d['nama'];?>
                              <option value="<?php echo $nama_tim_leaderll; ?>"><?php echo $nama_tim_leaderll; ?></option>
                              <?php endforeach;?>

                              <script>

                                window.onload = function myFunction() {
  document.getElementById("mySelect").value = "<?php echo $nama_tim_leader;?>";
  
                              }
                             
                              </script>
                          </select>
                 

                       <input type="text"  hidden="true" name="id_tim_lama" onChang="redy()" class="form-control" value="<?php echo $id_tim_lama;?>" >


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



          
 





