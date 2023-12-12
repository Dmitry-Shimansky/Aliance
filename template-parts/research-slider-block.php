<div class="swiper blog-slider">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <a href="./blog-with-articles.php" class="swiper-slide <?= $blog_card ?>">
      <!-- <picture class="blog-card-image">
          <source type="image/webp" srcset="img/blog/blog-photo-1.webp">
          <source type="image/jpeg" srcset="img/blog/blog-photo-1.jpeg">
          <img src="img/blog/blog-photo-1.jpeg" alt="blog-photo-1" >
        </picture> -->
      <img src="img/blog/blog-photo-1.jpeg" alt="blog-photo-1" class="blog-card-image" />
    </a>
    <a href="./blog-with-articles.php" class="swiper-slide <?= $blog_card ?>">
      <img src="img/blog/blog-photo-2.jpeg" alt="blog-photo-2" class="blog-card-image" />
      <!-- <picture class="blog-card-image">
        <source type="image/webp" srcset="img/blog/blog-photo-2.webp">
        <source type="image/jpeg" srcset="img/blog/blog-photo-2.jpeg">
        <img src="img/blog/blog-photo-2.jpeg" alt="blog-photo-2" >
      </picture> -->
    </a>
    <a href="./blog-with-articles.php" class="swiper-slide <?= $blog_card ?>">
      <img src="img/blog/blog-photo-2.jpeg" alt="blog-photo-3" class="blog-card-image" />
      <!-- <picture class="blog-card-image">
        <source type="image/webp" srcset="img/blog/blog-photo-2.webp">
        <source type="image/jpeg" srcset="img/blog/blog-photo-2.jpeg">
        <img src="img/blog/blog-photo-2.jpeg" alt="blog-photo-3" >
      </picture> -->
    </a>
  </div>
  <div class="blog-slider-footer <?= $buttons_block ?>">
    <div class="blog-buttons primary-buttons-wrapper">
      <div class="blog-button-prev primary-button-prev">
        <svg width="30" height="24" class="<?= $arrow_prev_color ?>">
          <use href="img/sprite.svg#arrow-prev"></use>
        </svg>
      </div>
      <div class="blog-button-next primary-button-next">
        <svg width="30" height="24" class="<?= $arrow_next_color ?>">
          <use href="img/sprite.svg#arrow-next"></use>
        </svg>
      </div>
    </div>
    <!-- /.blog-buttons -->
  </div>
  <!-- /.blog-slider-footer -->
</div>