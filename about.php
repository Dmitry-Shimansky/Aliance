<?php 
$page_title = "O компании";
$header_style = "section-header";
include_once('header-page.php');?>
<section class="section experts">
  <div class="container">
    <div class="experts-content-wraper">
      <img src="img/group_57.png" alt="experts" class="experts-photo" />
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
    include_once('./template-parts/main-slider-block.php');?>
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
      <img src="img/our-production.png" alt="our-production" class="our-production-photo" />
    </div>
  </div>
</section>
<!-- /.section our-production -->
<?php include_once('./template-parts/founder-block.php');?>
<section class="section research">
  <div class="container">
      <div class="research-content">
        <div class="separator"></div>
        <h2 class="section-title research-title">
        Исследовательский центр Aliance production
        </h2>
        <div class="research-text-wrapper">
          <p class="research-text">
          Явные признаки победы институционализации рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Приятно, граждане, наблюдать, как активно развивающиеся страны третьего мира могут быть ограничены исключительно образом мышления. Лишь независимые государства набирают популярность среди определенных слоев населения, а значит, должны быть указаны как претенденты на роль ключевых факторов. Лишь акционеры крупнейших компаний могут быть призваны к ответу.
          </p>
          <p class="research-text">
          С учётом сложившейся международной обстановки, синтетическое тестирование требует определения и уточнения анализа существующих паттернов поведения. Не следует, однако, забывать, что высокотехнологичная концепция общественного уклада представляет собой интересный эксперимент проверки как самодостаточных, так и внешне зависимых концептуальных решений. Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление однозначно фиксирует необходимость стандартных подходов.
          </p>
        </div>
      </div>
      <?php 
      $display = "display-none";
      $display_blog_link = "display-none";
      $buttons_block = "blog-slider-research";
      $blog_card = "blog-card-research";
      include_once('./template-parts/blog-slider-block.php');?>
  </div>
</section>
<!-- /.section research -->
<?php 
$clients_about = "clients-about-page";
include_once('./template-parts/clients-block.php');?>
<?php include_once('footer.php');?>
