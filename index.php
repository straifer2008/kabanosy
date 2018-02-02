<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--FONTS connection-->

    <!--STYLES connection-->
    <link rel="stylesheet" href="app/css/main.min.css">
    <title>Kabanosy</title>
</head>
<body>

<header class="header">
    <div class="logo-wrap">
        <a href="#">
            <img src="app/img/logo.png" alt="" class="logo">
        </a>
    </div>
    
    <nav class="header-nav">
        <ul class="header-menu__ul" id="myMenu">
            <span class="bgMenuWhite"></span>
            <li data-menuanchor="firstPage" id="firstPage" class="header-menu__ul_li active">
                <a href="#firstPage" class="active__firrstLink">Дмитрук</a>
            </li>
            <li data-menuanchor="secondPage" id="secondPage" class="header-menu__ul_li">
                <a href="#secondPage">Про кабаноси</a>
            </li>
            <li data-menuanchor="thirdPage" id="thirdPage" class="header-menu__ul_li">
                <a href="#thirdPage" id="startPage">Смаки</a>
            </li>
            <li data-menuanchor="fourthPage" id="fourthPage" class="header-menu__ul_li">
                <a href="#fourthPage">Технологія</a>
            </li>
            <li data-menuanchor="fifthPage" id="fifthPage" class="header-menu__ul_li">
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
        <div class="section startPage" data-anchor="firstPage">
            <div class="wrapper-parallax">
                <div class="wrapper-parallax-bg-1">
                    <div class="wrapper-scene-1 z-index-min">
                        <div data-relative-input="true" id="scene">
                            <div data-depth="0.1">
                                <img src="app/img/kabanosy_original.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-2 z-index-min">
                        <div data-relative-input="true" id="scene2">
                            <div data-depth="0.2">
                                <img src="app/img/Cabanosy_one_bite.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-3 z-index-min">
                        <div data-relative-input="true" id="scene3">
                            <div data-depth="0.7">
                                <img src="app/img/kanabosy_CHEESE.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-4 z-index-min">
                        <div data-relative-input="true" id="scene4">
                            <div data-depth="0.5">
                                <img src="app/img/KABANOSY_delikate.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-5 z-index-min">
                        <div data-relative-input="true" id="scene5">
                            <div data-depth="0.2">
                                <img src="app/img/kanabosy_CHEESE.png" alt="">
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
                                <img src="app/img/kabanosy_original.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-2 z-index-max">
                        <div data-relative-input="true" id="scene7">
                            <div data-depth="0.2">
                                <img src="app/img/Cabanosy_one_bite.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-3 z-index-max">
                        <div data-relative-input="true" id="scene8">
                            <div data-depth="0.7">
                                <img src="app/img/kanabosy_CHEESE.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-4 z-index-max">
                        <div data-relative-input="true" id="scene9">
                            <div data-depth="0.5">
                                <img src="app/img/KABANOSY_delikate.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-scene-5 z-index-max">
                        <div data-relative-input="true" id="scene10">
                            <div data-depth="0.2">
                                <img src="app/img/kanabosy_CHEESE.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section about" data-anchor="secondPage">
            <div class="imgAbout__bg">
                <img src="app/img/aboutBg1.png" alt="" class="imgAbout__bg_left">
                <img src="app/img/aboutBg2.png" alt="" class="imgAbout__bg_right">
            </div>
            <div class="about-content">
                <div class="about-content__header">
                    <h1 class="about__title">Обирай кабаноси</h1>
                    <p class="about__title_p">
                        Компанія "Дмитрук" створила перші справжні кабаноси в Україні
                    </p>
                </div>
                <div class="about-content__main">
                    <p class="about-content__main_p">
                        <span>Це високояекісний продукт, що виготовляється з м’яса.</span>
                        <span>Без жодних домішок фосфатів, барвників, глутамату та глютагену</span>
                    <p class="about-content__main_bigBottomText">
                        Будь-де
                        <span>Та будь-коли!</span>
                    </p>
                </div>


            </div>
        </div>
        <div class="section products productOne" data-anchor="thirdPage">
            <div class="products-wrap">
                <div class="products-bg-blocks__left"></div>
                <div class="products-block__right">
                    <div class="products-block__right_content">
                        <h1 class="product-right__title">Original</h1>
                        <p class="product-right__little-title">З добірної свинини</p>
                        <span class="product-table__title_before">
                            Харчова цінність на 100г продукту:
                        </span>
                        <table class="product-table">
                            <tr>
                                <td>Білків</td>
                                <td>27 г</td>
                            </tr>
                            <tr>
                                <td>Жирів</td>
                                <td>46 г</td>
                            </tr>
                            <tr>
                                <td>Вуглеводів</td>
                                <td>2,3 г</td>
                            </tr>
                        </table>
                        <p class="product-table__title_after">
                            Унергетична цінність за 100 г продукту:
                            <span>2046 кДж / 542 ккал</span>
                        </p>
                        <div class="product-tiket-wrap">
                            <div class="product-tiket-wrap__row">
                                <div class="product-tiket product-tiket__first">
                                    <span class="product-tiket__left">120 г</span>
                                    <span class="product-tiket__right">Компактна<br>упаковка</span>
                                </div>
                                <div class="product-tiket product-tiket__first">
                                    <span class="product-tiket__left">100 %</span>
                                    <span class="product-tiket__right">Відбібрне<br>м’ясо</span>
                                </div>
                            </div>
                            <div class="product-tiket product-tiket__third">
                                <span class="product-tiket__left">60 діб</span>
                                <span class="product-tiket__right">Може зберігатись<br>без холодильника</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section products productTwo">
            <div class="products-wrap">
                <div class="products-bg-blocks__left"></div>
                <div class="products-block__right">
                    <div class="products-block__right_content">
                        <h1 class="product-right__title">Original</h1>
                        <p class="product-right__little-title">З добірної свинини</p>
                        <span class="product-table__title_before">
                            Харчова цінність на 100г продукту:
                        </span>
                        <table class="product-table">
                            <tr>
                                <td>Білків</td>
                                <td>27 г</td>
                            </tr>
                            <tr>
                                <td>Жирів</td>
                                <td>46 г</td>
                            </tr>
                            <tr>
                                <td>Вуглеводів</td>
                                <td>2,3 г</td>
                            </tr>
                        </table>
                        <p class="product-table__title_after">
                            Унергетична цінність за 100 г продукту:
                            <span>2046 кДж / 542 ккал</span>
                        </p>
                        <div class="product-tiket-wrap">
                            <div class="product-tiket-wrap__row">
                                <div class="product-tiket product-tiket__first">
                                    <span class="product-tiket__left">120 г</span>
                                    <span class="product-tiket__right">Компактна<br>упаковка</span>
                                </div>
                                <div class="product-tiket product-tiket__first">
                                    <span class="product-tiket__left">100 %</span>
                                    <span class="product-tiket__right">Відбібрне<br>м’ясо</span>
                                </div>
                            </div>
                            <div class="product-tiket product-tiket__third">
                                <span class="product-tiket__left">60 діб</span>
                                <span class="product-tiket__right">Може зберігатись<br>без холодильника</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section products productThre">
            <div class="products-wrap">
                <div class="products-bg-blocks__left"></div>
                <div class="products-block__right">
                    <div class="products-block__right_content">
                        <h1 class="product-right__title">Original</h1>
                        <p class="product-right__little-title">З добірної свинини</p>
                        <span class="product-table__title_before">
                            Харчова цінність на 100г продукту:
                        </span>
                        <table class="product-table">
                            <tr>
                                <td>Білків</td>
                                <td>27 г</td>
                            </tr>
                            <tr>
                                <td>Жирів</td>
                                <td>46 г</td>
                            </tr>
                            <tr>
                                <td>Вуглеводів</td>
                                <td>2,3 г</td>
                            </tr>
                        </table>
                        <p class="product-table__title_after">
                            Унергетична цінність за 100 г продукту:
                            <span>2046 кДж / 542 ккал</span>
                        </p>
                        <div class="product-tiket-wrap">
                            <div class="product-tiket-wrap__row">
                                <div class="product-tiket product-tiket__first">
                                    <span class="product-tiket__left">120 г</span>
                                    <span class="product-tiket__right">Компактна<br>упаковка</span>
                                </div>
                                <div class="product-tiket product-tiket__first">
                                    <span class="product-tiket__left">100 %</span>
                                    <span class="product-tiket__right">Відбібрне<br>м’ясо</span>
                                </div>
                            </div>
                            <div class="product-tiket product-tiket__third">
                                <span class="product-tiket__left">60 діб</span>
                                <span class="product-tiket__right">Може зберігатись<br>без холодильника</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section products productFour">
            <div class="products-wrap">
                <div class="products-bg-blocks__left"></div>
                <div class="products-block__right">
                    <div class="products-block__right_content">
                        <h1 class="product-right__title">Original</h1>
                        <p class="product-right__little-title">З добірної свинини</p>
                        <span class="product-table__title_before">
                            Харчова цінність на 100г продукту:
                        </span>
                        <table class="product-table">
                            <tr>
                                <td>Білків</td>
                                <td>27 г</td>
                            </tr>
                            <tr>
                                <td>Жирів</td>
                                <td>46 г</td>
                            </tr>
                            <tr>
                                <td>Вуглеводів</td>
                                <td>2,3 г</td>
                            </tr>
                        </table>
                        <p class="product-table__title_after">
                            Унергетична цінність за 100 г продукту:
                            <span>2046 кДж / 542 ккал</span>
                        </p>
                        <div class="product-tiket-wrap">
                            <div class="product-tiket-wrap__row">
                                <div class="product-tiket product-tiket__first">
                                    <span class="product-tiket__left">120 г</span>
                                    <span class="product-tiket__right">Компактна<br>упаковка</span>
                                </div>
                                <div class="product-tiket product-tiket__first">
                                    <span class="product-tiket__left">100 %</span>
                                    <span class="product-tiket__right">Відбібрне<br>м’ясо</span>
                                </div>
                            </div>
                            <div class="product-tiket product-tiket__third">
                                <span class="product-tiket__left">60 діб</span>
                                <span class="product-tiket__right">Може зберігатись<br>без холодильника</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section products productFive">
            <div class="products-wrap">
                <div class="products-bg-blocks__left"></div>
                <div class="products-block__right">
                    <div class="products-block__right_content">
                        <h1 class="product-right__title">Original</h1>
                        <p class="product-right__little-title">З добірної свинини</p>
                        <span class="product-table__title_before">
                            Харчова цінність на 100г продукту:
                        </span>
                        <table class="product-table">
                            <tr>
                                <td>Білків</td>
                                <td>27 г</td>
                            </tr>
                            <tr>
                                <td>Жирів</td>
                                <td>46 г</td>
                            </tr>
                            <tr>
                                <td>Вуглеводів</td>
                                <td>2,3 г</td>
                            </tr>
                        </table>
                        <p class="product-table__title_after">
                            Унергетична цінність за 100 г продукту:
                            <span>2046 кДж / 542 ккал</span>
                        </p>
                        <div class="product-tiket-wrap">
                            <div class="product-tiket-wrap__row">
                                <div class="product-tiket product-tiket__first">
                                    <span class="product-tiket__left">120 г</span>
                                    <span class="product-tiket__right">Компактна<br>упаковка</span>
                                </div>
                                <div class="product-tiket product-tiket__first">
                                    <span class="product-tiket__left">100 %</span>
                                    <span class="product-tiket__right">Відбібрне<br>м’ясо</span>
                                </div>
                            </div>
                            <div class="product-tiket product-tiket__third">
                                <span class="product-tiket__left">60 діб</span>
                                <span class="product-tiket__right">Може зберігатись<br>без холодильника</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section tehnology" data-anchor="fourthPage">
            <p class="paragrafh">
                Сторінка ТЕХНОЛОГІЯ
            </p>
        </div>
        <div class="section contacts" data-anchor="fifthPage">
            <p class="cpntact__content">
                Сторінка КОНТАКТИ
                <img src="app/img/scrollImg.png" class="skrollImg" alt="">
                <img src="app/img/scrollImg.png" class="skrollImg" alt="">
            </p>
        </div>
    </div>
</main>

<footer class="footer"></footer>


<!--JS connection-->
<script src="app/js/all.min.js"></script>

</body>
</html>