$(document).ready(function () {
    const JobContainer = $('#job');
    const JobDatatable = $('#job-table', JobContainer);

    let t = JobDatatable.DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        ajax: {
            url: JobDatatable.data('route'),
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center', width: "30px"},
            {data: 'icon_img', name: 'icon_img'},
            {data: 'title_en', name: 'title_en'},
            {data: 'position', name: 'position'},
            {data: 'date', name: 'date'},
            {data: 'text_en', name: 'text_en' , width: "200px"},
            {data: 'action', name: 'action',className: 'w-12', searchable: false, orderable: false},
        ],
    });
});