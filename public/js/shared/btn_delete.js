$(document).ready(function () {

    $('.btn_delete').onclick(function (e) {
        e.preventDefault();

        let url = $(this).data('url');
        let id = $(this).data('id');

        $.ajax({
            url: url,
            type: "DELETE",
            data: {
                id: id
            },
            success: function (response) {
                
            }
        })

    })
});
