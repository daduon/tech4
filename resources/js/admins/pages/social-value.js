$(document).ready(function() {
    const socialContainer = $('#social-value');
    const socialValueDatatable = $('#social-value-table', socialContainer);

    let t = socialValueDatatable.DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        ajax: {
            url: socialValueDatatable.data('route'),
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center', width: "30px" },
            { data: 'thumbnail', name: 'thumbnail' },
            { data: 'title_en', name: 'title_en' },
            { data: 'text_en', name: 'text_en' },
            { data: 'action', name: 'action', className: 'w-12', searchable: false, orderable: false },
        ],
    });

    socialContainer.on('click', '.remove-img', function() {
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
                        apiSocialGalleryRemove({ id: id }).done(function(res) {
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

    socialContainer.on('click', '.btn-add-benefit', function () {
        socialContainer.find('#benefit').append(`<tr>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Benefit EN" name="benefit_en[]">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Benefit KH" name="benefit_kh[]">
                                                                <div class="input-group-append">
                                                                    <span class="btn btn-danger btn-remove">Remove</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>`);
    });

    socialContainer.on('click', '.btn-add-eligible', function () {
        socialContainer.find('#eligible').append(`<tr>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Eligible EN" name="eligible_en[]">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Eligible KH" name="eligible_kh[]">
                                                                <div class="input-group-append">
                                                                    <span class="btn btn-danger btn-remove">Remove</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>`);
    });

    socialContainer.on('click', '.btn-add-process', function () {
        socialContainer.find('#process').append(`<tr>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Process EN" name="process_en[]">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Process KH" name="process_kh[]">
                                                                <div class="input-group-append">
                                                                    <span class="btn btn-danger btn-remove">Remove</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>`);
    });


    socialContainer.on('click', '.btn-remove', function () {
        $(this).closest('tr').remove();
    });
});
