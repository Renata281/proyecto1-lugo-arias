<body>
<header>
<!--Navegador-->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?php echo base_url('/');?>">
      <img src="assets\img\logo.jpg" alt="Logo" width="56" height="56" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">V&V</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="<?php echo base_url('quienes_somos');?>">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="<?php echo base_url('contacto');?>">Contactos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="<?php echo base_url('comercializacion');?>">Comercialización</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>



</header>

