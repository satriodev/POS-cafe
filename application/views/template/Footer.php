<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<!-- <script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script> -->
<!-- <script src="<?= base_url() ?>assets/yearpicker/src/js/jquery.slim.min.js"></script> -->
<!-- <script src="<?= base_url() ?>assets/yearpicker/dist/yearpicker.js" async></script> -->
<script src="<?=base_url('assets/dist/swal/sweetalert2.all.min.js'); ?>"></script>
<script src="<?=base_url('assets/dist//swal/myscript.js'); ?>"></script>
<script src="<?=base_url('assets/dist//swal/scriptservis.js'); ?>"></script>
<script src="<?=base_url('assets/dist/swal/jscustom.js'); ?>"></script>

</body>

</html>
<script type="text/javascript">
  var diisi = document.getElementById("menu").value

  $(document).ready(function() {
    $(".add-more").click(function() {


      var html = $(".copy").html();
      $(".after-add-more").after(html);
    });


    $("body").on("click", ".remove", function() {
      $(this).parents(".ini").remove();
    });
  });
</script>

<script type="text/javascript">
  var elems = document.getElementsByClassName('konfirmasitambahtim');
  var confirmIt = function(e) {
    if (!confirm('Disarankan Setelah Menambah Data Tim Diharapkan Untuk Reset QRcode')) e.preventDefault();
  };
  for (var i = 0, l = elems.length; i < l; i++) {
    elems[i].addEventListener('click', confirmIt, false);
  }
</script>


<script language="javascript">
  function PrintDiv() {
    var divToPrint = document.getElementById('divToPrint');
    var popupWin = window.open('', '_blank', 'width=766,height=300');
    popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
    popupWin.document.close();
  }
</script>
<script>

$("#cekboxdiskontrx").on("change", function() {
  if($(this).is(":checked")){
    $('#diskon_trx').attr('readonly', false);
            }
            else if($(this).is(":not(:checked)")){
              $('#diskon_trx').attr('readonly', true);
            }

});

</script>

<script type="text/javascript">
var datao=[];
var sum = 0;
var data_menu = [];
var data_hasil_input_sekok_form = {};
var total_bayar=0;
let idtrx=$('#idtrx').val();
let diskon_trx=$('#diskon_trx').val();
var datatrx={
'id_menu':idtrx,
'diskon_trx':diskon_trx

};


    $("body").on("click", ".add-mores", async function() {
      var total_bayar1=0;
      $('#diskon_trx').attr('readonly', true);
      $('#cekboxdiskontrx').attr('disabled', true);
      $("#iddtmenu").html('');
      $("#iddtmenu").html(`  <table id="dtmenu" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>id_menu</th>
                                    <th>Nama Menu</th>
                                    <th>harga</th>
                                    <th>Jumlah</th>
                                    <th>Diskon Menu</th>
                                    <th>Total Bayar</th>
                                    <th>Aksi</th>
                                </tr> 
                                </thead>
                                <tbody>`
                                );
                               
               var id_menu = $('#menu').val();
      var jumlah= +$('#jumlah').val();
      parseInt(jumlah);
   
      var diisi=1;
      var jumlah= +$('#jumlah').val();
      var diskonmenu= +$('#diskonmenu').val();
      
      // $(this).parents(".ini").remove();
      await $.ajax({
         
        url: 'api/Serviceget',
        type: 'get',
        dataType: 'json',
        data: {
          'id_menu': id_menu
        },
        success: function(result) 
        {
          
          
          let datamenu = result.datamenu;
           $.each(datamenu,function (i, data) {      
              
           let diskon=(diskonmenu/100) * (jumlah*data.harga);
           data_hasil_input_sekok_form = 
      {
        'id_trx':idtrx,
        'id_menu': + data.id_menu,
        'namamenu':data.nama_menu,
        'jumlah': jumlah,
        'harga': + data.harga,
        'diskonmenu': diskonmenu,
        'totalbayar' :(jumlah*data.harga)-diskon
        
        
        
      };
   
    // data_menu.push(data_hasil_input_sekok_form);
    // data_tampung.push(data_hasil_input_sekok_form);
     
          
          
       if(data_menu.length>0)
       {
            $.each(data_menu,function (i, data) 
           {      
                    
         var dataid_menu1=data.id_menu;
         var dataid_menu= +dataid_menu1;
         var dataid_menuform1=data_hasil_input_sekok_form.id_menu;
        var dataid_menuform= +dataid_menuform1;

        if(data.id_menu == data_hasil_input_sekok_form.id_menu)
        {  
          
       
        var jumlaha= data_hasil_input_sekok_form.jumlah;
        var jumlahb= + jumlaha;
        var jumlaha= + data.jumlah;
        var jml=data.jumlah += data_hasil_input_sekok_form.jumlah;
        let diskon=(data_hasil_input_sekok_form.diskonmenu / 100) * (jml * data.harga);
        let totbyr=(jml * data.harga)-diskon;
        data.totalbayar=parseInt(totbyr);
       data.jumlah = jml;
       data.diskonmenu= + data_hasil_input_sekok_form.diskonmenu;
     // data_menu.pop();
     diisi=0;
      
       
            }
         
         });
      
      }
     
      
    });
    if (diisi==1) {
        data_menu.push(data_hasil_input_sekok_form);  
      }
      
 
      
      $.each(data_menu,function (i, data) 
           {      

             $("#dtmenu").append(`<tr> 
             <td>`+data.id_menu+`</td>
             <td>`+data.namamenu+`</td>
             <td>`+data.harga+`</td>
             <td>`+data.jumlah+`</td>
             <td>`+data.diskonmenu+`</td>
             <td>`+data.totalbayar+`</td>
             <td><button class='hapusdt btn btn-danger' data-id='`+data.id_menu+`'>Hapus</button></td>
             </tr>
             `)

      });
      $("#dtmenu").append(`</tfoot>
                              </table>`)
      }   
     
    });
  

  
             // to access title of each article.
            
       
       
      // console.log(total_bayar);
      //var myjs =  jQuery.parseJSON(data_menu);
      for(let i = 0; i < data_menu.length; i++){ 
total_bayar1 = data_menu[i].totalbayar + total_bayar1;
 total_bayar=total_bayar1;
} 
document.getElementById("menu").value = "";
document.getElementById("jumlah").value = "";
document.getElementById("diskonmenu").value = "";


  });
  









