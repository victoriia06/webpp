<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="css/normalize.css"/>
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/media.css"/>
  <script
      defer
      src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"
  ></script>
  <script defer async src="https://www.google.com/recaptcha/api.js"></script>
  <title>Проект</title>
</head>
<body>
<header class="header">
  <div class="intro">
    <div class="video"></div>
    <video class="video__media" autoplay muted loop>
      <source src="img/video.mp4" type="video/mp4">
    </video>
    <img class="backimg" alt="backimg" src="img/MaskGroup.png"/>
    <div class="intro__content">
      <div class="container2">
        <div class="header__content flex">
          <img class="header__logo" src="img/Group9.png" alt="Логотип"/>
          <nav class="header__nav">
            <ul class="nav__list list__reset flex">
              <li class="nav__item "><a href="#" class="nav__link  nav__link-hover">ПОДДЕРЖКА
                DRUPAL</a></li>
              <li class="nav__item dropdown">
                <button class="dropbtn btn__reset">АДМИНИСТРИРОВАНИЕ</button>
                <ul class="dropdown__list list__reset">
                  <li class="dropdown__item"><a href="#" class="nav__link">МИГРАЦИЯ</a></li>
                  <li class="dropdown__item"><a href="#" class="nav__link">БЭКАПЫ</a></li>
                  <li class="dropdown__item"><a href="#" class="nav__link">АУДИТ БЕЗОПАСНОСТИ</a>
                  </li>
                  <li class="dropdown__item"><a href="#" class="nav__link">ОПТИМИЗАЦИЯ СКОРОСТИ</a>
                  </li>
                  <li class="dropdown__item"><a href="#" class="nav__link">ПЕРЕЕЗД НА HTTPS</a></li>
                </ul>
              </li>
              <li class="nav__item"><a href="#" class="nav__link nav__link-hover">ПРОДВИЖЕНИЕ</a>
              </li>
              <li class="nav__item"><a href="#" class="nav__link nav__link-hover">РЕКЛАМА</a></li>
              <li class="nav__item dropdown">
                <button class="dropbtn btn__reset">О НАС</button>
                <ul class="dropdown__list list__reset">
                  <li class="dropdown__item"><a href="#" class="nav__link"></a>КОМАНДА</li>
                  <li class="dropdown__item"><a href="#" class="nav__link"></a>DRUPALGIVE</li>
                  <li class="dropdown__item"><a href="#" class="nav__link"></a>БЛОГ</li>
                  <li class="dropdown__item"><a href="#" class="nav__link"></a>КУРСЫ DRUPAL</li>
                </ul>
              </li>
              <li class="nav__item"><a href="#" class="nav__link nav__link-hover">ПРОЕКТЫ</a></li>
              <li class="nav__item"><a href="#" class="nav__link nav__link-hover">КОНТАКТЫ</a></li>
            </ul>
          </nav>
        </div>
        <div class="hero__content flex">
          <div class="top-left flex">
            <h1 class="hero__title section__title">
              Поддержка сайтов на&nbsp;Drupal
            </h1>
            <p class="hero__text text">
              Сопровождение и&nbsp;поддержка сайтов на&nbsp;CMS Drupal любых
              версий и&nbsp;запущенности
            </p>
            <button class="hero__btn btn__reset">ТАРИФЫ</button>
          </div>
          <div class="bottom-right">
            <ul class="hero__list list__reset flex">
              <li class="list__item">
                <span class="special__inf num1">#1</span>
                <div class="general__inf gen1">
                  Drupal-разработчик в&nbsp;России по&nbsp;версии Рейтинга
                  Рунета
                </div>
              </li>
              <li class="list__item">
                <span class="special__inf">3+</span>
                <div class="general__inf">
                  средний опыт специалистов более 3&nbsp;лет
                </div>
              </li>
              <li class="list__item">
                <span class="special__inf">14</span>
                <div class="general__inf">
                  лет опыта в&nbsp;сфере Drupal
                </div>
              </li>
              <li class="list__item">
                <span class="special__inf">200+</span>
                <div class="general__inf">
                  модулей и&nbsp;тем в&nbsp;формате DrupalGive
                </div>
              </li>
              <li class="list__item">
                <span class="special__inf">90 000+</span>
                <div class="general__inf">
                  часов поддержки сайтов на&nbsp;Drupal
                </div>
              </li>
              <li class="list__item">
                <span class="special__inf">300+</span>
                <div class="general__inf">Проектов на&nbsp;поддержке</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!--Меню  для мобайл-->
