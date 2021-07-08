$(document).ready(function () {
    const WhyUsContainer = $('#why-us');
    const WhyUsDatatable = $('#why-us-table', WhyUsContainer);

    let t = WhyUsDatatable.DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        ajax: {
            url: WhyUsDatatable.data('route'),
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center', width: "30px"},
            {data: 'icon_img', name: 'icon_img'},
            {data: 'title_en', name: 'title_en'},
            {data: 'short_text_en', name: 'short_text_en'},
            {data: 'action', name: 'action',className: 'w-12', searchable: false, orderable: false},
        ],
    });
});