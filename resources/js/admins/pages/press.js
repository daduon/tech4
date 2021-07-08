$(document).ready(function () {
    const PressContainer = $('#press');
    const PressDatatable = $('#press-table', PressContainer);

    let t = PressDatatable.DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        ajax: {
            url: PressDatatable.data('route'),
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center', width: "30px"},
            {data: 'thumbnail', name: 'thumbnail'},
            {data: 'title_en', name: 'title_en'},
            {data: 'text_en', name: 'text_en'},
            {data: 'action', name: 'action',className: 'w-12', searchable: false, orderable: false},
        ],
    });

    PressContainer.on('click','.remove-img',function () {

        let _this = $(this);
        let id = $(this).data('id');
        $.confirm({
            title: 'Are you sure?',
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Confirm',
                    btnClass: 'btn-red',
                    action: function(){
                        _this.closest('.preview-img').hide();
                        apiGalleryRemovePressGallery({id : id}).done(function (res){
                            _this.closest('.preview-img').remove();
                            iziToast.success({
                                title: 'Success!',
                                message: "Image has been deleted.",
                                position: 'topRight'
                            });
                        });
                    }
                },
                close: function () {
                }
            }
        });
    });
});