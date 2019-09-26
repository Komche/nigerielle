$(document).ready(function() {
    $(".menu-icon").on("click", function() {
          $("nav ul").toggleClass("showing");
    });

    
});

// Scrolling Effect

$(window).on("scroll", function() {
    if($(window).scrollTop()) {
          $('nav').addClass('black');
    }

    else {
          $('nav').removeClass('black');
    }
})

$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
jQuery(document).ready(function($) {
 
    $('#myCarousel').carousel({
            interval: 5000
    });

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function () {
    var id_selector = $(this).attr("id");
    try {
        var id = /-(\d+)$/.exec(id_selector)[1];
        console.log(id_selector, id);
        jQuery('#myCarousel').carousel(parseInt(id));
    } catch (e) {
        console.log('Regex failed!', e);
    }
});
    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
             var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-'+id).html());
    });
});

// Partenaires

$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});



$(document).ready(function() {

    $('.link-gallery').click(function(){
        var descripcion = $(this).attr('title');
        $('#caption').html(descripcion);
        var img = $(this).find('img');
        var src = img.attr('src')
        $('#img01').attr('src', src);
        $('#myModal').css('display','block');
        $('.modal-backdrop').remove();
    });

    $('.close').click(function(){
        $('#myModal').css('display','none');
    });
    
});

$(document).ready(function () {

    $('.slideWiz').slideWiz({
        auto: true,
        speed: 5000,
        row: 12,
        col: 35,
        animation: [
            'pixel',
        ],
        file: [{
                src: {
                    //main: "public/img/p.JPG",
                    cover: "public/img/slide1.JPG"
                },
                title: 'Nigerielles',
                desc: "C'est une organisation qui soutient et accompagne les femmes entrepreneur",
                descLength: 220
            },
            {
                src: {
                    //main: "public/img/sami.JPG",
                    cover: "public/img/slide2.JPG"
                },
                title: 'Nigerielles',
                desc: "En partenariat avec des institutions et des cabinets de formation de la place, Nigerielles s’engage à former ‘’autrement’’ les femmes entrepreneurs, les porteuses de projets ou leaders du Niger dans toutes les régions. ",
                
            },
            {
                src: {
                    //main: "public/img/m.JPG",
                    cover: "public/img/slide3.JPG"
                },
                title: 'Nigerielles',
                desc: "Notre organisation est composée de dynamiques femmes d’affaires et des femmes leaders en devenir, regroupées en business club.",
                descLength: 190,
                
            },
            {
                src: {
                    //main: "public/img/page.JPG",
                    cover: "public/img/slide4.JPG"
                },
                title: 'Nigerielles',
                desc: "Ces femmes se retrouvent chaque mois autour de diverses activités à savoir des déjeuners ou rendez-vous d’affaires, des activités diverses allant des dons aux orphelins ou femmes défavorisées, a des activités",
                
            },
            {
                src: {
                    //main: "public/img/image.JPG",
                    cover: "public/img/slide5.JPG"
                },
                title: 'Nigerielles',
                desc: "Ces femmes se retrouvent chaque mois autour de diverses activités à savoir des déjeuners ou rendez-vous d’affaires, des activités diverses allant des dons aux orphelins ou femmes défavorisées, a des activités",
                
            },
            {
                src: {
                    //main: "public/img/fe.JPG",
                    cover: "public/img/slide6.JPG"
                },
                title: 'Nigerielles',
                desc: "Ces femmes se retrouvent chaque mois autour de diverses activités à savoir des déjeuners ou rendez-vous d’affaires, des activités diverses allant des dons aux orphelins ou femmes défavorisées, a des activités",
                   
            },
        ]
    });

});

$(document).ready(function () {
    $('.navbar-light .dmenu').hover(function () {
            $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
        });
    });