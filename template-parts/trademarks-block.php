<section class="trade-marks <?= $trade_marks ?>">
  <div class="container">
    <?php
    if (!empty($block_title)) {
      echo '<div class="separator"></div>';
      echo '<h2 class="section-title">' . $block_title . '</h2>';
    }
    ?>
    <div class="marks">
      <a href="#" class="mark hover">
        <div class="mark-image">
          <svg class="svg-mark-image">
            <use href="img/sprite.svg#AGTECH"></use>
          </svg>
        </div>
        <h3 class="mark-title">Автохимия AG-Tech</h3>
        <p class="mark-text">
          Для современного мира разбавленное изрядной долей эмпатии,
          рациональное мышление создаёт предпосылки для поставленных
          обществом задач.
        </p>
      </a>
      <!-- /.mark -->
      <a href="#" class="mark hover">
        <div class="mark-image">
          <svg class="svg-mark-image">
            <use href="img/sprite.svg#AP"></use>
          </svg>
        </div>
        <h3 class="mark-title">Автохимия AP</h3>
        <p class="mark-text">
          Для современного мира разбавленное изрядной долей эмпатии,
          рациональное мышление создаёт предпосылки для поставленных
          обществом задач.
        </p>
      </a>
      <!-- /.mark -->
    </div>
    <!-- /.marks -->
  </div>
  <!-- /.container -->
</section>