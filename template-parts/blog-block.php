<section class="section blog">
  <div class="container">
    <?php 
        if (!empty($block_title)) {
          echo '<div class="separator"></div>';
          echo '<h2 class="section-title">' . $block_title . '</h2>';
        }
    ?>
    <!-- Slider main container -->
    <?php include_once('./template-parts/blog-slider-block.php')?>
  </div>
</section>