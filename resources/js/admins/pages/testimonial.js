$(document).ready(function () {
    const TestimonialContainer = $('#testimonial');
    const TestimonialDatatable = $('#testimonial-table', TestimonialContainer);

    let t = TestimonialDatatable.DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        ajax: {
            url: TestimonialDatatable.data('route'),
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center', width: "30px"},
            {data: 'img', name: 'img'},
            {data: 'name_en', name: 'name_en'},
            {data: 'say_by_en', name: 'say_by_en'},
            {data: 'text_en', name: 'text_en'},
            {data: 'action', name: 'action',className: 'w-12', searchable: false, orderable: false},
        ],
    });
});