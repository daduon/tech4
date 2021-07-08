$(document).ready(function () {
    const parentContainer = $('#parent');
    parentContainer.on('click', '.btn-remove', function () {
        $(this).closest('tr').remove();
    });
});