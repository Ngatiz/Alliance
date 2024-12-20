<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 contact-container">
            <h2 class="text-center contact-title">Contact Us</h2>
            <form action="contact_process.php" method="post">
                <div class="mb-3">
                    <label for="contactName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="contactName" name="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="contactEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="contactEmail" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="contactMessage" class="form-label">Message</label>
                    <textarea class="form-control" id="contactMessage" name="message" rows="4" placeholder="Write your message here" required></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
            <p class="mt-3 text-center">We will get back to you as soon as possible!</p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
