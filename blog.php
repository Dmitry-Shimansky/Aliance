<?php
$page_title = "Блог";
$header_style = "section-header";
$display_none = "display-none";
$bred_crumbs_separator_class = "bred-crumbs-separator";
$bred_crumbs_item_class = "bred-crumbs-item";
include_once('header-page.php'); ?>
<section class="section blog-page">
  <div class="container">
    <div class="swiper blog-page-slider">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php include_once('./template-parts/blog-cards.php'); ?>
      </div>
      <!-- If we need pagination -->
      <div class="pagination-bullets-wrapper">
        <div class="swiper-pagination blog-slider-pagination"></div>
      </div>
      <!-- <div class="pagination-buttons-wrapper">
        <ol class="pagination-buttons">
          <li class="pagination-button">1</li>
          <li class="pagination-button">2</li>
          <li class="pagination-button">3</li>
          <li class="pagination-button">4</li>
          <li class="pagination-button">5</li>
        </ol>
      </div> -->
    </div>
  </div>
</section>
<?php
$display_none = "cta";
include_once('footer.php'); ?>