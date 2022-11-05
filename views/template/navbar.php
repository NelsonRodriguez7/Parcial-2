<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
    <i class="bi bi-caret-down-square"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
          height="15"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo "index.php?c=".seg::codificar("contenido")."&m=".seg::codificar("contenido") ?>">Home</a>
        </li>
        <?php if(isset($_SESSION["correo"])) {?>
        
        <?php }else{?>
          <li class="nav-item">
          <a class="nav-link" href="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("login") ?>">Login</a>
          </li>
        <?php } ?>
        <?php if(isset($_SESSION["correo"])) {?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo "index.php?c=".seg::codificar("busqueda")."&m=".seg::codificar("busqueda") ?>">Buscar</a>
          </li>
        <?php }else{?>
        
        <?php } ?>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    
      <!-- Avatar -->
      <?php if(isset($_SESSION["correo"])) {?>
        <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">Mi Perfil</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Configuracion</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("cerrar_sesion") ?>">Cerrar Sesion</a>
          </li>
        </ul>
      </div>
        <?php }else{?>
      
      <?php } ?>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->