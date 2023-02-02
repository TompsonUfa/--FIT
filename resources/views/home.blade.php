@extends('layouts.app')

@section('title', 'Школа фитнеса в Уфе | фитнес клуб Ө-FIT')

@section('content')
    <div class="wrapper-header container-fluid">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <a href="" class="header__logo">
                            <img src="logo.png" alt="ШКОЛА ФИТНЕСА «Ө-FIT»">
                        </a>
                    </div>
                    <div class="col-10 header__content">
                        <div class="w-100 mb-2 d-flex justify-content-between align-items-center p-0">
                            <ul class="header__contact contact d-lg-flex">
                                <li class="contact__item">
                                    <a href="https://yandex.ru/maps/-/CCU7Q6b5dD" target="_blank">г. Уфа, ул.
                                        Коммунистическая, д. 67</a>
                                </li>
                                <li class="contact__item">
                                    <a href="tel:+79375810088">+7 (937) 581-00-88</a>
                                </li>
                            </ul>
                            <ul class="header__social social d-sm-flex">
                                <li class="social__item">
                                    <a href="https://instagram.com/o.fit.ufa?igshid=YmMyMTA2M2Y= " target="_blank"
                                        class="social__item">
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
                                    <a href="https://vk.com/o.fit_ufa" target="_blank" class="social__item">
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
                            </ul>
                            <div class="menu-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    id="Layer_1" x="0px" y="0px" viewBox="0 0 384 384"
                                    style="enable-background:new 0 0 384 384;" xml:space="preserve">
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
                        <div class="w-100 p-0">
                            <nav class="header__nav nav-btns">
                                <div class="nav-btns__item">
                                    <a href="#about" class="nav-btns__link">О школе фитнеса</a>
                                </div>
                                <div class="nav-btns__item">
                                    <a href="#directions" class="nav-btns__link">Направление</a>
                                </div>
                                <div class="nav-btns__item">
                                    <a href="#courses" class="nav-btns__link">Курсы</a>
                                </div>
                                <div class="nav-btns__item">
                                    <a href="#posters" class="nav-btns__link">Афиша</a>
                                </div>
                                <div class="nav-btns__item">
                                    <a href="#" class="nav-btns__link">трудоустройство</a>
                                </div>
                                <div class="nav-btns__item">
                                    <a href="#" class="nav-btns__link">5 причин учиться у нас</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <section class="section section__main main">
        <video loop="loop" autoplay muted class="main__video">
            <source src="/video/main.mp4" type="video/mp4">
        </video>
        <div class="main__content">
            <div class="container h-100">
                <h1 class="main__title">
                    СТАНЬ ЛУЧШИМ <br> ФИТНЕС-ИНСТРУКТОРОМ С «Ө-FIT»!
                </h1>
            </div>
        </div>
    </section>
    <section class="section section__about about" id="about">
        <div class="container section__content">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img src="/images/about.webp" class="about__img" alt="Школа фитнеса «Ө-FIT»">
                </div>
                <div class="col-12 col-lg-6 about__text">
                    <h2 class="about__title">КОРОТКО О ШКОЛЕ ФИТНЕСА</h2>
                    <p class="about__desc">
                        ОБУЧАЙСЯ У ЛУЧШИХ!
                        <br>
                        <br>
                        Школа Фитнеса «Ө-FIT» — это объединение профессионалов в области фитнес индустрии, спорта и
                        здорового образа жизни.
                        <br>
                        <br>
                        Мы приглашаем пройти обучение и получить новую профессию у лучших специалистов фитнес - индустрии.
                        Фитнес-школа «Ө-FIT» работает как с опытными тренерами и инструкторами, так и с начинающими
                        специалистами, предлагает гибкие системы оплаты обучения и разные программы.
                        <br>
                        <br>
                        🔹 Обучение проходит на базе Башкирского института физической культы;
                        <br>
                        <br>
                        🔹 Практика проводится на базе СК «Динамо»
                        <br>
                        <br>
                        🔹 По окончанию курсов выдается диплом государственного образца;
                        <br>
                        <br>
                        🔹 Содействуем в трудоустройстве
                    </p>
                    <div class="btn btn-primary btn-lg about__btn">Получить консультацию</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section__directions directions" id="directions">
        <div class="container-fluid section__header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title">Набор в школу инструкторов фитнес-клуба</h2>
                    </div>
                    <div class="col-6">
                        <p class="section__desc">
                            Успейте записаться на 1 поток 2023 года и сможете <b>бесплатно тренироваться</b> в фитнес-клубе
                            Orange
                            Fitness <b> на время обучения</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section__content">
            <div class="row">
                <div class="col-12 col-lg-6 directions__text">
                    <p class="directions__desc">
                        В школе «Ө-FIT» для тренеров и инструкторов имеются следующие курсы обучения, с присвоением
                        квалификации и выдачей диплома государственного образца:
                        <br>
                        <br>
                        ✔️ «ИНСТРУКТОР ГРУППОВЫХ ПРОГРАММ»: аэробика, силовые направления, стретчинг, МФР, пилатес и др.
                        <br>
                        <br>
                        ✔️ «ИНСТРУКТОР ТРЕНАЖЕРНОГО ЗАЛА»: силовая подготовка, развитие гибкости, выносливости,
                        функциональный тренинг
                        <br>
                        <br>
                        ✔️ «ИНСТРУКТОР ДЕТСКОГО ФИТНЕСА» -Занятия, направленные на коррекцию и профилактику плоскостопия,
                        сколиоза, формирование осанки, развитие физических качеств через подвижные игры, укрепление ОДА,
                        профилактику сколиоза, подвижности суставов, профилактики травматизма, рациональное развитие всех
                        физических качеств, координации, гибкости, мышечной силы, ловкости
                        <br>
                        <br>
                        <strong>ТАКЖЕ</strong>, специализированные курсы и семинары с выдачей сертификата о прохождении
                        обучения:
                        пилатес,
                        йога, аквааэробика, мастер-классы по продажам и продвижению своих услуг, психология общения с
                        клиентами и многое другое.

                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="/images/directions.webp" alt="Направления" class="directions__img">
                </div>
            </div>
        </div>
    </section>
    <div class="container discounts">
        <div class="row">
            <div class="col-12 ">
                <h3 class="discounts__title">Скидки на группу из 5 человек - 10% от стоимости обучения</h3>
                <div class="discounts__line"></div>
                <p class="discounts__desc">ЛУЧШИМ БУДЕТ ПРЕДЛОЖЕНО СОТРУДНИЧЕСТВО!</p>
                <div class="btn btn-primary btn-lg discounts__btn">Получить скидку</div>
            </div>
        </div>
    </div>
    <section class="section section__courses courses" id="courses">
        <div class="container-fluid section__header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title">Мы предлагаем качественное обучение
                            по следующим курсам</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section__content">
            <div class="row">
                <div class="col-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item course">
                            <h2 class="accordion-header" id="flush-heading-1">
                                <button class="accordion-button collapsed course__title" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse-1" aria-expanded="false"
                                    aria-controls="flush-collapse-1">
                                    Детский фитнес-тренер
                                </button>
                            </h2>
                            <div id="flush-collapse-1" class="accordion-collapse collapse "
                                aria-labelledby="flush-heading-1" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body course__content">
                                    <p class="course__desc">
                                        Курсы предназначены для учителей физической культуры, работников детских садов.
                                        <br>
                                        <br>
                                        <strong>Срок обучения:</strong> 3 месяца / 110 час (теория/практика).
                                        <br>
                                        <br>
                                        <strong>В курс обучения входят</strong> различные фитнес - форматы для всех
                                        возрастных
                                        групп:
                                        <br>
                                        <br>
                                    </p>
                                    <ul class="course__list">
                                        <li>Фитнес программы для детей от 1 до 3 лет. Их особенность в том, что занятия
                                            проводятся
                                            совместно
                                            с родителями (развитие основных двигательных навыков, профилактика плоскостопия,
                                            силовые
                                            упражнения с мамой);</li>
                                        <li> Фитнес программы для детей от 3 до 6 лет (профилактика плоскостопия, игровые
                                            уроки,
                                            гимнастика,
                                            танцы);</li>
                                        <li> Фитнес программы для детей от 7 до 10 лет (профилактика и укрепление мышц,
                                            поддерживающих
                                            правильную осанку, силовые программы, игровой урок с мячами, танцы (хореография,
                                            современные
                                            стили танцев, аэробика);</li>
                                        <li>Фитнес программы для детей от 11 до 14 лет (силовые программы в зале и в
                                            тренажерном
                                            зале,
                                            профилактические уроки на укрепление осанки, современные стили танцев,
                                            танцевальная
                                            аэробика).</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item course">
                            <h2 class="accordion-header" id="flush-heading-2">
                                <button class="accordion-button collapsed course__title" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse-2" aria-expanded="false"
                                    aria-controls="flush-collapse-2">
                                    Детский фитнес-тренер
                                </button>
                            </h2>
                            <div id="flush-collapse-2" class="accordion-collapse collapse "
                                aria-labelledby="flush-heading-2" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body course__content">
                                    <p class="course__desc">
                                        Курсы предназначены для учителей физической культуры, работников детских садов.
                                        <br>
                                        <br>
                                        <strong>Срок обучения:</strong> 3 месяца / 110 час (теория/практика).
                                        <br>
                                        <br>
                                        <strong>В курс обучения входят</strong> различные фитнес - форматы для всех
                                        возрастных
                                        групп:
                                        <br>
                                        <br>
                                    </p>
                                    <ul class="course__list">
                                        <li>Фитнес программы для детей от 1 до 3 лет. Их особенность в том, что занятия
                                            проводятся
                                            совместно
                                            с родителями (развитие основных двигательных навыков, профилактика плоскостопия,
                                            силовые
                                            упражнения с мамой);</li>
                                        <li> Фитнес программы для детей от 3 до 6 лет (профилактика плоскостопия, игровые
                                            уроки,
                                            гимнастика,
                                            танцы);</li>
                                        <li> Фитнес программы для детей от 7 до 10 лет (профилактика и укрепление мышц,
                                            поддерживающих
                                            правильную осанку, силовые программы, игровой урок с мячами, танцы (хореография,
                                            современные
                                            стили танцев, аэробика);</li>
                                        <li>Фитнес программы для детей от 11 до 14 лет (силовые программы в зале и в
                                            тренажерном
                                            зале,
                                            профилактические уроки на укрепление осанки, современные стили танцев,
                                            танцевальная
                                            аэробика).</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item course">
                            <h2 class="accordion-header" id="flush-heading-3">
                                <button class="accordion-button collapsed course__title" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse-3" aria-expanded="false"
                                    aria-controls="flush-collapse-3">
                                    Инструктор фитнес-йоги
                                </button>
                            </h2>
                            <div id="flush-collapse-3" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading-3" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body course__content">
                                    <p class="course__desc">
                                        Для инструкторов, которые имеют опыт работы в Фитнесе!
                                        <br>
                                        <br>
                                        Продолжительность: 3 месяца / 110 часов (теория/практика)
                                    </p>
                                    <br>
                                    <ul class="course__list">
                                        <li>Функциональная анатомия и физиология (углубленный);</li>
                                        <li> Визуальная диагностика;</li>
                                        <li> Особенности занятий фитнесом с клиентом разных возрастных групп;</li>
                                        <li>Особенности занятий с женщинами;</li>
                                        <li>Тренировка клиентов с проблемами нижних конечностей (стопы, колени, ТБС);</li>
                                        <li>Особенности тренировки клиентов с нарушениями осанки;</li>
                                        <li>Показания и противопоказания;</li>
                                        <li>МФ Цепи;</li>
                                        <li>МФ Релиз;</li>
                                        <li>Стрейч (ПИР) в ПТ;</li>
                                        <li>Продажи.</li>
                                    </ul>
                                    <br>
                                    <p class="course__desc">
                                        Методисты курса - Инструкторы категории Премиум.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item course">
                            <h2 class="accordion-header" id="flush-heading-1">
                                <button class="accordion-button collapsed course__title" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse-1" aria-expanded="false"
                                    aria-controls="flush-collapse-1">
                                    Детский фитнес-тренер
                                </button>
                            </h2>
                            <div id="flush-collapse-1" class="accordion-collapse collapse "
                                aria-labelledby="flush-heading-1" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body course__content">
                                    <p class="course__desc">
                                        Курсы предназначены для учителей физической культуры, работников детских садов.
                                        <br>
                                        <br>
                                        <strong>Срок обучения:</strong> 3 месяца / 110 час (теория/практика).
                                        <br>
                                        <br>
                                        <strong>В курс обучения входят</strong> различные фитнес - форматы для всех
                                        возрастных
                                        групп:
                                        <br>
                                        <br>
                                    </p>
                                    <ul class="course__list">
                                        <li>Фитнес программы для детей от 1 до 3 лет. Их особенность в том, что занятия
                                            проводятся
                                            совместно
                                            с родителями (развитие основных двигательных навыков, профилактика плоскостопия,
                                            силовые
                                            упражнения с мамой);</li>
                                        <li> Фитнес программы для детей от 3 до 6 лет (профилактика плоскостопия, игровые
                                            уроки,
                                            гимнастика,
                                            танцы);</li>
                                        <li> Фитнес программы для детей от 7 до 10 лет (профилактика и укрепление мышц,
                                            поддерживающих
                                            правильную осанку, силовые программы, игровой урок с мячами, танцы (хореография,
                                            современные
                                            стили танцев, аэробика);</li>
                                        <li>Фитнес программы для детей от 11 до 14 лет (силовые программы в зале и в
                                            тренажерном
                                            зале,
                                            профилактические уроки на укрепление осанки, современные стили танцев,
                                            танцевальная
                                            аэробика).</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item course">
                            <h2 class="accordion-header" id="flush-heading-2">
                                <button class="accordion-button collapsed course__title" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse-2" aria-expanded="false"
                                    aria-controls="flush-collapse-2">
                                    Детский фитнес-тренер
                                </button>
                            </h2>
                            <div id="flush-collapse-2" class="accordion-collapse collapse "
                                aria-labelledby="flush-heading-2" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body course__content">
                                    <p class="course__desc">
                                        Курсы предназначены для учителей физической культуры, работников детских садов.
                                        <br>
                                        <br>
                                        <strong>Срок обучения:</strong> 3 месяца / 110 час (теория/практика).
                                        <br>
                                        <br>
                                        <strong>В курс обучения входят</strong> различные фитнес - форматы для всех
                                        возрастных
                                        групп:
                                        <br>
                                        <br>
                                    </p>
                                    <ul class="course__list">
                                        <li>Фитнес программы для детей от 1 до 3 лет. Их особенность в том, что занятия
                                            проводятся
                                            совместно
                                            с родителями (развитие основных двигательных навыков, профилактика плоскостопия,
                                            силовые
                                            упражнения с мамой);</li>
                                        <li> Фитнес программы для детей от 3 до 6 лет (профилактика плоскостопия, игровые
                                            уроки,
                                            гимнастика,
                                            танцы);</li>
                                        <li> Фитнес программы для детей от 7 до 10 лет (профилактика и укрепление мышц,
                                            поддерживающих
                                            правильную осанку, силовые программы, игровой урок с мячами, танцы (хореография,
                                            современные
                                            стили танцев, аэробика);</li>
                                        <li>Фитнес программы для детей от 11 до 14 лет (силовые программы в зале и в
                                            тренажерном
                                            зале,
                                            профилактические уроки на укрепление осанки, современные стили танцев,
                                            танцевальная
                                            аэробика).</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item course">
                            <h2 class="accordion-header" id="flush-heading-3">
                                <button class="accordion-button collapsed course__title" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse-3" aria-expanded="false"
                                    aria-controls="flush-collapse-3">
                                    Инструктор фитнес-йоги
                                </button>
                            </h2>
                            <div id="flush-collapse-3" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading-3" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body course__content">
                                    <p class="course__desc">
                                        Для инструкторов, которые имеют опыт работы в Фитнесе!
                                        <br>
                                        <br>
                                        Продолжительность: 3 месяца / 110 часов (теория/практика)
                                    </p>
                                    <br>
                                    <ul class="course__list">
                                        <li>Функциональная анатомия и физиология (углубленный);</li>
                                        <li> Визуальная диагностика;</li>
                                        <li> Особенности занятий фитнесом с клиентом разных возрастных групп;</li>
                                        <li>Особенности занятий с женщинами;</li>
                                        <li>Тренировка клиентов с проблемами нижних конечностей (стопы, колени, ТБС);</li>
                                        <li>Особенности тренировки клиентов с нарушениями осанки;</li>
                                        <li>Показания и противопоказания;</li>
                                        <li>МФ Цепи;</li>
                                        <li>МФ Релиз;</li>
                                        <li>Стрейч (ПИР) в ПТ;</li>
                                        <li>Продажи.</li>
                                    </ul>
                                    <br>
                                    <p class="course__desc">
                                        Методисты курса - Инструкторы категории Премиум.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section__posters posters" id="posters">
        <div class="container-fluid section__header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title">Афиша ближайших мероприятий</h2>
                    </div>
                    <div class="col-6">
                        <p class="section__desc">
                            Успейте записаться: <a href="tel:+79179030977">+7 917 903 0977</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section__content">
            <div class="row">
                <div class="col-12 col-lg-6 px-2">
                    <img class="posters__img mb-4" src="/images/posters/1.png" alt="Постер">
                    <img class="posters__img mb-4" src="/images/posters/2.png" alt="Постер">
                    <img class="posters__img mb-4" src="/images/posters/3.png" alt="Постер">
                </div>
                <div class="col-12 col-lg-6 mt-lg-5">
                    <img class="posters__img mb-4" src="/images/posters/4.png" alt="Постер">
                    <img class="posters__img mb-4" src="/images/posters/5.png" alt="Постер">
                    <img class="posters__img mb-0" src="/images/posters/6.png" alt="Постер">
                </div>
            </div>
        </div>
    </section>
    <section class="section section__reviews reviews" id="reviews">
        <div class="container-fluid section__header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title">Отзывы о школе фитнеса</h2>
                    </div>
                    <div class="col-6">
                        <p class="section__desc">
                            Еще больше отзывов Вы можете найти в наших социальных сетях
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section__content">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item  active">
                                <img src="/reviews/1.webp" class="d-block w-100 reviews__item" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/reviews/2.webp" class="d-block w-100 reviews__item" alt="...">
                            </div>
                            {{-- <div class="carousel-item ">
                                <video loop="loop" autoplay loop class="d-block w-100 reviews__item"
                                    onloadstart="this.volume=0.3">
                                    <source src="/video/main.mp4" type="video/mp4">
                                </video>
                            </div> --}}
                        </div>
                        <button class="carousel-control-prev carousel-control" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Предыдущий</span>
                        </button>
                        <button class="carousel-control-next carousel-control" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Следующий</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section__graduates graduates" id="graduates">
        <div class="container-fluid section__header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title">Фотографии с выпускниками школы фитнеса</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid section__content">
            <div id="carouselExampleControlsTwo" class="carousel slide" data-bs-ride="carousel">
                <div class="container">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-12 col-md-6"><img src="/images/graduates/0.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                                <div class="col-12 col-md-6"><img src="/images/graduates/1.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6"><img src="/images/graduates/2.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                                <div class="col-md-6"><img src="/images/graduates/3.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6"><img src="/images/graduates/4.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                                <div class="col-md-6"><img src="/images/graduates/5.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6"><img src="/images/graduates/6.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                                <div class="col-md-6"><img src="/images/graduates/7.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6"><img src="/images/graduates/8.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                                <div class="col-md-6"><img src="/images/graduates/9.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6"><img src="/images/graduates/10.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                                <div class="col-md-6"><img src="/images/graduates/11.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6"><img src="/images/graduates/12.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                                <div class="col-md-6"><img src="/images/graduates/13.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6"><img src="/images/graduates/14.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                                <div class="col-md-6"><img src="/images/graduates/0.jpg"
                                        class="d-block w-100 reviews__item" alt="..."></div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev carousel-control" type="button"
                    data-bs-target="#carouselExampleControlsTwo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next carousel-control" type="button"
                    data-bs-target="#carouselExampleControlsTwo" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
            </div>
        </div>
    </section>
@endsection
