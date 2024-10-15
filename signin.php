<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center">Sign in</h2>
            <form action="signin.php" method="post">
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="loginPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <p class="mt-3 text-center">Don't have an account? <a href="register.php">Register</a></p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
