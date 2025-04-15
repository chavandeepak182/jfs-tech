<!DOCTYPE html>
<html lang="en">
<head>
    <title>JFS Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('theme') }}/assets/admin-assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('theme') }}/assets/admin-assets/css/style.css" rel="stylesheet">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');

            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            }

            section {
            position: relative;
            min-height: 90vh;
            background-image:url(../theme/frontend/img/bg-reg.jpg);;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-position: center; 
            background-size: cover; 
            background-repeat: no-repeat;
            }

            section .container {
            position: relative;
            width: 800px;
            height: 500px;
            background: #fff;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            }

            section .container .user {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            }

            section .container .user .imgBx {
            position: relative;
            width: 50%;
            height: 100%;
            background: #ff0;
            transition: 0.5s;
            }

            section .container .user .imgBx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            }

            section .container .user .formBx {
            position: relative;
            width: 50%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            transition: 0.5s;
            }

            section .container .user .formBx form h2 {
            font-size: 18px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
            width: 100%;
            margin-bottom: 10px;
            color: #555;
            }

            section .container .user .formBx form input {
            position: relative;
            width: 100%;
            padding: 10px;
            background: #f5f5f5;
            color: #333;
            border: none;
            outline: none;
            box-shadow: none;
            margin: 8px 0;
            font-size: 14px;
            letter-spacing: 1px;
            font-weight: 300;
            }

            section .container .user .formBx form input[type='submit'] {
            max-width: 100px;
            background: #677eff;
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            transition: 0.5s;
            }

            section .container .user .formBx form .signup {
            position: relative;
            margin-top: 20px;
            font-size: 12px;
            letter-spacing: 1px;
            color: #555;
            text-transform: uppercase;
            font-weight: 300;
            }

            section .container .user .formBx form .signup a {
            font-weight: 600;
            text-decoration: none;
            color: #677eff;
            }

            section .container .signupBx {
            pointer-events: none;
            }

            section .container.active .signupBx {
            pointer-events: initial;
            }

            section .container .signupBx .formBx {
            left: 100%;
            }

            section .container.active .signupBx .formBx {
            left: 0;
            }

            section .container .signupBx .imgBx {
            left: -100%;
            }

            section .container.active .signupBx .imgBx {
            left: 0%;
            }

            section .container .signinBx .formBx {
            left: 0%;
            }

            section .container.active .signinBx .formBx {
            left: 100%;
            }

            section .container .signinBx .imgBx {
            left: 0%;
            }

            section .container.active .signinBx .imgBx {
            left: -100%;
            }

            @media (max-width: 991px) {
            section .container {
                max-width: 400px;
            }

            section .container .imgBx {
                display: none;
            }

            section .container .user .formBx {
                width: 100%;
            }
            }
        </style>
    </head>
    <body>
        <section>
            <div class="container">
                <div class="user signinBx">                   
                <div class="imgBx"><img src="https://www.kitaracloud.com/wp-content/uploads/2022/02/Why-Choose-Us-03-Final.png" alt="" /></div>
                    <div class="formBx">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form  action="{{Route('userLogin')}}" method="post" class="row">
                            <h2>Sign In</h2>
                            @csrf
                            <div class="col-12">
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required>
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 pb-3">
                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 pb-2">
                                <button type="submit" class="btn btn-dark px-4 py-2 rounded-1 uppercase">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bootstrap JS -->
        <script src="{{ asset('theme') }}/dist-assets/vendor/jquery/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone.min.js"></script>
        <script>
            $("document").ready(function(){
                setTimeout(function(){
                $(".alert-danger").remove();
                }, 3000 ); // 3 secs

                setTimeout(function(){
                $(".alert-success").remove();
                }, 6000 );
            });
        </script>
        <script>
            history.pushState(null, null, location.href);
            window.onpopstate = function () {
                history.go(1);
            };
        </script>
        <script>
            $("document").ready(function(){

                var zone = Intl.DateTimeFormat().resolvedOptions().timeZone;
                $("#timezone").val(zone);
                console.log(zone);
                // $("#currentTimezone").val(zone);
            });
        </script>

        <script>
            const toggleForm = () => {
            const container = document.querySelector('.container');
            container.classList.toggle('active');
            };
        </script>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
            const togglePasswordButtons = document.querySelectorAll('.toggle-password');

            togglePasswordButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const target = document.querySelector(button.getAttribute('data-target'));
                    if (target.type === 'password') {
                        target.type = 'text';
                        button.innerHTML = '<i class="bi bi-eye"></i>';
                    } else {
                        target.type = 'password';
                        button.innerHTML = '<i class="bi bi-eye-slash"></i>';
                    }
                });
            });
        });
        </script>
    </body>
</html>