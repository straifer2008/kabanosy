$( document ).ready(function() {

    // fullpage.scroll
    var sectionPages = ['firstPage', 'secondPage', 'thirdPage', 'thirdPage2', 'thirdPage3', 'thirdPage4', 'thirdPage5', 'fourthPage', 'fifthPage'];
    $('#fullpage').fullpage({
        menu: '#myMenu',
        anchors: sectionPages,
        css3: false,
        scrollingSpeed: 1000,
        scrollBar: false,

        showActiveTooltip: true,
        animateAnchor: false,



        /*//Навигация
        lockAnchors: false,
        navigation: false,
        navigationPosition: 'right',
        navigationTooltips: ['firstSlide', 'secondSlide'],
        showActiveTooltip: false,
        slidesNavigation: false,
        slidesNavPosition: 'bottom',

       //Скроллинг
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        continuousHorizontal: false,
        scrollHorizontally: false,
        interlockedSlides: false,
        dragAndMove: false,
        offsetSections: false,
        resetSliders: false,
        fadingEffect: false,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: false,
        scrollOverflowReset: false,
        scrollOverflowOptions: null,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,
        bigSectionsDestination: null,

        //Доступ
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Дизайн
        controlArrows: true,
        verticalCentered: true,
        sectionsColor : ['#ccc', '#fff'],
        paddingTop: '3em',
        paddingBottom: '10px',
        fixedElements: '#header, .footer',
        responsiveWidth: 0,
        responsiveHeight: 0,
        responsiveSlides: false,
        parallax: false,
        parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

        //Настроить селекторы
        sectionSelector: '.section',
        slideSelector: '.slide',

        lazyLoading: false,

        //события
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){},
        afterResponsive: function(isResponsive){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}*/

        //Заполнение строки в меню
        onLeave: function(index, nextIndex, direction){
            var previousAnchor = sectionPages[(index -1)];
            var nextAnchor = sectionPages[(nextIndex -1)];
            var firstPageW = $('#firstPage').width();
            var secondPageW = $('#secondPage').width();
            var thirdPageW = $('#thirdPage').width();
            var fourthPageW = $('#fourthPage').width();
            var fifthPageW = $('#fifthPage').width();
            console.log(nextAnchor, direction);

            var animateLeft = function (anchor, blockSelector) {
                if (nextAnchor == anchor) {
                    $(blockSelector).animate({
                        left: 0
                    }, 500);
                } else {
                    setTimeout(function() {
                        $(blockSelector).css('left', '-100%');
                    }, 1000);
                };
            };

            animateLeft('thirdPage', '.productOne .products-bg-blocks__left');
            animateLeft('thirdPage2', '.productTwo .products-bg-blocks__left');
            animateLeft('thirdPage3', '.productThre .products-bg-blocks__left');
            animateLeft('thirdPage4', '.productFour .products-bg-blocks__left');
            animateLeft('thirdPage5', '.productFive .products-bg-blocks__left');



            if (nextAnchor == 'thirdPage5') {
                $('.product-scroll__lastPage').animate(
                    {'background-position': '50% 50%'},
                    {
                        step: function(now,fx) {
                            $(this).css('background-position','43% 43%');
                        },
                        duration:'slow'
                    },'linear'
                );

                $('.product-scroll__lastPage').animate(
                    {textIndent: -15},
                    {step: function(now,fx) {
                        $(this).css('transform','rotate('+now+'deg)');},
                        duration: 400
                    },'linear'
                );
            } else {
                $('.product-scroll__lastPage').animate(
                    {textIndent: 90},
                    {
                        step: function(now,fx) {
                            $(this).css('transform','rotate('+now+'deg)');
                        },
                        duration: 100
                    }, 'linear'
                );
                $('.product-scroll__lastPage').animate(
                    {'background-position': '0 -100%'},
                    {
                        step: function() {
                            $(this).css('background-position','0');
                        },
                        duration: 100
                    },'linear'
                );
            };



            $('#myMenu li[data-menuanchor='+previousAnchor+']');
            if (nextAnchor == 'firstPage') {
                $(".bgMenuWhite").width(firstPageW);
            }
            if (nextAnchor == 'secondPage') {
                $(".bgMenuWhite").width(firstPageW + secondPageW);
            }
            if (nextAnchor == 'thirdPage') {
                $(".bgMenuWhite").width(firstPageW + secondPageW + 0.2 * thirdPageW);
            }
            if (nextAnchor == 'thirdPage2') {
                $(".bgMenuWhite").width(firstPageW + secondPageW + 0.4 * thirdPageW);
            }
            if (nextAnchor == 'thirdPage3') {
                $(".bgMenuWhite").width(firstPageW + secondPageW + 0.6 * thirdPageW);
            }
            if (nextAnchor == 'thirdPage4') {
                $(".bgMenuWhite").width(firstPageW + secondPageW + 0.8 * thirdPageW);
            }
            if (nextAnchor == 'thirdPage5') {
                $(".bgMenuWhite").width(firstPageW + secondPageW + thirdPageW);
            }
            if (nextAnchor == 'fourthPage') {
                $(".bgMenuWhite").width(firstPageW + secondPageW + thirdPageW + fourthPageW);
            }
            if (nextAnchor == 'fifthPage') {
                $(".bgMenuWhite").width(firstPageW + secondPageW + thirdPageW + fourthPageW + fifthPageW);
            }
        },

    });


    //scrolling contacts images
    var scrolling = 0;
    var scrollCell = $('.skroll-cell');
    $('.contact__content').bind('mousewheel', function(e){
        if(e.originalEvent.wheelDelta < 120) {

        }
    });



});

var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene, {
    relativeInput: true,
    pointerEvents: true
});
var scene2 = document.getElementById('scene2');
var parallaxInstance2 = new Parallax(scene2, {
    relativeInput: true,
    pointerEvents: true
});
var scene3 = document.getElementById('scene3');
var parallaxInstance3 = new Parallax(scene3, {
    relativeInput: true,
    pointerEvents: true
});
var scene4 = document.getElementById('scene4');
var parallaxInstance4 = new Parallax(scene4, {
    relativeInput: true,
    pointerEvents: true
});
var scene5 = document.getElementById('scene5');
var parallaxInstance5 = new Parallax(scene5, {
    relativeInput: true,
    pointerEvents: true
});
var scene6 = document.getElementById('scene6');
var parallaxInstance6 = new Parallax(scene6, {
    relativeInput: true,
    pointerEvents: true
});
var scene7 = document.getElementById('scene7');
var parallaxInstance7 = new Parallax(scene7, {
    relativeInput: true,
    pointerEvents: true
});
var scene8 = document.getElementById('scene8');
var parallaxInstance8 = new Parallax(scene8, {
    relativeInput: true,
    pointerEvents: true
});
var scene9 = document.getElementById('scene9');
var parallaxInstance9 = new Parallax(scene9, {
    relativeInput: true,
    pointerEvents: true
});
var scene10 = document.getElementById('scene10');
var parallaxInstance10 = new Parallax(scene10, {
    relativeInput: true,
    pointerEvents: true
});

//Мобільне меню
