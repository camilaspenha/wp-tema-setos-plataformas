<?php
/**
 * Title: Contact Form
 * Slug: setos/contact-form
 * Categories: featured
 * Viewport width: 1400
 */
?>
<form action="<?= get_template_directory_uri() . '/assets/forms/contact.php' ?>" method="post" role="form" class="php-email-form">
    <p class="text-start fts-bold">SOLICITE UM ORÇAMENTO</p>  
    <div class="row">
      <div class="col form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="Nome Completo" required>
      </div>
      <div class="col-12 form-group mt-3">
        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
      </div>
    </div>
    <div class="row">
      <div class="col form-group mt-3">
        <input type="text" data-js="input" class="form-control" name="phone" id="phone" placeholder="Telefone" required>
      </div>
      
    <div class="form-group mt-3">
      <textarea class="form-control" name="message" rows="5" placeholder="Mensagem"></textarea>
    </div>
    <div class="my-3">
      <div class="loading">Enviando</div>
      <div class="error-message"></div>
      <div class="alert alert-success d-none" role="alert">   
      <div>Mensgem enviada, em breve entraremos em contato. Obrigado!</div>
      </div>
    </div>

    <div class="text-center">
      <button type="submit">Solicitar Orçamento</button>
    </div>
  </form>