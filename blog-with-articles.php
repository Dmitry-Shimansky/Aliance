<?php 
$page_title = "Блог";
$header_style = "section-header";
$display_none = "display-none";
include_once('header-page.php');?>
<section class="section blog-page">
  <div class="container">

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide test-card">Slide 1</div>
        <div class="swiper-slide test-card">Slide 2</div>
        <div class="swiper-slide test-card">Slide 3</div>
        <div class="swiper-slide test-card">Slide 4</div>
        <div class="swiper-slide test-card">Slide 5</div>
        <div class="swiper-slide test-card">Slide 6</div>
        <div class="swiper-slide test-card">Slide 7</div>
        <div class="swiper-slide test-card">Slide 8</div>
        <div class="swiper-slide test-card">Slide 9</div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<?php 
$display_none = "cta";
include_once('footer.php');?>
