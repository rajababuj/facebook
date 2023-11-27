<!doctype html>
<html lang="en">


<!-- Mirrored from friendkit.cssninja.io/login-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Oct 2023 10:46:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Friendkit | Login</title>
    <script src="cdn-cgi/apps/head/lmplkzhV3pH6fdNUw6kpmpBQ68Q.js"></script>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <!-- Google Tag Manager -->
    <script>
        ;
        (function(w, d, s, l, i) {
            w[l] = w[l] || []
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            })
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : ''
            j.async = true
            j.src = '../www.googletagmanager.com/gtm5445.html?id=' + i + dl
            f.parentNode.insertBefore(j, f)
        })(window, document, 'script', 'dataLayer', 'GTM-KQHJPZP')
    </script>
    <!-- End Google Tag Manager -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset ('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/css/core.css') }}">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        .login-form {
            color: red;
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQHJPZP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <div class="signup-wrapper">
        <!--Fake navigation-->
        <div class="fake-nav">
            <a href="index.html" class="logo">
                <img class="light-image" alt="" width="112" height="28" src="{{ asset ('assets/img/vector/logo/friendkit-bold.svg' ) }}">
                <img class="dark-image" alt="" width="112" height="28" src="{{ asset ('assets/img/vector/logo/friendkit-white.svg' ) }}">
            </a>
        </div>

        <div class="container">
            <!--Container-->
            <div class="login-container is-centered">
                <div class="columns is-vcentered">
                    <div class="column">
                        <h2 class="form-title has-text-centered">Welcome Back</h2>
                        <h3 class="form-subtitle has-text-centered">
                            Enter your credentials to sign in.
                        </h3>

                        <!--Form-->
                        <form class="login-form" method="POST" action="{{ route('user.login') }}" id="loginForm">
                            @csrf
                            <div class="form-panel">
                                <div class="field">
                                    <label>Email</label>
                                    <div class="control">
                                        <input type="text" class="input" name="email" id="email" placeholder="Enter your email address" />
                                        <span class="validation-error" id="emailError"></span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Password</label>
                                    <div class="control">
                                        <input type="password" class="input" name="password" id="password" placeholder="Enter your password" />
                                        <span class="validation-error" id="passwordError"></span>
                                    </div>
                                </div>
                                <div class="field is-flex">
                                    <div class="switch-block">
                                        <label class="f-switch">
                                            <input type="checkbox" class="is-switch" />
                                            <i></i>
                                        </label>
                                        <div class="meta">
                                            <p>Remember me?</p>
                                        </div>
                                    </div>
                                    <a>Forgot Password?</a>
                                </div>
                            </div>

                            <div class="buttons">
                                <button type="button" class="button is-solid primary-button is-fullwidth raised" id="loginBtn">Login</button>
                            </div>

                            <div class="account-link has-text-centered">
                                <a href="register">Don't have an account? Sign Up</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Concatenated js plugins and jQuery -->
    <script src="{{asset ('assets/js/app.js') }}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{asset ('assets/data/tipuedrop_content.js') }}"></script>
    <!-- Core js -->
    <script src="{{asset ('assets/js/global.js') }}"></script>
    <!-- Navigation options js -->
    <script src="{{asset ('assets/js/navbar-v1.js') }}"></script>
    <script src="{{asset ('assets/js/navbar-v2.js') }}"></script>
    <script src="{{asset ('assets/js/navbar-mobile.js') }}"></script>
    <script src="{{asset ('assets/js/navbar-options.js') }}"></script>
    <script src="{{asset ('assets/js/sidebar-v1.js') }}"></script>

    <!-- Core instance js -->
    <script src="{{asset ('assets/js/main.js') }}"></script>
    <script src="{{asset ('assets/js/chat.js') }}"></script>
    <script src="{{asset ('assets/js/touch.js') }}"></script>
    <script src="{{asset ('assets/js/tour.js') }}"></script>

    <!-- Components js -->

    <script src="{{asset ('assets/js/explorer.js') }}"></script>
    <script src="{{asset ('assets/js/widgets.js') }}"></script>
    <script src="{{asset ('assets/js/modal-uploader.js') }}"></script>
    <!-- <script src="{{asset ('assets/js/popovers-users.js') }}"></script> -->
    <script src="{{asset ('assets/js/popovers-pages.js') }}"></script>
    <script src="{{asset ('assets/js/lightbox.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#loginBtn').on('click', function() {
                $('.validation-error').text('');
                var formData = $('#loginForm').serialize();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('user.login') }}",
                    data: formData,
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(response) {
                        if (response.status === 422) {
                            var errors = response.responseJSON.errors;

                            $.each(errors, function(field, messages) {
                                if (field === 'email' && messages[0] === 'The email is not registered. Please sign up.') {
                                    $('#emailError').text(messages[0]);
                                } else {
                                    $('#' + field + 'Error').text(messages[0]);
                                }
                            });
                        } else {
                            console.error(response);
                        }
                    }

                });
            });
        });
    </script>



</body>


</html>