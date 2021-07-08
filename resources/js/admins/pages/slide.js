$(document).ready(function () {
    const SlideContainer = $('#slide');
    const SlideDatatable = $('#slide-table', SlideContainer);

    let t = SlideDatatable.DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        ajax: {
            url: SlideDatatable.data('route'),
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center', width: "30px"},
            {data: 'img', name: 'img'},
            {data: 'title_en', name: 'title_en'},
            {data: 'text_en', name: 'text_en'},
            {data: 'action', name: 'action',className: 'w-12', searchable: false, orderable: false},
        ],
    });
});