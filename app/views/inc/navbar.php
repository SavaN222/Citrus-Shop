    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="container-fluid">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-dark" href="<?php echo URLROOT; ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="<?php echo URLROOT; ?>/#products">Products</a>
            </li>
             <li class="nav-item">
                <a class="nav-link text-dark" href="<?php echo URLROOT; ?>/#comments">Testimonials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="<?php echo URLROOT; ?>/#postComment">Contact</a>
            </li>
        </ul>
        <ul class="nav navbar-nav mx-auto">
            <li class="nav-item">
                <img class="nav-logo" src="<?php echo URLROOT; ?>/images/logo.svg" width="85" height="85" alt="logo">
            </li>
        </ul>
        <ul class="nav navbar-nav">
            <?php if (isLoggedIn()): ?>
                <li class="nav-item">
                    <a class="nav-link text-success" href="<?php echo URLROOT; ?>/admin/adminLogout">LOGOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?php echo URLROOT; ?>/admin/index">DASHBOARD</a>
                </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a href="<?php echo URLROOT; ?>/admin/adminLogin" class="nav-link text-success">LOGIN</a>
                    </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
</nav>
