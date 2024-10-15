<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center">Register</h2>
            <form action="register.php" method="post">
                <div class="mb-3">
                    <label for="registerName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="registerName" name="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="registerEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="registerEmail" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="registerPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Create a password" required>
                </div>
                <button type="submit" class="btn btn-success">Register</button>
            </form>
            <p class="mt-3 text-center">Already have an account? <a href="signin.php">Login</a></p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
