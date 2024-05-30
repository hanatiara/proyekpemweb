
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Responsive Signup/Login form</title>
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
        </head>
        <body>
        <div class="container">
            <section id="formHolder">
                <div class="row">
                    <!-- Brand Box -->
                    <div class="col-sm-6 brand">
                        <a href="#" class="logo">Webverse <span>.</span></a>
                        <div class="heading">
                            <img src="images/logoputih.png" style="width: 370px; height: 200px" alt="">
                        </div>
                        <div class="success-msg">
                            <p>Great! You are one of our members now</p>
                            <a href="#" class="profile">Your Profile</a>
                        </div>
                    </div>

                    <!-- Form Box -->
                    <div class="col-sm-6 form">

                        <!-- Login Form -->
                        <div class="login form-peice ">
                            <form class="login-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="loginemail">Email Address</label>
                                    <input type="email" name="email" id="loginemail" required>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <label for="loginPassword">Password</label>
                                    <input type="password" name="password" id="loginPassword" required>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="CTA">
                                    <input type="submit" value="Login">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                    @endif
                                    <a href="#" class="switch" style="margin-top: 10px">I'm New</a>
                                </div>
                            </form>
                        </div>

                        <!-- Register Form -->
                        <div class="signup form-peice switched">
                            <form class="signup-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" name="name" id="name" required>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" required>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" required>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="CTA">
                                    <input type="submit" value="Register" id="submit">
                                    <a href="#" class="switch">I have an account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        </body>
        </html>



