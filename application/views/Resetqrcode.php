<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reset QR Code</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>Home/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Reset QR Code</li>
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
                <h3 class="card-title">Input Kode Disini Untuk Mengurutkan Kembali Kode QrCode Tim</h3>
              </div>

     <form action="<?=base_url()?>Resetqrcode/Inputreset" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Input Sembarang Nomor</label>
                    <input type="text" name="qrcode" onChang="redy()" class="form-control" >

                    <div class="row mt-2">
                       <button type="submit" class="btn btn-primary btn-lg" onClick="messages()">Submit</button>
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



          
 





