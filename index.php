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
        <form class='m-auto'>
            <h1 class="h3 mb-3 fw-normal">Please Fill This Form</h1>

            <div class="row mb-3">
                <div class="col-6">

                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Omar">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ali">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="+1 234 567-8910">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="w-100 btn btn-lg btn-primary  my-2" type="submit">Submit</button>
            <p class="mt-5 mb-3 text-muted">© 2017–2023</p>
        </form>
    </main>

    <script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>