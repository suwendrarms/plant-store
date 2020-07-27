// When the browser is ready...
$(function() {
    //start code jQuery Form Validation code

    /* author: dhaval
     * Description: url validaion*/
    jQuery.validator.addMethod("url", function (value, element) {
        return this.optional(element) || /^((https?|s?ftp):\/\/)?(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(value);
    }, "Please enter a valid URL.");
    /* end code dhaval*/
    
    jQuery.validator.addMethod("urlsuffix", function (value, element) {
        //return this.optional(element) || /(([\w]+:)?\/\/)?(([\d\w]|%[a-fA-f\d]{2,2})+(:([\d\w]|%[a-fA-f\d]{2,2})+)?@)?([\d\w][-\d\w]{0,253}[\d\w]\.)+[\w]{2,63}(:[\d]+)?(\/([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)*(\?(&?([-+_~.\d\w]|%[a-fA-f\d]{2,2})=?)*)?(#([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)?/i.test(value);
        var indexNumber = value.lastIndexOf(".");
        var str = value.substring(indexNumber);
        var len = str.length;
        if(len > 2)
           return true;
    }, "Please enter a valid URL.");

    /* Description: greateThan previous date*/
    jQuery.validator.addMethod("greaterThan",
            function (value, element, params) {
                if (!/Invalid|NaN/.test(new Date(value))) {
                    return new Date(value) >= new Date($(params).val());
                }
                return isNaN(value) && isNaN($(params).val())
                        || (Number(value) > Number($(params).val()));
            }, 'Must be greater than {0}.');
    //end code

    /* Description: greateThan {0} amount*/
    $.validator.addMethod('minAmount', function (value, el, param) {
        return value > param;
    }, 'Must be greater than {0}.');
    //end code

    /* Description: lessThan {0} filesize*/
    $.validator.addMethod("filsize", function (value, element, param) {
        if (typeof element.files[0] != "undefined") {
            var size = element.files[0].size;
            return (size / 1024) < param;
        } else {
            return true;
        }
    }, "Maximum allowed filesize {0} KB");
    //end code
    
    //reset form remove highlight
    $.validator.prototype.resetForm = function () {
        if ($.fn.resetForm) {
            $(this.currentForm).resetForm();
        }
        this.submitted = {};
        this.lastElement = null;
        this.prepareForm();
        this.hideErrors();
        var elements = this.elements().removeData("previousValue").removeAttr("aria-invalid");
        if (this.settings.removehighlight) {
            for (var i = 0; elements[i]; i++) {
                this.settings.removehighlight.call(this, elements[i], this.settings.errorClass, this.settings.validClass);
            }
        }
    }
    //end code
    
    $("#register-form").validate({
        // Specify the validation rules
        rules: {
            firstname: {
                required: true
            },
            lastname: {
                required: true
            },
            physician_code: {
                required: true,
                range: [1449, 1449]
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                nowhitespace: true,
                minlength: 6
            },
            password_confirmation: {
                required: true,
                equalTo: '#password'
            }
        },
        messages: {
            physician_code: {
                range: "Participation Code is invalid",
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if (element.closest('.form-group').find('.switch').length) {
                error.appendTo(element.closest('.form-group').find('.switch'));
            } else {
                error.insertAfter(element);
            }
        }
    });
    
    $("#register-form-gsa").validate({
        // Specify the validation rules
        rules: {
            firstname: {
                required: true
            },
            lastname: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                nowhitespace: true,
                minlength: 6
            },
            password_confirmation: {
                required: true,
                equalTo: '#password'
            },
            phone: {
                required: true,
                number:true
            },
            address: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },
            country: {
                required: true,
            },
            zip: {
                required: true,
            },
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if (element.closest('.form-group').find('.switch').length) {
                error.appendTo(element.closest('.form-group').find('.switch'));
            } else {
                error.insertAfter(element);
            }
        }
    });
    
    $("#login-form").validate({
        // Specify the validation rules
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
    
    $("#password-form").validate({
        // Specify the validation rules
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

    });
    
    $("#reset-password-form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                nowhitespace: true,
                minlength: 6
            },
            password_confirmation: {
                required: true,
                equalTo: '#password'
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
    
    $("#verify-form").validate({
        // Specify the validation rules
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

    });
    
    $("#contact-form").validate({
        // Specify the validation rules
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                required: true,
            },
            comments: {
                required: true,
                minlength: 20
            },
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

    });
    //end code jQuery Form Validation code
});