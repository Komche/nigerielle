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
            'flip',
            'slice',
            'box3D',
            'pixel',
            'fade',
            'glide',
            'card'
        ],
        file: [{
                src: {
                    main: "public/img/image1.jpg",
                    cover: "public/img/femme.jpg"
                },
                title: 'slideWiz Library - 1',
                desc: "1: slideWiz is a JQuery based library created by a Nigerian Software " +
                    "Engineer by the name 'Wisdom Emenike' who at the time of writing this library " +
                    "works at Imaxinacion Technology, one of Nigeria's leading IT companies.",
                descLength: 220,
                button: {
                    text: 'GitHub - 1',
                    url: 'https://github.com/iamwizzdom/slideWiz',
                    class: 'btn btn-medium btn-primary'
                }
            },
            {
                src: {
                    main: "public/img/femme.jpg",
                    cover: "public/img/wedding.jpg"
                },
                title: 'slideWiz Library - 2',
                desc: "2: slideWiz is a JQuery based library created by a Nigerian Software " +
                    "Engineer by the name 'Wisdom Emenike' who at the time of writing this library " +
                    "works at Imaxinacion Technology, one of Nigeria's leading IT companies.",
                button: {
                    text: 'GitHub - 2',
                    url: 'https://github.com/iamwizzdom/slideWiz',
                    class: 'btn btn-medium btn-primary'
                }
            },
            {
                src: {
                    main: "public/img/wedding.jpg",
                    cover: "public/img/training.jpg"
                },
                title: 'slideWiz Library - 3',
                desc: "3: slideWiz is a JQuery based library created by a Nigerian Software " +
                    "Engineer by the name 'Wisdom Emenike' who at the time of writing this library " +
                    "works at Imaxinacion Technology, one of Nigeria's leading IT companies.",
                descLength: 190,
                button: {
                    text: 'GitHub - 3',
                    url: 'https://github.com/iamwizzdom/slideWiz',
                    class: 'btn btn-medium btn-primary'
                }
            },
            {
                src: {
                    main: "public/img/training.jpg",
                    cover: "public/img/houses.jpg"
                },
                title: 'slideWiz Library - 4',
                desc: "4: slideWiz is a JQuery based library created by a Nigerian Software " +
                    "Engineer by the name 'Wisdom Emenike' who at the time of writing this library " +
                    "works at Imaxinacion Technology, one of Nigeria's leading IT companies.",
                button: {
                    text: 'GitHub - 4',
                    url: false,
                    class: 'btn btn-medium btn-primary'
                }
            }
        ]

    });

});
