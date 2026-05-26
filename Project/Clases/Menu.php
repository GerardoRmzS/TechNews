<section>

  <nav class="navbar bg_negro navbar-dark font mb-4">
    <a class="navbar-brand" href="#">
      <img src="img/logo_tech2.png" alt="" style="width:40%">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <?php echo $seccion->getMenu(); ?>
      </ul>
    </div>
  </nav>

</section>
