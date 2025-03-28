<?php require 'components/header.php' ?>
<?php require 'register_users.php' ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="register-card">
                <div class="card-header text-center register-header p-3">
                    <h3 class="mb-0">Create Your Account</h3>
                </div>
                <div class="body-card p-4">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" name="name" id="name" class="form-control" required placeholder="John Doe">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" required placeholder="example@example.com">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required placeholder="Enter a strong password">
                        </div>

                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" required placeholder="Re-enter your password">
                        </div>
                        <?php if (!empty($error)): ?>
                            <div class="alert alert-danger text-center">
                                <?php echo $error ?>
                            </div>
                        <?php endif; ?>
                        <button class="w-100 btn btn-primary" name="Register">Register</button>
                        <div class="card-footer text-center">
                            <small>Already have an account? <a href="login.php" class="text-primary">Login here</a></small>
                            <p>hello xin chào mọi người</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'components/footer.php' ?>