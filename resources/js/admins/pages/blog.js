$(document).ready(function() {
    const BlogContainer = $('#blog');
    const BlogDatatable = $('#blog-table', BlogContainer);

    t = BlogDatatable.DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        ajax: {
            url: BlogDatatable.data('route'),
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center', width: "30px" },
            { data: 'thumbnail', name: 'thumbnail' },
            { data: 'title_en', name: 'title_en' },
            { data: 'text_en', name: 'text_en' },
            { data: 'action', name: 'action', className: 'w-12', searchable: false, orderable: false },
        ],
    });

    BlogContainer.on('click', '.remove-img', function() {

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
                    action: function() {
                        _this.closest('.preview-img').hide();
                        apiGalleryRemoveGallery({ id: id }).done(function(res) {
                            _this.closest('.preview-img').remove();
                            iziToast.success({
                                title: 'Success!',
                                message: "Image has been deleted.",
                                position: 'topRight'
                            });
                        });
                    }
                },
                close: function() {}
            }
        });
    });

    $("#choose_option").change(function(e) {
        e.preventDefault();
        if ($(this).val() == 2) {
            $('.option_1').not('.link').toggleClass('link');
        } else {
            $('.option_1.link').toggleClass('link');
        }
        if ($(this).val() == 1) {
            $('.option_2.def').toggleClass('def');
        } else {
            $('.option_2').not('.def').toggleClass('def');
        }
    });

    setTimeout(function() {
        if ($("#choose_option").val() == 2) {
            $('.option_2').toggleClass('def');
            $('.option_1').toggleClass('link');
        }
    }, 50);
});