$(document).ready(function () {
    const PartnerContainer = $('#partner');
    const PartnerDatatable = $('#partner-table', PartnerContainer);

    let t = PartnerDatatable.DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        ajax: {
            url: PartnerDatatable.data('route'),
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center', width: "30px"},
            {data: 'img', name: 'img'},
            {data: 'name_en', name: 'name_en'},
            {data: 'action', name: 'action',className: 'w-12', searchable: false, orderable: false},
        ],
    });
});