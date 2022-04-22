<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Generate QR Code</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>Home/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Generate QR Code</li>
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
                <h3 class="card-title">Form Generate QR Sesuai Dengan Akun Log In Anda</h3>
              </div>

      <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Pegawai</label>
                    <input type="text" onChang="redy()" id="kd" class="form-control" disabled="true" placeholder="<?php echo $this->session->userdata('id_pegawai');?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Tim Leader</label>
                    <input type="text" onChang="redy()" class="form-control"  disabled="true" placeholder="<?php echo $this->session->userdata('nama');?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Id Tim</label>
                    <input type="text" onChang="redy()" class="form-control"  disabled="true" placeholder="<?php echo $this->session->userdata('id_tim');?>">
                  </div>
                 
                </div>
                <!-- /.card-body -->

              
              </form>
            </div>
</div>
<div class="col-md-6 ml-4 align-right">
            
              <div class="box box-info">
                <div class="box-header with-border">
                  <h class="box-title">QR Tim Anda Di Bawah Ini</h3>
                </div>
                   
                <div class="box-body ajax-content" id="showR">
                  
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->

            <div class="widget-user-header  ml-1">

              <div class="widget-user-image align-self-center">
 <div id="print-area">
                <img class="img-responsive" src="<?php echo site_url('Home/QRcode/'.$qrcode);?>" />
                <?php //echo base_url('qr_image/').$qrcode.'code.png';?>
              </div>
            </div>
            <div class="row mt-2">
            <a href="#" class="no-print btn btn-sm btn-warning " onclick="window.print()"> Print </a>
<!--<button onclick="printDiv('print-area')" class='pull-right'><i class='fa fa-print'></i> Print</button>-->
            </div>
          </div>
        </div>
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



          