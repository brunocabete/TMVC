  <nav class="p-3 bg-dark text-white">
      <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="<?php echo URLROOT; ?>" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                  <?php echo SITENAME; ?>
              </a>

              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="<?php echo URLROOT; ?>/pages/about" class="nav-link px-2 text-white">About</a></li>
              </ul>

              <?php if (isset($_SESSION['user_id'])) : ?>
                  <div class="text-end">
                      <a href="<?php echo URLROOT; ?>/users/logout" class="btn btn-outline-light me-2">Logout</a>
                  </div>
              <?php else : ?>
                  <div class="text-end">
                      <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-outline-light me-2">Login</a>
                      <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-info">Sign-up</a>
                  </div>
              <?php endif; ?>
          </div>
      </div>
  </nav>