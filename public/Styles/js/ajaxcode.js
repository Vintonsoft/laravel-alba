$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//AJAX Silme Komutu
$(".fa-trash").click(function () {
    destroy_id = $(this).attr('id');
    yenidegisken = destroy_id.replace("/", "-");

    alertify.confirm('Silme işlemini onaylayın!', 'Bu işlem geri alınamaz',
        function () {

            $.ajax({
                type:"DELETE",
                url:destroy_id,
                success: function (msg) {
                    if (msg)
                    {
                        $("#"+yenidegisken).remove();
                        alertify.success("Silme İşlemi Başarılı");

                    } else {
                        alertify.error("İşlem Tamamlanamadı");
                    }
                }
            });
        },
        function () {
            alertify.error('Silme işlemi iptal edildi')
        }
    )
});
