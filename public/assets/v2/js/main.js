$(function () {
    var header = $('header');
    var hero = $('.ec-hero');

    if (hero) {
        hero.css('padding-top', header.outerHeight() + 10)
            .css('margin-top', -header.outerHeight());

        $('.header2 .floating-search').css('top', header.outerHeight() + 10);
    }
});

$(function () {
    $('.vid-article').each(function(index) {
        var src = $(this).attr('data-src');
        if (src) {
            var img_url = getYtThum($(this).attr('data-src'));
            if (img_url) {
                $(this).find('.img-wrapper > img').attr('src', img_url);
            }
        }
    });

    $('.toggle-yt-modal').on('click', function($e) {
        $e.preventDefault();
        var src = $(this).closest('.vid-article').attr('data-src');
        if (src) {
            $('#myYTVideoModal').find('iframe#video').attr('src', src);
            $('#myYTVideoModal').modal('show');
        }
    });

    $('.article-yt').on('click', function($e) {
        $e.preventDefault();
        var src = $(this).attr('data-src');
        if (src) {
            $('#myYTVideoModal').find('iframe#video').attr('src', src);
            $('#myYTVideoModal').modal('show');
        }
    });

    $('#myYTVideoModal').on('hidden.bs.modal', function (e) {
        $(this).find('iframe#video').attr('src', '')
    })

    $('#printJsButton').on('click', function(e) {
        e.preventDefault();
        printJS({
            printable: 'article',
            type: 'html',
            css: ['{{ asset("assets/libs/bootstrap/css/bootstrap.min.css") }}', '{{ asset("assets/css/style.css") }}']
            })
    })
});

function getYtThum(url) {
    var rx = /^.*(?:(?:youtu\.be\/|v\/|vi\/|u\/\w\/|embed\/)|(?:(?:watch)?\?v(?:i)?=|\&v(?:i)?=))([^#\&\?]*).*/;
    url = url.match(rx);
    if (url) {
        return 'http://img.youtube.com/vi/' + url[1] + '/0.jpg';
    }
    return null;
}

function showYtModal(src) {

}

shareon();
