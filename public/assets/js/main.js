$(function () {
    $('.page-loader').addClass('hide');

    $('[data-toggle=floating-tab]').on('click', function () {

        if ($(this).closest('.toggle-tab').hasClass('active')) {
            closeFloatingTab();
        } else {
            closeFloatingTab();
            $(this).closest('.toggle-tab').addClass('active');
            $($(this).attr('data-target')).addClass('show');
            $('body').addClass('overlay');
            $('.floating-search').addClass('show');
        }
    });

    function closeFloatingTab() {
        $('.floating-search .tab').removeClass('show');
        $('.floating-search .toggle-tab').removeClass('active');
        $('body').removeClass('overlay');
        $('.floating-search').removeClass('show');
    }


    var newsletter = $('#newsletter');
    newsletter.on('submit', function ($e) {
        $e.preventDefault();
        var button = $(this).find('button[type="submit"]');
        var content = button.html();

        button.html('<span class="fa fa-spinner fa-spin"></span>');

        $('.newsletter_err').addClass('d-none');

        var email_field = newsletter.find('input[name="email"]');
        email_field.removeClass('is-invalid');
        email_field.parent('.form-group').find('.invalid-feedback').remove();

        $.ajax({
            type: "POST",
            url: newsletter.attr("action"),
            data: newsletter.serialize(), //only input
            success: function (response) {
                button.html(content);

                if (response.status === 'validation_error') {
                    email_field.addClass('is-invalid');
                    email_field.parent('.form-group')
                        .append('<span class="invalid-feedback">'+response.message+'</span>')
                } else {
                    toastr.info(response.message);
                    newsletter[0].reset();
                }
            },
            error: function () {
                button.html(content);
                $('.newsletter_err').removeClass('d-none');
            }
        });

    });
});