<section class="header__mobile">
  <div class="mobile__menu">
    <div class="mob__container flex">
      <img src="img/Group9.png" alt=""/>
      <button class="burger-btn" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>
  <nav class="mobile-nav">
    <ul class="nav-menu">
      <li class="menu-item"><a href="#advantages" class="nav-link">ПОДДЕРЖКА DRUPAL</a></li>
      <li class="menu-item has-submenu">
        <span class="submenu-trigger">АДМИНИСТРИРОВАНИЕ</span>
        <ul class="submenu">
          <li class="menu-item"><a href="#advantages" class="nav-link">МИГРАЦИЯ</a></li>
          <li class="menu-item"><a href="#advantages" class="nav-link">БЭКАПЫ</a></li>
          <li class="menu-item"><a href="#advantages" class="nav-link">АУДИТ БЕЗОПАСНОСТИ</a></li>
          <li class="menu-item"><a href="#advantages" class="nav-link">ОПТИМИЗАЦИЯ СКОРОСТИ</a></li>
          <li class="menu-item"><a href="#advantages" class="nav-link">ПЕРЕЕЗД НА HTTPS</a></li>
        </ul>
      </li>
      <li class="menu-item"><a href="#" class="nav-link">ПРОДВИЖЕНИЕ</a></li>
      <li class="menu-item"><a href="#" class="nav-link">РЕКЛАМА</a></li>
      <li class="menu-item has-submenu">
        <span class="submenu-trigger">О НАС</span>
        <ul class="submenu">
          <li class="menu-item"><a href="#team" class="nav-link">КОМАНДА</a></li>
          <li class="menu-item"><a href="#" class="nav-link">DRUPALGIVE</a></li>
          <li class="menu-item"><a href="#blog" class="nav-link">БЛОГ</a></li>
          <li class="menu-item"><a href="#" class="nav-link">КУРСЫ DRUPAL</a></li>
        </ul>
      </li>
      <li class="menu-item"><a href="#blog" class="nav-link">ПРОЕКТЫ</a></li>
      <li class="menu-item"><a href="#contacts" class="nav-link">КОНТАКТЫ</a></li>
    </ul>
  </nav>
