<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign In</title>

    <link rel="shortcut icon"
        href="{{ asset('dashboard/assets/images/logo/favicon.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet"
        href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet"
        href="{{ asset('dashboard/assets/css/main.css') }}">

    <!-- Phosphor Icons -->
    <style>
        /* =========================================
           LOGIN PAGE UI
        ========================================= */

        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            background: #f5f7fb;
            font-family: inherit;
        }

        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px;
            background: linear-gradient(135deg, #f4f8ff 0%, #ffffff 100%);
        }

        .login-card {
            width: 100%;
            max-width: 1100px;
            min-height: 650px;
            display: flex;
            overflow: hidden;
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.10);
        }

        /* =========================================
           LEFT SIDE
        ========================================= */

        .login-left {
            width: 50%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px;
            background: linear-gradient(145deg, #0d6efd, #084298);
            overflow: hidden;
        }

        .login-left::before {
            content: "";
            position: absolute;
            width: 330px;
            height: 330px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            top: -100px;
            left: -100px;
        }

        .login-left::after {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.07);
            bottom: -100px;
            right: -80px;
        }

        .login-left-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #ffffff;
        }

        .login-left-content img {
            width: 100%;
            max-width: 420px;
            height: auto;
            margin-bottom: 35px;
        }

        .login-left-content h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .login-left-content p {
            max-width: 430px;
            margin: 0 auto;
            line-height: 1.7;
            font-size: 15px;
            opacity: 0.9;
        }

        /* =========================================
           RIGHT SIDE
        ========================================= */

        .login-right {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 55px 65px;
            background: #ffffff;
        }

        .login-form-wrapper {
            width: 100%;
            max-width: 430px;
        }

        .login-logo {
            display: inline-block;
            margin-bottom: 30px;
        }

        .login-logo img {
            max-width: 180px;
            max-height: 65px;
            object-fit: contain;
        }

        .login-title {
            font-size: 30px;
            font-weight: 700;
            color: #171717;
            margin-bottom: 8px;
        }

        .login-subtitle {
            color: #737373;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 32px;
        }

        /* =========================================
           FORM
        ========================================= */

        .login-form .form-group {
            margin-bottom: 23px;
        }

        .login-form .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #292929;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
        }

        .login-input {
            width: 100%;
            height: 52px;
            border: 1px solid #dedede;
            border-radius: 10px;
            padding: 0 48px 0 45px;
            font-size: 14px;
            color: #222222;
            background: #ffffff;
            outline: none;
            transition: all 0.2s ease;
        }

        .login-input:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.10);
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #888888;
            font-size: 19px;
            pointer-events: none;
            z-index: 2;
        }

        /* =========================================
           PASSWORD EYE
        ========================================= */

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #777777;
            cursor: pointer;
            font-size: 19px;
            z-index: 5;
            transition: color 0.2s ease;
            user-select: none;
        }

        .toggle-password:hover {
            color: #0d6efd;
        }

        /* =========================================
           ERROR
        ========================================= */

        .input-error {
            display: block;
            margin-top: 6px;
            font-size: 13px;
            color: #dc3545;
        }

        /* =========================================
           REMEMBER / FORGOT
        ========================================= */

        .login-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 28px;
        }

        .remember-wrapper {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .remember-wrapper input {
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        .remember-wrapper label {
            color: #666666;
            font-size: 14px;
            cursor: pointer;
            margin: 0;
        }

        .forgot-link {
            color: #0d6efd;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        /* =========================================
           BUTTON
        ========================================= */

        .login-btn {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 10px;
            background: #0d6efd;
            color: #ffffff;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .login-btn:hover {
            background: #0b5ed7;
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.22);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        /* =========================================
           SIGNUP
        ========================================= */

        .signup-text {
            margin-top: 28px;
            text-align: center;
            color: #777777;
            font-size: 14px;
        }

        .signup-text a {
            color: #0d6efd;
            font-weight: 600;
            text-decoration: none;
        }

        .signup-text a:hover {
            text-decoration: underline;
        }

        /* =========================================
           RESPONSIVE
        ========================================= */

        @media (max-width: 991px) {

            .login-card {
                max-width: 700px;
            }

            .login-left {
                display: none;
            }

            .login-right {
                width: 100%;
                padding: 50px 40px;
            }
        }

        @media (max-width: 575px) {

            .login-page {
                padding: 15px;
            }

            .login-card {
                min-height: auto;
                border-radius: 18px;
            }

            .login-right {
                padding: 40px 22px;
            }

            .login-title {
                font-size: 25px;
            }

            .login-options {
                align-items: flex-start;
                flex-direction: column;
            }

            .login-logo img {
                max-width: 150px;
            }
        }
    </style>
</head>

<body>

    <!-- =========================================
         LOGIN PAGE
    ========================================= -->

    <main class="login-page">

        <div class="login-card">

            <!-- =====================================
                 LEFT SIDE
            ====================================== -->

            <div class="login-left">

                <div class="login-left-content">

                    <img
                        src="{{ asset('dashboard/assets/images/thumbs/auth-img1.png') }}"
                        alt="Login">

                    <h2>Welcome Back!</h2>

                    <p>
                        Sign in to access your account and continue
                        your journey with us.
                    </p>

                </div>

            </div>


            <!-- =====================================
                 RIGHT SIDE
            ====================================== -->

            <div class="login-right">

                <div class="login-form-wrapper">

                    <!-- LOGO -->

                    <a href="{{ url('/') }}" class="login-logo">

                        <img
                            src="{{ asset('assets/images/logo.png') }}"
                            alt="Logo">

                    </a>


                    <!-- TITLE -->

                    <h1 class="login-title">
                        Welcome Back! 👋
                    </h1>

                    <p class="login-subtitle">
                        Please sign in to your account and start the adventure.
                    </p>


                    <!-- =================================
                         LOGIN FORM
                         BACKEND UNCHANGED
                    ================================== -->

                    <form
                        action="{{ Route('userLogin') }}"
                        method="POST"
                        class="login-form">

                        @csrf


                        <!-- EMAIL -->

                        <div class="form-group">

                            <label
                                for="email"
                                class="form-label">
                                Email
                            </label>

                            <div class="input-wrapper">

                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="login-input"
                                    placeholder="Enter your email"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    required>

                                <span class="input-icon">
                                    <i class="ph ph-envelope"></i>
                                </span>

                            </div>

                            @error('email')
                                <span class="input-error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        <!-- PASSWORD -->

                        <div class="form-group">

                            <label
                                for="password"
                                class="form-label">
                                Password
                            </label>

                            <div class="input-wrapper">

                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="login-input"
                                    placeholder="Enter your password"
                                    autocomplete="current-password"
                                    required>

                                <!-- PASSWORD TOGGLE -->

                                <span
                                    class="toggle-password"
                                    id="togglePassword"
                                    role="button"
                                    tabindex="0"
                                    aria-label="Show password">

                                    <i
                                        class="ph ph-eye-slash"
                                        id="passwordIcon"></i>

                                </span>

                                <!-- LOCK ICON -->

                                <span class="input-icon">
                                    <i class="ph ph-lock"></i>
                                </span>

                            </div>

                            @error('password')
                                <span class="input-error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        <!-- REMEMBER + FORGOT -->

                        <div class="login-options">

                            <div class="remember-wrapper">

                                <input
                                    type="checkbox"
                                    name="remember"
                                    value="1"
                                    id="remember">

                                <label for="remember">
                                    Remember Me
                                </label>

                            </div>

                            <a
                                href="{{ url('/reset') }}"
                                class="forgot-link">
                                Forgot Password?
                            </a>

                        </div>


                        <!-- LOGIN BUTTON -->

                        <button
                            type="submit"
                            class="login-btn">

                            Sign In

                        </button>


                        <!-- SIGN UP -->

                        <p class="signup-text">

                            New on our platform?

                            <a href="{{ url('/signup') }}">
                                Create an account
                            </a>

                        </p>

                    </form>

                </div>

            </div>

        </div>

    </main>


    <!-- =========================================
         JAVASCRIPT
    ========================================= -->

    <script src="{{ asset('dashboard/assets/js/jquery-3.7.1.min.js') }}"></script>

    <script src="{{ asset('dashboard/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('dashboard/assets/js/phosphor-icon.js') }}"></script>


    <!-- =========================================
         PASSWORD SHOW / HIDE
    ========================================= -->

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const togglePassword =
                document.getElementById('togglePassword');

            const password =
                document.getElementById('password');

            const passwordIcon =
                document.getElementById('passwordIcon');


            if (!togglePassword || !password || !passwordIcon) {
                return;
            }


            function togglePasswordVisibility() {

                if (password.type === 'password') {

                    password.type = 'text';

                    passwordIcon.classList.remove('ph-eye-slash');

                    passwordIcon.classList.add('ph-eye');

                    togglePassword.setAttribute(
                        'aria-label',
                        'Hide password'
                    );

                } else {

                    password.type = 'password';

                    passwordIcon.classList.remove('ph-eye');

                    passwordIcon.classList.add('ph-eye-slash');

                    togglePassword.setAttribute(
                        'aria-label',
                        'Show password'
                    );

                }

            }


            togglePassword.addEventListener(
                'click',
                togglePasswordVisibility
            );


            togglePassword.addEventListener(
                'keydown',
                function (event) {

                    if (
                        event.key === 'Enter' ||
                        event.key === ' '
                    ) {

                        event.preventDefault();

                        togglePasswordVisibility();

                    }

                }
            );

        });

    </script>

</body>

</html>