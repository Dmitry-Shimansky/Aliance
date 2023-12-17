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
      <h3 class="blog-card-title <?= $display ?>">
        Современная методология разработки одухотворила всех причастных
      </h3>
      <p class="blog-card-text <?= $display ?>">
        Действия представителей оппозиции, превозмогая сложившуюся
        непростую экономическую ситуацию, в равной степени
        предоставлены...
      </p>
    </a>
    <a href="./blog-with-articles.php" class="swiper-slide <?= $blog_card ?>">
      <img src="img/blog/blog-photo-2.jpeg" alt="blog-photo-2" class="blog-card-image" />
      <!-- <picture class="blog-card-image">
        <source type="image/webp" srcset="img/blog/blog-photo-2.webp">
        <source type="image/jpeg" srcset="img/blog/blog-photo-2.jpeg">
        <img src="img/blog/blog-photo-2.jpeg" alt="blog-photo-2" >
      </picture> -->
      <h3 class="blog-card-title <?= $display ?>">
        Сложно сказать, почему жизнь прекрасна
      </h3>
      <p class="blog-card-text <?= $display ?>">
        Сложно сказать, почему элементы политического процесса
        функционально разнесены на независимые элементы. Безусловно,
        высокотехнологичная...
      </p>
    </a>
    <a href="./blog-with-articles.php" class="swiper-slide <?= $blog_card ?>">
      <img src="img/blog/blog-photo-2.jpeg" alt="blog-photo-3" class="blog-card-image" />
      <!-- <picture class="blog-card-image">
        <source type="image/webp" srcset="img/blog/blog-photo-2.webp">
        <source type="image/jpeg" srcset="img/blog/blog-photo-2.jpeg">
        <img src="img/blog/blog-photo-2.jpeg" alt="blog-photo-3" >
      </picture> -->
      <h3 class="blog-card-title <?= $display ?>">
        Сложно сказать, почему жизнь прекрасна
      </h3>
      <p class="blog-card-text <?= $display ?>">
        Сложно сказать, почему элементы политического процесса
        функционально разнесены на независимые элементы. Безусловно,
        высокотехнологичная...
      </p>
    </a>
  </div>
  <div class="blog-slider-footer <?= $buttons_block ?>">
    <a href="./blog.php" class="button-link hover <?= $display_blog_link ?>">Весь блог</a>
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