<div class="portfolio-details-slider swiper">
  <div class="swiper-wrapper align-items-center">
  <?php foreach($args as $item){?>
    <div class="swiper-slide">
      <img src="<?= $item['slide_img'] ?>" alt="SETOS Plataformas | Treinamentos">  
    </div>
  <?php } ?>
  </div>
  <div class="swiper-pagination"></div>
</div>