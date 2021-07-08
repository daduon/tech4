$(document).ready(function () {
    const GalleryContainer = $('#gallery');
    const GalleryDatatable = $('#gallery-table', GalleryContainer);

    let t = GalleryDatatable.DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        ajax: {
            url: GalleryDatatable.data('route'),
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center', width: "30px"},
            {data: 'page', name: 'page'},
            {data: 'action', name: 'action',className: 'w-12', searchable: false, orderable: false},
        ],
    });

    GalleryContainer.on('click','.remove-img',function () {
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
                        apiGalleryRemoveImg({id : id}).done(function (res){
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