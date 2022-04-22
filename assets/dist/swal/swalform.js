
    $(document).ready(function() {
        $("form").submit(function(event) {
            var formData = {
                username: $("#username").val(),
                password: $("#password").val(),
                akses: $("#akses").val(),
            };
            
      

            $.ajax({
                type: "POST",
                url: "<?= base_url()('adminController/simpan_admin'); ?>",
                data: formData,
                dataType: "json",
                encode: true,
            }).done(function(data) {
                console.log(data);
            });

            event.preventDefault();
        });


        swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
            button: "Ok",


        });
    });
