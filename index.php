<?php get_header() ?>
<main>
  <div class="container">
    <div class="row">
      <div class="col banner__info">
        <h1>
        ИЗГОТОВЛЕНИЕ
        <br> ЗНАЧКОВ, МЕДАЛЕЙ,
        <br> МОНЕТ НА ЗАКАЗ
        </h1>
        <p class="banner__desc">
          Бесплатная доставка в любую точку России.
          Разработаем дизайн-макета с нуля или доработаем имеющийся.
        </p>
        <a class="banner__calc-btn popup__link" href="#popup__calc">РАССЧИТАТЬ ЗАКАЗ</a>
      </div>
      <div class="col">
        <div class="banner__slideshow">
          <div class="banner__slide">
            <img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/school.jpg" alt="">
          </div>
          <div class="banner__slide">
            <img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/coin2.jpg" alt="">
          </div>
          <div class="banner__slide">
            <img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/vvkbadge.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-sm-12 block-center">
<!-- <a class="send_btn" href="javascript://0" onclick="slowScroll ('#contact-form')">
            Оставить заявку
          </a> -->
        <a class="icon-down block__center" href="javascript://0" onclick="slowScroll ('#about')"></a>
      </div>
    </div>
  </div>
  <div id="popup__calc" class="mfp-hide popup__contact">
