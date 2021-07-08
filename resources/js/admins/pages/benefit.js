$(document).ready(function () {
    const BenefitContainer = $('#benefit');
    const BenefitDatatable = $('#benefit-table', BenefitContainer);

    let t = BenefitDatatable.DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        ajax: {
            url: BenefitDatatable.data('route'),
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center', width: "30px"},
            {data: 'icon_img', name: 'icon_img'},
            {data: 'title_en', name: 'title_en'},
            {data: 'text_en', name: 'text_en'},
            {data: 'page', name: 'page'},
            {data: 'action', name: 'action',className: 'w-12', searchable: false, orderable: false},
        ],
    });
});