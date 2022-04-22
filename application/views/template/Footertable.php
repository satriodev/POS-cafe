 <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
 </aside>







 <!-- jQuery -->
 <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- DataTables  & Plugins -->


 <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
 <script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="<?= base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
 <script src="<?= base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
 <script src="<?= base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
 <script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
 <script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
 <script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
 <script src="<?= base_url('assets/dist/swal/sweetalert2.all.min.js'); ?>"></script>
 <script src="<?= base_url('assets/dist//swal/myscript.js'); ?>"></script>



 <script>
   $(function() {
     $("#example1").DataTable({

       "responsive": true,
       "lengthChange": false,
       "autoWidth": false,
       "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]

     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
   });
 </script>

<script>
   $(function() {
     $("#example3").DataTable({

       "responsive": true,
       "lengthChange": false,
       "autoWidth": false,
       "paging" : false,
       "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]

     }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
   
   });
 </script>


 <script>
   $(function() {
     $("#example4").DataTable({

       "responsive": true,
       "lengthChange": false,
       "autoWidth": false,
       "paging" : false,
       "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]

     }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
   
   });
 </script>


 <script>
   $(function() {
     $("#example5").DataTable({

       "responsive": true,
       "lengthChange": false,
       "autoWidth": false,
       "paging" : false,
       "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]

     }).buttons().container().appendTo('#example5_wrapper .col-md-6:eq(0)');
   
   });
 </script>
 <script type="text/javascript">
   var elems = document.getElementsByClassName('confirmation');
   var confirmIt = function(e) {
     if (!confirm('Apakah Anda Yakin Akan Menghapus Data ?')) e.preventDefault();
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
<script language="javascript">
  function PrintDiv2() {
    var divToPrint = document.getElementById('divToPrint2');
    var popupWin = window.open('', '_blank', 'width=766,height=300');
    popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
    popupWin.document.close();
  }
</script>