</section>
<main class="main">
  <section id="advantages" class="advantages">
    <div class="container2">
      <h2 class="advantages__title section__title">
        13&nbsp;лет совершенствуем компетенции в&nbsp;Друпал поддержке!
      </h2>
      <p class="advantages__text text">
        Разрабатываем и&nbsp;оптимизируем модели, расширяем функциональность
        сайтов, обновляем дизайн
      </p>
      <ul class="advantages__list list__reset flex">
        <li class="advantages__item">
          <img class="advan__bgimg" src="img/icon-bg.svg" alt=""/>
          <img
              class="advan__img"
              src="img/competency-1.svg"
              alt="Картинка 1"
          />
          <p class="advan__text text">
            Добавление информации на&nbsp;сайт, создание новых разделов
          </p>
        </li>
        <li class="advantages__item">
          <img class="advan__bgimg" src="img/icon-bg.svg" alt=""/>
          <img
              class="advan__img"
              src="img/competency-2.svg"
              alt="Картинка 2"
          />
          <p class="advan__text text">
            Разработка и&nbsp;оптимизация модулей сайта
          </p>
        </li>
        <li class="advantages__item">
          <img class="advan__bgimg" src="img/icon-bg.svg" alt=""/>
          <img
              class="advan__img"
              src="img/competency-3.svg"
              alt="Картинка 3"
          />
          <p class="advan__text text">
            Интеграция с&nbsp;CRM, 1С, платежными системами, любыми
            веб-сервисами
          </p>
        </li>
        <li class="advantages__item">
          <img class="advan__bgimg" src="img/icon-bg.svg" alt=""/>
          <img
              class="advan__img"
              src="img/competency-4.svg"
              alt="Картинка 4"
          />
          <p class="advan__text text">
            Любые доработки функционала и&nbsp;дизайна
          </p>
        </li>
        <li class="advantages__item">
          <img class="advan__bgimg" src="img/icon-bg.svg" alt=""/>
          <img
              class="advan__img"
              src="img/competency-5.svg"
              alt="Картинка 5"
          />
          <p class="advan__text text">
            Аудит и&nbsp;мониторинг безопасности Drupal сайтов
          </p>
        </li>
        <li class="advantages__item">
          <img class="advan__bgimg" src="img/icon-bg.svg" alt=""/>
          <img
              class="advan__img"
              src="img/competency-6.svg"
              alt="Картинка 6"
          />
          <p class="advan__text text">
            Миграция, импорт контента и&nbsp;апгрейд Drupal
          </p>
        </li>
        <li class="advantages__item">
          <img class="advan__bgimg" src="img/icon-bg.svg" alt=""/>
          <img
              class="advan__img"
              src="img/competency-7.svg"
              alt="Картинка 7"
          />
          <p class="advan__text text">
            Оптимизация и&nbsp;ускорение Drupal сайтов
          </p>
        </li>
        <li class="advantages__item">
          <img class="advan__bgimg" src="img/icon-bg.svg" alt=""/>
          <img
              class="advan__img"
              src="img/competency-8.svg"
              alt="Картинка 8"
          />
          <p class="advan__text text">
            Веб-маркетинг, консультации и&nbsp;работы по&nbsp;SEO
          </p>
        </li>
      </ul>
    </div>
  </section>
  <section class="support">
    <div class="container">
      <h2 class="support__title section__title">
        Поддержка от&nbsp;Drupal-coder
      </h2>
      <ul class="support__list list__reset flex">
        <li class="support__item sup1">
          <div class="sup__content">
            <span class="sup__num">01.</span>
            <h4 class="sup__title section__title">
              Постановка задачи по&nbsp;Email
            </h4>
            <p class="support__inf text">
              Удобная и&nbsp;привычная модель постановки задач, при которой
              задачи фиксируются и&nbsp;никогда не&nbsp;теряются.
            </p>
          </div>
        </li>
        <li class="support__item sup2">
          <div class="sup__content">
            <span class="sup__num">02.</span>
            <h4 class="sup__title section__title">
              Система Helpdesk&nbsp;&mdash; отчетность, прозрачность
            </h4>
            <p class="support__inf text">
              Возможность посмотреть все заявки в&nbsp;работе
              и&nbsp;отработанные часы в&nbsp;личном кабинете через браузер.
            </p>
          </div>
        </li>
        <li class="support__item sup3">
          <div class="sup__content">
            <span class="sup__num">03.</span>
            <h4 class="sup__title section__title">
              Расширенная техническая поддержка
            </h4>
            <p class="support__inf text">
              Возможность организации расширенной техподдержки с&nbsp;6:00
              до&nbsp;22:00 без выходных.
            </p>
          </div>
        </li>
        <li class="support__item sup4">
          <div class="sup__content">
            <span class="sup__num">04.</span>
            <h4 class="sup__title section__title">
              Персональный менеджер проекта
            </h4>
            <p class="support__inf text">
              Ваш менеджер проекта всегда в&nbsp;курсе текущего состояния
              проекта и&nbsp;в&nbsp;любой момент готов ответить на&nbsp;любые
              вопросы.
            </p>
          </div>
        </li>
        <li class="support__item sup5">
          <div class="sup__content">
            <span class="sup__num">05.</span>
            <h4 class="sup__title section__title">Удобные способы оплаты</h4>
            <p class="support__inf text">
              Безналичный расчет по&nbsp;договору или электронные деньги:
              WebMoney, Яндекс.Деньги, Paypal.
            </p>
          </div>
        </li>
        <li class="support__item sup6">
          <div class="sup__content">
            <span class="sup__num">06.</span>
            <h4 class="sup__title section__title">
              Работаем с&nbsp;SLA и&nbsp;NDA
            </h4>
            <p class="support__inf text">
              Работа в&nbsp;рамках соглашений о&nbsp;конфиденциальности
              и&nbsp;об&nbsp;уровне качества работ.
            </p>
          </div>
        </li>
        <li class="support__item sup7">
          <div class="sup__content">
            <span class="sup__num">07.</span>
            <h4 class="sup__title section__title">Штатные специалисты</h4>
            <p class="support__inf text">
              Надежные штатные специалисты, никаких фрилансеров.
            </p>
          </div>
        </li>
        <li class="support__item sup8">
          <div class="sup__content">
            <span class="sup__num">08.</span>
            <h4 class="sup__title section__title">Удобные каналы связи</h4>
            <p class="support__inf text">
              Консультации по&nbsp;телефону, скайпу, в&nbsp;мессенджерах.
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="drupal">
    <div class="back__img">
      <img class="content__img" src="img/laptop.png" alt="Laptop"/>
      <div class="container2">
        <div class="content__text">
          <h2 class="drupal__title section__title">
            Экспертиза в&nbsp;Drupal, опыт 14&nbsp;лет!
          </h2>
          <ul class="drupal__list list__reset flex">
            <li class="drupal__item">
              <p class="drupal__text text">
                Только системный подход&nbsp;&mdash; контроль версий,
                резервирование и&nbsp;тестирование!</p>
            </li>
            <li class="drupal__item">
              <p class="drupal__text text">Только Drupal сайты, не&nbsp;берем на&nbsp;поддержку
                сайты
                на&nbsp;других CMS!</p>
            </li>
            <li class="drupal__item">
              <p class="drupal__text text">Участвуем в&nbsp;разработке ядра Drupal и&nbsp;модулей
                на&nbsp;Drupal.org, разрабатываем
                <span class="special">свои модули Drupal</span></p>
            </li>
            <li class="drupal__item">
              <p class="drupal__text text">Поддерживаем сайты на&nbsp;Drupal&nbsp;5, 6, 7&nbsp;и&nbsp;8</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="tariffs">
    <div class="fon">
      <div class="container2">
        <h2 class="tariffs__title section__title">Тарифы</h2>
        <div class="tariff__cards flex">
          <div class="card">
            <div class="card__header">
              <h3 class="tariff__title section__title">Стартовый</h3>
            </div>
            <ul class="card__list list__reset">
              <li class="card__item">
                Консультации и&nbsp;работы по&nbsp;SEO
              </li>
              <li class="card__item">Услуги дизайнера</li>
              <li class="card__item">
                Неиспользованные оплаченные часы переносятся
                на&nbsp;следующий месяц
              </li>
              <li class="card__item">
                Предоплата от&nbsp;6&nbsp;000 рублей в&nbsp;месяц
              </li>
            </ul>
            <button class="card__btn btn__reset" data-target="#contacts">СВЯЖИТЕСЬ С НАМИ!</button>
          </div>
          <div class="card main-card">
            <div class="card__header">
              <h3 class="tariff__title section__title ">Бизнес</h3>
            </div>
            <ul class="card__list list__reset">
              <li class="card__item">
                Консультации и&nbsp;работы по&nbsp;SEO
              </li>
              <li class="card__item">Услуги дизайнера</li>
              <li class="card__item">
                Высокое время реакции&nbsp;&mdash; до&nbsp;2&nbsp;рабочих
                дней
              </li>
              <li class="card__item">
                Неиспользованные оплаченные часы не&nbsp;переносятся
              </li>
              <li class="card__item">
                Предоплата от&nbsp;30&nbsp;000 рублей в&nbsp;месяц
              </li>
            </ul>
            <button class="card__btn card__btn-alt btn__reset" data-target="#contacts">СВЯЖИТЕСЬ С НАМИ!</button>
          </div>
          <div class="card">
            <div class="card__header">
              <h3 class="tariff__title section__title">VIP</h3>
            </div>
            <ul class="card__list list__reset">
              <li class="card__item">
                Консультации и&nbsp;работы по&nbsp;SEO
              </li>
              <li class="card__item">Услуги дизайнера</li>
              <li class="card__item">
                Максимальное время реакции&nbsp;&mdash; в&nbsp;день
                обращения
              </li>
              <li class="card__item">
                Неиспользованные оплаченные часы не&nbsp;переносятся
              </li>
              <li class="card__item">
                Предоплата от&nbsp;270&nbsp;000 рублей в&nbsp;месяц
              </li>
            </ul>
            <button class="card__btn btn__reset" data-target="#contacts">СВЯЖИТЕСЬ С НАМИ!</button>
          </div>
        </div>
        <div class="tarriffs__ps">
          <p class="tariff__text text">
            Вам не&nbsp;подходят наши тарифы? Оставьте заявку
            и мы предложим вам индивидуальные условия!
          </p>
          <a href="#footer" class="individ"
          >ПОЛУЧИТЬ ИНДИВИДУАЛЬНЫЙ ТАРИФ</a
          >
        </div>
      </div>
    </div>
  </section>
  <section class="tasks">
    <div class="container2">
      <h2 class="tasks__title section__title">
        Наши профессиональные разработчики выполняют быстро любые задачи
      </h2>
      <ul class="tasks__list list__reset flex">
        <li class="task__item">
          <img class="task__bgimg" src="img/icon-bg.svg" alt=""/>
          <img
              class="task__img"
              src="img/competency-20.svg"
              alt="Картинка 1"
          />
          <h3 class="task__title section__title">от 1ч</h3>
          <p class="task__text text">
            Настройка события&nbsp;GA в&nbsp;интернет-магазине
          </p>
        </li>
        <li class="task__item">
          <img class="task__bgimg" src="img/icon-bg.svg" alt=""/>
          <img
              class="task__img"
              src="img/competency-21.svg"
              alt="Картинка 2"
          />
          <h3 class="task__title section__title">от 20ч</h3>
          <p class="task__text text">Разработка мобильной версии сайта</p>
        </li>
        <li class="task__item">
          <img class="task__bgimg" src="img/icon-bg.svg" alt=""/>
          <img
              class="task__img"
              src="img/competency-22.svg"
              alt="Картинка 3"
          />
          <h3 class="task__title section__title">от 8ч</h3>
          <p class="task__text text">Интеграция модуля оплаты</p>
        </li>
      </ul>
    </div>
  </section>
  <section id="team" class="team">
    <div class="container">
      <h2 class="team__title section title">Команда</h2>
      <ul class="team__list list__reset flex">
        <li class="team__item">
          <img class="img__member" src="img/IMG_2472_0.jpg" alt="Фото"/>
          <div class="name__member">Сергей Синица</div>
          <div class="post__member">
            Руководитель отдела веб-разработки, канд. техн. наук,
            заместитель директора
          </div>
        </li>
        <li class="team__item">
          <img class="img__member" src="img/IMG_2539_0.jpg" alt="Фото"/>
          <div class="name__member">Роман Агабеков</div>
          <div class="post__member">
            Руководитель отдела DevOPS, директор
          </div>
        </li>
        <li class="team__item">
          <img class="img__member" src="img/IMG_2474_1.jpg" alt="Фото"/>
          <div class="name__member">Алексей Синица</div>
          <div class="post__member">
            Руководитель отдела поддержки сайтов
          </div>
        </li>
        <li class="team__item">
          <img class="img__member" src="img/IMG_2522_0.jpg" alt="Фото"/>
          <div class="name__member">Дарья Бочкарёва</div>
          <div class="post__member">
            Руководитель отдела продвижения, контекстной рекламы
            и&nbsp;контент-поддержки сайтов
          </div>
        </li>
        <li class="team__item">
          <img class="img__member" src="img/IMG_9971_16.jpg" alt="Фото"/>
          <div class="name__member">Ирина Торкунова</div>
          <div class="post__member">
            Менеджер по&nbsp;работе с&nbsp;клиентами
          </div>
        </li>
      </ul>
      <div class="btn">
        <button class="team__btn btn__reset">ВСЯ КОМАНДА</button>
      </div>
    </div>
  </section>
  <section class="cases">
    <div class="container2">
      <h2 id="blog" class="cases__title section__title">Последние кейсы</h2>
      <ul class="cases__list list__reset flex">
        <li class="case__item">
          <img class="case__img" src="img/image 9.2.png" alt="картинка"/>
          <div class="case__inf">
            <h4 class="case__title section__title">
              Настройка кэширования данных. Апгрейд сервера. Ускорение
              работы сайта в&nbsp;30&nbsp;раз!
            </h4>
            <span class="case__publ">04.05.2020</span>
            <p class="case__text text">
              Влияние скорости загрузки страниц сайта на&nbsp;отказы
              и&nbsp;конверсии. Кейс ускорения...
            </p>
          </div>
        </li>
        <li class="case__item case__item__more case__bgimg1">
          <h4 class="case__title section__title">
            Использование отчетов Ecommerce в&nbsp;Яндекс.Метрике
          </h4>
        </li>
        <li class="case__item case__item__bottom case__bgimg2">
          <div class="case__infbg">
            <h4 class="case__title section__title">
              Повышение конверсии страницы с&nbsp;формой заявки
              с&nbsp;применением AB-тестирования
            </h4>
            <span class="case__publ">24.01.2020</span>
          </div>
        </li>
        <li class="case__item case__item__bottom case__bgimg3">
          <div class="case__infbg">
            <h4 class="case__title section__title">
              Drupal&nbsp;7: ускорение времени генерации страниц
              интернет-магазина на&nbsp;32%
            </h4>
            <span class="case__publ">23.09.2019</span>
          </div>
        </li>
        <li class="case__item case__item__bottom">
          <img class="case__img" src="img/image 6.1.png" alt="картинка"/>
          <div class="case__inf">
            <h4 class="case__title section__title">
              Обмен товарами и&nbsp;заказами интернет-магазинов
              на&nbsp;Drupal 7&nbsp;с 1C: Предприятие, МойСклад, Класс365
            </h4>
            <span class="case__publ">22.08.2019</span>
            <p class="case__text text">
              Опубликован <a href="#">релиз модуля...</a>
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="reviews">
    <div class="border__backback">
      <div class="border__back">
        <div class="container2">
          <h2 class="reviews__title section__title">Отзывы</h2>
          <div class="slider__wrapper">
            <div class="slider-container">
              <div class="slider-main">
                <div class="slide">
                  <div class="slider__img-wrapper">
                    <img class="slider__img" src="img/logo_0.png"/>
                  </div>
                  <div class="slider__text text">
                    Долгие поиски единственного и&nbsp;неповторимого мастера
                    на&nbsp;многострадальный сайт www.cielparfum.com, который
                    был собран крайне некомпетентным программистом и&nbsp;раз
                    в&nbsp;месяц стабильно грозил погибнуть, привели меня
                    на&nbsp;сайт&nbsp;и, в&nbsp;итоге, к&nbsp;ребятам
                    из&nbsp;Drupal-coder. И&nbsp;вот уже практически полгода как
                    не&nbsp;проходит и&nbsp;дня, чтобы
                    я&nbsp;не&nbsp;поудивлялась и&nbsp;не&nbsp;порадовалась
                    своему везению! Починили все, что
                    не&nbsp;работало&nbsp;&mdash; от&nbsp;поиска
                    до&nbsp;отображения меню. Провели редизайн&nbsp;&mdash;
                    не&nbsp;отходя от&nbsp;желаемого, но&nbsp;со&nbsp;своими
                    существенными и&nbsp;качественными дополнениями. Осуществили
                    ряд проектов&nbsp;&mdash; конкурсы, тесты и&nbsp;тд.
                    А&nbsp;уж&nbsp;мелких починок и&nbsp;доработок&nbsp;&mdash;
                    не&nbsp;счесть! И&nbsp;главное&nbsp;&mdash; все качественно
                    и&nbsp;быстро (не&nbsp;взирая на&nbsp;не&nbsp;самый
                    &laquo;быстрый&raquo; тариф). Есть вопросы&nbsp;&mdash;
                    замечательный Алексей всегда подскажет, поддержит,
                    отремонтирует и/или просто сделает с&nbsp;нуля. Есть задумка
                    для реализации&nbsp;&mdash; замечательный Сергей обсудит
                    и&nbsp;предложит идеальный вариант. Есть
                    проблема&nbsp;&mdash; замечательные Надежда и&nbsp;Роман
                    починят, поправят, сделают! Ребята доказали, что эта
                    CMS&nbsp;&mdash; мощная и&nbsp;грамотная система управления.
                    Надеюсь, что наше сотрудничество затянется надолго!
                    Спасибо!!!
                  </div>
                  <p class="slider__text slider__text-gray">
                    С&nbsp;уважением, Наталья Сушкова, руководитель Отдела
                    веб-проектов Группы компаний &laquo;Си&nbsp;Эль
                    парфюм&raquo;
                    <a
                        class="slider__text-link"
                        href="http://www.cielparfum.com/"
                    >http://www.cielparfum.com/</a
                    >
                  </p>
                </div>
                <div class="slide">
                  <div class="slider__img-wrapper">
                    <img class="slider__img" src="img/logo.png"/>
                  </div>
                  <div class="slider__text text">
                    Сергей&nbsp;&mdash; профессиональный,
                    высококвалифицированный программист с&nbsp;огромным опытом
                    в&nbsp;ИТ. Я&nbsp;долгое время общался
                    с&nbsp;топ-фрилансерами (вся первая двадцатка)
                    на&nbsp;веблансере и&nbsp;могу сказать, что С&nbsp;СЕРГЕЕМ
                    ОНИ И&nbsp;РЯДОМ НЕ&nbsp;ВАЛЯЛИСЬ. Работаем с&nbsp;Сергеем
                    до&nbsp;сих пор. С&nbsp;ним приятно работать,
                    я&nbsp;доволен.
                  </div>
                </div>
                <div class="slide">
                  <div class="slider__img-wrapper">
                    <img class="slider__img" src="img/farbors_ru.jpg"/>
                  </div>
                  <div class="slider__text text">
                    Выражаю глубочайшую благодарность команде специалистов
                    компании &laquo;Инитлаб&raquo; и&nbsp;лично Дмитрию
                    Купянскому и&nbsp;Алексею Синице. Сайт был первоклассно
                    перевёрстан из&nbsp;старой табличной модели в&nbsp;новую
                    на&nbsp;базе Drupal с&nbsp;дополнительной функциональностью.
                    Всё было сделано с&nbsp;высочайшим качеством и&nbsp;точно
                    в&nbsp;сроки. Всем кому хочется без нервов и&nbsp;лишних
                    вопросов разработать сайт рекомендую обращаться именно
                    к&nbsp;этой команде профессионалов.
                  </div>
                </div>
                <div class="slide">
                  <div class="slider__img-wrapper">
                    <img class="slider__img" src="img/nashagazeta_ch.png"/>
                  </div>
                  <div class="slider__text text">
                    Моя электронная газета www.nashagazeta.ch существует
                    в&nbsp;Швейцарии уже 10&nbsp;лет. За&nbsp;это время
                    мы&nbsp;сменили 7&nbsp;специалистов по&nbsp;техподдержке,
                    и&nbsp;только сейчас, в&nbsp;последние несколько месяцев,
                    с&nbsp;начала сотрудничества с&nbsp;Алексеем Синицей
                    и&nbsp;его командой, я&nbsp;впервые почувствовала, что
                    у&nbsp;меня есть надежный технический тыл. Без громких слов
                    и&nbsp;обещаний, ребята просто спокойно и&nbsp;качественно
                    делают работу, быстро реагируют, находят решения, предлагают
                    конкретные варианты улучшения функционирования сайта
                    и&nbsp;сами их&nbsp;оперативно осуществляют. Сотрудничество
                    с&nbsp;ними&nbsp;&mdash; одно удовольствие!
                  </div>
                </div>
                <div class="slide">
                  <div class="slider__img-wrapper">
                    <img class="slider__img" src="img/logo-estee.png"/>
                  </div>
                  <div class="slider__text text">
                    Наша компания Estee Design занимается дизайном интерьеров.
                    Сайт сверстан на&nbsp;Drupal. Искали программистов под
                    выполнение ряда небольших изменений и&nbsp;корректировок
                    по&nbsp;сайту. Пообщавшись с&nbsp;Алексеем Синицей, приняли
                    решение о&nbsp;начале работ с&nbsp;компанией
                    Initlab/drupal-coder. Сотрудничеством довольны на&nbsp;100%.
                    Четкая и&nbsp;понятная система коммуникации, достаточно
                    оперативное решение по&nbsp;задачам. Дали рекомендации
                    по&nbsp;улучшению програмной части сайта, исправили ряд
                    скрытых ошибок. Никогда не&nbsp;пишу отзывы (нет времени),
                    но&nbsp;в&nbsp;данном случае, по&nbsp;просьбе Алексея,
                    не&nbsp;могу не&nbsp;рекомендовать Initlab другим
                    людям&nbsp;&mdash; действительно компания профессионалов.
                  </div>
                </div>
                <div class="slide">
                  <div class="slider__img-wrapper">
                    <img class="slider__img" src="img/cableman_ru.png"/>
                  </div>
                  <div class="slider__text text">
                    Наша компания за&nbsp;несколько лет сменила несколько команд
                    программистов и&nbsp;специалистов техподдержки, и&nbsp;почти
                    отчаялась найти на&nbsp;российском рынке адекватное
                    профессиональное предложение по&nbsp;разумной цене. Пока
                    мы&nbsp;не&nbsp;начали работать с&nbsp;командой
                    &laquo;Инитлаб&raquo;, воплощающей в&nbsp;себе все наши
                    представления о&nbsp;нормальной системе взаимодействия
                    в&nbsp;сочетании с&nbsp;профессиональным неравнодушием.
                    Впервые в&nbsp;моей деловой практике я&nbsp;чувствую надежно
                    прикрытыми важнейшие задачи в&nbsp;жизни электронного СМИ,
                    при том, что мои коллеги работают за&nbsp;сотни километров
                    от&nbsp;нас и&nbsp;мы&nbsp;никогда не&nbsp;встречались
                    лично.
                  </div>
                </div>
                <div class="slide">
                  <div class="slider__img-wrapper">
                    <img class="slider__img" src="img/logo_2.png"/>
                  </div>
                  <div class="slider__text text">
                    За&nbsp;довольно продолжительный срок (2014&nbsp;&mdash;
                    2016&nbsp;годы) весьма плотной работы (интернет-магазин
                    на&nbsp;безумно замороченном Drupal&nbsp;6: устраняли косяки
                    разработчиков, ускоряли сайт, сделали множество новых
                    функций и&nbsp;т.п.)&nbsp;&mdash; только самые добрые эмоции
                    от&nbsp;работы с&nbsp;командой Initlab&nbsp;/ Drupal-coder:
                    всегда можно рассчитывать на&nbsp;быструю и&nbsp;толковую
                    помощь, поддержку, совет. Даже сейчас, не&nbsp;смотря
                    на&nbsp;то, что мы&nbsp;почти год не&nbsp;работали
                    на&nbsp;постоянной основе (банально закончились задачи),
                    случайно возникшая проблема с&nbsp;сайтом была решена
                    мгновенно! В&nbsp;общем, только самые искренние
                    благодарности и&nbsp;рекомендации! Спасибо!)
                  </div>
                </div>

                <div class="slide">
                  <div class="slider__img-wrapper">
                    <img class="slider__img" src="img/lpcma_rus_v4.jpg"/>
                  </div>
                  <div class="slider__text text">
                    Хотел поблагодарить за&nbsp;работу над нашими сайтами.
                    За&nbsp;4&nbsp;месяца работы привели сайт в&nbsp;порядок,
                    а&nbsp;самое главное получили инструмент, с&nbsp;помощью
                    мы&nbsp;теперь можем быстро и&nbsp;красиво выставлять
                    контент для образования и&nbsp;работы с&nbsp;предприятиями
                    <a class="slider__text-link"
                       href="ttp://lpcma.tsu.ru/ru/post/reference_material">http://lpcma.tsu.ru/ru/post/reference_material</a>

                  </div>
                </div>
              </div>
            </div>
            <div class="slider-navigation">
              <div class="button_slide">
                <button class="slider__prev">
                  <img src="img/arrow-left.svg" alt="arrow-left"/>
                </button>
                <div class="counter">
                  <span class="ednum">01</span>
                  <span class="specnum">/</span>
                  <span class="totalnum">08</span>
                </div>
                <button class="slider__next">
                  <img src="img/arrow-right.svg" alt="arrow-right"/>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="workWithUs">
    <div class="wrapper">
      <div class="container2">
        <div class="inf">
          <h2 class="inf__title section__title">С&nbsp;нами работают</h2>
          <p class="inf__text text">
            Десятки компаний доверяют нам самое ценное, что у&nbsp;них есть
            в&nbsp;интернете&nbsp;&mdash; свои сайты. Мы&nbsp;делаем всё,
            чтобы наше сотрудничество было долгим.
          </p>
        </div>
      </div>
      <div class="sliders-container">
        <div class="image-slider swiper-container">
          <div class="image-slider__wrapper swiper-wrapper">
            <!-- Слайды первого слайдера -->
            <div class="image-slider__slide swiper-slide">
              <div class="image-slider__image">
                <img src="img/Росатом.png" alt="Росатом"/>
              </div>
            </div>
            <div class="image-slider__slide swiper-slide">
              <div class="image-slider__image">
                <img src="img/ВТБ.png" alt="ВТБ"/>
              </div>
            </div>
            <div class="image-slider__slide swiper-slide">
              <div class="image-slider__image">
                <img src="img/КУБГУ.png" alt="КУБГУ"/>
              </div>
            </div>
            <div class="image-slider__slide swiper-slide">
              <div class="image-slider__image">
                <img src="img/газпром.png" alt="Газпром"/>
              </div>
            </div>
          </div>

          <div class="image-slider__wrapper swiper-wrapper">
            <!-- Слайды 2 слайдера -->
            <div class="image-slider__slide swiper-slide">
              <div class="image-slider__image">
                <img src="img/Росатом.png" alt="Росатом"/>
              </div>
            </div>
            <div class="image-slider__slide swiper-slide">
              <div class="image-slider__image">
                <img src="img/ВТБ.png" alt="ВТБ"/>
              </div>
            </div>
            <div class="image-slider__slide swiper-slide">
              <div class="image-slider__image">
                <img src="img/КУБГУ.png" alt="КУБГУ"/>
              </div>
            </div>
            <div class="image-slider__slide swiper-slide">
              <div class="image-slider__image">
                <img src="img/газпром.png" alt="Газпром"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="FAQ">
    <div class="container">
      <h2 class="faq__title section__title">FAQ</h2>
      <div class="first__question">
        <h4 class="question__title spectitle section__title">
          <span class="num">1.</span>Кто непосредственно занимается
          поддержкой?
        </h4>
        <p class="question__text text">
          Сайты поддерживают штатные сотрудники ООО &laquo;Инитлаб&raquo;,
          г. Краснодар, прошедшие специальное обучение и&nbsp;имеющие опыт
          работы с&nbsp;Друпал от&nbsp;4&nbsp;до&nbsp;15&nbsp;лет:
          8&nbsp;web-разработчиков, 2&nbsp;специалиста по&nbsp;SEO,
          4&nbsp;системных администратора.
        </p>
      </div>
      <div class="faq-item">
        <h4 class="faq-question question__title section__title">
          <span class="num">2.</span> Как организована работа поддержки?
        </h4>
        <p class="faq-answer question__text text">
          Работа поддержки организована через систему заявок, каждая из которых распределяется по
          уровню сложности.
        </p>
      </div>
      <div class="faq-item">
        <h4 class="faq-question question__title section__title">
          <span class="num">3.</span> Что происходит, когда отработаны все предоплаченные часы за
          месяц?
        </h4>
        <p class="faq-answer question__text text">
          При переработке часов обсуждаются дополнительные соглашения и утверждается доплата.
        </p>
      </div>
      <div class="faq-item">
        <h4 class="faq-question question__title section__title">
          <span class="num">4.</span> Что происходит, когда не отработаны все предоплаченные часы за
          месяц?
        </h4>
        <p class="faq-answer question__text text">
          Неиспользованные часы переносятся на следующий месяц в виде бонуса.
        </p>
      </div>
      <div class="faq-item">
        <h4 class="faq-question question__title section__title">
          <span class="num">5.</span> Как происходит оценка и согласование планируемого времени на
          выполнение заявок?
        </h4>
        <p class="faq-answer question__text text">
          Сначала оценивается сложность задачи, затем согласовывается планируемое время выполнения с
          заказчиком.
        </p>
      </div>
      <div class="faq-item">
        <h4 class="faq-question question__title section__title">
          <span class="num">6.</span> Сколько программистов выделяется на проект?
        </h4>
        <p class="faq-answer question__text text">
          На проект выделяется команда из 2–4 программистов в зависимости от объема задач.
        </p>
      </div>
      <div class="faq-item">
        <h4 class="faq-question question__title section__title">
          <span class="num">7.</span> Как подать заявку на внесение изменений на сайте?
        </h4>
        <p class="faq-answer question__text text">
          Заявки принимаются через специальный портал или по электронной почте.
        </p>
      </div>
      <div class="faq-item">
        <h4 class="faq-question question__title section__title">
          <span class="num">8.</span> Как подать заявку на добавление пользователя или другие задачи
          по администрированию?
        </h4>
        <p class="faq-answer question__text text">
          Для администрирования подайте заявку через портал, указав подробное описание задачи.
        </p>
      </div>
      <div class="faq-item">
        <h4 class="faq-question question__title section__title">
          <span class="num">9.</span> В течение какого времени начинается работа по заявке?
        </h4>
        <p class="faq-answer question__text text">
          Работа начинается в течение 24 часов с момента подтверждения заявки.
        </p>
      </div>
      <div class="faq-item">
        <h4 class="faq-question question__title section__title">
          <span class="num fixnum">10.</span> В какое время работает поддержка?
        </h4>
        <p class="faq-answer question__text text">
          Поддержка работает с 9:00 до 18:00 по рабочим дням.
        </p>
      </div>
      <div class="faq-item">
        <h4 class="faq-question question__title section__title">
          <span class="num fixnum">11.</span> Подходят ли услуги поддержки для обновления ядра
          Drupal или модулей?
        </h4>
        <p class="faq-answer question__text text">
          Да, услуги включают обновление ядра и модулей Drupal.
        </p>
      </div>
      <div class="faq-item">
        <h4 class="faq-question question__title section__title">
          <span class="num fixnum">12.</span> Можно ли пообщаться со специалистом голосом или в
          мессенджере?
        </h4>
        <p class="faq-answer question__text text">
          Да, возможна консультация голосом или через мессенджеры по предварительной договоренности.
        </p>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(function () {
      var speed = 200; // Скорость анимации
      var classOpened = 'opened'; // Класс для открытого вопроса

      $(document).ready(function () {
        // Обработка клика на вопрос
        $('.question__title').on('click', function () {
          var $answer = $(this).next('.question__text'); // Найти следующий элемент с ответом

          // Закрыть другие ответы
          if (!$answer.is(':visible')) {
            $('.question__text').slideUp(speed); // Скрыть все ответы
            $('.question__title').removeClass(classOpened); // Убрать класс "opened" со всех заголовков
          }

          // Открыть или закрыть текущий ответ
          $answer.slideToggle(speed);
          $(this).toggleClass(classOpened);
        });
      });
    });
  </script>
  <script>
    document.querySelector(".hero__btn").addEventListener("click", function () {
      document.querySelector(".tariffs").scrollIntoView({
        behavior: "smooth",
      });
    });
  </script>


