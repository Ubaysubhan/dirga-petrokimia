<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="dist/img/logo/Logo Dirga kecil 2.png"/>
    <title>Dirga | Retail Management PG </title>
    <link href="dist/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="dist/css/ruang-admin.min.css" rel="stylesheet">

</head>
<form method="post" action="/login" enctype="multipart/form-data" >
<body class="bg-gradient-login">
<section class="vh-100">

  <div class="container-fluid h-custom login-form">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src= "{{URL :: asset ('/dist/img/logo/Logo_dirga_depan.png')}}"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
   
      @csrf
    
        {{-- Alert Registration Success Start --}}
                                    @if(session()->has('success'))
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if(session()->has('loginError'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ session('loginError') }}
                                    </div>
                                @endif
                                    {{-- Alert Registration Success End --}}

          <!-- Email input -->
          <div class="form-group form-outline mb-4">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Email Address" value="{{ old('email') }}" autofocus required>
          @error('email')<div id="validationEmail" class="invalid-feedback">{{ 'Email Tidak Terdaftar' }}</div>@enderror
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-group form-outline mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter Password" autofocus required>
              @error('password')<div id="validationPassword" class="invalid-feedback">{{ 'Password Salah' }}</div>@enderror
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <a href="{{route('password.request')}}" class="link-primary">Forgot Password ?</a>

         
          
          <div class="form-group text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="" class="btn btn-primary btn-lg bg-success"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" href= >Login</button>
              </form>
            <p class="small fw-bold mt-2 pt-1 mb-0" href=/register >Don't have an account? <a href="/register"
                class="link-danger text-success">Register</a></p>
          </div>

      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-success">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
     Retail Management - PT Petrokimia Gresik
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
    <img class="mx-3" src="{{ URL::asset('dist/img/logo/BUMN.png') }}" style="max-width: 60px">
                <img class="mx-3" src="{{ URL::asset('dist/img/logo/PI.png') }}" style="max-width: 60px">
                <img class="mx-3" src="{{ URL::asset('dist/img/logo/PETRO.png') }}" style="max-width: 60px">
                <img class="mx-3" src="{{ URL::asset('dist/img/logo/logo rm.png') }}" style="max-width: 60px" height="30px" >
    </div>
    <!-- Right -->
  </div>
</div>
</section>
    <!-- Login Content -->
    <script src="dist/vendor/jquery/jquery.min.js"></script>
    <script src="dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="dist/js/ruang-admin.min.js"></script>
</body>
<style>
    .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }
        .h-custom {
        height: calc(100% - 73px);
    }
        @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }
</style>

</html>