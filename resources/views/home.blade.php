@extends('layouts.app')

@section('title', 'ШКОЛА ФИТНЕСА «Ө-FIT»')

@section('content')
    <div class="wrapper-header container-fluid">
        <header class="header">
            <div class="container header__content p-0">
                <a href="#" class="header__logo">
                    <img src="logo.webp" alt="ШКОЛА ФИТНЕСА «Ө-FIT»">
                </a>
                <ul class="header__contact contact d-lg-flex">
                    <li class="contact__item">
                        <a href="https://yandex.ru/maps/-/CCU7Q6b5dD" target="_blank">г. Уфа, ул Коммунистическая, 67</a>
                    </li>
                    <li class="contact__item">
                        <a href="tel:+79174800440">+7 (917) 480-04-40</a>
                    </li>
                </ul>
                <ul class="header__social social d-sm-flex">
                    <li class="social__item">
                        <a href="#" target="_blank" class="social__item">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                id="Layer_1" x="0px" y="0px" viewBox="0 0 50 50"
                                style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #FFFFFF;
                                    }
                                </style>
                                <path class="st0"
                                    d="M16,3C8.8,3,3,8.8,3,16v18c0,7.2,5.8,13,13,13h18c7.2,0,13-5.8,13-13V16c0-7.2-5.8-13-13-13H16z M16,5h18 c6.1,0,11,4.9,11,11v18c0,6.1-4.9,11-11,11H16C9.9,45,5,40.1,5,34V16C5,9.9,9.9,5,16,5z M37,11c-1.1,0-2,0.9-2,2s0.9,2,2,2 s2-0.9,2-2S38.1,11,37,11z M25,14c-6.1,0-11,4.9-11,11s4.9,11,11,11s11-4.9,11-11S31.1,14,25,14z M25,16c5,0,9,4,9,9s-4,9-9,9 s-9-4-9-9S20,16,25,16z" />
                            </svg>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="#" target="_blank" class="social__item">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                id="Layer_1" x="0px" y="0px" viewBox="0 0 50 50"
                                style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #FFFFFF;
                                    }
                                </style>
                                <path class="st0"
                                    d="M8.6,4.2c-2.7,0-5,2.3-5,5v32c0,2.7,2.3,5,5,5h32c2.7,0,5-2.3,5-5v-32c0-2.7-2.3-5-5-5H8.6z M8.6,6.2h32 c1.7,0,3,1.3,3,3v32c0,1.7-1.3,3-3,3h-32c-1.7,0-3-1.3-3-3v-32C5.6,7.5,7,6.2,8.6,6.2z M23,16.2c-1.1,0-2,0.1-2.8,0.5c0,0,0,0,0,0 c-0.4,0.2-0.7,0.5-0.9,0.8C19.1,17.6,19,17.7,19,18c0,0.2,0,0.5,0.1,0.8c0.2,0.3,0.5,0.5,0.8,0.5c0.2,0,0.5,0.2,0.6,0.2c0,0,0,0,0,0 c0,0,0.1,0.4,0.2,0.7c0,0.3,0,0.6,0,0.6c0,0,0,0.1,0,0.1c0,0,0.1,0.9,0,1.8c0,0.4-0.1,0.7-0.1,1c-0.4-0.4-0.9-1.1-1.6-2.4 c-0.8-1.5-1.5-2.8-1.5-2.8c0-0.1-0.2-0.5-0.6-0.8c-0.5-0.4-1-0.4-1-0.4c-0.1,0-0.1,0-0.2,0l-3.9,0c0,0-0.2,0-0.5,0s-0.7,0.1-1.1,0.6 c0,0,0,0,0,0c-0.4,0.4-0.3,0.9-0.3,1.2c0,0.3,0.1,0.5,0.1,0.5c0,0,0,0,0,0c0,0,3.2,6.8,6.9,10.8c2.6,2.9,5.4,2.9,7.6,2.9H26 c0.4,0,0.8,0,1.2-0.3c0.4-0.2,0.7-0.9,0.7-1.3c0-0.4,0.1-0.8,0.1-1c0.1-0.1,0.1-0.2,0.2-0.2c0,0,0,0,0,0c0.2,0.1,0.4,0.4,0.7,0.7 c0.6,0.7,1.3,1.6,2.2,2.2c0.7,0.4,1.3,0.6,1.7,0.7c0.3,0,0.5,0,0.7,0l3.7,0c0,0,0,0,0.1,0c0,0,0.6,0,1.3-0.4 c0.3-0.2,0.7-0.6,0.9-1.1s0-1.1-0.3-1.7c0,0,0,0,0,0c0.1,0.1,0-0.1-0.2-0.3c-0.1-0.2-0.3-0.4-0.5-0.7c-0.4-0.6-1.2-1.4-2.3-2.5 c0,0,0,0,0,0c-0.6-0.5-1-0.9-1.1-1.1c-0.2-0.2-0.1-0.1-0.1-0.2c0-0.1,0.7-1.1,2.2-3c0.9-1.2,1.5-2,1.9-2.8s0.7-1.4,0.5-2.1 c0,0,0,0,0,0c-0.1-0.3-0.3-0.6-0.6-0.8c-0.3-0.2-0.5-0.2-0.7-0.3c-0.4-0.1-0.8-0.1-1.1-0.1c-0.7,0-3.9,0-4.2,0 c-0.3,0-0.8,0.1-1.1,0.3c-0.6,0.3-0.7,0.8-0.7,0.8c0,0,0,0,0,0.1c0,0-0.7,1.5-1.5,2.9c-0.9,1.5-1.5,2.2-1.9,2.5c0-0.1,0,0,0-0.1 c0-0.4,0-1,0-1.5c0-1.5,0.1-2.5,0.1-3.5c0-0.5-0.1-0.9-0.4-1.4s-0.8-0.7-1.3-0.8c-0.3-0.1-0.6-0.3-1.9-0.3c0,0,0,0,0,0 C23.8,16.2,23.4,16.2,23,16.2z M24.1,18.2c1.1,0,0.8,0.1,1.4,0.2c0.2,0,0.1,0,0.1,0c0,0,0.1,0.1,0.1,0.4c0,0.6-0.1,1.7-0.1,3.3 c0,0.4-0.1,1.1,0,1.7c0.1,0.6,0.2,1.5,1,2c0.4,0.2,0.8,0.3,1.2,0.2c0.4-0.1,0.7-0.3,1-0.6c0.7-0.6,1.5-1.5,2.4-3.1 c0.9-1.5,1.6-3,1.6-3.1c0,0,0,0,0,0c0,0,0,0,0,0c0.4,0,3.5,0,4.2,0c0.2,0,0.2,0,0.3,0c0,0.1,0,0-0.1,0.3c-0.3,0.6-0.9,1.4-1.7,2.5 c-1.4,1.9-2.3,2.6-2.5,3.8c-0.1,0.6,0.1,1.3,0.5,1.8s0.8,0.9,1.4,1.4c1.1,1,1.7,1.7,2.1,2.2c0.2,0.2,0.3,0.4,0.4,0.5 c0.1,0.1,0.1,0.1,0.1,0.3c0.1,0.1,0,0,0,0.1c-0.1,0-0.3,0.1-0.3,0.1l-3.7,0c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.2,0 c-0.2,0-0.5-0.1-0.9-0.4c-0.5-0.3-1.2-1.2-1.8-1.9c-0.3-0.4-0.7-0.7-1.1-1c-0.4-0.3-1-0.6-1.7-0.4c-0.7,0.2-1.2,0.8-1.5,1.3 C26,30.3,26,30.7,26,31.2c0,0,0,0,0,0h-1.7c-2.3,0-3.9,0.2-6.1-2.3c-3-3.3-5.8-8.8-6.2-9.7l3.5,0c0.1,0,0.2,0.1,0.2,0.1c0,0,0,0,0,0 c-0.1-0.1,0,0,0,0c0,0,0,0.1,0,0.1c0,0,0.7,1.3,1.6,2.8c0.9,1.5,1.5,2.4,2.1,3c0.3,0.3,0.6,0.5,1,0.7s0.9,0.1,1.3-0.1 c0.7-0.4,0.8-1,0.9-1.5c0.1-0.5,0.2-1,0.2-1.6c0-1,0-1.9,0-1.9c0,0,0-0.4-0.1-0.8c-0.1-0.5-0.1-1.1-0.6-1.6l0,0c0,0,0,0,0,0 C22.6,18.3,23.1,18.2,24.1,18.2z M32.9,19.2L32.9,19.2C32.9,19.2,32.9,19.2,32.9,19.2C32.9,19.2,32.9,19.2,32.9,19.2z" />
                            </svg>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="#" target="_blank" class="social__item">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                id="Layer_1" x="0px" y="0px" viewBox="0 0 50 50"
                                style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #FFFFFF;
                                    }
                                </style>
                                <path class="st0"
                                    d="M9,4C6.3,4,4,6.3,4,9v32c0,2.7,2.3,5,5,5h32c2.7,0,5-2.3,5-5V9c0-2.7-2.3-5-5-5H9z M9,6h32c1.7,0,3,1.3,3,3v32 c0,1.7-1.3,3-3,3H9c-1.7,0-3-1.3-3-3V9C6,7.3,7.3,6,9,6z M15,8c0.4,1,2.4,5.4,3,7v4h2v-4l3-7h-2.4L19,12l-1.6-4H15z M25,11 c-1,0-1.8,0.3-2.3,0.9c-0.4,0.5-0.7,1.3-0.7,2.3l0,1.4c0,1,0.2,1.8,0.6,2.3c0.6,0.7,1.5,1,2.4,1s1.8-0.4,2.4-1 c0.4-0.5,0.6-1.2,0.6-2.3v-1.5c0-1-0.2-1.8-0.7-2.3C26.8,11.3,25.9,11,25,11z M29,11v5.8c0,0.7,0.1,1.1,0.2,1.4 c0.2,0.5,0.7,0.7,1.4,0.7c0.9,0,1.6-0.6,2.4-1.3V19h2v-8h-2v5.4c-0.5,0.5-1,1-1.4,1c-0.3,0-0.6-0.1-0.6-0.4v-6H29z M25,12.6 c0.6,0,1,0.5,1,1v2.8c0,0.6-0.4,1-1,1s-1-0.5-1-1v-2.8C24,13.1,24.4,12.6,25,12.6z M25,22c0,0-6.7,0-11.2,0.3 c-0.6,0.1-2,0.1-3.2,1.3c-1,0.9-1.3,3.1-1.3,3.1S9,28.3,9,30.8v2.4c0,2.5,0.3,4.1,0.3,4.1s0.3,2.2,1.3,3.1c1.2,1.2,2.8,1.2,3.5,1.3 C16.7,41.9,25,42,25,42s6.7,0,11.2-0.3c0.6-0.1,2-0.1,3.2-1.3c1-0.9,1.3-3.1,1.3-3.1s0.3-1.5,0.3-4.1v-2.4c0-2.5-0.3-4.1-0.3-4.1 s-0.3-2.2-1.3-3.1c-1.2-1.3-2.6-1.3-3.2-1.3C31.7,22,25,22,25,22L25,22z M12,26h6v2h-2v10h-2V28h-2V26z M25,26h2v4.4 c0.8-0.9,1.1-1.4,2.1-1.4c0.8,0,1.4,0.4,1.6,1.2c0.1,0.4,0.3,1.2,0.3,2.2v2.8c0,0.9-0.1,1.3-0.2,1.7c-0.3,0.8-0.9,1.2-1.7,1.2 c-0.7,0-1.5-0.5-2.1-1.3V38h-2V26z M18,29h2v6.9c0,0.3,0.3,0.4,0.5,0.4c0.4,0,1-0.4,1.5-1V29h2v9h-2v-1.4c-0.8,0.9-1.7,1.4-2.5,1.4 c-0.6,0-1.1-0.3-1.3-0.8c-0.1-0.3-0.2-0.8-0.2-1.5V29z M35,29c1,0,1.8,0.3,2.3,0.9C37.8,30.4,38,31,38,32v2h-4v1.8 c0,0.5,0.5,0.8,1,0.8s1-0.4,1-0.8V35h2c0,0.5-0.1,0.9-0.1,1.1c-0.1,0.3-0.2,0.7-0.5,1c-0.5,0.6-1.4,0.9-2.4,0.9 c-1,0-1.8-0.3-2.4-0.9c-0.4-0.4-0.7-1.1-0.7-2V32c0-0.9,0.2-1.7,0.7-2.1C33.2,29.3,34,29,35,29z M35,30.4c-0.5,0-1,0.4-1,0.8v1.3h2 v-1.3C36,30.8,35.5,30.4,35,30.4z M28.2,30.8c-0.2,0-0.4,0.1-0.6,0.2c-0.1,0.1-0.2,0.1-0.3,0.2s-0.2,0.2-0.3,0.2v4.4 c0.1,0.1,0.2,0.2,0.3,0.2c0.3,0.2,0.7,0.3,0.9,0.3c0.2,0,0.4,0,0.5-0.2c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0.1-0.3,0.1-0.4 c0-0.2,0-0.4,0-0.7v-2.7c0-0.3,0-0.5,0-0.7c-0.1-0.4-0.2-0.6-0.4-0.7C28.5,30.8,28.4,30.8,28.2,30.8z" />
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="menu-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1"
                        x="0px" y="0px" viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;"
                        xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <path class="st0"
                            d="M368,207.7H16c-8.8,0-16-7.2-16-16s7.2-16,16-16h352c8.8,0,16,7.2,16,16S376.8,207.7,368,207.7z" />
                        <path class="st0"
                            d="M368,85H16C7.2,85,0,77.8,0,69s7.2-16,16-16h352c8.8,0,16,7.2,16,16S376.8,85,368,85z" />
                        <path class="st0"
                            d="M368,330.3H16c-8.8,0-16-7.2-16-16s7.2-16,16-16h352c8.8,0,16,7.2,16,16S376.8,330.3,368,330.3z" />
                    </svg>
                </div>
            </div>
        </header>
    </div>
    <div class="section section__main main">
        <video loop="loop" autoplay muted class="main__video">
            <source src="/video/main.mp4" type="video/mp4">
        </video>
        <div class="main__content">
            <div class="container">
                <h1 class="main__title">
                    СТАНЬ ЛУЧШИМ ФИТНЕС-ИНСТРУКТОРОМ С «Ө-FIT»!
                </h1>
                <nav class="main__nav nav-btns">
                    <div class="nav-btns__item">
                        <a href="#about" class="nav-btns__link">О школе фитнеса</a>
                    </div>
                    <div class="nav-btns__item">
                        <a href="#" class="nav-btns__link">Набор в школу фитнеса</a>
                    </div>
                    <div class="nav-btns__item">
                        <a href="#" class="nav-btns__link">Наши курсы</a>
                    </div>
                    <div class="nav-btns__item">
                        <a href="#" class="nav-btns__link">Время занятий и стоимость</a>
                    </div>
                    <div class="nav-btns__item">
                        <a href="#" class="nav-btns__link">Афиша ближайших мероприятий</a>
                    </div>
                    <div class="nav-btns__item">
                        <a href="#" class="nav-btns__link">Отзывы о школе фитнеса</a>
                    </div>
                    <div class="nav-btns__item">
                        <a href="#" class="nav-btns__link">Фотографии с выпускниками</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