<!--     <form id="contactForm" name="sentMessage" novalidate>
      <div class="row">
        <div class="col-sm-12 text-center">
          <input class="contact-form__input" type="text" placeholder="Имя *" required>
          <input class="contact-form__input" type="email" placeholder="Email *" required>
          <input id="phone" class="contact-form__input" type="text" placeholder="Телефон *" required>
        </div>
        <div class="col-sm-12 col-sm-12">
          <textarea class="contact-form__msg" id="message" placeholder="Детали заказа ..." required data-validation-required-message="Please enter a message."></textarea>
        </div>
        <div class="col-sm-12 text-center">
          <div id="contact-form__success"></div>
          <input class="send_btn" type="submit" value="рассчитать">
        </div>
      </div>
    </form> -->
      <!-- contact forms -->
      <?php echo do_shortcode('[contact-form-7 id="185" title="Расчет заказа"]'); ?>
  </div>
  <div id="about" class="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="block__title">
          МЫ ИЗГОТАВЛИВАЕМ
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="about__item col-lg-4 text-center">
          <img class="about__img" src="<?php bloginfo('template_url') ?>/img/medal.png" alt="">
          <p class="about__name">
            Спортивные медали
          </p>
          <p class="about__price">
            От 96 руб/шт
          </p>
          <a class="call-back-btn popup__link" href="#popup__calc" class="">Рассчитать</a>
        </div>
        <div class="about__item col-lg-4 text-center">
          <img class="about__img" src="<?php bloginfo('template_url') ?>/img/ordena3.png" alt="">
          <p class="about__name">
            НАГРАДНЫЕ МЕДАЛИ
          </p>
          <p class="about__price">
            От 88 руб/шт
          </p>
          <a class="call-back-btn popup__link" href="#popup__calc" class="">Рассчитать</a>
        </div>
        <div class="about__item col-lg-4 text-center">
          <img class="about__img" src="<?php bloginfo('template_url') ?>/img/badges.png" alt="">
          <p class="about__name">
            ЗНАЧКИ С ЛОГОТИПОМ
          </p>
          <p class="about__price">
            От 62 руб/шт
          </p>
          <a class="call-back-btn popup__link" href="#popup__calc" class="">Рассчитать</a>
        </div>
      </div>
      <div class="row">
        <div class="about__item col-lg-7 text-center">
          <img class="about__img" src="<?php bloginfo('template_url') ?>/img/coins.png" alt="">
          <p class="about__name">
            СУВЕНИРНЫЕ МОНЕТЫ
          </p>
          <p class="about__price">
            От 59 руб/шт
          </p>
          <a class="call-back-btn popup__link" href="#popup__calc" class="">Рассчитать</a>
        </div>
        <div class="about__item col-lg-2 text-center">
          <img class="about__img" src="<?php bloginfo('template_url') ?>/img/brelok1l.png" alt="">
          <p class="about__name">
            БРЕЛОКИ
          </p>
          <p class="about__price">
            От 43 руб/шт
          </p>
          <a class="call-back-btn popup__link" href="#popup__calc" class="">Рассчитать</a>
        </div>
      </div>
    </div>
    
  </div>
  <div class="cases">
    <h2 class="block__title">
    КЕЙСЫ
    </h2>
    <p class="text-center">
      Наши последние выполненные работы с подробным описанием
    </p>
    <div class="container">
      <div class="cases__slider">
        <div class="cases__slide">
          <div class="row">
            <div class="col-lg-6">
              <img src="<?php bloginfo('template_url') ?>/img/case1.jpg" alt="" class="cases__img img-responsive">
            </div>
            <div class="col-lg-6 cases__info">
              <p class="cases__title">
                Знаки для ветеранов ГЖД.
              </p>
              <p class="cases__desc">
                Знаки для ветеранов ГЖД. Знак изготовлен по эскизу заказчика. Применялась технология штамповка с гальванизацией под золото и нанесением мягких эмалей. На аверсе 3D изображение, на реверсе установлена безопасная булавка для крепления на одежду.
              </p>
              <div class="cases__thumbnails">
                <a class="cases__trigger" href="#">
                  <img src="<?php bloginfo('template_url') ?>/img/case1m.jpg" alt="">
                </a>
                <a class="cases__trigger" href="#">
                  <img src="<?php bloginfo('template_url') ?>/img/case12m.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="cases__slide">
          <div class="row">
            <div class="col-lg-6">
              <img src="<?php bloginfo('template_url') ?>/img/case1.jpg" alt="" class="cases__img img-responsive">
            </div>
            <div class="col-lg-6 cases__info">
              <p class="cases__title">
                Значки для группы компаний "ВВК".
              </p>
              <p class="cases__desc">
                Был разработан дизайн значка с логотипом заказчика.
                Применялась технология штамповка с гальванизацией под серебро и нанесением мягких эмалей.
              </p>
              <div class="cases__thumbnails">
                <a class="cases__trigger" href="#">
                  <img src="<?php bloginfo('template_url') ?>/img/case1m.jpg" alt="">
                </a>
                <a class="cases__trigger" href="#">
                  <img src="<?php bloginfo('template_url') ?>/img/case12m.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="cases__slide">
          <div class="row">
            <div class="col-lg-6">
              <img src="<?php bloginfo('template_url') ?>/img/case1.jpg" alt="" class="cases__img img-responsive">
            </div>
            <div class="col-lg-6 cases__info">
              <p class="cases__title">
                Наградные знаки для выпускников Неклиновской летной школы.
              </p>
              <p class="cases__desc">
                Заказчик отправил нам фото знака и требовалось воссоздать точную его копию. С задачей справились на 100%.
                Технология: штамповка с гальванизацией под серебро и нанесением мягких эмалей.
                На аверсе 3D изображение, на реверсе установлен винт с гайкой
              </p>
              <div class="cases__thumbnails">
                <a class="cases__trigger" href="#">
                  <img src="<?php bloginfo('template_url') ?>/img/case1m.jpg" alt="">
                </a>
                <a class="cases__trigger" href="#">
                  <img src="<?php bloginfo('template_url') ?>/img/case12m.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="cases__slide">
          <div class="row">
            <div class="col-lg-6">
              <img src="<?php bloginfo('template_url') ?>/img/case1.jpg" alt="" class="cases__img img-responsive">
            </div>
            <div class="col-lg-6 cases__info">
              <p class="cases__title">
                Наградные медали на колодке.
              </p>
              <p class="cases__desc">
                Заказчик прислал примерный эскиз медали. Нами были сделаны доработки и адаптация дизайн-макета под производство.
                Технология: штамповка 3D
                Комбинированное покрытие -золото + серебро.
                Мягкие эмали.
                Крепление: безопасная булавка.
              </p>
              <div class="cases__thumbnails">
                <a class="cases__trigger" href="#">
                  <img src="<?php bloginfo('template_url') ?>/img/case1m.jpg" alt="">
                </a>
                <a class="cases__trigger" href="#">
                  <img src="<?php bloginfo('template_url') ?>/img/case12m.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="cases__slide">
          <div class="row">
            <div class="col-lg-6">
              <img src="<?php bloginfo('template_url') ?>/img/case1.jpg" alt="" class="cases__img img-responsive">
            </div>
            <div class="col-lg-6 cases__info">
              <p class="cases__title">
                Коллекция сувенирных монет.
              </p>
              <p class="cases__desc">
                Иркутский предприниматель дал нам задание разработать дизайн и сделать монеты с достопримечательностями его города и Байкала.
                Было разработано 3 вида монет каждая с оригинальным изображением на обеих сторонах.
                Технология: штамповка 3D
                Покрытие: античная бронза
              </p>
              <div class="cases__thumbnails">
                <a class="cases__trigger" href="#">
                  <img src="<?php bloginfo('template_url') ?>/img/case1m.jpg" alt="">
                </a>
                <a class="cases__trigger" href="#">
                  <img src="<?php bloginfo('template_url') ?>/img/case12m.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="calc">
    <h2 class="block__title">
    КАЛЬКУЛЯТОР СТОИМОСТИ
    </h2>
    <p class="text-center">
      здесь будет калькулятор
    </p>
  </div>
  <div class="container">
    <p class="callback__desc">
      Для более точного расчета оставьте ваши контакты и мы свяжемся с вами в течении <strong>5 минут</strong>
    </p>
    <div class="col-sm-12 text-center">
      <a href="javascript://0" onclick="slowScroll ('#contact-form')" class="send_btn h-margin">
        связаться с нами
      </a>
    </div>
  </div>
  <div class="offer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-6 text-center">
          <p class="offer__desc">
            Только <strong>в ноябре</strong> скидка на производство любых медалей 10%
          </p>
          
          <a href="javascript://0" onclick="slowScroll ('#contact-form')" class="offer__btn">
            получить скидку!
          </a href="#contact-form">
          
        </div>
      </div>
    </div>
  </div>
  <div class="container production">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="block__title">
        ПРОИЗВОДСТВО
        </h2>
      </div>
    </div>
    <div class="row production__item">
      <div class="col-sm-12 col-md-1 text-right">
        <p class="production__number">
          1
        </p>
      </div>
      <div class="col-sm-12 col-md-5">
        <p class="production__desc">
          Наше производство оснащено всем необходимым оборудованием. Таким образом мы можем производить любую сувенирную и наградную продукцию
        </p>
      </div>
      <div class="col-sm-12 col-md-6">
        <img src="<?php bloginfo('template_url') ?>/img/1product.jpg" class="img-responsive" alt="">
      </div>
    </div>
    <div class="row production__item">
      <div class="col-sm-12 col-md-6">
        <img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/2product.jpg" alt="">
      </div>
      <div class="col-sm-12 col-md-1 text-right">
        <p class="production__number">
          2
        </p>
      </div>
      <div class="col-sm-12 col-md-5">
        
        <p class="production__desc">
          Прессы с усилием по 400 тонн позволяют добиться идеального качества штамповки - изящность и тонкость линий, мельчайшая проработка 3D элементов.
        </p>
      </div>
    </div>
    <div class="row production__item">
      <div class="col-sm-12 col-md-1 text-right">
        <p class="production__number">
          3
        </p>
      </div>
      <div class="col-sm-12 col-md-5">
        <p class="production__desc">
          Производственная мощность завода составляет 6 млн. зачков в месяц. Основными рынками сбыта являются:
          <ul class="production__list">
            <li>
              США
            </li>
            <li>
              Европа
            </li>
            <li>
              Россия
            </li>
            <li>
              Китай
            </li>
          </ul>
        </p>
      </div>
      <div class="col-sm-12 col-md-6">
        <img src="<?php bloginfo('template_url') ?>/img/3product.jpg"  class="img-responsive" alt="">
      </div>
    </div>
    <div class="row production__item">
      <div class="col-sm-12 col-md-6">
        <img src="<?php bloginfo('template_url') ?>/img/4product.jpg"  class="img-responsive" alt="">
      </div>
      <div class="col-sm-12 col-md-1 text-right">
        <p class="production__number">
          4
        </p>
      </div>
      <div class="col-sm-12 col-md-5">
        <p class="production__desc">
          Для наших клиентов мы подготовили полный цикл производства от самого изделия до упаковочных решений (флокированные коробки, кейсы, плакетки), лент и даже удостоверений.
        </p>
      </div>
    </div>
    <div class="row production__callback">
      <div class="col-sm-12">
        <h2 class="block__title production__subtitle">
        Избавьтесь от рисков, работая с профессионалами!
        </h2>
      </div>
      
      <div class="col-sm-12 text-center">
        <a href="javascript://0" onclick="slowScroll ('#contact-form')" class="send_btn production__btn">
          проконсультироваться с начальником производства
        </a>
      </div>
    </div>
  </div>
  <h2 class="block__title">
  РАБОТАЕМ ПО ДОГОВОРУ!
  </h2>
  <div class="container contract">
    <div class="col-sm-12  text-center">
      <a href="" class="send_btn contract__btn">
        скачать образец договора
      </a>
    </div>
  </div>
  <div class="pay">
    <div class="container">
      <div class="row">
        <div class="offset-lg-1 col-lg-6">
          <div class="pay__about">
            <p class="pay__att">
              Мы не берем 100% предоплату.
            </p>
            <p class="pay__desc">
              Мы предоставляем всем клиентам возможность ознакомиться с образцом изделия перед производством всей партии. Вы платите <strong>только за пресс-форму</strong> (10-50%)
            </p>
          </div>
        </div>
        
        <div class="offset-lg-1 col-lg-4">
          <img class="pay__img img-responsive" src="<?php bloginfo('template_url') ?>/img/perepis.png" alt="">
        </div>
        <div class="col-sm-12 offset-lg-1 col-lg-6 text-center">
          <a class="send_btn" href="javascript://0" onclick="slowScroll ('#contact-form')">
            Оставить заявку
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="block__title">
          ПОЧЕМУ ВЫБИРАЮТ ИМЕННО НАС?
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <img src="<?php bloginfo('template_url') ?>/img/11.png" alt="">
          <p class="features__subtitle">
            ЦЕНЫ
          </p>
          <p class="features__desc">
            Как правило мы предлагаем цены ниже чем у конкурентов, потому что наш завод расположен в Китае
          </p>
        </div>
        <div class="col text-center">
          <img src="<?php bloginfo('template_url') ?>/img/2.png" alt="">
          <p class="features__subtitle">
            ПРИНЦИПЫ
          </p>
          <p class="features__desc">
            Мы не берем с вас 100% предоплату, а даем возможность посмотреть образец изделия взяв плату только за пресс-форму
          </p>
        </div>
        <div class="col text-center">
          <img src="<?php bloginfo('template_url') ?>/img/3.png" alt="">
          <p class="features__subtitle">
            ВОЗМОЖНОСТИ
          </p>
          <p class="features__desc">
            Можем изготовить изделие любой формы и размера. Возможности не ограничены
          </p>
        </div>
        <div class="col text-center">
          <img src="<?php bloginfo('template_url') ?>/img/4.png" alt="">
          <p class="features__subtitle">
            СРОКИ
          </p>
          <p class="features__desc">
            3 дня - на дизайн<br>
            7 дней - на образцы<br>
            14 дней - вся партия
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <img src="<?php bloginfo('template_url') ?>/img/7.png" alt="">
          <p class="features__subtitle">
            ОХВАТ
          </p>
          <p class="features__desc">
            Работаем по всей России
            Доставка Бесплатно!
          </p>
        </div>
        <div class="col text-center">
          <img src="<?php bloginfo('template_url') ?>/img/5.png" alt="">
          <p class="features__subtitle">
            ПОДХОД
          </p>
          <p class="features__desc">
          Индивидуальный подход к каждому клиенту. Разработаем дизайн-макет с нуля или доработаем имеющийся       </p>
        </div>
        <div class="col text-center">
          <img src="<?php bloginfo('template_url') ?>/img/6.png" alt="">
          <p class="features__subtitle">
            ГАРАНТИИ
          </p>
          <p class="features__desc">
            Гарантируем качество продукции, или вернем деньги.
            Жесткий контроль на каждом этапе производства
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="delivery">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="block__title">
        ДОСТАВИМ ЗАКАЗ ПО ВСЕЙ РОССИИ БЕСПЛАТНО!
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/russia1.png" alt="">
      </div>
    </div>
  </div>
