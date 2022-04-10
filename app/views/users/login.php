<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-body bg-dark text-light mt-5">
                <?php flash('register_success') ?>
                <h2>Login</h2>
                <p>Please fill in your credentials to log in.</p>
                <form action="<?php echo URLROOT; ?>/users/login" method="POST">

                    <div class="form-group my-3">
                        <label for="email">Email: <sup>*</sup></label>
                        <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err'] ?></span>
                    </div>
                    <div class="form-group my-3">
                        <label for="password">Password: <sup>*</sup></label>
                        <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                        <span class="invalid-feedback"><?php echo $data['password_err'] ?></span>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <input type="submit" value="Login" class="btn btn-success btn-lg w-100">
                        </div>
                        <div class="col">
                            <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-lg w-100">No account? Register</a>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>