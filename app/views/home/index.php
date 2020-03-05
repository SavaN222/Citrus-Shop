<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <section id="products">
        <h2 class="text-dark text-center">Our Products</h2>

        <div class="row">
          <?php foreach($data['products'] as $product) : ?>
            <div class="col-lg-4 pb-4">
               <div class="card">
                  <img src="<?php echo URLROOT . '/' . $product->image; ?>" class="card-img-top w-100" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $product->name; ?></h5>
                    <p class="card-text"><?php echo $product->description; ?></p>
                  </div>
                </div> 
            </div>
          <?php endforeach; ?>
        </div> <!-- row -->
    </section> <!-- products -->

    <section id="comments" class="mt-3">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="3000">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?php echo URLROOT; ?>/images/comments/girl.jpg" class="w-75 rounded-circle" alt="">
                    </div>
                    <div class="col-lg-8 mt-5">
                        <h3 class="text-warning pb-3">This is the best company</h3>
                        <p class="text-white font-italic"><i class="fas fa-quote-left fa-lg"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro blanditiis officia, magnam provident dolorem eaque. <i class="fas fa-quote-right fa-lg"></i></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-interval="3000">
               <div class="row">
                    <div class="col-lg-4">
                        <img src="<?php echo URLROOT; ?>/images/comments/man.jpg" class="w-75 rounded-circle" alt="">
                    </div>
                    <div class="col-lg-8 mt-5">
                       <h3 class="text-warning pb-3">This is the best company</h3>
                        <p class="text-white font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro blanditiis officia, magnam provident dolorem eaque.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-interval="3000">
               <div class="row">
                    <div class="col-lg-4">
                        <img src="<?php echo URLROOT; ?>/images/comments/oldman.jpg" class="w-75 rounded-circle" alt="">
                    </div>
                    <div class="col-lg-8 mt-5">
                        <h3 class="text-warning pb-3">This is the best company</h3>
                        <p class="text-white font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro blanditiis officia, magnam provident dolorem eaque.</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </section> <!-- comments -->
    <section id="postComment" class="mt-3 bg-light">
        <h3 class="text-center text-dark pt-4">Share Your Expirience About Citrus!</h3>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group px-2">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group px-2">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group px-2">
                <label for="avatar">Avatar(Optional):</label>
                <input type="file" name="avatar" class="form-control-file">
            </div>
            <div class="form-group px-2">
                <label for="comment">Comment:</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
            </div>
            <div class="form-group px-2">
                <input type="submit" class="btn w-100 btn-info" value="SUBMIT">
            </div>
        </form>
    </section> <!-- postComment -->
</div> <!-- container -->
<?php require APPROOT . '/views/inc/footer.php'; ?>
