
  $('#menuid').change(function() {
    $.ajax({
      url: '<?= base_url() ?>api/Serviceget',
      type: 'get',
      dataType: 'json',
      data: {
        'id_menu': $('#menuid').val()
      },
      success: function(result) {
        console.log(result);

      }


    });


  });
