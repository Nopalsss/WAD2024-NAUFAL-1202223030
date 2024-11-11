<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="navbar-brand-wrapper d-flex align-items-center">
    <a class="navbar-brand brand-logo" href="dashboard.php">
      <strong style="color: white;">U-WIBU</strong>
    </a>
    <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="images/logo-mini.svg" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
    <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Pak Amba Welcome dashboard!</h5>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <img class="img-xs rounded-circle ml-2" src="images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> Pak Amba</span></a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <div class="dropdown-header text-center">
            <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
            <p class="mb-1 mt-3">Pak Amba</p>
            <p class="font-weight-light text-muted mb-0">Pak Amba</p>
          </div>
          <a class="dropdown-item" href="profile.php"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile</a>
          <a class="dropdown-item" href="change-password.php"><i class="dropdown-item-icon icon-energy text-primary"></i> Setting</a>
          <a class="dropdown-item" href="logout.php"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>