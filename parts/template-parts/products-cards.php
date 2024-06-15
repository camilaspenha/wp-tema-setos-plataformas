<section id="team" class="team">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Locação</h2>
      <p>Plataformas elevatórias</p>
    </div>
    <div class="row">
      <?php foreach($args['product_card'] as $card){ ?>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="<?= $card['product_card_img'] ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4><?=$card['product_card_title'] ?></h4>
              <p id="<?= $card['product_card_id'] ?>"><?= $card['product_card_description'] ?></p>
              <a href="<?= $card['read_more'] ?>" title="Link para <?=$card['product_card_title'] ?>" class="get-started-btn my-3"> Saiba Mais</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>