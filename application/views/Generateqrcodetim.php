<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Generate QR Code Tim</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>Home/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Generate QR Code Tim</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-4,5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Generate QR Code Tim</h3>
              </div>

      <form action="<?php echo base_url()?>Generateqrcodetim/openqrtim" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Tim</label>
                    <input type="text" onChang="redy()" name="id_tim" class="form-control" >
                  </div>
                 
                  <div class="row mt-2">
                       <button type="submit" class="btn btn-primary btn-lg " onClick="messages()">Submit</button>
                     </div>
                </div>
                <!-- /.card-body -->

              
              </form>
            </div>
</div>
<div class="col-md-6 ml-4 align-right">
            
              <div class="box box-info">
                <div class="box-header with-border">
                  <h class="box-title">QR Tim Di Bawah Ini</h3>
                </div>
                   
        
        
       
                </div>
              </div>
            </h>
          </div>
        </div>
      </div>

</div>

</div>
</section>
</div>



          


