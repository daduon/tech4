const api = {};
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

api.login = function (url,params) {
    return $.ajax({
        url: url,
        type: "post",
        data: params,
        cache: false
    });
};

api.register = function (url,params) {
    return $.ajax({
        url: url,
        type: "post",
        data: params,
        dataType : "json",
        cache: false
    });
};
