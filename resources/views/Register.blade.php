<!doctype html>
<html lang="en">


<!-- Mirrored from friendkit.cssninja.io/signup-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Oct 2023 10:46:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Friendkit | Signup</title>

    <!-- <script src="cdn-cgi/apps/head/lmplkzhV3pH6fdNUw6kpmpBQ68Q.js"></script> -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <!-- Google Tag Manager -->
    <!-- <script>
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
    </script> -->
    <!-- End Google Tag Manager -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset ('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/css/core.css') }}">

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
                        <h2 class="form-title has-text-centered">Hey there!</h2>
                        <h3 class="form-subtitle has-text-centered">
                            Lets create your account.
                        </h3>

                        <!--Form-->

                        <form class="login-form" action="{{ route('user.register.submit') }}" method="post">
                            @csrf
                            <div class="form-panel">
                                <div class="columns is-multiline">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label>Name</label>
                                            <div class="control">
                                                <input type="text" name="name" class="input" placeholder="Enter your first name" />
                                                @error('name')
                                                <span class="text-danger" style="color: red;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-12">
                                        <div class="field">
                                            <label>Email</label>
                                            <div class="control">
                                                <input type="email" name="email" class="input" placeholder="Enter your email address" />
                                                @error('email')
                                                <span class="text-danger" style="color: red;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-12">
                                        <div class="field">
                                            <label>Password</label>
                                            <div class="control">
                                                <input type="password" name="password" class="input" placeholder="Enter your password" autocomplete="on" />
                                                @error('password')
                                                <span class="text-danger" style="color: red;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-12">
                                        <div class="field is-flex">
                                            <div class="switch-block">
                                                <label class="f-switch">
                                                    <input type="checkbox" class="is-switch" />
                                                    <i></i>
                                                </label>
                                                <div class="meta">
                                                    <p>Subscribe to Newsletter?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="buttons mt-2">
                                <button type="submit" class="button is-solid primary-button is-fullwidth raised">Create Account</button>
                            </div>

                            <div class="account-link has-text-centered">
                                <a href="login">Have an account? Sign In</a>
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


    <!-- Landing page js -->

    <!-- Signup page js -->

    <!-- Feed pages js -->

    <!-- profile js -->

    <!-- stories js -->

    <!-- friends js -->

    <!-- questions js -->

    <!-- video js -->

    <!-- events js -->

    <!-- news js -->

    <!-- shop js -->

    <!-- inbox js -->

    <!-- settings js -->

    <!-- map page js -->

    <!-- elements page js -->
</body>


<!-- Mirrored from friendkit.cssninja.io/signup-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Oct 2023 10:46:15 GMT -->

</html>