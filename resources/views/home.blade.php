@extends('layouts.app')

@section('title', 'Школа фитнеса в Уфе | фитнес клуб Ө-FIT')

@section('content')
    <div class="wrapper-header container-fluid">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-sm-2 d-flex justify-content-center align-items-center">
                        <a href="/" class="header__logo">
                            <img src="logo.png" alt="ШКОЛА ФИТНЕСА «Ө-FIT»">
                        </a>
                    </div>
                    <div class="col-8 col-sm-10 header__content">
                        <div
                            class="w-100 mb-lg-2 d-flex justify-content-end justify-content-lg-between align-items-center p-0">
                            <ul class="header__contact contact d-lg-flex">
                                <li class="contact__item">
                                    <a href="https://yandex.ru/maps/-/CCU7Q6b5dD" target="_blank">г. Уфа, ул.
                                        Коммунистическая, д. 67</a>
                                </li>
                                <li class="contact__item">
                                    <a href="tel:+79375810088">+7 (937) 581-00-88</a>
                                </li>
                            </ul>
                            <ul class="header__social social px-sm-5 d-sm-flex">
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
                        <div class="w-100 p-0 d-none d-lg-block ">
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
                                    <a href="#employment" class="nav-btns__link">трудоустройство</a>
                                </div>
                                <div class="nav-btns__item">
                                    <a href="#reasons" class="nav-btns__link">5 причин учиться у нас</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <section class="section section__main main">
        <video loop="loop" autoplay muted class="main__video" poster="/images/about.jpg">
            <source src="/video/main.mp4" type="video/mp4">
        </video>
        <div class="main__content">
            <div class="container h-100">
                <div class="row">
                    <div class="col-12">
                        <h1 class="main__title">
                            <span> СТАНЬ ЛУЧШИМ </span>ФИТНЕС-ИНСТРУКТОРОМ С «Ө-FIT»!
                        </h1>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section section__info info" id="info">
        <div class="container section__content">
            <div class="row">
                <div class="col-12 col-lg-6 info__text">
                    <h2 class="title info__title">ШКОЛА ФИТНЕСА<br> «Ө-FIT»</h2>
                    <p class="desc info__desc">
                        Обучаем фитнес-инструкторов с нуля.
                        Диплом государственного образца.
                        Курсы. Мастер классы. Семинары, Воркшопы. Аттестация.
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="/images/info.jpg" alt="ШКОЛА ФИТНЕСА «O-FIT»" class="info__img">
                </div>
            </div>
        </div>
    </section>
    <section class="section section__about about" id="about">
        <div class="container section__content">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img src="/images/about.jpg" class="about__img" alt="Коротко о школе фитнеса">
                </div>
                <div class="col-12 col-lg-6 about__text">
                    <h2 class="title about__title">КОРОТКО О ШКОЛЕ ФИТНЕСА</h2>
                    <p class="desc about__desc">
                        <strong>ОБУЧАЙСЯ У ЛУЧШИХ!</strong>
                        <br>
                        <br>
                        <strong>Школа Фитнеса «Ө-FIT»</strong> — это объединение профессионалов в области фитнес индустрии,
                        спорта и
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
                    <div class="btn btn-primary btn-lg about__btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Получить консультацию</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section__directions directions" id="directions">
        <div class="container section__content">
            <div class="row">
                <div class="col-12 col-lg-6 directions__text">
                    <h2 class="title directions__title">
                        НАПРАВЛЕНИЯ:
                    </h2>
                    <p class="desc directions__desc">
                        В школе «Ө-FIT» для тренеров и инструкторов имеются следующие курсы обучения, с присвоением
                        квалификации и выдачей диплома государственного образца:
                        <br>
                        <br>
                        ✔️ <strong>«ИНСТРУКТОР ГРУППОВЫХ ПРОГРАММ»</strong> аэробика, силовые направления, стретчинг, МФР,
                        пилатес и др.
                        <br>
                        <br>
                        ✔️ <strong>«ИНСТРУКТОР ТРЕНАЖЕРНОГО ЗАЛА»</strong> силовая подготовка, развитие гибкости,
                        выносливости,
                        функциональный тренинг
                        <br>
                        <br>
                        ✔️ <strong>«ИНСТРУКТОР ДЕТСКОГО ФИТНЕСА»</strong> занятия, направленные на коррекцию и профилактику
                        плоскостопия,
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
                    <img src="/images/directions.jpg" alt="Направления" class="directions__img">
                </div>
            </div>
        </div>
    </section>
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
                                    ИНСТРУКТОР ТРЕНАЖЕРНОГО ЗАЛА
                                </button>
                            </h2>
                            <div id="flush-collapse-1" class="accordion-collapse collapse "
                                aria-labelledby="flush-heading-1" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body course__content">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <p class="course__desc">
                                                СТАРТ КУРСА 18 ФЕВРАЛЯ. ОТКРЫТ НАБОР!<br>
                                                🔹 По окончанию курсов выдается диплом государственного образца!
                                                <br>
                                                <br>
                                                <strong>ПРОГРАММА КУРСА:</strong>
                                                <br>
                                                🔸 Теоретический блок:
                                                <br>
                                            </p>
                                            <ul class="course__list">
                                                <li>Анатомия</li>
                                                <li>Физиология</li>
                                                <li>Биохимия</li>
                                                <li>Контроль здоровья клиентов</li>
                                                <li>Тренинг по продажам услуг</li>
                                            </ul>
                                            <br>
                                            <p class="course__desc">
                                                🔸 Практический блок:
                                            </p>
                                            <ul class="course__list">
                                                <li>Теория и методика персонального тренинга</li>
                                                <li>Силовая подготовка</li>
                                                <li>Развитие гибкости</li>
                                                <li>Тренировки на выносливость</li>
                                                <li>Функциональный тренинг</li>
                                                <li>Планирование тренировочного процесса клиента</li>
                                                <li>Проведение стартовых тренировок</li>
                                            </ul>
                                            <br>

                                            <p class="course__desc">
                                                Кому будет полезен данный курс?<br>
                                                - начинающим тренерам<br>
                                                - практикующим тренерам для расширения профессионального профиля<br>
                                                - любителям фитнеса для самостоятельных тренировок<br>
                                                <br>
                                                🔹 <strong>Период обучения:</strong> старт курса 18 февраля 2023г., 10
                                                недель<br>
                                                🔹 <strong>Преподаватели:</strong><br>
                                                🔹 Обучение проходит на базе Башкирского института физической культуры;<br>
                                                🔹 Практика проводится на базе СК «Динамо»<br>
                                                📞 <strong>Подробности и запись</strong> по тел.: +7 (937) 581-00-88
                                            </p>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <img src="/images/posters/3.jpg" alt="ИНСТРУКТОР ТРЕНАЖЕРНОГО ЗАЛА"
                                                class="course__img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item course">
                            <h2 class="accordion-header" id="flush-heading-2">
                                <button class="accordion-button collapsed course__title" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse-2" aria-expanded="false"
                                    aria-controls="flush-collapse-2">
                                    ИНСТРУКТОР ДЕТСКОГО ФИТНЕСА
                                </button>
                            </h2>
                            <div id="flush-collapse-2" class="accordion-collapse collapse "
                                aria-labelledby="flush-heading-2" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body course__content">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <p class="course__desc">
                                                СТАРТ КУРСА 18 ФЕВРАЛЯ. ОТКРЫТ НАБОР!<br>
                                                🔹 По окончанию курса выдается диплом государственного образца!
                                                <br>
                                                <br>
                                                <strong>ПРОГРАММА КУРСА:</strong>
                                                <br>
                                                🔸 Базовая теория:
                                                <br>
                                            </p>
                                            <ul class="course__list">
                                                <li>Функциональная анатомия</li>
                                                <li>Нормальная и спортивная физиология</li>
                                                <li>Контроль здоровья клиента, первая доврачебная помощь</li>
                                            </ul>
                                            <br>
                                            <p class="course__desc">
                                                🔸 Практический блок:
                                            </p>
                                            <ul class="course__list">
                                                <li>Особенности физического и психического развития детей. Физические
                                                    качества
                                                    (онлайн/ офлайн лекция. Теория по профилю)</li>
                                                <li>Методика построения и проведения занятий, дозировка (время тренировки)
                                                </li>
                                                <li>Дети 3-6 лет. Занятия, направленные на коррекцию и профилактику
                                                    плоскостопия,
                                                    сколиоза, формирование осанки</li>
                                                <li>Дети 3-6 лет – занятия, направленные на развитие физических качеств
                                                    через
                                                    подвижные игры</li>
                                                <li>Дети 7-10 лет. Занятия, направленные на укрепление ОДА, профилактику
                                                    сколиоза,
                                                    подвижности суставов, профилактики травматизма, рациональное развитие
                                                    всех
                                                    физических качеств</li>
                                                <li>Дети 11-14 лет - занятия направленные на развитие координации, гибкости,
                                                    мышечной силы, ловкости с использованием различного оборудования</li>
                                            </ul>
                                            <br>
                                            <p class="course__desc">
                                                Кому будет полезен данный курс?<br>
                                                - начинающим тренерам<br>
                                                - практикующим тренерам для расширения профессионального профиля<br>
                                                <br>
                                                🔹 <strong>Период обучения:</strong> старт курса 18 февраля 2023г., 10
                                                недель<br>
                                                🔹 <strong>Преподаватели:</strong><br>
                                                🔹 Обучение проходит на базе Башкирского института физической культуры;<br>
                                                🔹 Практика проводится на базе СК «Динамо»<br>
                                                📞 <strong>Подробности и запись</strong> по тел.: +7 (937) 581-00-88
                                            </p>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <img src="/images/posters/1.jpg" alt="ИНСТРУКТОР ДЕТСКОГО ФИТНЕСА"
                                                class="course__img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item course">
                            <h2 class="accordion-header" id="flush-heading-3">
                                <button class="accordion-button collapsed course__title" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse-3" aria-expanded="false"
                                    aria-controls="flush-collapse-3">
                                    ИНСТРУКТОР ГРУППОВЫХ ПРОГРАММ
                                </button>
                            </h2>
                            <div id="flush-collapse-3" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading-3" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body course__content">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <p class="course__desc">
                                                СТАРТ КУРСА 18 ФЕВРАЛЯ. ОТКРЫТ НАБОР!<br>
                                                🔹 По окончанию курсов выдается диплом государственного образца!
                                                <br>
                                                <br>
                                                <strong>ПРОГРАММА КУРСА:</strong>
                                                <br>
                                                🔸 Теоретический блок:
                                                <br>
                                            </p>
                                            <ul class="course__list">
                                                <li>Анатомия</li>
                                                <li>Физиология</li>
                                                <li>Биохимия</li>
                                                <li>Контроль здоровья клиентов</li>
                                                <li>Тренинг по продажам услуг</li>
                                                <li>Профессиональный сервис с правовыми основами</li>
                                            </ul>
                                            <br>
                                            <p class="course__desc">
                                                🔸 Практический блок:
                                            </p>
                                            <ul class="course__list">
                                                <li>Теория и методика построения и проведения групповых занятий</li>
                                                <li>Аэробика (классическая, силовая, стрейтчинг)</li>
                                                <li>Степ-аэробика</li>
                                                <li>Функциональные тренировки</li>
                                                <li>BOSU треннинг</li>
                                                <li>Фит-бол</li>
                                                <li>Бодискульпт</li>
                                                <li>HIIT</li>
                                            </ul>
                                            <br>

                                            <p class="course__desc">
                                                Кому будет полезен данный курс?<br>
                                                - начинающим тренерам<br>
                                                - практикующим тренерам для расширения профессионального профиля<br>
                                                <br>
                                                🔹 <strong>Период обучения:</strong> старт курса 18 февраля 2023г., 10
                                                недель<br>
                                                🔹 <strong>Преподаватели:</strong><br>
                                                🔹 Обучение проходит на базе Башкирского института физической культуры;<br>
                                                🔹 Практика проводится на базе СК «Динамо»<br>
                                                📞 <strong>Подробности и запись</strong> по тел.: +7 (937) 581-00-88
                                            </p>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <img src="/images/posters/2.jpg" alt="ИНСТРУКТОР ГРУППОВЫХ ПРОГРАММ"
                                                class="course__img">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="courses__block">
                        <p class="courses__desc">ТАКЖЕ, мы проводим внутриклубное обучение для фитнес-центров.<br>
                            Программа,
                            темы
                            и методика курса строятся исходя из задач клуба. Кроме того, это возможность выбрать удобное
                            время,
                            график обучения и снизить стоимость за счёт единовременного обучения.</p>
                    </div>
                    <div class="col-12 banner">
                        <p class="banner__text">Узнать подробности, действующих скидках и записаться на курс</p>
                        <div class="btn btn-primary banner__btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Получить консультацию</div>
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
                    <div class="col-12 col-lg-6">
                        <p class="section__desc">
                            Успейте записаться: <a href="tel:+79179030977">+7 (937) 581-00-88</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section__content">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img class="posters__img mb-4" src="/images/posters/1.jpg" alt="Постер инструктор детского фитнеса">
                    <img class="posters__img mb-4" src="/images/posters/3.jpg" alt="Постер инструктор тренажерного зала">

                </div>
                <div class="col-12 col-lg-6">
                    <img class="posters__img mb-4" src="/images/posters/2.jpg"
                        alt="Постер инструктор групповых программ">

                </div>
                <div class="col-12 banner posters__banner">
                    <p class="banner__text">Узнать подробности, действующих скидках и записаться на мероприятие</p>
                    <div class="btn btn-primary banner__btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Получить консультацию</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section__training training" id="training">
        <div class="container-fluid section__header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title">ДЛЯ КОГО ОБУЧЕНИЕ</h2>
                        <p class="section__desc">
                            - тренер с нуля<br>
                            - повышение квалификации практикующего тренера<br>
                            - расширение тренерского профиля<br>
                            - для эффективных самостоятельных тренировок </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section__content">
            <div class="row">
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    <img src="/images/training.jpg" alt="ученица" class="training__img">
                </div>
                <div class="col-12 col-lg-6">
                    <img src="/images/training2.jpg" alt="сертификаты" class="training__img">
                </div>
            </div>
        </div>
    </section>
    <section class="section section__employment employment" id="employment">
        <div class="container-fluid section__header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title">СОДЕЙСТВИЕ В ТРУДОУСТРОЙСТВЕ</h2>
                    </div>
                    <div class="col-12">
                        <p class="section__desc">
                            Мы не просто обучаем тренеров, но и содействуем в дальнейшем трудоустройстве.<br>
                            Мы сотрудничаем с фитнес-клубами города и приглашаем их представителей на выпускные занятия и
                            экзамены для выбора кандидатов на трудоустройство.<br>
                            Также, проходя практику, у вас есть возможность присмотреться к клубу и проявить себя, как
                            потенциального сотрудника.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section__content container-fluid">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
                        <div class="container p-0">
                            <div class="carousel-inner carousel-inner_multi">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-12 col-md-6"><img src="/images/graduates/0.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                        <div class="col-12 col-md-6"><img src="/images/graduates/1.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6"><img src="/images/graduates/2.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                        <div class="col-md-6"><img src="/images/graduates/3.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6"><img src="/images/graduates/4.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                        <div class="col-md-6"><img src="/images/graduates/5.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6"><img src="/images/graduates/6.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                        <div class="col-md-6"><img src="/images/graduates/7.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6"><img src="/images/graduates/8.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                        <div class="col-md-6"><img src="/images/graduates/9.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6"><img src="/images/graduates/10.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                        <div class="col-md-6"><img src="/images/graduates/11.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6"><img src="/images/graduates/12.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                        <div class="col-md-6"><img src="/images/graduates/13.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-12"><img src="/images/graduates/14.jpg"
                                                class="d-block w-100 employment__item" alt="слайд школа фитнеса"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-inner carousel-inner_solo">
                                <div class="carousel-item active">
                                    <img src="/images/graduates/0.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/1.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/2.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/3.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/4.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/5.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/6.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/7.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/8.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/9.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/10.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/11.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/12.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/13.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/graduates/14.jpg" class="d-block w-100 employment__item"
                                        alt="слайд школа фитнеса">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <svg class="carousel-control-prev-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                            </svg>
                            <span class="visually-hidden">Предыдущий</span>
                        </button>
                        <button class="carousel-control-next carousel-control" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <svg class="carousel-control-next-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                            </svg>
                            <span class="visually-hidden">Следующий</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section__reasons reasons" id="reasons">
        <div class="container-fluid section__header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title">5 ПРИЧИН ОБУЧАТЬСЯ В НАШЕЙ ШКОЛЕ ФИТНЕСА</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section__content">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <p class="desc reasons__desc">
                        1. Диплом государственного образца<br>
                        2. Качественный преподавательский состав<br>
                        3. Максимум практики и концентрированная теория, с возможностью расширять знания на
                        мастер-классах<br>
                        4. Гибкая система оплаты (рассрочка, программа лояльности)<br>
                        5. Перспективы трудоустройства
                    </p>
                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <img src="/images/reasons.jpg" alt="5 ПРИЧИН ОБУЧАТЬСЯ В НАШЕЙ ШКОЛЕ ФИТНЕСА" class="reasons__img">
                </div>
                <div class="col-12 banner">
                    <p class="banner__text">Узнать подробности, действующих скидках и записаться на курс</p>
                    <div class="btn btn-primary banner__btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Получить консультацию</div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer container-fluid" id="footer">
        <div class="container">
            <h5 class="footer__title">Контакты</h5>
            <address class="footer__address">
                Г. Уфа, ул. Коммунистическая, д. 67 <br>
                Башкирский институт физической культуры (филиал) ФГБОУ ВО «УралГУФК», Аудитория №4
            </address>
            <p class="footer__contact">
                Подробности и запись на курсы:<br>
                Телефон: <a href="tel:+79375810088">+7 (937) 581-00-88</a> Степан Анисимов<br>
                Email: <a href="mailto:o-fitschool@mail.ru">o-fitschool@mail.ru</a>
            </p>
        </div>
    </footer>
    <div class="menu">
        <div class="menu__container">
            <ul class="menu__list">
                <li class="menu__item">
                    <a href="#" class="menu__link">
                        Главная
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#about" class="menu__link">
                        Коротко о школе
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#directions" class="menu__link">
                        Направления
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#courses" class="menu__link">
                        Актуальные курсы
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#posters" class="menu__link">
                        Афиша
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#training" class="menu__link">
                        Для кого обучение
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#" class="menu__link">
                        Преподаватели
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#employment" class="menu__link">
                        Содействие
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#reasons" class="menu__link">
                        5 причин обучаться
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#footer" class="menu__link">
                        Контакты
                    </a>
                </li>
            </ul>
            <ul class="menu__social social">
                <li class="social__item">
                    <a href="https://instagram.com/o.fit.ufa?igshid=YmMyMTA2M2Y= " target="_blank" class="social__item">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1"
                            x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve">
                            <path class="st0"
                                d="M16,3C8.8,3,3,8.8,3,16v18c0,7.2,5.8,13,13,13h18c7.2,0,13-5.8,13-13V16c0-7.2-5.8-13-13-13H16z M16,5h18 c6.1,0,11,4.9,11,11v18c0,6.1-4.9,11-11,11H16C9.9,45,5,40.1,5,34V16C5,9.9,9.9,5,16,5z M37,11c-1.1,0-2,0.9-2,2s0.9,2,2,2 s2-0.9,2-2S38.1,11,37,11z M25,14c-6.1,0-11,4.9-11,11s4.9,11,11,11s11-4.9,11-11S31.1,14,25,14z M25,16c5,0,9,4,9,9s-4,9-9,9 s-9-4-9-9S20,16,25,16z" />
                        </svg>
                    </a>
                </li>
                <li class="social__item">
                    <a href="https://vk.com/o.fit_ufa" target="_blank" class="social__item">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1"
                            x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve">

                            <path class="st0"
                                d="M8.6,4.2c-2.7,0-5,2.3-5,5v32c0,2.7,2.3,5,5,5h32c2.7,0,5-2.3,5-5v-32c0-2.7-2.3-5-5-5H8.6z M8.6,6.2h32 c1.7,0,3,1.3,3,3v32c0,1.7-1.3,3-3,3h-32c-1.7,0-3-1.3-3-3v-32C5.6,7.5,7,6.2,8.6,6.2z M23,16.2c-1.1,0-2,0.1-2.8,0.5c0,0,0,0,0,0 c-0.4,0.2-0.7,0.5-0.9,0.8C19.1,17.6,19,17.7,19,18c0,0.2,0,0.5,0.1,0.8c0.2,0.3,0.5,0.5,0.8,0.5c0.2,0,0.5,0.2,0.6,0.2c0,0,0,0,0,0 c0,0,0.1,0.4,0.2,0.7c0,0.3,0,0.6,0,0.6c0,0,0,0.1,0,0.1c0,0,0.1,0.9,0,1.8c0,0.4-0.1,0.7-0.1,1c-0.4-0.4-0.9-1.1-1.6-2.4 c-0.8-1.5-1.5-2.8-1.5-2.8c0-0.1-0.2-0.5-0.6-0.8c-0.5-0.4-1-0.4-1-0.4c-0.1,0-0.1,0-0.2,0l-3.9,0c0,0-0.2,0-0.5,0s-0.7,0.1-1.1,0.6 c0,0,0,0,0,0c-0.4,0.4-0.3,0.9-0.3,1.2c0,0.3,0.1,0.5,0.1,0.5c0,0,0,0,0,0c0,0,3.2,6.8,6.9,10.8c2.6,2.9,5.4,2.9,7.6,2.9H26 c0.4,0,0.8,0,1.2-0.3c0.4-0.2,0.7-0.9,0.7-1.3c0-0.4,0.1-0.8,0.1-1c0.1-0.1,0.1-0.2,0.2-0.2c0,0,0,0,0,0c0.2,0.1,0.4,0.4,0.7,0.7 c0.6,0.7,1.3,1.6,2.2,2.2c0.7,0.4,1.3,0.6,1.7,0.7c0.3,0,0.5,0,0.7,0l3.7,0c0,0,0,0,0.1,0c0,0,0.6,0,1.3-0.4 c0.3-0.2,0.7-0.6,0.9-1.1s0-1.1-0.3-1.7c0,0,0,0,0,0c0.1,0.1,0-0.1-0.2-0.3c-0.1-0.2-0.3-0.4-0.5-0.7c-0.4-0.6-1.2-1.4-2.3-2.5 c0,0,0,0,0,0c-0.6-0.5-1-0.9-1.1-1.1c-0.2-0.2-0.1-0.1-0.1-0.2c0-0.1,0.7-1.1,2.2-3c0.9-1.2,1.5-2,1.9-2.8s0.7-1.4,0.5-2.1 c0,0,0,0,0,0c-0.1-0.3-0.3-0.6-0.6-0.8c-0.3-0.2-0.5-0.2-0.7-0.3c-0.4-0.1-0.8-0.1-1.1-0.1c-0.7,0-3.9,0-4.2,0 c-0.3,0-0.8,0.1-1.1,0.3c-0.6,0.3-0.7,0.8-0.7,0.8c0,0,0,0,0,0.1c0,0-0.7,1.5-1.5,2.9c-0.9,1.5-1.5,2.2-1.9,2.5c0-0.1,0,0,0-0.1 c0-0.4,0-1,0-1.5c0-1.5,0.1-2.5,0.1-3.5c0-0.5-0.1-0.9-0.4-1.4s-0.8-0.7-1.3-0.8c-0.3-0.1-0.6-0.3-1.9-0.3c0,0,0,0,0,0 C23.8,16.2,23.4,16.2,23,16.2z M24.1,18.2c1.1,0,0.8,0.1,1.4,0.2c0.2,0,0.1,0,0.1,0c0,0,0.1,0.1,0.1,0.4c0,0.6-0.1,1.7-0.1,3.3 c0,0.4-0.1,1.1,0,1.7c0.1,0.6,0.2,1.5,1,2c0.4,0.2,0.8,0.3,1.2,0.2c0.4-0.1,0.7-0.3,1-0.6c0.7-0.6,1.5-1.5,2.4-3.1 c0.9-1.5,1.6-3,1.6-3.1c0,0,0,0,0,0c0,0,0,0,0,0c0.4,0,3.5,0,4.2,0c0.2,0,0.2,0,0.3,0c0,0.1,0,0-0.1,0.3c-0.3,0.6-0.9,1.4-1.7,2.5 c-1.4,1.9-2.3,2.6-2.5,3.8c-0.1,0.6,0.1,1.3,0.5,1.8s0.8,0.9,1.4,1.4c1.1,1,1.7,1.7,2.1,2.2c0.2,0.2,0.3,0.4,0.4,0.5 c0.1,0.1,0.1,0.1,0.1,0.3c0.1,0.1,0,0,0,0.1c-0.1,0-0.3,0.1-0.3,0.1l-3.7,0c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.2,0 c-0.2,0-0.5-0.1-0.9-0.4c-0.5-0.3-1.2-1.2-1.8-1.9c-0.3-0.4-0.7-0.7-1.1-1c-0.4-0.3-1-0.6-1.7-0.4c-0.7,0.2-1.2,0.8-1.5,1.3 C26,30.3,26,30.7,26,31.2c0,0,0,0,0,0h-1.7c-2.3,0-3.9,0.2-6.1-2.3c-3-3.3-5.8-8.8-6.2-9.7l3.5,0c0.1,0,0.2,0.1,0.2,0.1c0,0,0,0,0,0 c-0.1-0.1,0,0,0,0c0,0,0,0.1,0,0.1c0,0,0.7,1.3,1.6,2.8c0.9,1.5,1.5,2.4,2.1,3c0.3,0.3,0.6,0.5,1,0.7s0.9,0.1,1.3-0.1 c0.7-0.4,0.8-1,0.9-1.5c0.1-0.5,0.2-1,0.2-1.6c0-1,0-1.9,0-1.9c0,0,0-0.4-0.1-0.8c-0.1-0.5-0.1-1.1-0.6-1.6l0,0c0,0,0,0,0,0 C22.6,18.3,23.1,18.2,24.1,18.2z M32.9,19.2L32.9,19.2C32.9,19.2,32.9,19.2,32.9,19.2C32.9,19.2,32.9,19.2,32.9,19.2z" />
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="menu__close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" class="bi bi-x" viewBox="0 0 15 15">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" class="bi bi-x" viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title mb-3" id="exampleModalLabel">Получить консультацию</h5>
                    <p class="modal-desc mb-3">Оставьте свой номер телефона и мы свяжемся с вами</p>
                    <form class="form needs-validation">
                        @csrf
                        <div class="mb-3 wrapper-control">
                            <input type="text" class="form-control" data-text-input placeholder="Имя" name="name"
                                maxlength="35">
                            <span class="wrapper-control__error">
                                Пожалуйста, укажите свое Имя.
                            </span>
                        </div>
                        <div class="mb-3 wrapper-control ">
                            <input type="tel" class="form-control" data-tel-input placeholder="Телефон"
                                name="phone" maxlength="18">
                            <span class="wrapper-control__error">
                                Пожалуйста, укажите свой телефон.
                            </span>
                        </div>
                        <button type="submit" class="btn btn-primary btn-submit w-100">Отправить</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <span class="modal-politic">
                        Нажимая кнопку "отправить" вы соглашаетесь с нашей <a href="/politika-konfidencialnosti"
                            target="_blank">
                            политикой
                            конфиденциальности</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection
