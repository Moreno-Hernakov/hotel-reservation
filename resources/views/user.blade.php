<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>
<br><br>
<body class="bg-gradient-primary" style="background:#8F673D;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">REGISTER</h2>
              <form action="{{ route('user.store') }}" method="post">
                @csrf 
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Name</label>
                  <input type="text" name="name" id="name" class="form-control form-control-lg" />
                </div>
                <label class="form-label" for="form3Example1cg">Jabatan</label>
                <select name="kelas" id="kelas" class="form-select form-control form-control-lg" required>
                    <option disabled selected>Silakan Pilih Jabatan</option>
                        @foreach ($jabatan as $jbt)
                        <option value="{{ $jbt->id }}">{{ $jbt->jenis_jabatan }}</option>
                        @endforeach
                </select>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Email</label>
                  <input type="email" name="email" id="email" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" name="password" id="password" class="form-control form-control-lg" />
                </div>
                  <input type="submit" value="REGISTER" class="btn btn-primary btn-user btn-block p-2" style="background: #4E2F08; color:rgb(255, 255, 255);">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- </section> -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>