const flashData = $('.flash-data').data('flashdata');
if(flashData=="1"){
    Swal.fire({
        title: 'Data Berhasil Di Edit',
        text:'',
        icon:'success'
    });
}
else if(flashData=="2"){
    Swal.fire({
        title: 'Data Berhasil Di Hapus',
        text:'',
        icon:'success'
    });
}

else if(flashData=="3"){
    Swal.fire({
        title: 'Data Berhasil Di Simpan',
        text:'',
        icon:'success'
    });
}
const flashData1 = $('.flash-data-tambah').data('flashdata');
if(flashData1=="0"){
    Swal.fire({
        title: 'Username Sudah Ada',
        text:'Harap Gunakan Username Yang lain',
        icon:'error'
    });
}


$('.tombol-hapus').on('click', function(event){
  
    event.preventDefault();
    const href=$(this).attr('href');


    Swal.fire({
        title: 'Penghapusan Data !!!',
        text: "Apakah anda yakin akan menghapus data berikut ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus'
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href=href;
        }
      })


})


$(function() {
    $('#username').on('keypress', function(e) {
        if (e.which == 32){
            console.log('Space Detected');
            return false;
        }
    });
});




