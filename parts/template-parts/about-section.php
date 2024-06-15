<section id="about" class="about">
  <div class="container mt-4" data-aos="fade-up">        
    <div class="row">
      <div class="col-lg-6 p-lg-5 order-1 order-lg-2 d-flex align-items-center mb-4 mb-md-0" data-aos="fade-left" data-aos-delay="100">
        <img src="<?= $args['about_img'] ?>" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
        <div>
          <div class="section-title">
            <h2>sobre a setos</h2>
            <p>Nossos serviços</p>
          </div>
          <p class="display-4 mb-4">
            <?= $args['about_title'] ?>
          </p>               
          <ul>
            <?php
            foreach($args['about_list'] as $item) { ?>
              <li class="d-flex">
                <i class="ri-check-double-line me-2"></i>
                 <h5><?= $item['about_list_item'] ?></h5>
                </li>
            <?php }  ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>