<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Innovation Trove Admin Portal">
    <meta name="author" content="ITrove">
    <title>Innovation Trove : Admin Login</title>
    <link rel="apple-touch-icon" href="{{asset('backend/app-assets/images/logo/logo.jpg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/app-assets/images/logo/logo.jpg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

    <style>
        body.bg-full-screen-image {
            background: radial-gradient(circle at 15% 15%, #1e1b4b 0%, #0f172a 45%, #020617 100%) !important;
            background-size: cover !important;
            min-height: 100vh;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 1.5rem;
        }

        .login-wrapper {
            width: 100%;
            max-width: 960px;
            margin: 0 auto;
        }

        .auth-card {
            border-radius: 24px !important;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.45), 0 0 0 1px rgba(255, 255, 255, 0.05) !important;
            overflow: hidden;
            background: #ffffff !important;
            transition: all 0.3s ease;
        }

        .brand-section {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 3rem 2rem;
            height: 100%;
            border-right: 1px solid #f1f5f9;
        }

        .brand-section img {
            max-width: 90%;
            height: auto;
            border-radius: 16px;
            filter: drop-shadow(0 15px 25px rgba(0, 0, 0, 0.08));
            transition: transform 0.4s ease;
        }

        .brand-section img:hover {
            transform: translateY(-4px);
        }

        .form-section {
            padding: 3.5rem 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media (max-width: 767.98px) {
            .form-section {
                padding: 2.5rem 1.75rem;
            }
        }

        .brand-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            background: rgba(79, 70, 229, 0.08);
            color: #4f46e5;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            margin-bottom: 1.25rem;
            width: fit-content;
        }

        .login-title {
            font-weight: 700;
            font-size: 1.75rem;
            color: #0f172a;
            margin-bottom: 0.5rem;
            letter-spacing: -0.02em;
        }

        .login-subtitle {
            color: #64748b;
            font-size: 0.95rem;
            margin-bottom: 2rem;
            line-height: 1.5;
        }

        .custom-input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .custom-input-group label {
            font-size: 0.875rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 0.5rem;
            display: block;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-wrapper .input-icon-left {
            position: absolute;
            left: 16px;
            color: #94a3b8;
            font-size: 1.15rem;
            transition: color 0.2s ease;
            z-index: 2;
            pointer-events: none;
        }

        .input-wrapper .form-control {
            height: 50px;
            padding-left: 48px;
            padding-right: 48px;
            border-radius: 12px;
            border: 1.5px solid #e2e8f0;
            background-color: #f8fafc;
            font-size: 0.95rem;
            color: #0f172a;
            font-weight: 500;
            transition: all 0.2s ease;
            box-shadow: none;
        }

        .input-wrapper .form-control:focus {
            border-color: #4f46e5;
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.12);
            outline: none;
        }

        .input-wrapper .form-control:focus~.input-icon-left {
            color: #4f46e5;
        }

        .password-toggle-btn {
            position: absolute;
            right: 12px;
            background: none;
            border: none;
            color: #94a3b8;
            font-size: 1.15rem;
            cursor: pointer;
            padding: 6px 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: all 0.2s ease;
            z-index: 5;
        }

        .password-toggle-btn:hover {
            color: #4f46e5;
            background-color: rgba(79, 70, 229, 0.08);
        }

        .password-toggle-btn:focus {
            outline: none;
        }

        .remember-forgot-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .custom-checkbox-label {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            user-select: none;
            margin-bottom: 0;
            font-size: 0.9rem;
            color: #475569;
            font-weight: 500;
        }

        .custom-checkbox-label input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #4f46e5;
            border-radius: 4px;
            cursor: pointer;
        }

        .forgot-link {
            color: #4f46e5;
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .forgot-link:hover {
            color: #3730a3;
            text-decoration: underline;
        }

        .btn-login-submit {
            width: 100%;
            height: 50px;
            background: linear-gradient(135deg, #4f46e5 0%, #3730a3 100%);
            color: #ffffff;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 0.3px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            box-shadow: 0 10px 20px -5px rgba(79, 70, 229, 0.4);
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .btn-login-submit:hover {
            background: linear-gradient(135deg, #4338ca 0%, #312e81 100%);
            transform: translateY(-2px);
            box-shadow: 0 14px 24px -4px rgba(79, 70, 229, 0.5);
            color: #ffffff;
        }

        .btn-login-submit:active {
            transform: translateY(0);
        }

        .alert-custom {
            border-radius: 12px;
            font-size: 0.875rem;
            padding: 0.85rem 1rem;
            border: none;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="bg-full-screen-image">
    <div class="login-wrapper">
        <div class="card auth-card mb-0">
            <div class="row no-gutters">
                <!-- Left branding banner -->
                <div class="col-lg-6 d-lg-block d-none">
                    <div class="brand-section">
                        <img src="{{asset('backend/app-assets/images/pages/file-tracking-login.jpg')}}"
                            alt="ITrove Admin Illustration">
                    </div>
                </div>

                <!-- Right login form -->
                <div class="col-lg-6 col-12">
                    <div class="form-section">
                        <div class="brand-badge">
                            <i class="feather icon-shield mr-1"></i> ITrove Portal
                        </div>
                        <h2 class="login-title">Admin Login</h2>
                        <p class="login-subtitle">Welcome back! Please enter your credentials to log in.</p>

                        @if ($errors->any())
                            <div class="alert alert-danger alert-custom">
                                <ul class="mb-0 pl-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('status'))
                            <div class="alert alert-success alert-custom">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <!-- Email Input -->
                            <div class="custom-input-group">
                                <label for="user-name">Email Address</label>
                                <div class="input-wrapper">
                                    <input type="email" class="form-control" name="email" id="user-name"
                                        placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                                    <i class="feather icon-mail input-icon-left"></i>
                                </div>
                            </div>

                            <!-- Password Input with Eye Button Toggle -->
                            <div class="custom-input-group">
                                <label for="user-password">Password</label>
                                <div class="input-wrapper">
                                    <input type="password" class="form-control" name="password" id="user-password"
                                        placeholder="••••••••" required>
                                    <i class="feather icon-lock input-icon-left"></i>
                                    <button type="button" class="password-toggle-btn" id="toggle-password-btn"
                                        title="Toggle Password Visibility" onclick="togglePasswordVisibility()">
                                        <i class="feather icon-eye" id="toggle-password-icon"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Remember Me & Forgot Password -->
                            <div class="remember-forgot-row">
                                <label class="custom-checkbox-label">
                                    <input type="checkbox" name="remember_me" id="remember-me">
                                    <span>Remember me</span>
                                </label>
                                <a href="auth-forgot-password.html" class="forgot-link">Forgot Password?</a>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn-login-submit">
                                <span>Sign In</span>
                                <i class="feather icon-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- END Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('backend/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- Password Toggle Script -->
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('user-password');
            const eyeIcon = document.getElementById('toggle-password-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('icon-eye');
                eyeIcon.classList.add('icon-eye-off');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('icon-eye-off');
                eyeIcon.classList.add('icon-eye');
            }
        }
    </script>
</body>
<!-- END: Body-->

</html>