<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>

  <!-- ✅ Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card shadow-lg rounded-4">
          <div class="card-body p-4">
            <h3 class="mb-4 text-center">Login</h3>

            <form method="POST" action="{{ route('login') }}" autocomplete="off">
              @csrf

              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email" autocomplete="off" required>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Enter password" autocomplete="off" required>
              </div>

              <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <div class="text-center mt-3 d-flex justify-content-center">
            <p>Don't have an account?</p>  <a href="{{ route('register.form') }}" class="text-decoration-none fw-bold"> Register</a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- ✅ Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
