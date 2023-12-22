<?php
$page_title = "Страница не найдена";
$header_style = "display-none";
$display_none = "display-none";
$bred_crumbs_separator_class = "bred-crumbs-separator";
$bred_crumbs_item_class = "bred-crumbs-item";
include_once('header-page.php'); ?>
<section class="section error">
  <div class="container">
    <div class="error-content-wrapper">
      <h2 class="error-number">404</h2>
      <h3 class="error-title">Страница не найдена</h3>
      <p class="error-text">Мы не смогли найти страницу с таким адресом, попробуйте перейти на главную или напишите нам.</p>
      <a href="./index.php" class="error-button-link">
        <button class="button modal-form-button modal-thankyou-button error-button">Вернуться на главную</button>
      </a>
    </div>
  </div>
</section>
<?php
$display_none = "cta";
include_once('footer.php'); ?>