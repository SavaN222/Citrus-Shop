<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="container pt-5 pb-5">
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
              <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
            </div>
        <?php } ?>
        <div class="row">
            <div id="newComments" class="col-lg-6">
            <h3 class="text-center text-info">NEW COMMENTS</h3>
              <div class="list-group p-5 ">
                  <div href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">Pera Petrovic</h5>
                      <div>
                      <a href=""><i class="fas fa-check text-success fa-lg mr-2"></i></a>
                      <a href=""><i class="fas fa-trash text-danger fa-lg"></i></a>
                    </div>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  </div>
                  
                </div>  
            </div>

            <div id="newProduct" class="col-lg-6">
                <h3 class="text-center text-info">ADD NEW PRODUCT</h3>
                <form action="<?php echo URLROOT; ?>/home/create" method="POST" enctype="multipart/form-data">
                    <div class="form-group px-2">
                        <label for="pname">Product Name:</label>
                        <input type="text" name="pname" class="form-control" required="">
                    </div>
                    <div class="form-group px-2">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required=""></textarea>
                    </div>
                    <div class="form-group px-2">
                        <label for="image">Product Image:</label>
                        <input type="file" name="image" class="form-control-file" required="">
                    </div>
                    <div class="form-group px-2">
                        <input type="submit" name="submit" class="btn w-100 btn-info" value="SUBMIT">
                    </div>
                </form>
            </div>

        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