</main>

<footer id="contacts" class="footer">
    <div class="container2">
        <div class="footer__top flex">
            <div class="feedback"> <h2 class="footer__title section__title"> Регистрация </h2> <p class="footer__text text"> Заполните форму регистрации, чтобы получить доступ к вашему профилю. </p> </div>
            <form class="footer__form flex" method="POST" id="registrationForm" action="submit.php">
                <input class="input" type="text" name="fio" placeholder="ФИО" required>
                <input class="input" type="tel" name="tel" placeholder="Телефон" required>
                <input class="input" type="email" name="email" placeholder="E-mail" required>
                <input class="input" type="date" name="date" required>
<div class="gender-options" style="display: flex; gap: 15px; margin-bottom: 15px; color: white;">
    <label style="display: flex; align-items: center;">
        <input type="radio" name="gender" value="male" required> Мужской
    </label>
    <label style="display: flex; align-items: center;">
        <input type="radio" name="gender" value="female"> Женский
    </label>
</div>

                <select class="input" name="plang[]" multiple required style="height: 120px;">

    <?php
    $db = new PDO("mysql:host=localhost;dbname=u70422", 'u70422', '4545635');
    $languages = $db->query("SELECT * FROM programming_languages")->fetchAll();
    foreach ($languages as $lang): ?>
        <option value="<?= $lang['id'] ?>"><?= htmlspecialchars($lang['name']) ?></option>
    <?php endforeach; ?>

                    <option value="Pascal">Pascal</option>
                    <option value="C">C</option>
                    <option value="C++">C++</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="PHP">PHP</option>
                    <option value="Haskell">Haskell</option>
                    <option value="Clojure">Clojure</option>
                    <option value="Prolog">Prolog</option>
                    <option value="Scala">Scala</option>
                </select>

                <textarea class="form__textarea" name="bio" placeholder="Биография" required></textarea>

                <label class="form__check">
                    <input class="label__input" type="checkbox" required>
                    С контрактом ознакомлен(а)
                </label>

                <button class="footer__btn btn__reset" type="submit">ЗАРЕГИСТРИРОВАТЬСЯ</button>

                <div class="form-links" style="margin-top: 20px; text-align: center;">
