<?php
$page_title = "O компании";
$header_style = "section-header";
$display_none = "display-none";
$bred_crumbs_separator_class = "bred-crumbs-separator";
$bred_crumbs_item_class = "bred-crumbs-item";
include_once('header-page.php'); ?>
<section class="section experts">
  <div class="container">
    <div class="experts-content-wraper">
      <picture class="experts-photo">
        <source type="image/webp" srcset="img/group_57.webp">
        <source type="image/png" srcset="img/group_57.png">
        <img src="img/group_57.png" alt="experts">
      </picture>
      <!-- <img src="img/group_57.png" alt="experts" class="experts-photo" /> -->
      <div class="experts-content">
        <div class="separator"></div>
        <h2 class="section-title experts-title-founder">
          мы - эксперты в области производства химии
        </h2>
        <p class="experts-text">
          Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
        </p>
      </div>
    </div>
    <?php
    $swiper_feature_item = "expert-feature-item";
    $swiper_features_text = "expert-feature-text";
    $slider_button = "expert-slider-button";
    $arrow_prev_color = "arrow-prev-black";
    $arrow_next_color = "arrow-next-black";
    include_once('./template-parts/main-slider-block.php'); ?>
  </div>
</section>
<!-- /.section experts -->
<section class="section our-production">
  <div class="container">
    <div class="our-production-content-wraper">
      <div class="our-production-content">
        <div class="separator"></div>
        <h2 class="section-title our-production-title">
          Наше производство
        </h2>
        <p class="our-production-text">
          Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
        </p>
        <p class="our-production-text">
          Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
        </p>
        <ul class="clients-list">
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#carwash"></use>
            </svg>
            Автомобильная химия
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#home"></use>
            </svg>
            Бытовая химия
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#dis"></use>
            </svg>
            Дезинфицирующие средства
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#aerozol"></use>
            </svg>
            Пищевые аэрозоли
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#cosmetic-staff"></use>
            </svg>
            Косметическая продукция
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#varnishes-and-paints"></use>
            </svg>
            Краски аэрозольные
          </li>
        </ul>
      </div>
      <picture class="our-production-photo">
        <source type="image/webp" srcset="img/our-production.webp">
        <source type="image/png" srcset="img/our-production.png">
        <img src="img/our-production.png" alt="our-production">
      </picture>
      <!-- <img src="img/our-production.png" alt="our-production" class="our-production-photo" /> -->
    </div>
  </div>
</section>
<!-- /.section our-production -->
<?php include_once('./template-parts/founder-block.php'); ?>
<?php include_once('./template-parts/research-block.php'); ?>
<?php
$clients_about = "clients-about-page";
include_once('./template-parts/clients-block.php'); ?>
<?php
$display_none = "cta";
include_once('footer.php'); ?>