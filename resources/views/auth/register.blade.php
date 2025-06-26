<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    
    <!-- ✅ Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-lg rounded-4">
                    <div class="card-body p-4">
                        <h3 class="mb-4 text-center">Register</h3>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Enter password" required>
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirm password" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </form>

                        <div class="text-center mt-3 d-flex justify-content-center">
             <p>Already have an account?</p><a href="{{ route('login.form') }}" class="text-decoration-none fw-bold"> Login</a> 
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ✅ Bootstrap JS (optional, for dropdowns/modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
