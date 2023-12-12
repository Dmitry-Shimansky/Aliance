<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/modernizr.js"></script>
  <title>Aliance Production</title>
  <link rel="icon" href="img/favicon/favicon.png" size="any">
</head>

<body class="front-page">
  <div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="./about.php" class="mobile-menu-link">О компании</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./trademarks.php" class="mobile-menu-link">Собственные торговые марки</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автохимия AP</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./news.php" class="mobile-menu-link">Новости</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./contacts.php" class="mobile-menu-link">Контакты</a>
      </li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
    <div class="mobile-info">
      <svg class="mobile-logo-svg">
        <use href="img/sprite.svg#mark"></use>
      </svg>
      <address class="mobile-info-address">
        г. Мосвка, Холодильный пер. 4к1с8
      </address>
    </div>
    <!-- /.mobile-info -->
    <div class="mobile-info">
      <svg class="mobile-logo-svg">
        <use href="img/sprite.svg#mail"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
        a.dragunov@tdaliance.ru
      </a>
    </div>
    <!-- /.mobile-info -->
    <div class="social-network-icons">
      <a href="#" class="social-network-icon-vk">
        <svg class="mobile-logo-svg">
          <use href="img/sprite.svg#vk"></use>
        </svg>
      </a>
      <a href="#" class="social-network-icon-instagram">
        <svg class="mobile-logo-svg">
          <use href="img/sprite.svg#inst"></use>
        </svg>
      </a>
    </div>
    <!-- /.social-networks-icon -->
  </div>
  <nav class="navbar">
    <a href="#" class="mobile-menu-toggle">
      <div class="mobil-menu-line"></div>
      <div class="mobil-menu-line"></div>
      <div class="mobil-menu-line"></div>
    </a>
    <a href="./" class="header-logo">
      <svg class="logo-svg logo-light">
        <use href="img/sprite.svg#logo-light"></use>
      </svg>
      <svg class="logo-svg logo-dark">
        <use href="img/sprite.svg#logo"></use>
      </svg>
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="./about.php" class="header-nav-link">О компании</a>
      </li>
      <li class="header-nav-item">
        <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a href="./news.php" class="header-nav-link">Новости</a>
      </li>
      <li class="header-nav-item">
        <a href="./contacts.php" class="header-nav-link">Контакты</a>
      </li>
    </ul>
    <div class="header-phone">
      <svg class="phone-icon" width="16" height="17">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
    </div>
    <!-- /.header-phone -->
    <button class="header-button button" data-toggle="modal" data-target="#feedback-modal">
      <svg class="phone-icon" width="16" height="17">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
  </nav>
  <!-- /.navbar -->
  <header class="header header-image">
    <div class="container">
      <div class="header-content">
        <div class="separator"></div>
        <h1 class="header-title">
          Комплексное обеспечение товарами и расходными материалами бизнеса
        </h1>
        <p class="header-text">
          Высокий уровень вовлечения представителей целевой аудитории является
          четким доказательством простого факта: высококачественный прототип
          будущего проекта напрямую зависит от анализа существующих паттернов
          поведения.
        </p>
        <button class="header-text-button button" data-toggle="modal" data-target="#feedback-modal">
          Подробнее о компании
        </button>
      </div>
      <!-- /.header-content -->
      <!-- Slider main container -->
      <?php
      $arrow_prev_color = "arrow-prev-white";
      $arrow_next_color = "arrow-next-white";
      include_once('./template-parts/main-slider-block.php') ?>
      <!-- /.swiper -->
    </div>
    <!-- /.container -->
  </header>
  <?php
  $arrow_prev_color = "arrow-prev-white";
  $arrow_next_color = "arrow-next-white";
  include_once('./template-parts/working-schema-block.php'); ?>
  <?php
  $block_title = 'контрактное производство';
  include_once('./template-parts/section-production-block.php'); ?>
  <!-- /.section production -->
  <?php
  $block_title = 'собственные <span class="trade-word">торговые</span> марки';
  include_once('./template-parts/trademarks-block.php'); ?>
  <!-- /.trade-marks -->
  <?php include_once('./template-parts/founder-block.php'); ?>
  <!-- /.section-founder -->
  <?php include_once('./template-parts/clients-block.php'); ?>
  <!-- /.section clients -->
  <?php
  $block_title = "Блог экспертов в области производства";
  $blog_card = "blog-card";
  include_once('./template-parts/blog-block.php'); ?>
  <!-- /.section blog -->
  <?php
  $display_none = "cta";
  include_once('footer.php'); ?>