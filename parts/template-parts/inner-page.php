
<?php
 $page_id = get_the_ID();
?>
<section class="inner-page">
  <div class="container">
  
  <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>especificações</h2>
          <p><?= the_title() ?></p>
        </div>
        <p class="mb-5"><?= $args['inner_intro'] ?></p>
        <div class="row">
            <!-- Slider or Img -->
            <?php if($page_id == 57){ 
              $slider = get_field('slider_training', 7); ?> 
              <div class="col-lg-5" data-aos="fade-right">
              <?php
                get_template_part( 'parts/template-parts/training-slider','',$slider);
            } else { ?>
              <div class="image col-lg-5 d-flex justify-content-center" data-aos="fade-right">
                <img src="<?= $args['inner_main_img'] ?>" alt="" class="img-fluid">
            <?php }?>
          </div> <!-- /End Slider or Img -->
          
          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="100">

            <!-- Training or Inner Features -->
            <?php if($page_id == 57){ 
              if($args['inner_training_feature']){ 
                $i = 0;
                foreach($args['inner_training_feature'] as $training_feature) { ?>
                  <div class="inner-page-training-feature <?= $i == 0 ? '' : 'mt-5' ?> px-lg-5" data-aos="zoom-in" data-aos-delay="150">
                    <h4><strong><?= $training_feature['inner_title'] ?></strong></h4>
                    <?php foreach($training_feature['inner_feature_list'] as $training_item){ ?>
                      <p> <i class="ri-check-double-line mx-2"></i> <?= $training_item['inner_description'] ?></p>
                    <?php } ?>
                  </div>
                <?php $i++; } ?>
              <?php } ?> 
            <?php }  else { ?>
              <?php $i = 0; foreach($args['inner_features'] as $feature){ ?>
                <div class="icon-box mt-5 <?= $i == 0 ? 'mt-lg-0' : '' ?>" data-aos="zoom-in" data-aos-delay="150"> 
                  <?= $feature['inner_feature_icon'] ?>          
                  <h4><?= $feature['inner_feature_title'] ?></h4>
                  <p><?= $feature['inner_feature_description'] ?></p>
                </div>
              <?php $i++; } ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>

    <?php if($args['benefits_cards']){ ?>
    <section id="services" class="services text-start">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>especificações</h2>
          <p>Vantagens</p>
        </div>

        <div class="row">

        <?php foreach($args['benefits_cards'] as $card){ ?>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-check2-circle"></i></div>
              <h4><?= $card['benefits_card_title'] ?></h4>
              <p><?= $card['benefits_card_description'] ?></p>
            </div>
          </div>

        <?php } ?>

      </div>
    </section>
    <?php } ?>
    
    <section id="portfolio-details" class="portfolio-details text-start">

      <div class="section-title">
        <h2>especificações</h2>
        <p>Dados Gerais</p>
      </div>

      <div class="px-lg-5">

      <?php foreach($args['inner_info'] as $info){ ?>
        <div class="portfolio-info mb-5">
          <h3><?= $info['inner_info_title'] ?></h3>
          <ul>
            <?php foreach($info['inner_info_sub_items'] as $list){ ?>
              <li> 
                <?php if($list['inner_info_sub_item_title']){?> 
                  <h6><strong><?= $list['inner_info_sub_item_title'] ?></strong></h6>
                <?php } ?>

                <?php if($list['inner_info_sub_item_description']){ ?>
                  <p><?= $list['inner_info_sub_item_description'] ?></p>
                <?php } ?>

                <?php if($list['inner_info_sub_item_list']){ ?>
                  <ul>
                    <?php foreach($list['inner_info_sub_item_list'] as $item){ ?>
                      <li><i class="ri-check-double-line me-3"></i><?= $item['inner_info_sub_item_list_item'] ?></li>
                    <?php } ?>
                  </ul>
                  <?php  } ?>
              </li>
          
            <?php } ?>
          </ul>            
        </div>
      <?php } ?>

      </div>
    </section>

  </div>
</section>