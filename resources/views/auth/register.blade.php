<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('skydash/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('skydash/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('skydash/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('skydash/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('skydash/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('skydash/images/logo.svg')}}" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  	<input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="exampleInputEmail1" placeholder="Name" autocomplete="off">
                   	@error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  	<input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('name') }}" id="exampleInputEmail1" placeholder="Email" autocomplete="off">
                   	@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<small id="emailHint" class="form-text text-muted">Kami tidak akan memberitahu email anda kepada orang lain</small>
                </div>
                <div class="form-group">
                   	<input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" id="name" placeholder="Password">
					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group">
                   	<input id="password-confirm" type="password" class="form-control form-control-lg" id="name" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                </div>
                 <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="/login" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('skydash/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('skydash/js/off-canvas.js')}}"></script>
  <script src="{{asset('skydash/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('skydash/js/template.js')}}"></script>
  <script src="{{asset('skydash/js/settings.js')}}"></script>
  <script src="{{asset('skydash/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