$('#iddtmenu').on('click','.hapusdt',async function () {
  $("#iddtmenu").html('');
      $("#iddtmenu").html(`  <table id="dtmenu" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>id_menu</th>
                                    <th>Nama Menu</th>
                                    <th>harga</th>
                                    <th>Jumlah</th>
                                    <th>Diskon Menu</th>
                                    <th>Total Bayar</th>
                                    <th>Aksi</th>
                                </tr> 
                                </thead>
                                <tbody>
                                `);
  let data_id=$(this).data('id');
  var total_bayar1=0;
  console.log(data_id);
  // await cek_id_dt(data_id);
 
  //   await tampildt();
    pos = data_menu.map(function(e) { return e.idmenu; }).indexOf(data_id);
    //console.log(pos);
    data_menu.splice(pos, 1);
    console.log(data_menu);
   await $.each(data_menu,function (i, data) 
           {      

             $("#dtmenu").append(`<tr> 
             <td>`+data.id_menu+`</td>
             <td>`+data.namamenu+`</td>
             <td>`+data.harga+`</td>
             <td>`+data.jumlah+`</td>
             <td>`+data.diskonmenu+`</td>
             <td>`+data.totalbayar+`</td>
             <td><button class='hapusdt btn btn-danger' data-id='`+data.id_menu+`'>Hapus</button></td>
             </tr>
             
             `)

      });
                  for(let i = 0; i < data_menu.length; i++)
                  { 
                    total_bayar1 = data_menu[i].totalbayar + total_bayar1;
                    total_bayar=total_bayar1;
                  }  
                  
           if(data_menu.length==0)
           {
            total_bayar=0;
            }
              console.log(total_bayar);  
})

 








  
 
    $('#sipan').on('click', async function () {
     
     
      var i;
  
      let dataw={
        'totalbayar': total_bayar,
        'id_trx': idtrx,
        'kasir_user' : '<?php echo $this->session->userdata('nama')?>'
      }
      datao.push(dataw);

let data_s= {datao,data_menu};
   
      
     await $.ajax({
         
         url: 'api/Tambah',
      
         method: 'POST',
         contentType: 'application/json',
         dataType: 'json',
        //ContentType: 'application/x-www-form-urlencoded',
         data: 
         JSON.stringify(data_s),
        
         success: function(result) 
         {
          Swal.fire({
            title: "Data Transaksi Telah Masuk Ke Laporan Penjualan",
            text: "Apakah ingin cetak nota?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya!'
}).then((result) => {
  if (result.isConfirmed) {
    
    window.open('Penjualan/Printnota/'+idtrx+'/', '_blank');
    location.reload();
  }
})




      console.log(result);
      
    }
     });

  

      console.log(data_menu);
     
      console.log(data_s);
  });
</script>