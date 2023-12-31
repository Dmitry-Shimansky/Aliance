<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="js/modernizr.js"></script>
  <link rel="stylesheet" href="css/style.css" />
  <title><?php echo $page_title ?> - Aliance Production</title>
  <link rel="icon" href="img/favicon/favicon.png" size="any">
</head>

<body>
  <div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="./about.php" class="mobile-menu-link">О компании</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="./auto-chemistry.php">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="./todo.php">Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="./todo.php">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="./todo.php">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="./todo.php">Косметическая продукция</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="./todo.php">Краски аэрозольные</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./trademarks.php" class="mobile-menu-link">Собственные торговые марки</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="./todo.php">Автохимия AG-Tech</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="./todo.php">Автохимия AP</a>
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
        г. Москва, Холодильный пер. 4к1с8
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
      <a href="./todo.php" class="social-network-icon-vk">
        <svg class="mobile-logo-svg">
          <use href="img/sprite.svg#vk"></use>
        </svg>
      </a>
      <a href="./todo.php" class="social-network-icon-instagram">
        <svg class="mobile-logo-svg">
          <use href="img/sprite.svg#inst"></use>
        </svg>
      </a>
    </div>
    <!-- /.social-networks-icon -->
  </div>
  <!-- /.mobile-menu -->
  <nav class="navbar navbar-light">
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
  <section class="section <?= $header_style ?>">
    <div class="container">
      <div class="section-header-wrapper">
        <div class="left-section-header-wrapper">
          <div class="separator"></div>
          <h2 class="section-title 
            <?php if (!empty($section_header_title)) {
              echo $section_header_title;
            } else {
              echo 'section-header-title';
            } ?>"><?= $page_title ?></h2>
          <div class="bread-crumbs-wrapper">
            <a href="./index.php" class="<?= $bred_crumbs_item_class ?> hover">Главная</a>
            <div class="<?= $bred_crumbs_separator_class ?>"></div>
            <?php
            if ($bred_crumbs_item == "Контрактное производство") {
              echo '
                  <a href="./contracts.php" class="' . $bred_crumbs_item_class . ' hover">' . $bred_crumbs_item . '</a>
                  <div class="' . $bred_crumbs_separator_class . '"></div>
                ';
            };
            if ($bred_crumbs_item == "Блог") {
              echo '
                  <a href="./blog.php" class="' . $bred_crumbs_item_class . ' hover">' . $bred_crumbs_item . '</a>
                  <div class="' . $bred_crumbs_separator_class . '"></div>
                ';
            }; ?>
            <a href="#" class="<?= $bred_crumbs_item_class ?> hover"><?= $page_title ?></a>
          </div>
        </div>
        <!-- <picture class="<?= $display_none ?>">
          <source type="image/webp" srcset="img/avto-him.webp">
          <source type="image/png" srcset="img/avto-him.png">
          <img src="img/avto-him.png" alt="Ballon">
        </picture> -->
        <img src="img/avto-him.png" alt="Ballon" class="<?= $display_none ?>" />
      </div>
    </div>
  </section>
  <!-- /.section section-header -->