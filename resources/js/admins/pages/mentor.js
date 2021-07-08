$(document).ready(function () {
    const MentorContainer = $('#mentor');
    const MentorDatatable = $('#mentor-table', MentorContainer);

    let t = MentorDatatable.DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        ajax: {
            url: MentorDatatable.data('route'),
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center', width: "30px"},
            {data: 'img', name: 'img'},
            {data: 'name_en', name: 'name_en'},
            {data: 'position_en', name: 'position_en'},
            {data: 'text_en', name: 'text_en'},
            {data: 'action', name: 'action',className: 'w-12', searchable: false, orderable: false},
        ],
    });
});