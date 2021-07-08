$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

apiNotification = function() {
    return $.ajax({
        url: '/api/notification',
        type: "get"
    });
};

apiGetMedicines = function(params) {
    return $.ajax({
        url: '/api/medicines',
        type: "get",
        data: params
    });
};

apiGetMedicineMeasurements = function(params) {
    return $.ajax({
        url: '/api/medicine/measurement',
        type: "get",
        data: params
    });
};

apiGetMedicineByBarcode = function(params) {
    return $.ajax({
        url: '/api/medicine/scanner',
        type: "get",
        data: params
    });
};

apiStoreCustomer = function(params) {
    return $.ajax({
        url: '/api/customer/store',
        type: "post",
        data: params
    });
};
apiGalleryRemoveImg = function(params) {
    return $.ajax({
        url: '/api/galleries/destroy',
        type: "post",
        data: params
    });
};
apiGalleryRemoveGallery = function(params) {
    return $.ajax({
        url: '/api/blogs/remove-image',
        type: "post",
        data: params
    });
};
apiGalleryRemovePressGallery = function(params) {
    return $.ajax({
        url: '/api/presses/remove-image',
        type: "post",
        data: params
    });
};

apiSocialGalleryRemove = function(params) {
    return $.ajax({
        url: '/api/social-value/remove-image',
        type: "post",
        data: params
    });
};
