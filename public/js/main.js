
$(function () {
    var $gallery = $('#gallery');
    var request = $.ajax({
        url: 'https://api.instagram.com/v1/users/410690219/media/recent?access_token=410690219.467ede5.f096734491424fb78daf3c0caa0d8d08&count=19',

        type: 'GET',
        crossDomain: true, // enable this
        dataType: 'jsonp'/*,
         success: function() { alert("Success"); },
         error: function() { alert('Failed!'); }
         */
    });
    request.done(function (msg) {
        console.log(msg.data);
        var html = "", cont = 0, imageSize = $(document).width() / 5, topImg = 0, leftImg = 0;

        jQuery.each(msg.data, function (i, val) {

            if (cont == 0) {
                per = '40%';
                cont ++;
            }
            if(cont > 1 && cont <= 4) {
                per = '20%';
                topImg = 0;
                leftImg = imageSize * cont ;
            }
            if(cont > 4 && cont <= 7) {
                per = '20%';
                topImg = imageSize ;
                leftImg = imageSize * (cont - 3) ;

            }
            if(cont > 7 && cont <= 9) {
                per = '20%';
                topImg = imageSize * 2;
                leftImg = imageSize * (cont % 8) ;

            }
            if(cont > 9 && cont <= 11) {
                per = '20%';
                topImg = imageSize * 3;
                leftImg = imageSize * (cont % 10) ;
            }
            if (cont == 12) {
                per = '40%';
                topImg = imageSize * 2;
                leftImg = imageSize * 2 ;

            }

            if(cont == 13) {
                per = '20%';
                topImg = imageSize * 2;
                leftImg = imageSize * 4;
            }
            if(cont == 14) {
                per = '20%';
                topImg = imageSize * 3;
                leftImg = imageSize * 4;
            }

            if(cont > 14 ) {
                per = '20%';
                topImg = imageSize * 4;
                leftImg = imageSize * (cont % 15) ;
            }

            html = "<img  src ='" + val.images.standard_resolution.url + "' style=' position:absolute; top : " + topImg + "px ;left : " + leftImg + "px; width:" + per + "' " + "/>";
            $gallery.append(html);
            cont++;
            console.log(i)
        });
    });
})
;

$(window).load(function () {
    $('.flexslider').flexslider({
        animation: "slide",
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
});