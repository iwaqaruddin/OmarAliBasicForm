<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>


    <main class="form-signin w-50 m-auto">
        <?php
        $success = isset($_GET['success']);
        if ($success) { ?>
            <div class="alert alert-<?= $success ? 'success' : 'danger' ?> alert-dismissible fade show" role="alert">
                <strong>Your Form Got Sent!</strong> We will contact you shortly.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php }; ?>
        <form class='m-auto' method="POST" action="api/send_form.php">
            <h1 class="h3 mb-3 fw-normal">Please fill out this Form</h1>

            <div class="row mb-3">
                <div class="col-6">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First" required>
                </div>
                <div class="col-6">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="555-555-5555" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
            </div>
            <button class="w-100 btn btn-lg btn-primary  my-2" type="submit">Submit</button>
            <p class="mt-5 mb-3 text-muted">© 2017–2023</p>
        </form>
    </main>

    <script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>