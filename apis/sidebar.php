<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="<?=$ruta_inicio?>">
          <span data-feather="home"></span>
          Inicio
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown" href="#" id="menuSidebarJaimePuertas" data-mdb-toggle="dropdown" aria-expanded="false">
          <span data-feather="user"></span>
          Hrno. Puertas
        </a>
        <ul class="dropdown-menu" aria-labelledby="menuSidebarJaimePuertas">
          <li><a class="dropdown-item" href="#">Micros</a></li>
          <li><a class="dropdown-item" href="<?=$ruta_inicio?>/tratados/">Tratados</a></li>
          <li><a class="dropdown-item" href="<?=$ruta_inicio?>/preguntas-y-respuestas/">Preguntas y Respuestas</a></li>
          <li><a class="dropdown-item" href="<?=$ruta_inicio?>/libros/">Libros</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown" href="#" id="menuSidebarVenezuela" data-mdb-toggle="dropdown" aria-expanded="false">
          <span data-feather="award"></span>
          Venezuela
        </a>
        <ul class="dropdown-menu" aria-labelledby="menuSidebarVenezuela">
          <li><a class="dropdown-item" href="#">Panes Calientes</a></li>
          <li><a class="dropdown-item" href="#">Informativos</a></li>
          <li><a class="dropdown-item" href="#">Radios</a></li>
          <li><a class="dropdown-item" href="#">Guía Dominical</a></li>
          <li><a class="dropdown-item" href="#">Campamentos</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown" href="#" id="menuSidebarInternacional" data-mdb-toggle="dropdown" aria-expanded="false">
          <span data-feather="globe"></span>
          Internacional
        </a>
        <ul class="dropdown-menu" aria-labelledby="menuSidebarInternacional">
          <li><a class="dropdown-item" href="#">Directorio</a></li>
          <li><a class="dropdown-item" href="#">Noticias</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown" href="#" id="menuSidebarRadios" data-mdb-toggle="dropdown" aria-expanded="false">
          <span data-feather="radio"></span>
          Radios
        </a>
        <ul class="dropdown-menu" aria-labelledby="menuSidebarRadios">
          <li><a class="dropdown-item" href="#">Nacionales</a></li>
          <li><a class="dropdown-item" href="#">Internaciolanes</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown" href="#" id="menuSidebarNotiluz" data-mdb-toggle="dropdown" aria-expanded="false">
          <span data-feather="layers"></span>
          Notiluz
        </a>
        <ul class="dropdown-menu" aria-labelledby="menuSidebarRadios">
          <li><a class="dropdown-item" href="<?=$ruta_inicio?>/noticias/">Noticias</a></li>
          <li><a class="dropdown-item" href="<?=$ruta_inicio?>/notialegria/">Notialegria</a></li>
          <li><a class="dropdown-item" href="<?=$ruta_inicio?>/agroecoluz/">Agroecoluz</a></li>
          <li><a class="dropdown-item" href="#">Nosotros</a></li>
          <li><a class="dropdown-item" href="#">Equipo</a></li>
        </ul>
      </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Otros Enlaces</span>

    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link" href="<?= $ruta_inicio ?>/ofrenda-misionera/">
          <span data-feather="heart"></span>
          Ofrenda Misionera
        </a>
      </li>
    </ul>

  </div>
</nav>