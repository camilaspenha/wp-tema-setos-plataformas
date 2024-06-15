<section id="clients" class="clients">
  <div class="container" data-aos="zoom-in">
    <div class="clients-slider swiper">
      <div class="swiper-wrapper align-items-center">
        <?php foreach($args['logo'] as $item){?>
          <div class="swiper-slide">
            <img src="<?= $item['logo_img'] ?>" alt=""> 
          </div>
        <?php } ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>