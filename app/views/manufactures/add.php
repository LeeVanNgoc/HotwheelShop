<?php require_once ROOT ."/views/inc/adminHeader.php" ?>
<?php require_once ROOT ."/views/inc/sidebar.php" ?>
        <div class=" ">
            <div class="row">
                <div class="col-10 col-md-6  m-auto">
                
                <div class="card my-4">
                
                        <div class="card-header">
                            <h5 class='text-muted text-center'>Add New Manufacture</h5>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="<?php echo URL?>/manufactures/add" method="POST">
    
                                <div class="form-group">
                                    <input type="text" name="manufacture" placeholder="Enter manufacture name" class="form-control <?php echo  isset($data['errMan']) ?  'is-invalid' : '' ?>">
                                    <?php echo  isset($data['errMan']) ?  '<div class="invalid-feedback">'.$data['errMan'].'</div>' : '' ?>
                                </div>
                                <div class="from-group mb-2">
                                    <textarea 
                                        name="description" 
                                        placeholder="Enter manufacture description" 
                                        class="form-control <?php echo  isset($data['errDes']) ?  'is-invalid' : '' ?>"
                                    ></textarea>
                                    <?php echo  isset($data['errDes']) ?  '<div class="invalid-feedback">'.$data['errDes'].'</div>' : '' ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="brand" placeholder="Enter brand name" class="form-control <?php echo  isset($data['errBrand']) ?  'is-invalid' : '' ?>">
                                    <?php echo  isset($data['errBrand']) ?  '<div class="invalid-feedback">'.$data['errBrand'].'</div>' : '' ?>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name='image' type="file" class="custom-file-input <?php echo  isset($data['errImg']) ?  'is-invalid' : '' ?>" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                    </div>
                                </div>
                                <small><?php echo  isset($data['errImg']) ?  '<div class="text-danger">'.$data['errImg'].'</div>' : '' ?></small>

                                <div class="form-group">
                                <input type="hidden" name="csrf" value="<?php new Csrf(); echo Csrf::get()?>">
                                    <a href='<?php echo URL ?>/manufactures' class="btn btn-sm btn-secondary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go Back
                                    </a>
                                    <input type="submit" name='addManufacture' value='Add' class="btn btn-success btn-sm">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require_once ROOT ."/views/inc/adminFooter.php" ?>
