$(document).ready(function () {
    $('#fm-register').validate({
        rules:{
            name: {
                required: true,
                maxlength: 100
            },
            email: {
                required: true,
                email: true,
            },
            phone: {
                required: true,
                maxlength: 20
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 15
            }
        },
        messages:{
            name: {
                required: "The filed name are require.",
                maxlength: "Your name are largest at 100 character."
            },
            email: {
                required: "The filed email are require.",
            },
            phone: {
                required: "The filed phone are require.",
                maxlength: "Your phone are largest at 20 character."
            },
            password: {
                required: "The filed password are require.",
                minlength: "Your password are least at 6 character.",
                maxlength: "Your name are largest at 15 character."
            }
        },
        submitHandler: function(form) {
            $('.btn-register').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Register').prop('disabled',true);
            api.register($('#fm-register').attr('action'),$('#fm-register').serialize())
                .done(function(res){
                    if (res.status===true){
                        window.location.href=res.callback
                    }
                    else {
                        $('#ModalRegister').show()
                        $('#fm-register').find('.btn-register').html('Register').prop('disabled',false);
                        $.each(res.errors,function (key,value) {
                            if (key==='name'){
                                $('#fm-register').find('.name').addClass('is-invalid');
                                $('#fm-register').find('.name_error').text(value);
                            }
                            if (key==='phone'){
                                $('#fm-register').find('.phone').addClass('is-invalid').show();
                                $('#fm-register').find('.phone_error').text(value);
                                $('#fm-register').find('#phone-error').text(value);
                            }
                            if (key==='email'){
                                $('#fm-register').find('.email').addClass('is-invalid').show();
                                $('#fm-register').find('.email_error').text(value);
                                $('#fm-register').find('#email-error').text(value);
                            }
                            if (key==='password'){
                                $('#fm-register').find('.password').addClass('is-invalid');
                                $('#fm-register').find('.password_error').text(value);
                            }
                        })
                    }
                })
                .fail( function(response){
                    let errors = response.responseJSON.errors;
                    $('#fm-register').find('.btn-register').html('Register').prop('disabled',false);
                    $.each(errors,function (key,value) {
                        if (key==='name'){
                            $('#fm-register').find('.name').addClass('is-invalid');
                            $('#fm-register').find('.name_error').text(value);
                        }
                        if (key==='phone'){
                            $('#fm-register').find('.phone').addClass('is-invalid').show();
                            $('#fm-register').find('.phone_error').text(value);
                            $('#fm-register').find('#phone-error').text(value);
                        }
                        if (key==='email'){
                            $('#fm-register').find('.email').addClass('is-invalid').show();
                            $('#fm-register').find('.email_error').text(value);
                            $('#fm-register').find('#email-error').text(value);
                        }
                        if (key==='password'){
                            $('#fm-register').find('.password').addClass('is-invalid');
                            $('#fm-register').find('.password_error').text(value);
                        }
                    })
                });
            // return false;
        }
    });
    $('#fm-login').validate({
        rules:{
            phone: {
                required: true,
                maxlength: 20
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 15
            }
        },
        messages:{
            phone: {
                required: "The filed phone are require.",
                maxlength: "Your phone are largest at 20 character."
            },
            password: {
                required: "The filed password are require.",
                minlength: "Your password are least at 6 character.",
                maxlength: "Your name are largest at 15 character."
            }
        },
        submitHandler: function(form) {
            $('.btn-login').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Login').prop('disabled',true);
            api.login($('#fm-login').attr('action'),$('#fm-login').serialize())
                .done(function(res){
                    if (res.status===true){
                        window.location.href=res.callback
                    }
                    else {
                        $('#ModalLogin').show()
                        $('#fm-login').find('.btn-login').html('Login').prop('disabled',false);
                        $.each(res.errors,function (key,value) {
                            if (key==='phone'){
                                $('#fm-login').find('.phone').addClass('is-invalid').show();
                                $('#fm-login').find('.phone_error').text(value);
                                $('#fm-login').find('#login_phone-error').text(value);
                            }
                            if (key==='password'){
                                $('#fm-login').find('.password').addClass('is-invalid');
                                $('#fm-login').find('.password_error').text(value);
                            }
                        })
                    }
                })
                .fail( function(response){
                    let errors = response.responseJSON.errors;
                    $('#fm-login').find('.btn-login').html('Register').prop('disabled',false);
                    $.each(errors,function (key,value) {

                        if (key==='phone'){
                            $('#fm-login').find('.phone').addClass('is-invalid').show();
                            $('#fm-login').find('.phone_error').text(value);
                            $('#fm-login').find('#login_phone-error').text(value);
                        }
                        if (key==='password'){
                            $('#fm-login').find('.password').addClass('is-invalid');
                            $('#fm-login').find('.password_error').text(value);
                        }
                    })
                });
        }
    });
});
