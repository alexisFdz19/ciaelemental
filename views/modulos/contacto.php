<!-- page title -->
<section class="page-title-section overlay bg-cover" data-background="<?php echo $url?>views/images/banner/banner.jpg">

  <div class="container">

    <div class="row">

      <div class="col-md-8">

        <ul class="list-inline custom-breadcrumb">

          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Contacto</a></li>

          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>

        </ul>

        <!--<p class="text-lighten">Do you have other questions? Don't worry, there aren't any dumb questions. Just fill out the form below and we'll get back to you as soon as possible.</p>-->

      </div>

    </div>

  </div>

</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">

  <div class="container">

    <div class="row">

      <div class="col-lg-12">
        <!--<h2 class="section-title">Contact Us</h2>-->
      </div>

    </div>

    <div class="row">

      <div class="col-lg-7 mb-4 mb-lg-0">

        <form action="<?php echo $url?>/views/php/send_mail.php" method="post">

          <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Nombre" required>
          <input type="email" class="form-control mb-3" id="mail" name="email" placeholder="Correo" required>
          <!--<input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Asunto" required>-->
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Mensaje" required></textarea>

          <button type="submit" value="send" class="btn btn-primary">Enviar</button>

        </form>

      </div>

      <div class="col-lg-5">

        <!--<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae voluptates doloremque veniam temporibus porro culpa ipsa, nisi soluta minima saepe laboriosam debitis nesciunt. Dolore, labore. Accusamus nulla sed cum aliquid exercitationem debitis error harum porro maxime quo iusto aliquam dicta modi earum fugiat, vel possimus commodi, deleniti et veniam, fuga ipsum praesentium. Odit unde optio nulla ipsum quae obcaecati! Quod esse natus quibusdam asperiores quam vel, tempore itaque architecto ducimus expedita</p>-->
        <!--<a href="tel:+8802057843248" class="text-color h5 d-block">998 214 9538</a>
        <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">jorgecabrera@ciaelemental.com</a>-->
        <p>Cancún, Quintana Roo,<br>México.</p>

      </div>

    </div>

  </div>
  
</section>
<!-- /contact -->