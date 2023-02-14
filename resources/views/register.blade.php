<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
		<div class="container py-3 h-100">
		  <div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-12 col-md-8 col-lg-6 col-xl-5">
				<img class="rounded-circle bg-secondary" style="width:10%; padding: 12%; margin-left: 37%" src="" alt="">
				<h3 class="text-center mt-4">Selamat Datang Di Admin School Gallery SMKN 2 Banjarmasin</h3>
			  <div class="card shadow-2-strong mt-4  bg-secondary"  style="margin-left: 10%; margin-right: 10%; border-radius: 1rem;">
				<div class="card-body p-5 mt-5">
            <form action="/register_action" method="POST">
                @csrf
                <div class="form-outline mb-4">
                    <input type="name" name="username" placeholder="Username" id="typeEmailX-2" class="form-control form-control-lg text-center" />
                  </div>
                    <div class="form-outline mb-4">
                        <input type="email" name="email" placeholder="Email" id="typeEmailX-2" class="form-control form-control-lg text-center" />
                      </div>
                      <div class="form-outline mb-4">
                        <input type="password" name="password" placeholder="Password" id="typeEmailX-2" class="form-control form-control-lg text-center" />
                      </div>
                      <div class="form-outline mb-4">
                        <input type="password" name="password" placeholder="Confrim password" id="typeEmailX-2" class="form-control form-control-lg text-center" />
                      </div>
                      <div class="row">
                        <button class="btn btn-light btn-lg btn-block mt-4" style="width: 40%; margin-left: 4% " type="submit">Register</button>
                      <p class="mt-3" style="font-size: 17px">Sudah Punya Akun?<a class="text-center mt-2" href="/">Login</a></p>
                      </div>
            </form>
        </div>
    </div>
  </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>