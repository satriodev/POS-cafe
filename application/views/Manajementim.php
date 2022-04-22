  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manajemen Data Tim</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Data Tim</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tim</h3>

                  <button class="konfirmasitambahtim btn btn-primary float-sm-right" onClick="location.href='<?=base_url()?>Manajementim/Viewaddtim'">
                    <i class='fas fa-user-plus mr-2'></i>
                    

                  Tambah Data
                    
                  </button>
                
              </div>



               <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>

                  <tr>
                   <th>
                          ID Tim
                        </th>
                        <th>
                          Nama Tim Leader
                        </th>
                        <th>
                        Aksi
                        </th>
                        
                  </tr>
                  </thead>
                  <tbody>
                  
               
                     <?php foreach ($datatim as $i):
                    
                $id_tim=$i['id_tim'];
                $nama_tim_leader=$i['nama_tim_leader'];
                ;?>
                

                  <tr>
                    <td> <?php echo $id_tim;?></td>
                    <td><?php echo $nama_tim_leader;?></td>
                    <td>


                      <?php
                        echo "<a href='".base_url() ."Manajementim/Viewupdate/". $id_tim ."' title='Edit' class='btn-warning'><i class='fas fa-pencil-alt'></i> Edit</a>";?>
 <span class="brand-text font-weight-light ml-3 ">  
  <?php
                        echo "<a href='". base_url() ."Manajementim/Deletetim/". $id_tim ."' title='Edit'  class=' confirmation btn-danger'><i class='fas fa-trash-alt'></i> Hapus</a> </td>";
               
                    ?>
                     
                    
                   
                  </tr>
                  <?php endforeach;?>
                  </tfoot>
                </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


