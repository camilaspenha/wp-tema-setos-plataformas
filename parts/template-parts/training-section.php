<section id="features" class="features">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Serviços</h2>
      <p>Treinamento</p>
    </div>
    <div class="row">
      <div class="col-lg-6" data-aos="fade-right">
        <?php get_template_part( 'parts/template-parts/training-slider','',$args['slider_training']); ?>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
        <?php $i = 0; foreach($args['training_feature_list'] as $item){?>
          <div class="icon-box mt-5 <?= $i === 0 ? 'mt-lg-0' : '' ?>" data-aos="zoom-in" data-aos-delay="150">
            <i class="bi bi-check2-circle"></i>
            <a href="<?= $item['read_more']?>" title="Link para Treinamento em Plataformas" ><h4><?= $item['training_feature_title'] ?></h4></a>
            <p><?= $item['training_feature_description'] ?></p>
          </div>
        <?php $i++; } ?>
      </div>
    </div>
  </div>
</section>