$( document ).ready(function() {
    $('#fullpage').fullpage({
        //Navigation
        menu: '#myMenu',
        lockAnchors: false,
        anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'fifthPage'],
        navigation: false,
        navigationPosition: 'right',
        navigationTooltips: ['firstSlide', 'secondSlide'],
        showActiveTooltip: false,
        slidesNavigation: false,
        slidesNavPosition: 'top',

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: false,
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

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,


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
