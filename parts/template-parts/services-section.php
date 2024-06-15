<section id="services" class="services">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Serviços</h2>
      <p>Manutenção</p>
    </div>
    <div class="row">
      <?php $i = 1; foreach($args['service_card'] as $item) { 
        ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="<?= $i * 100 ?>">
          <div class="icon-box">
            <div class="icon"><?= $item['service_card_icon'] ?></div>
            <h4><a href="<?= $item['read_more'] ?>" title="Link para Manutenção de Plataformas" ><?= $item['service_card_title'] ?></a></h4>
            <p id="<?= $item['service_card_id'] ?>" class="service-description"><?= $item['service_card_description'] ?></p>
            <a href="<?= $item['read_more'] ?>" title="Link para Manutenção de Plataformas" class="link-read-more mt-4 d-flex align-items-center justify-content-center">
                  <span class="me-3">Saiba Mais</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
          </div>
        </div>
      <?php $i++; } ?>
    </div>
  </div>
</section>