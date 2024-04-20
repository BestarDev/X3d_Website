<nav class="navbar navbar-expand-lg navbar-light sticky-top py-2 bg-light"> 
  <!-- sticky-top -->
  <div class="container my-2">
    <a class="navbar-brand d-flex align-items-center" href="<?php echo URLROOT; ?>">
      <h1 class="text-danger">1oca</h1>
      <div class="bg-danger mx-1" style="width: 10px; height: 10px;" id="dot-div"></div>
      <h2 style="padding-top: 0.5rem;" class="text-danger">Cola</h2>
      <h4>&trade;</h4>
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/model/cocacola">Model</a>
          <!-- <div class="dropdown">
          <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
            Model
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/model/cocacola">Cocacola</a></li>
            <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/model/pepper">Dr Pepper</a></li>
            <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/model/sprite">Sprite</a></li>
          </ul> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/about">About</a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link btn btn-outline-secondary px-4 mx-4 text-black"
            href="<?php echo URLROOT; ?>/contact"
            >Contact Us</a
          >
        </li>
      </ul>
    </div>
  </div>
</nav>