<a href="login.php" style="color: #f14d34;">Вход в систему</a>
                </div>
            </form>
        </div>
    </div>
</footer>

</body>

<script>
    document.getElementById('registrationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const form = e.target;
    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Создаем модальное окно с данными
            const modal = document.createElement('div');
            modal.style.position = 'fixed';
            modal.style.top = '0';
            modal.style.left = '0';
            modal.style.width = '100%';
            modal.style.height = '100%';
            modal.style.backgroundColor = 'rgba(0,0,0,0.7)';
            modal.style.display = 'flex';
            modal.style.justifyContent = 'center';
            modal.style.alignItems = 'center';
            modal.style.zIndex = '1000';

            modal.innerHTML = `
                <div style="background: white; padding: 20px; border-radius: 5px; max-width: 500px;">
                    <h2>Регистрация успешна!</h2>
                    <p>Логин: <span id="login">${data.login}</span></p>
                    <p>Пароль: <span id="password">${data.password}</span></p>
                    <p>Сохраните эти данные для входа в систему</p>
                    <button onclick="this.parentNode.parentNode.remove(); window.location.href='login.php'" 
                            style="padding: 10px 20px; background: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Перейти к странице входа
                    </button>
                </div>
            `;
            
            document.body.appendChild(modal);
        } else {
            alert('Ошибка: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Ошибка:', error);
        alert('Ошибка при отправке формы');
    });
});
</script>

<script>
  document.querySelectorAll('.card__btn').forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = button.getAttribute('data-target');
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop,
          behavior: 'smooth'
        });
      }
    });
  });

</script>
<script type="module" defer src="js/main.js"></script>

</html>


