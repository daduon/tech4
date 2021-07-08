$(document).ready(function () {
    const courseContainer = $('#course');
    const courseDatatable = $('#course-table', courseContainer);

    courseDatatable.DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        ajax: {
            url: courseDatatable.data('route'),
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center', width: "30px"},
            {data: 'program', name: 'program'},
            {data: 'title', name: 'title'},
            {data: 'subtitle', name: 'subtitle'},
            {data: 'price', name: 'price'},
            {data: 'start_date', name: 'start_date'},
            {data: 'end_date', name: 'end_date'},
            {data: 'seat_left', name: 'seat_left'},
            {data: 'action', name: 'action',className: 'w-12', searchable: false, orderable: false},
        ],
    });

    courseContainer.on('click', '.btn-add-include', function () {
        courseContainer.find('#include').append(`<tr>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Include EN" name="include_en[]">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Include KH" name="include_kh[]">
                                                                <div class="input-group-append">
                                                                    <span class="btn btn-danger btn-remove">Remove</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>`);
    });

    courseContainer.on('click', '.btn-add-requirement', function () {
        courseContainer.find('#requirement').append(`<tr>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Requirement EN" name="requirement_en[]">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Requirement KH" name="requirement_kh[]">
                                                                <div class="input-group-append">
                                                                    <span class="btn btn-danger btn-remove">Remove</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>`);
    });

    courseContainer.on('click', '.btn-add-benefit', function () {
        courseContainer.find('#benefit').append(`<tr>
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

    courseContainer.on('click', '.btn-add-eligible', function () {
        courseContainer.find('#eligible').append(`<tr>
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

    courseContainer.on('click', '.btn-add-process', function () {
        courseContainer.find('#process').append(`<tr>
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

    courseContainer.on('click', '.btn-add-location', function () {
        let generateNumber = new Date().getUTCMilliseconds();
        courseContainer.find('#location').append(`<tr class="location-text-${generateNumber}">
                                                        <td>
                                                            <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Location EN" name="location_en[]">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Location KH" name="location_kh[]">
                                                                <div class="input-group-append">
                                                                    <span data-index="${generateNumber}" class="btn btn-danger btn-remove-location">Remove</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="location-text-${generateNumber}">
                                                        <td colspan="2">
                                                        <textarea name="map[]" class="form-control" placeholder="Map Embed" cols="30"
                                                                  rows="3"></textarea>
                                                        </td>
                                                    </tr>`);
    });

    courseContainer.on('click', '.btn-remove', function () {
        $(this).closest('tr').remove();
    });

    courseContainer.on('click', '.btn-remove-location', function () {
        let index = $(this).data('index');
        courseContainer.find('.location-text-' + index).remove();
    });

});
