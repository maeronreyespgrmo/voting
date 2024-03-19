<!DOCTYPE html>
<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/auth-login-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jan 2024 00:29:12 GMT -->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

<title>{{ config('app.name') }} | Log In</title>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">


<meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
<meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
<!-- End Google Tag Manager -->

<!-- Favicon -->
{{-- <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" /> --}}

<link rel="icon" type="image/x-icon" href="/images/lagunaseal.png" />

<!-- Fonts -->
{{-- <link rel="preconnect" href="../../../../fonts.googleapis.com/index.html">
<link rel="preconnect" href="../../../../fonts.gstatic.com/index.html" crossorigin> --}}
{{-- <link href="../../../../fonts.googleapis.com/css2ad73.css?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet"> --}}

<!-- Icons -->
<link rel="stylesheet" href="/vendor/vuexy/assets/vendor/fonts/fontawesome.css" />
<link rel="stylesheet" href="/vendor/vuexy/assets/vendor/fonts/tabler-icons.css"/>
<link rel="stylesheet" href="/vendor/vuexy/assets/vendor/fonts/flag-icons.css" />

<!-- Core CSS -->
<link rel="stylesheet" href="/vendor/vuexy/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
<link rel="stylesheet" href="/vendor/vuexy/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
<link rel="stylesheet" href="/vendor/vuexy/assets/css/demo.css" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="/vendor/vuexy/assets/vendor/libs/node-waves/node-waves.css" />
<link rel="stylesheet" href="/vendor/vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="/vendor/vuexy/assets/vendor/libs/typeahead-js/typeahead.css" />
<!-- Vendor -->
<link rel="stylesheet" href="/vendor/vuexy/assets/vendor/libs/%40form-validation/umd/styles/index.min.css" />

<!-- Page CSS -->
<!-- Page -->
<link rel="stylesheet" href="/vendor/vuexy/assets/vendor/css/pages/page-auth.css">
{{-- GSAP --}}
<script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
<style>
.light-style .auth-cover-bg-color {
background-image: url("/images/capitol.jpg");
background-size:cover;
filter: invert(2%);
}
</style>
</head>

<body>
<!-- Content -->

<div class="authentication-wrapper authentication-cover authentication-bg">
<div class="authentication-inner row">
<!-- /Left Text -->
<div class="d-none d-lg-flex col-lg-7 p-0">
<div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
<img id="logo-seal" src="/images/lagunaseal.png" alt="auth-login-cover" class="img-fluid my-5 auth-illustration" data-app-light-img="illustrations/auth-login-illustration-light.png" data-app-dark-img="illustrations/auth-login-illustration-dark.html">
</div>
</div>
<!-- /Left Text -->

<!-- Login -->
<div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
<div class="w-px-400 mx-auto">
<!-- Logo -->
<div class="app-brand mb-4">
<a href="index.html" class="app-brand-link gap-2">
<span class="app-brand-logo demo">
{{-- <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="../../../../www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
<path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
<path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
</svg> --}}
</span>
</a>
</div>
<!-- /Logo -->
<h3 id="label_proc" class="mb-1">Voting System Login</h3>
<p class="mb-3">Please sign-in to your account and start the adventure</p>
@include('layouts.message')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">{{ __('Username') }}</label>
        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Enter your username" autofocus>
        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">{{ __('Password') }}</label>
        </div>
        <div class="input-group input-group-merge">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <button type="submit" id="login" class="btn btn-success d-grid w-100">
        {{ __('Login') }}
    </button>
<br>
    <!-- <a href="/" id="login" class="btn btn-primary d-grid w-100">
        Back to Main
    </a> -->

</form>
</div>
</div>
</div>
</div>
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="/vendor/vuexy/assets/vendor/libs/jquery/jquery.js"></script>
<script src="/vendor/vuexy/assets/vendor/libs/popper/popper.js"></script>
<script src="/vendor/vuexy/assets/vendor/js/bootstrap.js"></script>
<script src="/vendor/vuexy/assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="/vendor/vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="/vendor/vuexy/assets/vendor/libs/hammer/hammer.js"></script>
<script src="/vendor/vuexy/assets/vendor/libs/i18n/i18n.js"></script>
<script src="/vendor/vuexy/assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="/vendor/vuexy/assets/vendor/js/menu.js"></script>
<!-- endbuild -->
<!-- Vendors JS -->
<script src="/vendor/vuexy/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"></script>
<script src="/vendor/vuexy/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
<script src="/vendor/vuexy/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"></script>
<!-- Main JS -->
{{-- <script src="/vendor/vuexy/assets/js/main.js"></script> --}}
<!-- Page JS -->
<script src="/vendor/vuexy/assets/js/pages-auth.js"></script>
<script>
    // GSAP animation
    gsap.from(".authentication-wrapper", {
      opacity: 0,
      y: -50,
      duration: 0.3,
      ease: "power2.out"
    });

    gsap.from("#login", {
      opacity: 0,
      x: -50,
      duration: 0.5,
      delay: 0.1,
      ease: "power2.out"
    });

    gsap.from('#label_proc', {
    duration: 2,
    text: "This is the new text",
    ease: "none",
    });
    gsap.to("#logo-seal", {
    duration: 1,  // Animation duration in seconds
    ease: "power2.inOut", // Easing function
    onComplete: function () {
      console.log("Animation complete!");
    }
  });
  </script>

</body>

</html>