</div>
<div class="contact-form" id="contact-form">
  <?php echo do_shortcode('[contact-form-7 id="188" title="Основная контактная форма"]'); ?>
  
<!--   <div class="container">
    <div class="row">
      
      <div class="col-sm-12">
        <h2 class="block__title contact-form__title">
        Контактная форма
        </h2>
      </div>
      <form id="contactForm" name="sentMessage" novalidate>
        <div class="row">
          <div class="col-md-6 text-center">
            <input class="contact-form__input" type="text" placeholder="Имя *" required>
            
            
            <input class="contact-form__input" type="email" placeholder="Email *" required>
            
            
            <input id="phone" class="contact-form__input" type="text" placeholder="Телефон *" required>
          </div>
          <div class="col-sm-12 col-md-6">
            <textarea class="contact-form__msg" id="message" placeholder="Ваше сообщение ..." required data-validation-required-message="Please enter a message."></textarea>
          </div>
          <div class="col-md-12 text-center">
            <p class="check__title">
              Как с вами удобнее связаться?
            </p>
            
            
            <div class="check">
              
              <label class="check__item">
                <input class="check__checkbox" type="checkbox" name="msgEmail" value="msgEmail">
                Письмо на E-mail
              </label>
              
              <label class="check__item">
                <input class="check__checkbox" type="checkbox" name="callPhone" value="callPhone">
                Позвонить по телефону
              </label>
            </div>
          </div>
          <div class="col-sm-12 text-center">
            <div id="contact-form__success"></div>
            <input class="send_btn" type="submit" value="отправить сообщение">
          </div>
        </div>
      </form>
    </div>
  </div> -->
</div>
      <div class="footer__contacts">
            <div class="container">
                  <div class="row footer__wrap">
                        <div class="col footer__map">
                              <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0f489174630f1e721ddd631c02f22d8c00c7ab1316c4d1aa555494ee8b73c803&amp;source=constructor" width="587" height="100%" frameborder="0"></iframe>
                        </div>
                        <div class="col footer__item">
                              <h2 class="block__title footer__title">
                              КАК НАС НАЙТИ:
                              </h2>
                              <a class="footer__place" href="https://yandex.ru/maps/-/CBe5eEDDtB
                                    ">
                                    <div class="icon-map"></div>
                                    <span class="footer__desc">Иркутск<br>
                                    Пискунова 54</span>
                              </a>
                              <div class="footer__phones-wrap">
                                    <div class="icon-phone"></div>
                                    <div class="footer__phones">
                                          <a class="footer__phone" href="+7 (3952) 92-02-33">
                                                +7 (3952) 92-02-33
                                          </a>
                                          <a class="footer__phone" href="+7 (964) 652-02-33">
                                                +7 (964) 652-02-33
                                          </a>
                                    </div>
                              </div>
                              
                        </div>
                  </div>
            </div>
      </div>
</main>
<?php get_footer() ?>