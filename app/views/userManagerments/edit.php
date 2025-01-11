<?php require_once ROOT . "/views/inc/adminHeader.php"; ?>
<?php require_once ROOT . "/views/inc/sidebar.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-10 col-md-6 m-auto">
            <div class="card my-4">
                <div class="card-header">
                    <h5 class='text-muted text-center'>Edit User</h5>
                </div>
                <div class="card-body">
                    <form action="<?php echo URL ?>/userManagerments/update/<?php echo $data['user']->user_id ?>" method="POST">
                        
                        <!-- Hidden Field: Old Email -->
                        <input type="hidden" name="oldEmail" value='<?php echo $data['user']->email ?>'>

                        <!-- Name Field -->
                        <div class="form-group">
                            <input value='<?php echo $data['user']->full_name ?>' type="text" name="name" placeholder="Enter user name" class="form-control <?php echo isset($data['errName']) ? 'is-invalid' : '' ?>">
                            <?php echo isset($data['errName']) ? '<div class="invalid-feedback">' . $data['errName'] . '</div>' : '' ?>
                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            <input value='<?php echo $data['user']->email ?>' type="email" name="email" placeholder="Enter email" class="form-control <?php echo isset($data['errEmail']) ? 'is-invalid' : '' ?>">
                            <?php echo isset($data['errEmail']) ? '<div class="invalid-feedback">' . $data['errEmail'] . '</div>' : '' ?>
                        </div>

                        <!-- Password Field -->
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Enter new password (leave blank if unchanged)" class="form-control <?php echo isset($data['errPassword']) ? 'is-invalid' : '' ?>">
                            <?php echo isset($data['errPassword']) ? '<div class="invalid-feedback">' . $data['errPassword'] . '</div>' : '' ?>
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="form-group">
                            <input type="password" name="confirm_password" placeholder="Confirm new password" class="form-control <?php echo isset($data['errConfirmPassword']) ? 'is-invalid' : '' ?>">
                            <?php echo isset($data['errConfirmPassword']) ? '<div class="invalid-feedback">' . $data['errConfirmPassword'] . '</div>' : '' ?>
                        </div>

                       <!-- Role Select -->
                      <div class="input-group mb-3">
                          <select class="custom-select <?php echo isset($data['errRole']) ? 'is-invalid' : '' ?>" name="role">
                              <option value="1" <?php echo $data['user']->admin == 1 ? 'selected' : '' ?>>Admin</option>
                              <option value="0" <?php echo $data['user']->admin == 0 ? 'selected' : '' ?>>User</option>
                          </select>
                          <div class="input-group-prepend">
                              <label class="input-group-text" for="role">Role</label>
                          </div>
                          <?php echo isset($data['errRole']) ? '<div class="invalid-feedback">' . $data['errRole'] . '</div>' : '' ?>
                      </div>

                        <!-- Status Toggle -->
                        <div class="form-group form-check">
                            <input type="checkbox" name="active" class="form-check-input" id="active" <?php echo $data['user']->active ? 'checked' : '' ?>>
                            <label class="form-check-label" for="active">Active</label>
                        </div>

                        <!-- CSRF Token -->
                        <input type="hidden" name="csrf" value="<?php new Csrf();
                                                                echo Csrf::get(); ?>">

                        <!-- Submit & Go Back Button -->
                        <div class="form-group">
                            <a href='<?php echo URL ?>/userManagerments' class="btn btn-sm btn-secondary">
                                <i class="fa fa-arrow-left"></i>
                                Go Back
                            </a>
                            <input type="submit" name="editUser" value="Edit" class="btn btn-success btn-sm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once ROOT . "/views/inc/adminFooter.php"; ?>