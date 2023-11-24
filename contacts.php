<?php 
$page_title = "Контакты";
$header_style = "section-header";
include_once('header-page.php');?>
<section class="section contacts-section">
      <div class="container">
        <div class="footer-top contacts-container">
          <a href="tel:+74996861014" class="footer-phone contacts-phone">+7 (499) 686-10-14</a>
          <div class="footer-info">
            <svg class="address-icon contacts-address-icon">
              <use href="img/sprite.svg#mark"></use>
            </svg>
            <address class="footer-info-address contacts-info-address">
              г. Мосвка, Холодильный пер. 4к1с8
            </address>
          </div>
          <!-- /footer-info -->
          <div class="footer-info">
            <svg class="mail-icon contacts-mail-icon">
              <use href="img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email contacts-info-email">
              a.dragunov@tdaliance.ru
            </a>
          </div>
          <!-- /.footer-info -->
          <div class="footer-social">
            <a href="#" class="footer-social-link">
              <svg class="footer-social-icon vk contacts-vk">
                <use href="img/sprite.svg#vk"></use>
              </svg>
            </a>
            <a href="#" class="footer-social-link">
              <svg class="footer-social-icon inst contacts-inst">
                <use href="img/sprite.svg#inst"></use>
              </svg>
            </a>
          </div>
          <!-- /.footer-social -->
        </div>
        <!-- /.footer-top -->
        <picture class="contacts-map">
          <source type="image/webp" srcset="img/map.webp">
          <source type="image/png" srcset="img/map.png">
          <img src="img/map.png" alt="map" >
        </picture>
        <!-- <img src="img/map.png" alt="Map" class="contacts-map"> -->
      </div>
      </section>
<?php include_once('footer.php');?>
