<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--FONTS connection-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Raleway|Raleway+Dots|Roboto|Roboto+Slab">
    <!--STYLES connection-->
    <link rel="stylesheet" href="app/css/main.min.css">
    <title>Kabanosy</title>
</head>
<body>

<header class="header">
    <div class="logo-wrap">
        <a href="#">
            <img src="app/img/725px-NASA_logo.svg.png" alt="" class="logo">
        </a>
    </div>
    
    <nav class="header-nav">
        <ul class="header-menu__ul" id="myMenu">
            <li data-menuanchor="firstPage" class="header-menu__ul_li active activeBefore">
                <a href="#firstPage">Дмитрук</a>
            </li>
            <li data-menuanchor="secondPage" class="header-menu__ul_li activeBefore">
                <a href="#secondPage">Про кабаноси</a>
            </li>
            <li data-menuanchor="thirdPage" class="header-menu__ul_li activeBefore">
                <a href="#thirdPage" id="startPage">Смаки</a>
            </li>
            <li data-menuanchor="fourthPage" class="header-menu__ul_li activeBefore">
                <a href="#fourthPage">Технологія</a>
            </li>
            <li data-menuanchor="fifthPage" class="header-menu__ul_li activeBefore">
                <a href="#fifthPage">Контакти</a>
            </li>
        </ul>
    </nav>

    <div class="language-wrap">
        <select name="" id="languageSelect">
            <option value="1">UKR</option>
            <option value="2">RU</option>
            <option value="2">EN</option>
        </select>
    </div>
</header>

<main class="main">
    <div id="fullpage">
        <div class="section">
            <div class="wrapper-parallax">
                <div class="wrapper-parallax-bg-1">
                    <div class="wrapper-scene-1 z-index-min">
                        <div data-relative-input="true" id="scene">
                            <div data-depth="0.1">
                                <img src="app/img/noBg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-2 z-index-min">
                        <div data-relative-input="true" id="scene2">
                            <div data-depth="0.2">
                                <img src="app/img/noBg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-3 z-index-min">
                        <div data-relative-input="true" id="scene3">
                            <div data-depth="0.7">
                                <img src="app/img/noBg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-4 z-index-min">
                        <div data-relative-input="true" id="scene4">
                            <div data-depth="0.5">
                                <img src="app/img/noBg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-5 z-index-min">
                        <div data-relative-input="true" id="scene5">
                            <div data-depth="0.2">
                                <img src="app/img/noBg.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper-parallax-content">
                    <h1 class="wrapper-parallax-content__title">
                        Перші справжіні <span>Kabanosy</span>
                    </h1>
                </div>

                <div class="wrapper-parallax-bg-2">
                    <div class="wrapper-scene-1 z-index-max">
                        <div data-relative-input="true" id="scene6">
                            <div data-depth="0.1">
                                <img src="app/img/noBg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-2 z-index-max">
                        <div data-relative-input="true" id="scene7">
                            <div data-depth="0.2">
                                <img src="app/img/noBg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-3 z-index-max">
                        <div data-relative-input="true" id="scene8">
                            <div data-depth="0.7">
                                <img src="app/img/noBg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-4 z-index-max">
                        <div data-relative-input="true" id="scene9">
                            <div data-depth="0.5">
                                <img src="app/img/noBg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-5 z-index-max">
                        <div data-relative-input="true" id="scene10">
                            <div data-depth="0.2">
                                <img src="app/img/noBg.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <p class="paragrafh">
                Сторінка ПРО КАБАНОСИ
            </p>
        </div>
        <div class="section">
            <div class="slide" data-anchor="slide1">
                <p class="paragrafh">
                    СМАК - 1
                </p>
            </div>
            <div class="slide" data-anchor="slide2">
                <p class="paragrafh">
                    СМАК - 2
                </p>
            </div>
            <div class="slide" data-anchor="slide3">
                <p class="paragrafh">
                    СМАК - 3
                </p>
            </div>
            <div class="slide" data-anchor="slide4">
                <p class="paragrafh">
                    СМАК - 4
                </p>
            </div>
            <div class="slide" data-anchor="slide4">
                <p class="paragrafh">
                    Product - 5
                </p>
            </div>
        </div>
        <div class="section">
            <p class="paragrafh">
                Сторінка ПРО КАБАНОСИ
            </p>
        </div>
        <div class="section">
            <p class="paragrafh">
                Сторінка КЛНТАКТИ
            </p>
        </div>
    </div>
</main>

<footer class="footer"></footer>


<!--JS connection-->
<script src="node_modules/parallax-js/dist/parallax.min.js"></script>
<script src="app/js/all.min.js"></script>

</body>
</html>