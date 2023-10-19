<!doctype html>
<html lang="en">


<!-- Mirrored from friendkit.cssninja.io/navbar-v1-feed-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Oct 2023 10:43:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Friendkit | Feed</title>
    <script src="{{asset ('assets/cdn-cgi/apps/head/lmplkzhV3pH6fdNUw6kpmpBQ68Q.js') }}"></script>

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
    <link href="../cdn.jsdelivr.net/npm/fontisto%40v3.0.4/css/fontisto/fontisto-brands.min.css" rel="stylesheet" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset ('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/css/core.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQHJPZP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <div class="app-overlay"></div>

    <div id="main-navbar" class="navbar navbar-v1 is-inline-flex is-transparent no-shadow is-hidden-mobile">
        <div class="container is-fluid">
            <div class="navbar-brand">
                <a href="index.html" class="navbar-item">
                    <img class="light-image" alt="" width="112" height="28" src="{{ asset ('assets/img/vector/logo/friendkit-bold.svg' ) }}">
                    <img class="dark-image" alt="" width="112" height="28" src="{{ asset ('assets/img/vector/logo/friendkit-white.svg' ) }}">
                </a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start">
                    <!-- Navbar Search -->

                    <div class="navbar-item is-icon drop-trigger">
                        <a class="icon-link is-friends" href="javascript:void(0);">
                            <i data-feather="heart"></i>
                            <span class="indicator"></span>
                        </a>

                        <div class="nav-drop">
                            <div class="inner">
                                <div class="nav-drop-header">
                                    <span>Friend requests</span>
                                    <a href="#">
                                        <i data-feather="search"></i>
                                    </a>
                                </div>
                                <div class="nav-drop-body is-friend-requests">
                                    <!-- Friend request -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <a href="#">Bobby Brown</a>
                                            <span>Najeel verwick is a common friend</span>
                                        </div>
                                        <div class="media-right">
                                            <button class="button icon-button is-solid grey-button raised">
                                                <i data-feather="user-plus"></i>
                                            </button>
                                            <button class="button icon-button is-solid grey-button raised">
                                                <i data-feather="user-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Friend request -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/edward.jpg')}}" alt="" />
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <a href="#">Dan Walker</a>
                                            <span>You have 4 common friends</span>
                                        </div>
                                        <div class="media-right">
                                            <button class="button icon-button is-solid grey-button raised">
                                                <i data-feather="user-plus"></i>
                                            </button>
                                            <button class="button icon-button is-solid grey-button raised">
                                                <i data-feather="user-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Friend request -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/nelly.png')}}" alt="" />
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <span>You are now friends with <a href="#">Nelly Schwartz</a>. Check
                                                her <a href="#">profile</a>.</span>
                                        </div>
                                        <div class="media-right">
                                            <div class="added-icon">
                                                <i data-feather="tag"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend request -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/milly.jpg')}}" alt="" />
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <a href="#">Milly Augustine</a>
                                            <span>You have 8 common friends</span>
                                        </div>
                                        <div class="media-right">
                                            <button class="button icon-button is-solid grey-button raised">
                                                <i data-feather="user-plus"></i>
                                            </button>
                                            <button class="button icon-button is-solid grey-button raised">
                                                <i data-feather="user-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Friend request -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/elise.jpg')}}" alt="" />
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <span>You are now friends with <a href="#">Elise Walker</a>. Check her
                                                <a href="#">profile</a>.</span>
                                        </div>
                                        <div class="media-right">
                                            <div class="added-icon">
                                                <i data-feather="tag"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend request -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/edward.jpg')}}" alt="" />
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <span>You are now friends with <a href="#">Edward Mayers</a>. Check his
                                                <a href="#">profile</a>.</span>
                                        </div>
                                        <div class="media-right">
                                            <div class="added-icon">
                                                <i data-feather="tag"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-drop-footer">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-item is-icon drop-trigger">
                        <a class="icon-link" href="javascript:void(0);">
                            <i data-feather="bell"></i>
                            <span class="indicator"></span>
                        </a>

                        <div class="nav-drop">
                            <div class="inner">
                                <div class="nav-drop-header">
                                    <span>Notifications</span>
                                    <a href="#">
                                        <i data-feather="bell"></i>
                                    </a>
                                </div>
                                <div class="nav-drop-body is-notifications">
                                    <!-- Notification -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/david.jpg')}}" alt="" />
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <span><a href="#">David Kim</a> commented on
                                                <a href="#">your post</a>.</span>
                                            <span class="time">30 minutes ago</span>
                                        </div>
                                        <div class="media-right">
                                            <div class="added-icon">
                                                <i data-feather="message-square"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Notification -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" alt="" />
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <span><a href="#">Daniel Wellington</a> liked your
                                                <a href="#">profile.</a></span>
                                            <span class="time">43 minutes ago</span>
                                        </div>
                                        <div class="media-right">
                                            <div class="added-icon">
                                                <i data-feather="heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Notification -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/stella.jpg')}}" alt="" />
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <span><a href="#">Stella Bergmann</a> shared a
                                                <a href="#">New video</a> on your wall.</span>
                                            <span class="time">Yesterday</span>
                                        </div>
                                        <div class="media-right">
                                            <div class="added-icon">
                                                <i data-feather="youtube"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Notification -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/elise.jpg')}}" alt="" />
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <span><a href="#">Elise Walker</a> shared an <a href="#">Image</a> with
                                                you an 2 other people.</span>
                                            <span class="time">2 days ago</span>
                                        </div>
                                        <div class="media-right">
                                            <div class="added-icon">
                                                <i data-feather="image"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-drop-footer">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-item is-icon drop-trigger">
                        <a class="icon-link is-active" href="javascript:void(0);">
                            <i data-feather="mail"></i>
                            <span class="indicator"></span>
                        </a>

                        <div class="nav-drop">
                            <div class="inner">
                                <div class="nav-drop-header">
                                    <span>Messages</span>
                                    <a href="messages-inbox.html">Inbox</a>
                                </div>
                                <div class="nav-drop-body is-friend-requests">
                                    <!-- Message -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/150x150" data-demo-src="{{asset('img/jenna.png')}}" data-user-popover="9" alt="" />
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <a href="#">Nelly Schwartz</a>
                                            <span>I think we should meet near the Starbucks so we can get...</span>
                                            <span class="time">Yesterday</span>
                                        </div>
                                        <div class="media-right is-centered">
                                            <div class="added-icon">
                                                <i data-feather="message-square"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Message -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/150x150" data-demo-src="{{asset('img/edward.jpg')}}" data-user-popover="5" alt="" />
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <a href="#">Edward Mayers</a>
                                            <span>That was a real pleasure seeing you last time we really
                                                should...</span>
                                            <span class="time">last week</span>
                                        </div>
                                        <div class="media-right is-centered">
                                            <div class="added-icon">
                                                <i data-feather="message-square"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Message -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/150x150" data-demo-src="{{asset('img/dan.jpg')}}" data-user-popover="1" alt="" />
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <a href="#">Dan Walker</a>
                                            <span>Hey there, would it be possible to borrow your bicycle, i really
                                                need...</span>
                                            <span class="time">Jun 03 2018</span>
                                        </div>
                                        <div class="media-right is-centered">
                                            <div class="added-icon">
                                                <i data-feather="message-square"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-drop-footer">
                                    <a href="#">Clear All</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="navbar-item is-icon open-chat">
                        <a class="icon-link is-primary" href="javascript:void(0);">
                            <i data-feather="message-square"></i>
                            <span class="indicator"></span>
                        </a>
                    </div>

                    <div id="explorer-trigger" class="navbar-item is-icon">
                        <a class="icon-link is-primary">
                            <i class="mdi mdi-apps"></i>
                        </a>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div id="global-search" class="control">
                            <input id="tipue_drop_input" class="input is-rounded" type="text" placeholder="Search" required />
                            <span id="clear-search" class="reset-search">
                                <i data-feather="x"></i>
                            </span>
                            <span class="search-icon">
                                <i data-feather="search"></i>
                            </span>

                            <div id="tipue_drop_content" class="tipue-drop-content"></div>
                        </div>
                    </div>
                    <div class="navbar-item is-cart">
                        <div class="cart-button">
                            <i data-feather="shopping-cart"></i>
                            <div class="cart-count"></div>
                        </div>

                        <!-- Cart dropdown -->
                        <div class="shopping-cart">
                            <div class="cart-inner">
                                <!--Loader-->
                                <div class="navbar-cart-loader is-active">
                                    <div class="loader is-loading"></div>
                                </div>

                                <div class="shopping-cart-header">
                                    <a href="ecommerce-cart.html" class="cart-link">View Cart</a>
                                    <div class="shopping-cart-total">
                                        <span class="lighter-text">Total:</span>
                                        <span class="main-color-text">$193.00</span>
                                    </div>
                                </div>
                                <!--end shopping-cart-header -->

                                <ul class="shopping-cart-items">
                                    <li class="cart-row">
                                        <img src="{{ asset ('assets/img/products/2.svg' ) }}">

                                        <span class="item-meta">
                                            <span class="item-name">Cool Shirt</span>
                                            <span class="meta-info">
                                                <span class="item-price">$29.00</span>
                                                <span class="item-quantity">Qty: 01</span>
                                            </span>
                                        </span>
                                    </li>

                                    <li class="cart-row">
                                        <img src="{{ asset ('assets/img/products/3.svg' ) }}">
                                        <span class="item-meta">
                                            <span class="item-name">Military Short</span>
                                            <span class="meta-info">
                                                <span class="item-price">$39.00</span>
                                                <span class="item-quantity">Qty: 01</span>
                                            </span>
                                        </span>
                                    </li>

                                    <li class="cart-row">
                                        <img src="{{ asset ('assets/img/products/4.svg' ) }}">
                                        <span class="item-meta">
                                            <span class="item-name">Cool Backpack</span>
                                            <span class="meta-info">
                                                <span class="item-price">$125.00</span>
                                                <span class="item-quantity">Qty: 01</span>
                                            </span>
                                        </span>
                                    </li>
                                </ul>

                                <a href="#" class="button primary-button is-raised">Checkout</a>
                            </div>
                        </div>
                    </div>
                    <div id="account-dropdown" class="navbar-item is-account drop-trigger has-caret">
                        <div class="user-image">
                            <img src="https://via.placeholder.com/400x400" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                            <span class="indicator"></span>
                        </div>

                        <div class="nav-drop is-account-dropdown">
                            <div class="inner">
                                <div class="nav-drop-header">
                                    <span class="username">Jenna Davis</span>
                                    <label class="theme-toggle">
                                        <input type="checkbox" />
                                        <span class="toggler">
                                            <span class="dark">
                                                <i data-feather="moon"></i>
                                            </span>
                                            <span class="light">
                                                <i data-feather="sun"></i>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class="nav-drop-body account-items">
                                    <a id="profile-link" href="login" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/400x400" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Jenna Davis</h3>
                                                <small>Main account</small>
                                            </div>
                                            <div class="media-right">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider" />
                                    <a href="navbar-v1-pages-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/fastpizza.svg')}}" alt="" />
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Css Ninja</h3>
                                                <small>Company page</small>
                                            </div>
                                            <div class="media-right is-hidden">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="navbar-v1-pages-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/fastpizza.svg')}}" alt="" />
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Fast Pizza</h3>
                                                <small>Company page</small>
                                            </div>
                                            <div class="media-right is-hidden">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="navbar-v1-pages-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/sass.svg') }}" alt="" />
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Slicer</h3>
                                                <small>Company page</small>
                                            </div>
                                            <div class="media-right is-hidden">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider" />
                                    <a href="options-settings.html" class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="settings"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Settings</h3>
                                                <small>Access widget settings.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="life-buoy"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Help</h3>
                                                <small>Contact our support.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{route('user.logout')}}" class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="power"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Log out</h3>
                                                <small>Log out from your account.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <nav class="navbar mobile-navbar is-hidden-desktop" aria-label="main navigation">
        <!-- Brand -->
        <div class="navbar-brand">
            <a class="navbar-item" href="index.html">
                <img class="light-image" src="{{asset ('assets/img/vector/logo/friendkit-bold.svg') }}" alt="" />
                <img class="dark-image" src="{{asset ('assets/img/vector/logo/friendkit-white.svg') }}" alt="" />
            </a>

            <div class="navbar-item is-icon drop-trigger">
                <a class="icon-link is-friends" href="javascript:void(0);">
                    <i data-feather="heart"></i>
                    <span class="indicator"></span>
                </a>

                <div class="nav-drop">
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span>Friend requests</span>
                            <a href="#">
                                <i data-feather="search"></i>
                            </a>
                        </div>
                        <div class="nav-drop-body is-friend-requests">
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/bobby.jpg')}}" alt="" />
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Bobby Brown</a>
                                    <span>Najeel verwick is a common friend</span>
                                </div>
                                <div class="media-right">
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-plus"></i>
                                    </button>
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/dan.jpg')}}" alt="" />
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Dan Walker</a>
                                    <span>You have 4 common friends</span>
                                </div>
                                <div class="media-right">
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-plus"></i>
                                    </button>
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset ('assets/img/avatars/nelly.png') }}" alt="" />
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span>You are now friends with <a href="#">Nelly Schwartz</a>. Check
                                        her <a href="#">profile</a>.</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="tag"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset ('assets/img/avatars/milly.jpg') }}" alt="" />
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Milly Augustine</a>
                                    <span>You have 8 common friends</span>
                                </div>
                                <div class="media-right">
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-plus"></i>
                                    </button>
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/elise.jpg')}}" alt="" />
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span>You are now friends with <a href="#">Elise Walker</a>. Check her
                                        <a href="#">profile</a>.</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="tag"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/edward.jpg')}}" alt="" />
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span>You are now friends with <a href="#">Edward Mayers</a>. Check his
                                        <a href="#">profile</a>.</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="tag"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-drop-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-item is-icon drop-trigger">
                <a class="icon-link" href="javascript:void(0);">
                    <i data-feather="bell"></i>
                    <span class="indicator"></span>
                </a>

                <div class="nav-drop">
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span>Notifications</span>
                            <a href="#">
                                <i data-feather="bell"></i>
                            </a>
                        </div>
                        <div class="nav-drop-body is-notifications">
                            <!-- Notification -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/david.jpg') }}" alt="" />
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span><a href="#">David Kim</a> commented on
                                        <a href="#">your post</a>.</span>
                                    <span class="time">30 minutes ago</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" alt="" />
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span><a href="#">Daniel Wellington</a> liked your
                                        <a href="#">profile.</a></span>
                                    <span class="time">43 minutes ago</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="heart"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/stella.jpg')}}" alt="" />
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span><a href="#">Stella Bergmann</a> shared a
                                        <a href="#">New video</a> on your wall.</span>
                                    <span class="time">Yesterday</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="youtube"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/elise.jpg')}}" alt="" />
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span><a href="#">Elise Walker</a> shared an <a href="#">Image</a> with
                                        you an 2 other people.</span>
                                    <span class="time">2 days ago</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="image"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-drop-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-item is-icon drop-trigger">
                <a class="icon-link is-active" href="javascript:void(0);">
                    <i data-feather="mail"></i>
                    <span class="indicator"></span>
                </a>

                <div class="nav-drop">
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span>Messages</span>
                            <a href="messages-inbox.html">Inbox</a>
                        </div>
                        <div class="nav-drop-body is-friend-requests">
                            <!-- Message -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="{{asset('img/dan.jpg')}}" data-user-popover="1" alt="" />
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Nelly Schwartz</a>
                                    <span>I think we should meet near the Starbucks so we can get...</span>
                                    <span class="time">Yesterday</span>
                                </div>
                                <div class="media-right is-centered">
                                    <div class="added-icon">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Message -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="{{asset('img/dan.jpg')}}" data-user-popover="1" alt="" />
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Edward Mayers</a>
                                    <span>That was a real pleasure seeing you last time we really
                                        should...</span>
                                    <span class="time">last week</span>
                                </div>
                                <div class="media-right is-centered">
                                    <div class="added-icon">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Message -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="{{asset('img/dan.jpg')}}" data-user-popover="1" alt="" />
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Dan Walker</a>
                                    <span>Hey there, would it be possible to borrow your bicycle, i really
                                        need...</span>
                                    <span class="time">Jun 03 2018</span>
                                </div>
                                <div class="media-right is-centered">
                                    <div class="added-icon">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-drop-footer">
                            <a href="#">Clear All</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mobile-explorer-trigger" class="navbar-item is-icon">
                <a class="icon-link is-primary">
                    <i class="mdi mdi-apps"></i>
                </a>
            </div>

            <div id="open-mobile-search" class="navbar-item is-icon">
                <a class="icon-link is-primary" href="javascript:void(0);">
                    <i data-feather="search"></i>
                </a>
            </div>

            <!-- Mobile menu toggler icon -->
            <div class="navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Navbar mobile menu -->
        <div class="navbar-menu">
            <!-- Account -->
            <div class="navbar-item has-dropdown is-active">
                <a href="navbar-v1-profile-main.html" class="navbar-link">
                    <img src="https://via.placeholder.com/150x150" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                    <span class="is-heading">Jenna Davis</span>
                </a>

                <!-- Mobile Dropdown -->
                <div class="navbar-dropdown">
                    <a href="navbar-v1-feed.html" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="activity"></i>Feed</span>
                        <span class="menu-badge">87</span>
                    </a>
                    <a href="navbar-v1-videos-home-v2.html" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="play-circle"></i>Watch</span>
                        <span class="menu-badge">21</span>
                    </a>
                    <a href="navbar-v1-profile-friends.html" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="heart"></i>Friend Requests</span>
                        <span class="menu-badge">3</span>
                    </a>
                    <a href="navbar-v1-profile-main.html" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="user"></i>Profile</span>
                    </a>
                    <a href="navbar-v1-ecommerce-cart.html" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="shopping-cart"></i>Cart</span>
                        <span class="menu-badge">3</span>
                    </a>
                    <a href="#" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="bookmark"></i>Bookmarks</span>
                    </a>
                </div>
            </div>

            <!-- More -->
            <div class="navbar-item has-dropdown">
                <a href="navbar-v1-settings.html" class="navbar-link">
                    <i data-feather="user"></i>
                    <span class="is-heading">Account</span>
                </a>

                <!-- Mobile Dropdown -->
                <div class="navbar-dropdown">
                    <a href="#" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="life-buoy"></i>Support</span>
                    </a>
                    <a href="navbar-v1-settings.html" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="settings"></i>Settings</span>
                    </a>
                    <a href="#" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="log-out"></i>Logout</span>
                    </a>
                </div>
            </div>
        </div>
        <!--Search-->
        <div class="mobile-search is-hidden">
            <div class="control">
                <input id="tipue_drop_input_mobile" class="input" placeholder="Search..." />
                <div class="form-icon">
                    <i data-feather="search"></i>
                </div>
                <div class="close-icon">
                    <i data-feather="x"></i>
                </div>
                <div id="tipue_drop_content_mobile" class="tipue-drop-content"></div>
            </div>
        </div>
    </nav>


    <div class="view-wrapper">
        <!-- Container -->
        <div id="main-feed" class="container">
            <!-- Content placeholders at page load -->
            <!-- /html/partials/global/placeload/feed-page/feed-menu-shadow-dom.html -->
            <!-- this holds the animated content placeholders that show up before content -->
            <div id="shadow-dom" class="view-wrap">
                <div class="columns">
                    <div class="column is-3">
                        <!-- /html/partials/global/placeload/placeloads/questions-menu-placeload.html -->
                        <div class="placeload is-bold questions-menu-placeload">
                            <div class="inner-wrap">
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>
                    </div>

                    <div class="column is-6">
                        <!-- Placeload element -->
                        <div class="placeload compose-placeload">
                            <div class="header">
                                <div class="content-shape is-lg loads"></div>
                                <div class="content-shape is-lg loads"></div>
                                <div class="content-shape is-lg loads"></div>
                            </div>
                            <div class="body">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Placeload element -->
                        <div class="placeload post-placeload">
                            <div class="header">
                                <div class="img loads"></div>
                                <div class="header-content">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="image-placeholder loads"></div>
                            <div class="placeholder-footer">
                                <div class="footer-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Placeload element -->
                        <div class="placeload post-placeload">
                            <div class="header">
                                <div class="img loads"></div>
                                <div class="header-content">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="image-placeholder loads"></div>
                            <div class="placeholder-footer">
                                <div class="footer-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Placeload element -->
                        <div class="placeload post-placeload">
                            <div class="header">
                                <div class="img loads"></div>
                                <div class="header-content">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="image-placeholder loads"></div>
                            <div class="placeholder-footer">
                                <div class="footer-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Placeload element -->
                        <div class="placeload post-placeload">
                            <div class="header">
                                <div class="img loads"></div>
                                <div class="header-content">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="image-placeholder loads"></div>
                            <div class="placeholder-footer">
                                <div class="footer-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column is-3">
                        <!-- Placeload element -->
                        <div class="placeload stories-placeload">
                            <div class="header">
                                <div class="content-shape loads"></div>
                            </div>
                            <div class="body">
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Placeload element -->
                        <div class="placeload mini-widget-placeload">
                            <div class="body">
                                <div class="inner-wrap">
                                    <div class="img loads"></div>
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                    <div class="button-shape loads"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Placeload element -->
                        <div class="placeload list-placeload">
                            <div class="header">
                                <div class="content-shape loads"></div>
                            </div>
                            <div class="body">
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feed page main wrapper -->
            <div id="activity-feed" class="view-wrap true-dom is-hidden">
                <div class="columns">
                    <!-- Left side column -->
                    <div class="column is-3 is-hidden-mobile">
                        <!-- Feed menu -->
                        <div class="feed-menu-v1">
                            <ul class="main-menu">
                                <li class="is-active">
                                    <a>
                                        <i data-feather="activity"></i>
                                        <span>Feed</span>
                                        <span class="close-icon">
                                            <i data-feather="chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li class="is-subactive">
                                            <a>Trending <span class="tag">4</span></a>
                                        </li>
                                        <li>
                                            <a>Popular</a>
                                        </li>
                                        <li>
                                            <a>Following</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i data-feather="help-circle"></i>
                                        <span>Questions</span>
                                        <span class="close-icon">
                                            <i data-feather="chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a>Home</a>
                                        </li>
                                        <li>
                                            <a>My Questions</a>
                                        </li>
                                        <li>
                                            <a>Popular</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i data-feather="youtube"></i>
                                        <span>Videos</span>
                                        <span class="close-icon">
                                            <i data-feather="chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a>Home<span class="tag">7</span></a>
                                        </li>
                                        <li>
                                            <a>Suggested</a>
                                        </li>
                                        <li>
                                            <a>My Channel</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i data-feather="shopping-cart"></i>
                                        <span>Shopping</span>
                                        <span class="close-icon">
                                            <i data-feather="chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a>Trending<span class="tag">2</span></a>
                                        </li>
                                        <li>
                                            <a>Popular<span class="tag">5</span></a>
                                        </li>
                                        <li>
                                            <a>My Products</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i data-feather="music"></i>
                                        <span>Music</span>
                                        <span class="close-icon">
                                            <i data-feather="chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a>My Products</a>
                                        </li>
                                        <li>
                                            <a>Trending<span class="tag">6</span></a>
                                        </li>
                                        <li>
                                            <a>Popular</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Left side column -->




                    <!-- Middle column -->
                    <div class="column is-6">
                        <!-- Publishing Area -->
                        <!-- /partials/pages/feed/compose-card.html -->
                        <div id="compose-card" class="card is-new-content">
                            <!-- Top tabs -->
                            <div class="tabs-wrapper">

                                <div class="tabs is-boxed is-fullwidth">
                                    <ul>
                                        <li class="is-active">
                                            <a>
                                                <span class="icon is-small"><i data-feather="edit-3"></i></span>
                                                <span>Publish</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="modal-trigger" data-modal="albums-help-modal">
                                                <span class="icon is-small"><i data-feather="image"></i></span>
                                                <span>Albums</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="modal-trigger" data-modal="videos-help-modal">
                                                <span class="icon is-small"><i data-feather="video"></i></span>
                                                <span>Video</span>
                                            </a>
                                        </li>
                                        <!-- Close X button -->
                                        <li class="close-wrap">
                                            <span class="close-publish">
                                                <i data-feather="x"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Tab content -->
                                <form action="{{route('post.store')}}" method="POST" id="formdata" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-content">
                                        <!-- Compose form -->
                                        <div class="compose">
                                            <div class="compose-form">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                                                <div class="control">
                                                    <textarea id="publish" class="textarea" rows="3" placeholder="Write something about you..." name="description"></textarea>
                                                </div>
                                            </div>

                                            <div id="feed-upload" class="feed-upload"></div>

                                            <div id="options-summary" class="options-summary"></div>

                                            <div id="tag-suboption" class="is-autocomplete is-suboption is-hidden">
                                                <!-- Tag friends suboption -->
                                                <div id="tag-list" class="tag-list"></div>
                                                <div class="control">
                                                    <input id="users-autocpl" type="text" class="input" placeholder="Who are you with?" name="tag_user" />
                                                    <div class="icon">
                                                        <i data-feather="search"></i>
                                                    </div>
                                                    <div class="close-icon is-main">
                                                        <i data-feather="x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Tag friends suboption -->

                                            <!-- Activities suboption -->
                                            <div id="activities-suboption" class="is-autocomplete is-suboption is-hidden">
                                                <div id="activities-autocpl-wrapper" class="control has-margin">
                                                    <input id="activities-autocpl" type="text" class="input" placeholder="What are you doing right now?" name="activity" />
                                                    <div class="icon">
                                                        <i data-feather="search"></i>
                                                    </div>
                                                    <div class="close-icon is-main">
                                                        <i data-feather="x"></i>
                                                    </div>
                                                </div>

                                                <!-- Mood suboption -->
                                                <div id="mood-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                                                    <div class="control has-margin">
                                                        <input id="mood-autocpl" type="text" class="input is-subactivity" placeholder="How do you feel?" />
                                                        <div class="input-block">Feels</div>
                                                        <div class="close-icon is-subactivity">
                                                            <i data-feather="x"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Drinking suboption child -->
                                                <div id="drinking-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                                                    <div class="control has-margin">
                                                        <input id="drinking-autocpl" type="text" class="input is-subactivity" placeholder="What are you drinking?" />
                                                        <div class="input-block">Drinks</div>
                                                        <div class="close-icon is-subactivity">
                                                            <i data-feather="x"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Eating suboption child -->
                                                <div id="eating-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                                                    <div class="control has-margin">
                                                        <input id="eating-autocpl" type="text" class="input is-subactivity" placeholder="What are you eating?" />
                                                        <div class="input-block">Eats</div>
                                                        <div class="close-icon is-subactivity">
                                                            <i data-feather="x"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Reading suboption child -->
                                                <div id="reading-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                                                    <div class="control has-margin">
                                                        <input id="reading-autocpl" type="text" class="input is-subactivity" placeholder="What are you reading?" />
                                                        <div class="input-block">Reads</div>
                                                        <div class="close-icon is-subactivity">
                                                            <i data-feather="x"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Watching suboption child -->
                                                <div id="watching-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                                                    <div class="control has-margin">
                                                        <input id="watching-autocpl" type="text" class="input is-subactivity" placeholder="What are you watching?" />
                                                        <div class="input-block">Watches</div>
                                                        <div class="close-icon is-subactivity">
                                                            <i data-feather="x"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Travel suboption child -->
                                                <div id="travel-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                                                    <div class="control has-margin">
                                                        <input id="travel-autocpl" type="text" class="input is-subactivity" placeholder="Where are you going?" />
                                                        <div class="input-block">Travels</div>
                                                        <div class="close-icon is-subactivity">
                                                            <i data-feather="x"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Activities suboption -->

                                            <!-- Location suboption -->
                                            <div id="location-suboption" class="is-autocomplete is-suboption is-hidden">
                                                <div id="location-autocpl-wrapper" class="control is-location-wrapper has-margin">
                                                    <input id="location-autocpl" type="text" class="input" placeholder="Where are you now?" name="location" />
                                                    <div class="icon">
                                                        <i data-feather="map-pin"></i>
                                                    </div>
                                                    <div class="close-icon is-main">
                                                        <i data-feather="x"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Link suboption -->
                                            <div id="link-suboption" class="is-autocomplete is-suboption is-hidden">
                                                <div id="link-autocpl-wrapper" class="control is-location-wrapper has-margin">
                                                    <input id="link-autocpl" type="text" class="input" placeholder="Enter the link URL" name="link" />
                                                    <div class="icon">
                                                        <i data-feather="link-2"></i>
                                                    </div>
                                                    <div class="close-icon is-main">
                                                        <i data-feather="x"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- GIF suboption -->
                                            <div id="gif-suboption" class="is-autocomplete is-suboption is-hidden">
                                                <div id="gif-autocpl-wrapper" class="control is-gif-wrapper has-margin">
                                                    <input id="gif-autocpl" type="text" class="input" placeholder="Search a GIF to add" autofocus />
                                                    <div class="icon">
                                                        <i data-feather="search"></i>
                                                    </div>
                                                    <div class="close-icon is-main">
                                                        <i data-feather="x"></i>
                                                    </div>
                                                    <!-- <div class="gif-dropdown">
                                                        <div class="inner">
                                                            <div class="gif-block">
                                                                <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/1.gif" alt="" />
                                                                <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/2.gif" alt="" />
                                                                <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/3.gif" alt="" />
                                                                <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/4.gif" alt="" />
                                                            </div>
                                                            <div class="gif-block">
                                                                <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/5.gif" alt="" />
                                                                <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/6.gif" alt="" />
                                                                <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/7.gif" alt="" />
                                                                <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/8.gif" alt="" />
                                                            </div>
                                                            <div class="gif-block">
                                                                <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/9.gif" alt="" />
                                                                <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/10.gif" alt="" />
                                                                <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/11.gif" alt="" />
                                                                <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/12.gif" alt="" />
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Compose form -->

                                        <!-- General extended options -->
                                        <div id="extended-options" class="compose-options is-hidden">
                                            <div class="columns is-multiline is-full">
                                                <!-- Upload action -->
                                                <div class="column is-6 is-narrower">
                                                    <div class="compose-option is-centered">
                                                        <i data-feather="camera"></i>
                                                        <span>Photo/Video</span>
                                                        <input id="UploadImages" type="file" accept=".png, .jpg, .jpeg" onchange="readURL(this)" name="media" />

                                                    </div>
                                                </div>
                                                <!-- Mood action -->
                                                <div class="column is-6 is-narrower">
                                                    <div id="extended-show-activities" class="compose-option is-centered">
                                                        <img src="{{ asset ('assets/img/icons/emoji/emoji-1.svg' ) }}">

                                                        <span>Mood/Activity</span>
                                                    </div>
                                                </div>
                                                <!-- Tag friends action -->
                                                <div class="column is-6 is-narrower">
                                                    <div id="open-tag-suboption" class="compose-option is-centered">
                                                        <i data-feather="tag"></i>
                                                        <span>Tag friends</span>
                                                    </div>
                                                </div>
                                                <!-- Post location action -->
                                                <div class="column is-6 is-narrower">
                                                    <div id="open-location-suboption" class="compose-option is-centered">
                                                        <i data-feather="map-pin"></i>
                                                        <span>Post location</span>
                                                    </div>
                                                </div>
                                                <!-- Share link action -->
                                                <div class="column is-6 is-narrower">
                                                    <div id="open-link-suboption" class="compose-option is-centered">
                                                        <i data-feather="link-2"></i>
                                                        <span>Share link</span>
                                                    </div>
                                                </div>
                                                <!-- Post GIF action -->
                                                <div class="column is-6 is-narrower">
                                                    <div id="open-gif-suboption" class="compose-option is-centered">
                                                        <i data-feather="image"></i>
                                                        <span>Post GIF</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /General extended options -->

                                        <!-- General basic options -->
                                        <div id="basic-options" class="compose-options">
                                            <!-- Upload action -->
                                            <div class="compose-option">
                                                <i data-feather="camera"></i>
                                                <span>Media</span>
                                                <input id="feed-upload-input-2" type="file" type="file" accept=".png, .jpg, .jpeg" onchange="readURL(this)" />
                                            </div>
                                            <!-- Mood action -->
                                            <div id="show-activities" class="compose-option">
                                                <img src="{{ asset ('assets/img/icons/emoji/emoji-1.svg' ) }}">

                                                <span>Activity</span>
                                            </div>
                                            <!-- Expand action -->
                                            <div id="open-extended-options" class="compose-option">
                                                <i data-feather="more-horizontal"></i>
                                            </div>
                                        </div>
                                        <!-- /General basic options -->

                                        <!-- Hidden Options -->
                                        <div class="hidden-options">
                                            <div class="target-channels">
                                                <!-- Publication Channel -->
                                                <div class="channel">
                                                    <div class="round-checkbox is-small">
                                                        <div>
                                                            <input type="checkbox" id="checkbox-1" checked />
                                                            <label for="checkbox-1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="channel-icon">
                                                        <i data-feather="bell"></i>
                                                    </div>
                                                    <div class="channel-name">Activity Feed</div>
                                                    <!-- Dropdown menu -->
                                                    <div class="dropdown is-spaced is-modern is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <button class="button" aria-haspopup="true">
                                                                <i class="main-icon" data-feather="smile"></i>
                                                                <span>Friends</span>
                                                                <i class="caret" data-feather="chevron-down"></i>
                                                            </button>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="globe"></i>
                                                                        <div class="media-content">
                                                                            <h3>Public</h3>
                                                                            <small>Anyone can see this publication.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="users"></i>
                                                                        <div class="media-content">
                                                                            <h3>private</h3>
                                                                            <small>only Private can see this publication.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="user"></i>
                                                                        <div class="media-content">
                                                                            <h3>Specific friends</h3>
                                                                            <small>Don't show it to some friends.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <hr class="dropdown-divider" />
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="lock"></i>
                                                                        <div class="media-content">
                                                                            <h3>Only me</h3>
                                                                            <small>Only me can see this publication.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Publication Channel -->
                                                <div class="channel">
                                                    <div class="round-checkbox is-small">
                                                        <div>
                                                            <input type="checkbox" id="checkbox-2" />
                                                            <label for="checkbox-2"></label>
                                                        </div>
                                                    </div>
                                                    <div class="story-icon">
                                                        <div class="plus-icon">
                                                            <i data-feather="plus"></i>
                                                        </div>
                                                    </div>

                                                    <div class="channel-name">My Story</div>
                                                    <!-- Dropdown menu -->
                                                    <div class="dropdown is-spaced is-modern is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <button class="button" aria-haspopup="true">
                                                                <i class="main-icon" data-feather="smile"></i>
                                                                <span>Friends</span>
                                                                <i class="caret" data-feather="chevron-down"></i>
                                                            </button>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="globe"></i>
                                                                        <div class="media-content">
                                                                            <h3>Public</h3>
                                                                            <small>Anyone can see this publication.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="users"></i>
                                                                        <div class="media-content">
                                                                            <h3>Friends</h3>
                                                                            <small>only friends can see this publication.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="users"></i>
                                                                        <div class="media-content">
                                                                            <h3>Friends and contacts</h3>
                                                                            <small>Your friends and contacts.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Friends list -->
                                            <div class="friends-list is-hidden">
                                                <!-- Header -->
                                                <div class="list-header">
                                                    <span>Send in a message</span>
                                                    <div class="actions">
                                                        <a id="open-compose-search" href="javascript:void(0);" class="search-trigger">
                                                            <i data-feather="search"></i>
                                                        </a>
                                                        <!-- Hidden filter input -->
                                                        <div id="compose-search" class="control is-hidden">
                                                            <input type="text" class="input" placeholder="Search People" />
                                                            <span>
                                                                <i data-feather="search"></i>
                                                            </span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="is-inverted modal-trigger" data-modal="create-group-modal">Create group</a>
                                                    </div>
                                                </div>
                                                <!-- List body -->
                                                <div class="list-body">
                                                    <!-- Friend -->
                                                    <div class="friend-block">
                                                        <div class="round-checkbox is-small">
                                                            <div>
                                                                <input type="checkbox" id="checkbox-3" />
                                                                <label for="checkbox-3"></label>
                                                            </div>
                                                        </div>
                                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/dan.jpg')}}" alt="" />
                                                        <div class="friend-name">Dan Walker</div>
                                                    </div>
                                                    <!-- Friend -->
                                                    <div class="friend-block">
                                                        <div class="round-checkbox is-small">
                                                            <div>
                                                                <input type="checkbox" id="checkbox-4" />
                                                                <label for="checkbox-4"></label>
                                                            </div>
                                                        </div>
                                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" alt="" />
                                                        <div class="friend-name">Daniel Wellington</div>
                                                    </div>
                                                    <!-- Friend -->
                                                    <div class="friend-block">
                                                        <div class="round-checkbox is-small">
                                                            <div>
                                                                <input type="checkbox" id="checkbox-5" />
                                                                <label for="checkbox-5"></label>
                                                            </div>
                                                        </div>
                                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/stella.jpg')}}" alt="" />
                                                        <div class="friend-name">Stella Bergmann</div>
                                                    </div>
                                                    <!-- Friend -->
                                                    <div class="friend-block">
                                                        <div class="round-checkbox is-small">
                                                            <div>
                                                                <input type="checkbox" id="checkbox-6" />
                                                                <label for="checkbox-6"></label>
                                                            </div>
                                                        </div>
                                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/david.jpg')}}" alt="" />
                                                        <div class="friend-name">David Kim</div>
                                                    </div>
                                                    <!-- Friend -->
                                                    <div class="friend-block">
                                                        <div class="round-checkbox is-small">
                                                            <div>
                                                                <input type="checkbox" id="checkbox-7" />
                                                                <label for="checkbox-7"></label>
                                                            </div>
                                                        </div>
                                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/nelly.png')}}" alt="" />
                                                        <div class="friend-name">Nelly Schwartz</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Footer buttons -->
                                        <div class="more-wrap">
                                            <!-- View more button -->
                                            <button id="show-compose-friends" type="button" class="button is-more" aria-haspopup="true">
                                                <i data-feather="more-vertical"></i>
                                                <span>View More</span>
                                            </button>
                                            <!-- Publish button -->
                                            <button id="publish-button" type="submit" class="button is-solid accent-button is-fullwidth is-disabled">
                                                Publish
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                </form>
                            </div>
                        </div>

                        <!-- Post 1 -->
                        <!-- /partials/pages/feed/posts/feed-post1.html -->
                        <!-- POST #1 -->
                        @foreach($posts as $post)
                        <div id="feed-post-1" class="card is-post">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Post header -->
                                <div class="card-heading">
                                    <!-- User meta -->

                                    <div class="user-block">
                                        <div class="image">
                                            <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" data-user-popover="1" alt="" />
                                        </div>
                                        <div class="user-info">
                                            <a href="#">Dan Walker</a>
                                            <span class="time">July 26 2018, 01:03pm</span>
                                        </div>
                                    </div>

                                </div>
                                <!-- /Post header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    @if (!empty($post->image))
                                    <p>{{ $post->description }}</p>
                                    <img src="https://via.placeholder.com/1600x900" data-demo-src="{{asset('assets/images/media/'. $post->media)}}" alt="" />

                                    @endif

                                    <!-- Post body text -->

                                    <!-- Featured image -->
                                    <div class="post-image">
                                        <a data-fancybox="post1" data-lightbox-type="comments" data-thumb="{{asset('img/demo/unsplash/1.jpg')}}" href="https://via.placeholder.com/1600x900" data-demo-href="{{asset('img/demo/unsplash/1.jpg')}}">
                                            <img src="https://via.placeholder.com/1600x900" alt="" data-demo-src="{{asset('img/demo/unsplash/1.jpg')}}" />
                                        </a>
                                        <!-- Action buttons -->
                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                        <div class="like-wrapper">
                                            <a href="javascript:void(0);" class="like-button">
                                                <i class="mdi mdi-heart not-liked bouncy"></i>
                                                <i class="mdi mdi-heart is-liked bouncy"></i>
                                                <span class="like-overlay"></span>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-share">
                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">
                                                <i data-feather="link-2"></i>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-comment">
                                            <a href="javascript:void(0);" class="small-fab">
                                                <i data-feather="message-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers avatars -->
                                    <div class="likers-group">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/dan.jpg')}}" data-user-popover="1" alt="" />
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/david.jpg')}}" data-user-popover="4" alt="" />

                                    </div>
                                    <!-- Followers text -->
                                    <div class="likers-text">
                                        <p>
                                            <a href="#">Milly</a>,
                                            <a href="#">David</a>
                                        </p>
                                        <p>and 5 more liked this</p>
                                    </div>
                                    <!-- Post statistics -->


                                    <div class="social-count">
                                        <button type="button" class="like-button" onclick="like_post({{ $post->id }})">Like</button>
                                        <button type="button" class="dislike-button" onclick="dislike_post({{ $post->id }})">Dislike</button>
                                        <p>Likes: <span id="like-count">0</span></p>
                                        <p>Dislikes: <span id="dislike-count">0</span></p>

                                        <!-- <div class="shares-count">
                                            <i data-feather="link-2"></i>
                                            <span>9</span>
                                        </div>
                                        <div class="comments-count">
                                            <i data-feather="message-circle"></i>
                                            <span>3</span>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>

                            <!-- /Main wrap -->

                            <!-- Post #1 Comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>Comments <small>(8)</small></h4>
                                    <div class="close-comments">
                                        <i data-feather="x"></i>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Comments body -->
                                @foreach($comments as $comment)
                                <div class="comments-body has-slimscroll">
                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/dan.jpg')}}" data-user-popover="1" alt="" />
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">{{ $comment->user->name }}</a>
                                            <span class="time">28 minutes ago</span>
                                            <p>{{ $comment->comment }}</p>

                                            <!-- Actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <i data-feather="thumbs-up"></i>
                                                    <span>4</span>
                                                </div>
                                                <div class="edit">
                                                    <a href="javascript:void(0);" onclick="showReplyForm({{$comment->id}})">Reply</a>
                                                </div>
                                                <div class="edit">
                                                    <a href="#">Edit</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->

                                            <!-- /Nested Comment -->
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="x"></i>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="flag"></i>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                </div>
                                <!-- /Comments body -->

                                <!-- Comments footer -->
                                <form method="post" style="display: none;" class="comment-reply-form" id="reply-form-{{$comment->id}}" action="{{ route('comments.reply', ['comment' => $comment]) }}">

                                    @csrf
                                    <div class="card-footer">
                                        <div class="media post-comment has-emojis">
                                            <!-- Comment Textarea -->
                                            <div class="media-content">
                                                <div class="field">
                                                    <p class="control">

                                                        <textarea name="comment" class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>

                                                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                                        <input type="hidden" name="comment_id" value="{{ $comment->id }}" />

                                                    </p>
                                                </div>
                                                <!-- Additional actions -->
                                                <div class="actions">
                                                    <div class="image is-32x32">
                                                        <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" data-user-popover="0" alt="" />
                                                    </div>
                                                    <div class="toolbar">
                                                        <div class="action is-auto">
                                                            <i data-feather="at-sign"></i>
                                                        </div>
                                                        <div class="action is-emoji">
                                                            <i data-feather="smile"></i>
                                                        </div>
                                                        <div class="action is-upload">
                                                            <i data-feather="camera"></i>
                                                            <input type="file" />
                                                        </div>
                                                        <input type="submit" class="btn btn-success" value="Reply" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                                @endforeach
                                <form method="post" class="comment-form">
                                    @csrf
                                    <div class="card-footer">
                                        <div class="media post-comment has-emojis">
                                            <div class="media-content">
                                                <div class="field">
                                                    <p class="control">
                                                        <textarea name="comment" id="" class="textarea comment-here-{{$post->id}} comment-textarea" rows="5" placeholder=" comment..."></textarea>
                                                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                                    </p>
                                                </div>
                                                <div class="actions">
                                                    <div class="image is-32x32">
                                                        <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="{{ asset('img/jenna.png') }}" data-user-popover="0" alt="" />
                                                    </div>
                                                    <div class="toolbar">
                                                        <div class="action is-auto">
                                                            <i data-feather="at-sign"></i>
                                                        </div>
                                                        <div class="action is-emoji">
                                                            <i data-feather="smile"></i>
                                                        </div>
                                                        <div class="action is-upload">
                                                            <i data-feather="camera"></i>
                                                            <input type="file" />
                                                        </div>
                                                        <input type="submit" class="btn btn-success" value="Add Comment" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                                <!-- Comments footer -->
                            </div>
                            <!-- /Post #1 Comments -->
                        </div>
                        @endforeach
                        <!-- POST #1 -->

                        <!-- Post 2 -->
                        <!-- /partials/pages/feed/posts/feed-post2.html -->
                        <!-- POST #2 -->
                        <div class="card is-post">
                            <!-- Main wrap -->

                            <!-- /Main wrap -->

                            <!-- Post #2 comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>Comments <small>(2)</small></h4>
                                    <div class="close-comments">
                                        <i data-feather="x"></i>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll">
                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/elise.jpg')}}" data-user-popover="6" alt="" />
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Elise Walker</a>
                                            <span class="time">2 days ago</span>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim
                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                consequat.
                                            </p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <i data-feather="thumbs-up"></i>
                                                    <span>1</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" data-user-popover="3" alt="" />
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Daniel Wellington</a>
                                                    <span class="time">2 days ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>0</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="x"></i>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="flag"></i>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->
                                </div>
                                <!-- /Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <!-- User image -->
                                    <div class="media post-comment has-emojis">
                                        <!-- Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" data-user-popover="0" alt="" />
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <i data-feather="at-sign"></i>
                                                    </div>
                                                    <div class="action is-emoji">
                                                        <i data-feather="smile"></i>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <i data-feather="camera"></i>
                                                        <input type="file" />
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Comments footer -->
                            </div>
                            <!-- /Post #2 comments -->
                        </div>
                        <!-- /POST #2 -->

                        <!-- Load more posts -->
                        <div class="load-more-wrap has-text-centered">
                            <a href="#" class="load-more-button">Load More</a>
                        </div>
                        <!-- /Load more posts -->
                    </div>




                    <!-- /Middle column -->

                    <!-- Right side column -->
                    <div class="column is-3">
                        <!-- Stories widget -->
                        <!-- /partials/widgets/stories-widget.html -->
                        <div class="card">
                            <div class="card-heading is-bordered">
                                <h4>Stories</h4>
                                <div class="dropdown is-spaced is-neutral is-right dropdown-trigger">
                                    <div>
                                        <div class="button">
                                            <i data-feather="more-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="tv"></i>
                                                    <div class="media-content">
                                                        <h3>Browse stories</h3>
                                                        <small>View all recent stories.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="settings"></i>
                                                    <div class="media-content">
                                                        <h3>Settings</h3>
                                                        <small>Access widget settings.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider" />
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="trash-2"></i>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body no-padding">
                                <!-- Story block -->
                                <div class="story-block">
                                    <a id="add-story-button" href="#" class="add-story">
                                        <i data-feather="plus"></i>
                                    </a>
                                    <div class="story-meta">
                                        <span>Add a new Story</span>
                                        <span>Share an image, a video or some text</span>
                                    </div>
                                </div>
                                <!-- Story block -->
                                @foreach($users as $user)
                                <div class="story-block">
                                    <div class="img-wrapper">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" data-user-popover="1" alt="" />
                                    </div>
                                    <div class="story-meta">
                                        <span>{{$user->name}}</span>
                                        <span>1 hour ago</span>
                                        @if (auth()->user()->id !== $user->id)
                                        @if ($user->followers->contains(auth()->user()->id))
                                        <a href="{{route('follow', $user->id)}}" class="btn btn-danger">Unfollow</a>
                                        @else
                                        <a href="{{route('follow', $user->id)}}" class="btn btn-primary">
                                            Follow
                                        </a>
                                        @endif

                                        @endif

                                    </div>
                                    <div class="my-2">
                                        <span class="badge rounde-pill bg-light text-dark">
                                            Following: {{$user->followings_count}}
                                        </span>
                                        <span class="badge rounde-pill bg-light text-dark">
                                            Followers: {{$user->followers_count}}
                                        </span>
                                    </div>
                                </div>
                                @endforeach
                                @foreach($pending_users as $user)
                                <div class="story-block">
                                    <div class="img-wrapper">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" data-user-popover="1" alt="" />
                                    </div>
                                    <div class="story-meta">
                                        <span>{{$user->name}}</span>
                                        <span>1 hour ago</span>
                                        @if (auth()->user()->id !== $user->id)
                                        @if ($user->followers->contains(auth()->user()->id))
                                        <a href="{{route('follow', $user->id)}}" class="btn btn-danger">Accept</a>
                                        @else
                                        <a href="{{route('follow', $user->id)}}" class="btn btn-primary">
                                            Regect
                                        </a>
                                        @endif

                                        @endif

                                    </div>
                                    <div class="my-2">
                                        <span class="badge rounde-pill bg-light text-dark">
                                            Following: {{$user->followings_count}}
                                        </span>
                                        <span class="badge rounde-pill bg-light text-dark">
                                            Followers: {{$user->followers_count}}
                                        </span>
                                    </div>
                                </div>
                                @endforeach
                                



                            </div>
                        </div>

                        <!-- Birthday widget -->
                        <!-- /partials/widgets/birthday-widget.html -->
                        <div class="card is-birthday-card has-background-image" data-background="{{asset('assets/img/illustrations/cards/birthday-bg.svg')}}">
                            <div class="card-heading">
                                <i data-feather="gift"></i>
                                <div class="dropdown is-spaced is-right dropdown-trigger is-light">
                                    <div>
                                        <div class="button">
                                            <i data-feather="more-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="clock"></i>
                                                    <div class="media-content">
                                                        <h3>Remind me</h3>
                                                        <small>Remind me of this later today.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="message-circle"></i>
                                                    <div class="media-content">
                                                        <h3>Message</h3>
                                                        <small>Send an automatic greeting message.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider" />
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="trash-2"></i>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="birthday-avatar">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                                        <div class="birthday-indicator">31</div>
                                    </div>
                                    <div class="birthday-content">
                                        <h4>Dan turns 31 today!</h4>
                                        <p>Send him your best wishes by leaving something on his wall.</p>
                                        <button type="button" class="button light-button">Write Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Suggested friends widget -->
                        <!-- /partials/widgets/suggested-friends-1-widget.html -->
                        <div class="card">
                            <div class="card-heading is-bordered">
                                <h4>Suggested Friends</h4>
                                <div class="dropdown is-spaced is-right dropdown-trigger">
                                    <div>
                                        <div class="button">
                                            <i data-feather="more-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="users"></i>
                                                    <div class="media-content">
                                                        <h3>All Suggestions</h3>
                                                        <small>View all friend suggestions.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="settings"></i>
                                                    <div class="media-content">
                                                        <h3>Settings</h3>
                                                        <small>Access widget settings.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider" />
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="trash-2"></i>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body no-padding">
                                <!-- Suggested friend -->
                                <div class="add-friend-block transition-block">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/nelly.png')}}" data-user-popover="9" alt="" />
                                    <div class="page-meta">
                                        <span>Nelly Schwartz</span>
                                        <span>Melbourne</span>
                                    </div>
                                    <div class="add-friend add-transition">
                                        <i data-feather="user-plus"></i>
                                    </div>
                                </div>
                                <!-- Suggested friend -->
                                <div class="add-friend-block transition-block">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" data-user-popover="10" alt="" />
                                    <div class="page-meta">
                                        <span>Lana Henrikssen</span>
                                        <span>Helsinki</span>
                                    </div>
                                    <div class="add-friend add-transition">
                                        <i data-feather="user-plus"></i>
                                    </div>
                                </div>
                                <!-- Suggested friend -->
                                <div class="add-friend-block transition-block">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" data-user-popover="11" alt="" />
                                    <div class="page-meta">
                                        <span>Gaelle Morris</span>
                                        <span>Lyon</span>
                                    </div>
                                    <div class="add-friend add-transition">
                                        <i data-feather="user-plus"></i>
                                    </div>
                                </div>
                                <!-- Suggested friend -->
                                <div class="add-friend-block transition-block">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/mike.jpg')}}" data-user-popover="12" alt="" />
                                    <div class="page-meta">
                                        <span>Mike Lasalle</span>
                                        <span>Toronto</span>
                                    </div>
                                    <div class="add-friend add-transition">
                                        <i data-feather="user-plus"></i>
                                    </div>
                                </div>
                                <!-- Suggested friend -->
                                <div class="add-friend-block transition-block">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/rolf.jpg')}}" data-user-popover="13" alt="" />
                                    <div class="page-meta">
                                        <span>Rolf Krupp</span>
                                        <span>Berlin</span>
                                    </div>
                                    <div class="add-friend add-transition">
                                        <i data-feather="user-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- New job widget -->
                        <!-- /partials/widgets/new-job-widget.html -->
                        <div class="card is-new-job-card has-background-image" data-background="{{asset('assets/img/illustrations/cards/job-bg.svg')}}">>
                            <div class="card-heading">
                                <i data-feather="briefcase"></i>
                                <div class="dropdown is-spaced is-right dropdown-trigger is-light">
                                    <div>
                                        <div class="button">
                                            <i data-feather="more-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="clock"></i>
                                                    <div class="media-content">
                                                        <h3>Remind me</h3>
                                                        <small>Remind me of this later today.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="message-circle"></i>
                                                    <div class="media-content">
                                                        <h3>Message</h3>
                                                        <small>Send an automatic congratz message.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider" />
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="trash-2"></i>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="job-avatar">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/nelly.png')}}" alt="" />
                                    </div>
                                    <div class="job-content">
                                        <h4>Nelly has a new job!</h4>
                                        <p>Send her message congratulating her for getting this job.</p>
                                        <button type="button" class="button light-button">Write Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Right side column -->
                </div>
            </div>
            <!-- /Feed page main wrapper -->
        </div>
        <!-- /Container -->

        <!-- Create group modal in compose card -->
        <!-- /partials/pages/feed/modals/create-group-modal.html -->
        <div id="create-group-modal" class="modal create-group-modal is-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <h3>Create group</h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <!-- Modal subheading -->
                    <div class="subheading">
                        <!-- Group avatar -->
                        <div class="group-avatar">
                            <input id="group-avatar-upload" type="file" />
                            <div class="add-photo">
                                <i data-feather="plus"></i>
                            </div>
                        </div>
                        <!-- Group name -->
                        <div class="control">
                            <input type="text" class="input" placeholder="Give the group a name" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="inner">
                            <div class="left-section">
                                <div class="search-subheader">
                                    <div class="control">
                                        <input type="text" class="input" placeholder="Search for friends to add" />
                                        <span class="icon">
                                            <i data-feather="search"></i>
                                        </span>
                                    </div>
                                </div>
                                <div id="new-group-list" class="user-list has-slimscroll">
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-1">
                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/dan.jpg')}}" alt="" />
                                        <div class="friend-name">Dan Walker</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-1" />
                                                <label for="checkbox-group-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-2">
                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" alt="" />
                                        <div class="friend-name">Daniel Wellington</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-2" />
                                                <label for="checkbox-group-2"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-3">
                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/stella.jpg')}}" alt="" />
                                        <div class="friend-name">Stella Bergmann</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-3" />
                                                <label for="checkbox-group-3"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-4">
                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" alt="" />
                                        <div class="friend-name">David Kim</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-4" />
                                                <label for="checkbox-group-4"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-5">
                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/nelly.png')}}" alt="" />
                                        <div class="friend-name">Nelly Schwartz</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-5" />
                                                <label for="checkbox-group-5"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-6">
                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/elise.jpg')}}" alt="" />
                                        <div class="friend-name">Elise Walker</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-6" />
                                                <label for="checkbox-group-6"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-7">
                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/bobby.jpg')}}" alt="" />
                                        <div class="friend-name">Bobby Brown</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-7" />
                                                <label for="checkbox-group-7"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-8">
                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/stella.jpg')}}" alt="" />
                                        <div class="friend-name">Lana Henrikssen</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-8" />
                                                <label for="checkbox-group-8"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-9">
                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/stella.jpg')}}" alt="" />
                                        <div class="friend-name">Gaelle Morris</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-9" />
                                                <label for="checkbox-group-9"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-10">
                                        <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/mike.jpg')}}" alt="" />
                                        <div class="friend-name">Mike Lasalle</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-10" />
                                                <label for="checkbox-group-10"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-section has-slimscroll">
                                <div class="selected-count">
                                    <span>Selected</span>
                                    <span id="selected-friends-count">0</span>
                                </div>

                                <div id="selected-list" class="selected-list"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="button is-solid grey-button close-modal">
                            Cancel
                        </button>
                        <button type="button" class="button is-solid accent-button close-modal">
                            Create a Group
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Albums onboarding modal -->
        <!-- /partials/pages/feed/modals/albums-help-modal.html -->
        <div id="albums-help-modal" class="modal albums-help-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <h3>Add Photos</h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="content-block is-active">
                            <img src="{{ asset ('assets/img/illustrations/cards/albums.svg' ) }}">

                            <div class="help-text">
                                <h3>Manage your photos</h3>
                                <p>
                                    Lorem ipsum sit dolor amet is a dummy text used by the typography
                                    industry and the web industry.
                                </p>
                            </div>
                        </div>

                        <div class="content-block">
                            <img src="{{ asset ('assets/img/illustrations/cards/upload.svg' ) }}">

                            <div class="help-text">
                                <h3>Upload your photos</h3>
                                <p>
                                    Lorem ipsum sit dolor amet is a dummy text used by the typography
                                    industry and the web industry.
                                </p>
                            </div>
                        </div>

                        <div class="slide-dots">
                            <div class="dot is-active"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="action">
                            <button type="button" class="button is-solid accent-button next-modal raised" data-modal="albums-modal">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Album upload modal -->
        <!-- /partials/pages/feed/modals/albums-modal.html -->
        <div id="albums-modal" class="modal albums-modal is-xxl has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <h3>New album</h3>
                        <div class="button is-solid accent-button fileinput-button">
                            <i class="mdi mdi-plus"></i>
                            Add pictures/videos
                        </div>

                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="left-section">
                            <div class="album-form">
                                <div class="control">
                                    <input type="text" class="input is-sm no-radius is-fade" placeholder="Album name" />
                                    <div class="icon">
                                        <i data-feather="camera"></i>
                                    </div>
                                </div>
                                <div class="control">
                                    <textarea class="textarea is-fade no-radius is-sm" rows="3" placeholder="describe your album ..."></textarea>
                                </div>
                                <div class="control">
                                    <input type="text" class="input is-sm no-radius is-fade" placeholder="Place" />
                                    <div class="icon">
                                        <i data-feather="map-pin"></i>
                                    </div>
                                </div>
                            </div>

                            <div id="album-date" class="album-date">
                                <div class="head">
                                    <h4>Change the date</h4>
                                    <button type="button" class="button is-solid dark-grey-button icon-button">
                                        <i data-feather="plus"></i>
                                    </button>
                                </div>

                                <p>Set a date for your album. You can always change it later.</p>
                                <div class="control is-hidden">
                                    <input id="album-datepicker" type="text" class="input is-sm is-fade" placeholder="Select a date" />
                                    <div class="icon">
                                        <i data-feather="calendar"></i>
                                    </div>
                                </div>
                            </div>

                            <div id="tagged-in-album" class="tagged-in-album">
                                <div class="head">
                                    <h4>Tag friends in this album</h4>
                                    <button type="button" class="button is-solid dark-grey-button icon-button">
                                        <i data-feather="plus"></i>
                                    </button>
                                </div>

                                <p>
                                    Tag friends in this album. Tagged friends can see photos they are
                                    tagged in.
                                </p>
                                <div class="field is-autocomplete is-hidden">
                                    <div class="control">
                                        <input id="create-album-friends-autocpl" type="text" class="input is-sm is-fade" placeholder="Search for friends" />
                                        <div class="icon">
                                            <i data-feather="search"></i>
                                        </div>
                                    </div>
                                </div>

                                <div id="album-tag-list" class="album-tag-list"></div>
                            </div>

                            <div class="shared-album">
                                <div class="head">
                                    <h4>Allow friends to add photos</h4>
                                    <div class="basic-checkbox">
                                        <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1" />
                                        <label for="styled-checkbox-1"></label>
                                    </div>
                                </div>

                                <p>
                                    Tagged friends will be able to share content inside this album.
                                </p>
                            </div>
                        </div>
                        <div class="right-section has-slimscroll">
                            <div class="modal-uploader">
                                <div id="actions" class="columns is-multiline no-mb">
                                    <div class="column is-12">
                                        <span class="button has-icon is-solid grey-button fileinput-button">
                                            <i data-feather="plus"></i>
                                        </span>
                                        <button type="submit" class="button start is-hidden">
                                            <span>Upload</span>
                                        </button>
                                        <button type="reset" class="button is-solid grey-button cancel">
                                            <span>Clear all</span>
                                        </button>
                                        <span class="file-count">
                                            <span id="modal-uploader-file-count">0</span> file(s) selected
                                        </span>
                                    </div>

                                    <div class="column is-12 is-hidden">
                                        <!-- The global file processing state -->
                                        <div class="fileupload-process">
                                            <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                <div class="progress-bar progress-bar-success" style="width: 0%" data-dz-uploadprogress></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="columns is-multiline" id="previews">
                                    <div id="template" class="column is-4 is-template">
                                        <div class="preview-box">
                                            <!-- This is used as the file preview template -->
                                            <div class="remove-button" data-dz-remove>
                                                <i class="mdi mdi-close"></i>
                                            </div>
                                            <div>
                                                <span class="preview"><img src="https://via.placeholder.com/120x120" data-dz-thumbnail alt="" /></span>
                                            </div>
                                            <div class="preview-body">
                                                <div class="item-meta">
                                                    <div>
                                                        <p class="name" data-dz-name></p>
                                                        <strong class="error text-danger" data-dz-errormessage></strong>
                                                    </div>
                                                    <small class="size" data-dz-size></small>
                                                </div>
                                                <div class="upload-item-progress">
                                                    <div class="progress active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                        <div class="progress-bar progress-bar-success" data-dz-uploadprogress></div>
                                                    </div>
                                                </div>
                                                <div class="upload-item-description">
                                                    <div class="control">
                                                        <textarea class="textarea is-small is-fade no-radius" rows="4" placeholder="Describe this photo ..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="upload-item-actions is-hidden">
                                                    <button class="button start is-hidden">
                                                        <span>Start</span>
                                                    </button>
                                                    <button data-dz-remove class="button cancel is-hidden">
                                                        <span>Cancel</span>
                                                    </button>
                                                    <button data-dz-remove class="button delete is-hidden">
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!-- Dropdown menu -->
                        <div class="dropdown is-up is-spaced is-modern is-neutral is-right dropdown-trigger">
                            <div>
                                <button class="button" aria-haspopup="true">
                                    <i class="main-icon" data-feather="smile"></i>
                                    <span>Friends</span>
                                    <i class="caret" data-feather="chevron-down"></i>
                                </button>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="#" class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="globe"></i>
                                            <div class="media-content">
                                                <h3>Public</h3>
                                                <small>Anyone can see this publication.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="users"></i>
                                            <div class="media-content">
                                                <h3>Friends</h3>
                                                <small>only friends can see this publication.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="user"></i>
                                            <div class="media-content">
                                                <h3>Specific friends</h3>
                                                <small>Don't show it to some friends.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider" />
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="lock"></i>
                                            <div class="media-content">
                                                <h3>Only me</h3>
                                                <small>Only me can see this publication.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="button is-solid accent-button close-modal">
                            Create album
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Live video onboarding modal -->
        <!-- /partials/pages/feed/modals/videos-help-modal.html -->
        <div id="videos-help-modal" class="modal videos-help-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <h3>Add Photos</h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="content-block is-active">
                            <img src="{{ asset ('assets/img/illustrations/cards/videotrip.svg' ) }}">

                            <div class="help-text">
                                <h3>Share live videos</h3>
                                <p>
                                    Lorem ipsum sit dolor amet is a dummy text used by the typography
                                    industry and the web industry.
                                </p>
                            </div>
                        </div>

                        <div class="content-block">
                            <img src="{{ asset ('assets/img/illustrations/cards/videocall.svg' ) }}">

                            <div class="help-text">
                                <h3>To build your audience</h3>
                                <p>
                                    Lorem ipsum sit dolor amet is a dummy text used by the typography
                                    industry and the web industry.
                                </p>
                            </div>
                        </div>

                        <div class="slide-dots">
                            <div class="dot is-active"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="action">
                            <button type="button" class="button is-solid accent-button next-modal raised" data-modal="videos-modal">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Live video modal -->
        <!-- /partials/pages/feed/modals/videos-modal.html -->
        <div id="videos-modal" class="modal videos-modal is-xxl has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <h3>Go live</h3>
                        <div id="stop-stream" class="button is-solid accent-button is-hidden" onclick="stopWebcam();">
                            <i class="mdi mdi-video-off"></i>
                            Stop stream
                        </div>
                        <div id="start-stream" class="button is-solid accent-button" onclick="startWebcam();">
                            <i class="mdi mdi-video"></i>
                            Start stream
                        </div>

                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="inner">
                            <div class="left-section">
                                <div class="video-wrapper">
                                    <div class="video-wrap">
                                        <div id="live-indicator" class="live is-vhidden">Live</div>
                                        <video id="video" width="400" height="240" controls autoplay></video>
                                    </div>
                                </div>
                            </div>
                            <div class="right-section">
                                <div class="header">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                                    <div class="user-meta">
                                        <span>Jenna Davis <small>is live</small></span>
                                        <span><small>right now</small></span>
                                    </div>
                                    <button type="button" class="button">Follow</button>
                                    <div class="dropdown is-spaced is-right dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <i data-feather="more-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <div class="dropdown-item is-title">Who can see this ?</div>
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="globe"></i>
                                                        <div class="media-content">
                                                            <h3>Public</h3>
                                                            <small>Anyone can see this publication.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="users"></i>
                                                        <div class="media-content">
                                                            <h3>Friends</h3>
                                                            <small>only friends can see this publication.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="user"></i>
                                                        <div class="media-content">
                                                            <h3>Specific friends</h3>
                                                            <small>Don't show it to some friends.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider" />
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="lock"></i>
                                                        <div class="media-content">
                                                            <h3>Only me</h3>
                                                            <small>Only me can see this publication.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="inner-content">
                                    <div class="control">
                                        <input type="text" class="input is-sm is-fade" placeholder="What is this live about?" />
                                        <div class="icon">
                                            <i data-feather="activity"></i>
                                        </div>
                                    </div>
                                    <div class="live-stats">
                                        <div class="social-count">
                                            <div class="likes-count">
                                                <i data-feather="heart"></i>
                                                <span>0</span>
                                            </div>
                                            <div class="shares-count">
                                                <i data-feather="link-2"></i>
                                                <span>0</span>
                                            </div>
                                            <div class="comments-count">
                                                <i data-feather="message-circle"></i>
                                                <span>0</span>
                                            </div>
                                        </div>
                                        <div class="social-count ml-auto">
                                            <div class="views-count">
                                                <i data-feather="eye"></i>
                                                <span>0</span>
                                                <span class="views"><small>views</small></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="action">
                                            <i data-feather="thumbs-up"></i>
                                            <span>Like</span>
                                        </div>
                                        <div class="action">
                                            <i data-feather="message-circle"></i>
                                            <span>Comment</span>
                                        </div>
                                        <div class="action">
                                            <i data-feather="link-2"></i>
                                            <span>Share</span>
                                        </div>
                                        <div class="dropdown is-spaced is-right dropdown-trigger">
                                            <div>
                                                <div class="avatar-button">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                                                    <i data-feather="triangle"></i>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu has-margin" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="#" class="dropdown-item is-selected">
                                                        <div class="media">
                                                            <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                                                            <div class="media-content">
                                                                <h3>Jenna Davis</h3>
                                                                <small>Interact as Jenna Davis.</small>
                                                            </div>
                                                            <div class="checkmark">
                                                                <i data-feather="check"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <hr class="dropdown-divider" />
                                                    <a href="#" class="dropdown-item">
                                                        <div class="media">
                                                            <img src="https://via.placeholder.com/478x344" data-demo-src="{{asset('img/rolf.jpg')}}" alt="" />
                                                            <div class="media-content">
                                                                <h3>Css Ninja</h3>
                                                                <small>Interact as Css Ninja.</small>
                                                            </div>
                                                            <div class="checkmark">
                                                                <i data-feather="check"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tabs-wrapper">
                                    <div class="tabs is-fullwidth">
                                        <ul>
                                            <li class="is-active">
                                                <a>Comments</a>
                                            </li>
                                            <li>
                                                <a>Upcoming</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content has-slimscroll">
                                        <div class="media is-comment">
                                            <figure class="media-left">
                                                <p class="image is-32x32">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/dan.jpg')}}" alt="" data-user-popover="1" />
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <div class="username">Dan Walker</div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Proin ornare magna eros.
                                                </p>
                                                <div class="comment-actions">
                                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                                    <span>3h</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media is-comment">
                                            <figure class="media-left">
                                                <p class="image is-32x32">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/david.jpg')}}" alt="" data-user-popover="4" />
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <div class="username">David Kim</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                                <div class="comment-actions">
                                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                                    <span>4h</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media is-comment">
                                            <figure class="media-left">
                                                <p class="image is-32x32">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/rolf.jpg')}}" alt="" data-user-popover="17" />
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <div class="username">Rolf Krupp</div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Proin ornare magna eros. Consectetur adipiscing elit.
                                                    Proin ornare magna eros.
                                                </p>
                                                <div class="comment-actions">
                                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                                    <span>4h</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-controls">
                                    <div class="controls-inner">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                                        <div class="control">
                                            <textarea class="textarea comment-textarea is-rounded" rows="1"></textarea>
                                            <button class="emoji-button">
                                                <i data-feather="smile"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share from feed modal -->
        <!-- /partials/pages/feed/modals/share-modal.html -->
        <div id="share-modal" class="modal share-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <div class="dropdown is-primary share-dropdown">
                            <div>
                                <div class="button">
                                    <i class="mdi mdi-format-float-left"></i>
                                    <span>Share in your feed</span>
                                    <i data-feather="chevron-down"></i>
                                </div>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-item" data-target-channel="feed">
                                        <div class="media">
                                            <i class="mdi mdi-format-float-left"></i>
                                            <div class="media-content">
                                                <h3>Share in your feed</h3>
                                                <small>Share this publication on your feed.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item" data-target-channel="friend">
                                        <div class="media">
                                            <i class="mdi mdi-account-heart"></i>
                                            <div class="media-content">
                                                <h3>Share in a friend's feed</h3>
                                                <small>Share this publication on a friend's feed.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item" data-target-channel="group">
                                        <div class="media">
                                            <i class="mdi mdi-account-group"></i>
                                            <div class="media-content">
                                                <h3>Share in a group</h3>
                                                <small>Share this publication in a group.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item" data-target-channel="page">
                                        <div class="media">
                                            <i class="mdi mdi-file-document-box"></i>
                                            <div class="media-content">
                                                <h3>Share in a page</h3>
                                                <small>Share this publication in a page.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="dropdown-divider" />
                                    <div class="dropdown-item" data-target-channel="private-message">
                                        <div class="media">
                                            <i class="mdi mdi-email-plus"></i>
                                            <div class="media-content">
                                                <h3>Share in message</h3>
                                                <small>Share this publication in a private message.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="share-inputs">
                        <div class="field is-autocomplete">
                            <div id="share-to-friend" class="control share-channel-control is-hidden">
                                <input id="share-with-friend" type="text" class="input is-sm no-radius share-input simple-users-autocpl" placeholder="Your friend's name" />
                                <div class="input-heading">Friend :</div>
                            </div>
                        </div>

                        <div class="field is-autocomplete">
                            <div id="share-to-group" class="control share-channel-control is-hidden">
                                <input id="share-with-group" type="text" class="input is-sm no-radius share-input simple-groups-autocpl" placeholder="Your group's name" />
                                <div class="input-heading">Group :</div>
                            </div>
                        </div>

                        <div id="share-to-page" class="control share-channel-control no-border is-hidden">
                            <div class="page-controls">
                                <div class="page-selection">
                                    <div class="dropdown is-accent page-dropdown">
                                        <div>
                                            <div class="button page-selector">
                                                <img src="https://via.placeholder.com/150x150" data-demo-src="{{asset('img/daniel.jpg')}}" alt="" />
                                                <span>Css Ninja</span> <i data-feather="chevron-down"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <div class="dropdown-item">
                                                    <div class="media">
                                                        <img src="https://via.placeholder.com/150x150" data-demo-src="{{asset('img/daniel.jpg')}}" alt="" />
                                                        <div class="media-content">
                                                            <h3>Css Ninja</h3>
                                                            <small>Share on Css Ninja.</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item">
                                                    <div class="media">
                                                        <img src="https://via.placeholder.com/150x150" data-demo-src="{{asset('img/nuclearjs.svg')}}" alt="" />
                                                        <div class="media-content">
                                                            <h3>NuclearJs</h3>
                                                            <small>Share on NuclearJs.</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item">
                                                    <div class="media">
                                                        <img src="https://via.placeholder.com/150x150" data-demo-src="{{asset('img/sass.svg') }}" alt="" />
                                                        <div class="media-content">
                                                            <h3>Slicer</h3>
                                                            <small>Share on Slicer.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="alias">
                                    <img src="https://via.placeholder.com/150x150" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="field is-autocomplete">
                            <div id="share-to-private-message" class="control share-channel-control is-hidden">
                                <input id="share-with-private-message" type="text" class="input is-sm no-radius share-input simple-users-autocpl" placeholder="Message a friend" />
                                <div class="input-heading">To :</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="control">
                            <textarea class="textarea comment-textarea" rows="1" placeholder="Say something about this ..."></textarea>
                            <button class="emoji-button">
                                <i data-feather="smile"></i>
                            </button>
                        </div>
                        <div class="shared-publication">
                            <div class="featured-image">
                                <img id="share-modal-image" src="https://via.placeholder.com/1600x900" data-demo-src="{{asset('img/demo/unsplash/1.jpg')}}" alt="" />
                            </div>
                            <div class="publication-meta">
                                <div class="inner-flex">
                                    <img id="share-modal-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/dan.jpg')}}" data-user-popover="1" alt="" />
                                    <p id="share-modal-text">
                                        Yesterday with <a href="#">@Karen Miller</a> and
                                        <a href="#">@Marvin Stemperd</a> at the
                                        <a href="#">#Rock'n'Rolla</a> concert in LA. Was totally
                                        fantastic! People were really excited about this one!
                                    </p>
                                </div>
                                <div class="publication-footer">
                                    <div class="stats">
                                        <div class="stat-block">
                                            <i class="mdi mdi-earth"></i>
                                            <small>Public</small>
                                        </div>
                                        <div class="stat-block">
                                            <i class="mdi mdi-eye"></i>
                                            <small>163 views</small>
                                        </div>
                                    </div>
                                    <div class="publication-origin">
                                        <small>Friendkit.io</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-share-inputs">
                        <div id="action-place" class="field is-autocomplete is-dropup is-hidden">
                            <div id="share-place" class="control share-bottom-channel-control">
                                <input type="text" class="input is-sm no-radius share-input simple-locations-autocpl" placeholder="Where are you?" />
                                <div class="input-heading">Location :</div>
                            </div>
                        </div>

                        <div id="action-tag" class="field is-autocomplete is-dropup is-hidden">
                            <div id="share-tags" class="control share-bottom-channel-control">
                                <input id="share-friend-tags-autocpl" type="text" class="input is-sm no-radius share-input" placeholder="Who are you with" />
                                <div class="input-heading">Friends :</div>
                            </div>
                            <div id="share-modal-tag-list" class="tag-list no-margin"></div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="action-wrap">
                            <div class="footer-action" data-target-action="tag">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <div class="footer-action" data-target-action="place">
                                <i class="mdi mdi-map-marker"></i>
                            </div>
                            <div class="footer-action dropdown is-spaced is-neutral dropdown-trigger is-up" data-target-action="permissions">
                                <div>
                                    <i class="mdi mdi-lock-clock"></i>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="globe"></i>
                                                <div class="media-content">
                                                    <h3>Public</h3>
                                                    <small>Anyone can see this publication.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="users"></i>
                                                <div class="media-content">
                                                    <h3>Friends</h3>
                                                    <small>only friends can see this publication.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="user"></i>
                                                <div class="media-content">
                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some friends.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="dropdown-divider" />
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="lock"></i>
                                                <div class="media-content">
                                                    <h3>Only me</h3>
                                                    <small>Only me can see this publication.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-wrap">
                            <button type="button" class="button is-solid dark-grey-button close-modal">
                                Cancel
                            </button>
                            <button type="button" class="button is-solid primary-button close-modal">
                                Publish
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- No Stream modal -->
        <!-- /partials/pages/feed/modals/no-stream-modal.html -->
        <div id="no-stream-modal" class="modal no-stream-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <h3></h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body has-text-centered">
                        <div class="image-wrap">
                            <img src="{{ asset ('assets/img/illustrations/characters/no-stream.svg' ) }}">

                        </div>

                        <h3>Streaming Disabled</h3>
                        <p>
                            Streaming is not allowed from mobile web. Please use our mobile apps
                            for mobile streaming.
                        </p>

                        <div class="action">
                            <a href="index.html#demos-section" class="button is-solid accent-button raised is-fullwidth">Got It</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google places Lib -->
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyAGLO_M5VT7BsVdjMjciKoH1fFJWWdhDPU&amp;libraries=places"></script>

    </div>

    <div class="chat-wrapper">
        <div class="chat-inner">
            <!-- Chat top navigation -->
            <div class="chat-nav">
                <div class="nav-start">
                    <div class="recipient-block">
                        <div class="avatar-container">
                            <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/dan.jpg')}}" alt="" />
                        </div>
                        <div class="username">
                            <span>Dan Walker</span>
                            <span><i data-feather="star"></i> <span>| Online</span></span>
                        </div>
                    </div>
                </div>
                <div class="nav-end">
                    <!-- Settings icon dropdown -->
                    <div class="dropdown is-spaced is-neutral is-right dropdown-trigger">
                        <div>
                            <a class="chat-nav-item is-icon">
                                <i data-feather="settings"></i>
                            </a>
                        </div>
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="message-square"></i>
                                        <div class="media-content">
                                            <h3>Details</h3>
                                            <small>View this conversation's details.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="settings"></i>
                                        <div class="media-content">
                                            <h3>Preferences</h3>
                                            <small>Define your preferences.</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider" />
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="bell"></i>
                                        <div class="media-content">
                                            <h3>Notifications</h3>
                                            <small>Set notifications settings.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="bell-off"></i>
                                        <div class="media-content">
                                            <h3>Silence</h3>
                                            <small>Disable notifications.</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider" />
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="box"></i>
                                        <div class="media-content">
                                            <h3>Archive</h3>
                                            <small>Archive this conversation.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="trash-2"></i>
                                        <div class="media-content">
                                            <h3>Delete</h3>
                                            <small>Delete this conversation.</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="chat-search">
                        <div class="control has-icon">
                            <input type="text" class="input" placeholder="Search messages" />
                            <div class="form-icon">
                                <i data-feather="search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="chat-nav-item is-icon is-hidden-mobile">
                        <i data-feather="at-sign"></i>
                    </a>
                    <a class="chat-nav-item is-icon is-hidden-mobile">
                        <i data-feather="star"></i>
                    </a>

                    <!-- More dropdown -->
                    <div class="dropdown is-spaced is-neutral is-right dropdown-trigger">
                        <div>
                            <a class="chat-nav-item is-icon no-margin">
                                <i data-feather="more-vertical"></i>
                            </a>
                        </div>
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="file-text"></i>
                                        <div class="media-content">
                                            <h3>Files</h3>
                                            <small>View all your files.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="users"></i>
                                        <div class="media-content">
                                            <h3>Users</h3>
                                            <small>View all users you're talking to.</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider" />
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="gift"></i>
                                        <div class="media-content">
                                            <h3>Daily bonus</h3>
                                            <small>Get your daily bonus.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="download-cloud"></i>
                                        <div class="media-content">
                                            <h3>Downloads</h3>
                                            <small>See all your downloads.</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider" />
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="life-buoy"></i>
                                        <div class="media-content">
                                            <h3>Support</h3>
                                            <small>Reach our support team.</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a class="chat-nav-item is-icon close-chat">
                        <i data-feather="x"></i>
                    </a>
                </div>
            </div>

            <!-- Chat sidebar -->
            <div id="chat-sidebar" class="users-sidebar">
                <!-- Header -->
                <div class="header-item">
                    <img class="light-image" src="{{ asset ('assets/img/vector/logo/friendkit-bold.svg' ) }}">
                    <img class="light-image" src="{{ asset ('assets/img/vector/logo/friendkit-white.svg' ) }}">
                    <img class="dark-image" src="{{ asset ('assets/img/vector/logo/friendkit-white.svg' ) }}">
                </div>
                <!-- User list -->
                <div class="conversations-list has-slimscroll-xs">
                    <!-- User -->
                    <div class="user-item is-active" data-chat-user="dan" data-full-name="Dan Walker" data-status="Online">
                        <div class="avatar-container">
                            <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/dan.jpg')}}" alt="" />
                            <div class="user-status is-online"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="stella" data-full-name="Stella Bergmann" data-status="Busy">
                        <div class="avatar-container">
                            <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/stella.jpg')}}" alt="" />
                            <div class="user-status is-busy"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="daniel" data-full-name="Daniel Wellington" data-status="Away">
                        <div class="avatar-container">
                            <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" alt="" />
                            <div class="user-status is-away"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="david" data-full-name="David Kim" data-status="Busy">
                        <div class="avatar-container">
                            <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/david.jpg')}}" alt="" />
                            <div class="user-status is-busy"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="edward" data-full-name="Edward Mayers" data-status="Online">
                        <div class="avatar-container">
                            <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/edward.jpg')}}" alt="" />
                            <div class="user-status is-online"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="elise" data-full-name="Elise Walker" data-status="Away">
                        <div class="avatar-container">
                            <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/elise.jpg')}}" alt="" />
                            <div class="user-status is-away"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="nelly" data-full-name="Nelly Schwartz" data-status="Busy">
                        <div class="avatar-container">
                            <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/nelly.png')}}" alt="" />
                            <div class="user-status is-busy"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="milly" data-full-name="Milly Augustine" data-status="Busy">
                        <div class="avatar-container">
                            <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/milly.jpg')}}" alt="" />
                            <div class="user-status is-busy"></div>
                        </div>
                    </div>
                </div>
                <!-- Add Conversation -->
                <div class="footer-item">
                    <div class="add-button modal-trigger" data-modal="add-conversation-modal">
                        <i data-feather="user"></i>
                    </div>
                </div>
            </div>

            <!-- Chat body -->
            <div id="chat-body" class="chat-body is-opened">
                <!-- Conversation with Dan -->
                <div id="dan-conversation" class="chat-body-inner has-slimscroll">
                    <div class="date-divider">
                        <hr class="date-divider-line" />
                        <span class="date-divider-text">Today</span>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/dan.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>8:03am</span>
                            <div class="message-text">
                                Hi Jenna! I made a new design, and i wanted to show it to you.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/dan.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>8:03am</span>
                            <div class="message-text">
                                It's quite clean and it's inspired from Bulkit.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>8:12am</span>
                            <div class="message-text">Oh really??! I want to see that.</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/dan.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>8:13am</span>
                            <div class="message-text">FYI it was done in less than a day.</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>8:17am</span>
                            <div class="message-text">
                                Great to hear it. Just send me the PSD files so i can have a look at it.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>8:18am</span>
                            <div class="message-text">
                                And if you have a prototype, you can also send me the link to it.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conversation with Stella -->
                <div id="stella-conversation" class="chat-body-inner has-slimscroll is-hidden">
                    <div class="date-divider">
                        <hr class="date-divider-line" />
                        <span class="date-divider-text">Today</span>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>10:34am</span>
                            <div class="message-text">
                                Hey Stella! Aren't we supposed to go the theatre after work?.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>10:37am</span>
                            <div class="message-text">Just remembered it.</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/stella.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>11:22am</span>
                            <div class="message-text">
                                Yeah you always do that, forget about everything.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conversation with Daniel -->
                <div id="daniel-conversation" class="chat-body-inner has-slimscroll is-hidden">
                    <div class="date-divider">
                        <hr class="date-divider-line" />
                        <span class="date-divider-text">Yesterday</span>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>3:24pm</span>
                            <div class="message-text">
                                Daniel, Amanda told me about your issue, how can I help?
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>3:42pm</span>
                            <div class="message-text">
                                Hey Jenna, thanks for answering so quickly. Iam stuck, i need a car.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>3:43pm</span>
                            <div class="message-text">
                                Can i borrow your car for a quick ride to San Fransisco? Iam running
                                behind and there' no train in sight.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conversation with David -->
                <div id="david-conversation" class="chat-body-inner has-slimscroll is-hidden">
                    <div class="date-divider">
                        <hr class="date-divider-line" />
                        <span class="date-divider-text">Today</span>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>12:34pm</span>
                            <div class="message-text">
                                Damn you! Why would you even implement this in the game?.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>12:32pm</span>
                            <div class="message-text">I just HATE aliens.</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/david.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>13:09pm</span>
                            <div class="message-text">
                                C'mon, you just gotta learn the tricks. You can't expect aliens to
                                behave like humans. I mean that's how the mechanics are.
                            </div>
                        </div>
                    </div>
                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/david.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>13:11pm</span>
                            <div class="message-text">
                                I checked the replay and for example, you always get supply blocked.
                                That's not the right thing to do.
                            </div>
                        </div>
                    </div>
                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>13:12pm</span>
                            <div class="message-text">
                                I know but i struggle when i have to decide what to make from larvas.
                            </div>
                        </div>
                    </div>
                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/david.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>13:17pm</span>
                            <div class="message-text">Join me in game, i'll show you.</div>
                        </div>
                    </div>
                </div>

                <!-- Conversation with Edward -->
                <div id="edward-conversation" class="chat-body-inner has-slimscroll">
                    <div class="date-divider">
                        <hr class="date-divider-line" />
                        <span class="date-divider-text">Monday</span>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/edward.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>4:55pm</span>
                            <div class="message-text">Hey Jenna, what's up?</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/edward.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>4:56pm</span>
                            <div class="message-text">
                                Iam coming to LA tomorrow. Interested in having lunch?
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>5:21pm</span>
                            <div class="message-text">
                                Hey mate, it's been a while. Sure I would love to.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/edward.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>5:27pm</span>
                            <div class="message-text">
                                Ok. Let's say i pick you up at 12:30 at work, works?
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>5:43pm</span>
                            <div class="message-text">Yup, that works great.</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>5:44pm</span>
                            <div class="message-text">
                                And yeah, don't forget to bring some of my favourite cheese cake.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/edward.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>5:27pm</span>
                            <div class="message-text">No worries</div>
                        </div>
                    </div>
                </div>

                <!-- Conversation with Edward -->
                <div id="elise-conversation" class="chat-body-inner has-slimscroll is-hidden">
                    <div class="date-divider">
                        <hr class="date-divider-line" />
                        <span class="date-divider-text">September 28</span>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>11:53am</span>
                            <div class="message-text">
                                Elise, i forgot my folder at your place yesterday.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>11:53am</span>
                            <div class="message-text">I need it badly, it's work stuff.</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/elise.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>12:19pm</span>
                            <div class="message-text">
                                Yeah i noticed. I'll drop it in half an hour at your office.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conversation with Nelly -->
                <div id="nelly-conversation" class="chat-body-inner has-slimscroll is-hidden">
                    <div class="date-divider">
                        <hr class="date-divider-line" />
                        <span class="date-divider-text">September 17</span>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>8:22pm</span>
                            <div class="message-text">So you watched the movie?</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>8:22pm</span>
                            <div class="message-text">Was it scary?</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/nelly.png')}}" alt="" />
                        <div class="message-block">
                            <span>9:03pm</span>
                            <div class="message-text">
                                It was so frightening, i felt my heart was about to blow inside my
                                chest.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conversation with Milly -->
                <div id="milly-conversation" class="chat-body-inner has-slimscroll">
                    <div class="date-divider">
                        <hr class="date-divider-line" />
                        <span class="date-divider-text">Today</span>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/milly.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>2:01pm</span>
                            <div class="message-text">Hello Jenna, did you read my proposal?</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/milly.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>2:01pm</span>
                            <div class="message-text">Didn't hear from you since i sent it.</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>2:02pm</span>
                            <div class="message-text">
                                Hello Milly, Iam really sorry, Iam so busy recently, but i had the time
                                to read it.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/milly.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>2:04pm</span>
                            <div class="message-text">And what did you think about it?</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>2:05pm</span>
                            <div class="message-text">
                                Actually it's quite good, there might be some small changes but overall
                                it's great.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/jenna.png')}}" alt="" />
                        <div class="message-block">
                            <span>2:07pm</span>
                            <div class="message-text">
                                I think that i can give it to my boss at this stage.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/milly.jpg')}}" alt="" />
                        <div class="message-block">
                            <span>2:09pm</span>
                            <div class="message-text">Crossing fingers then</div>
                        </div>
                    </div>
                </div>

                <!-- Compose message area -->
                <div class="chat-action">
                    <div class="chat-action-inner">
                        <div class="control">
                            <textarea class="textarea comment-textarea" rows="1"></textarea>
                            <div class="dropdown compose-dropdown is-spaced is-accent is-up dropdown-trigger">
                                <div>
                                    <div class="add-button">
                                        <div class="button-inner">
                                            <i data-feather="plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="code"></i>
                                                <div class="media-content">
                                                    <h3>Code snippet</h3>
                                                    <small>Add and paste a code snippet.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="file-text"></i>
                                                <div class="media-content">
                                                    <h3>Note</h3>
                                                    <small>Add and paste a note.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="dropdown-divider" />
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="server"></i>
                                                <div class="media-content">
                                                    <h3>Remote file</h3>
                                                    <small>Add a file from a remote drive.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="monitor"></i>
                                                <div class="media-content">
                                                    <h3>Local file</h3>
                                                    <small>Add a file from your computer.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="chat-panel" class="chat-panel is-opened">
                <div class="panel-inner">
                    <div class="panel-header">
                        <h3>Details</h3>
                        <div class="panel-close">
                            <i data-feather="x"></i>
                        </div>
                    </div>

                    <!-- Dan details -->
                    <div id="dan-details" class="panel-body is-user-details">
                        <div class="panel-body-inner">
                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider" />
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/dan.jpg')}}" alt="" />
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Dan Walker</h3>
                                <h4>IOS Developer</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-green">
                                    <div>
                                        <i class="mdi mdi-dog"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-blue">
                                    <div>
                                        <i class="mdi mdi-briefcase"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">WebSmash Inc.</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-school"></i>
                                    <div class="about-text">
                                        <span>Studied at</span>
                                        <span><a class="is-inverted" href="#">Riverdale University</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stella details -->
                    <div id="stella-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">
                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider" />
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/stella.jpg')}}" alt="" />
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Stella Bergmann</h3>
                                <h4>Shop Owner</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-purple">
                                    <div>
                                        <i class="mdi mdi-bomb"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-check-decagram"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Trending Fashions</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">Oklahoma City</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Daniel details -->
                    <div id="daniel-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">
                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider" />
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/daniel.jpg')}}" alt="" />
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Daniel Wellington</h3>
                                <h4>Senior Executive</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-google-cardboard"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-blue">
                                    <div>
                                        <i class="mdi mdi-pizza"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-linux"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-puzzle"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Peelman & Sons</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">Los Angeles</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- David details -->
                    <div id="david-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">
                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider" />
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/david.jpg')}}" alt="" />
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>David Kim</h3>
                                <h4>Senior Developer</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-green">
                                    <div>
                                        <i class="mdi mdi-dog"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-blue">
                                    <div>
                                        <i class="mdi mdi-briefcase"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Frost Entertainment</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">Chicago</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edward details -->
                    <div id="edward-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">
                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider" />
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/edward.jpg')}}" alt="" />
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Edward Mayers</h3>
                                <h4>Financial analyst</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-green">
                                    <div>
                                        <i class="mdi mdi-dog"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Brettmann Bank</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">Santa Fe</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Elise details -->
                    <div id="elise-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">
                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider" />
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/elise.jpg')}}" alt="" />
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Elise Walker</h3>
                                <h4>Social influencer</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Social Media</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">London</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Nelly details -->
                    <div id="nelly-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">
                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider" />
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/nelly.png')}}" alt="" />
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Nelly Schwartz</h3>
                                <h4>HR Manager</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-green">
                                    <div>
                                        <i class="mdi mdi-dog"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-blue">
                                    <div>
                                        <i class="mdi mdi-briefcase"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Carrefour</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">Melbourne</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Milly details -->
                    <div id="milly-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">
                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider" />
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="https://via.placeholder.com/300x300" data-demo-src="{{asset('img/milly.jpg')}}" alt="" />
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Milly Augustine</h3>
                                <h4>Sales Manager</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-green">
                                    <div>
                                        <i class="mdi mdi-dog"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-blue">
                                    <div>
                                        <i class="mdi mdi-briefcase"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Salesforce</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">Seattle</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="add-conversation-modal" class="modal add-conversation-modal is-xsmall has-light-bg">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="card">
                <div class="card-heading">
                    <h3>New Conversation</h3>
                    <!-- Close X button -->
                    <div class="close-wrap">
                        <span class="close-modal">
                            <i data-feather="x"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{ asset ('assets/img/icons/chat/bubbles.svg' ) }}">


                    <div class="field is-autocomplete">
                        <div class="control has-icon">
                            <input type="text" class="input simple-users-autocpl" placeholder="Search a user" />
                            <div class="form-icon">
                                <i data-feather="search"></i>
                            </div>
                        </div>
                    </div>

                    <div class="help-text">
                        Select a user to start a new conversation. You'll be able to add other
                        users later.
                    </div>

                    <div class="action has-text-centered">
                        <button type="button" class="button is-solid accent-button raised">
                            Start conversation
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="explorer-menu">
        <div class="explorer-inner">
            <div class="explorer-container">
                <!--Header-->
                <div class="explorer-header">
                    <h3>Explore</h3>
                    <div class="control">
                        <input type="text" class="input is-rounded is-fade" placeholder="Filter" />
                        <div class="form-icon">
                            <i data-feather="filter"></i>
                        </div>
                    </div>
                </div>
                <!--List-->
                <div class="explore-list has-slimscroll">
                    <!--item-->
                    <a href="navbar-v1-feed.html" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/clover.svg' ) }}">

                        <h4>Feed</h4>
                    </a>
                    <!--item-->
                    <a href="navbar-v1-profile-friends.html" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/friends.svg' ) }}">

                        <h4>Friends</h4>
                    </a>
                    <!--item-->
                    <a href="navbar-v1-videos-home.html" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/videos.svg' ) }}">

                        <h4>Videos</h4>
                    </a>
                    <!--item-->
                    <a href="navbar-v1-pages-main.html" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/tag-euro.svg' ) }}">

                        <h4>Pages</h4>
                    </a>
                    <!--item-->
                    <a href="navbar-v1-ecommerce-products.html" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/cart.svg' ) }}">

                        <h4>Commerce</h4>
                    </a>
                    <!--item-->
                    <a href="navbar-v1-groups.html" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/house.svg' ) }}">



                        <h4>Interests</h4>
                    </a>
                    <!--item-->
                    <a href="navbar-v1-stories-main.html" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/chrono.svg' ) }}">

                        <h4>Stories</h4>
                    </a>
                    <!--item-->
                    <a href="navbar-v1-questions-home.html" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/question.svg' ) }}">

                        <h4>Questions</h4>
                    </a>
                    <!--item-->
                    <a href="news.html" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/news.svg' ) }}">

                        <h4>News</h4>
                    </a>
                    <!--item-->
                    <a href="navbar-v1-groups.html" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/cake.svg' ) }}">


                        <h4>Groups</h4>
                    </a>
                    <!--item-->
                    <a href="https://envato.com/" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/envato.svg' ) }}">

                        <h4>Envato</h4>
                    </a>
                    <!--item-->
                    <a href="navbar-v1-events.html" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/calendar.svg' ) }}">


                        <h4>Events</h4>
                    </a>
                    <!--item-->
                    <a href="https://cssninja.io/" target="_blank" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/pin.svg' ) }}">

                        <h4>Css Ninja</h4>
                    </a>
                    <!--item-->
                    <a href="elements.html" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/idea.svg' ) }}">

                        <h4>Elements</h4>
                    </a>
                    <!--item-->
                    <a href="navbar-v1-settings.html" class="explore-item">
                        <img src="{{ asset ('assets/img/icons/explore/settings.svg' ) }}">

                        <h4>Settings</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="end-tour-modal" class="modal end-tour-modal is-xsmall has-light-bg">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="card">
                <div class="card-heading">
                    <h3></h3>
                    <!-- Close X button -->
                    <div class="close-wrap">
                        <span class="close-modal">
                            <i data-feather="x"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body has-text-centered">
                    <div class="image-wrap">
                        <img src="{{ asset ('assets/img/vector/logo/friendkit.svg' ) }}">

                    </div>

                    <h3>That's all folks!</h3>
                    <p>
                        Thanks for taking the friendkit tour. There are still tons of other
                        features for you to discover!
                    </p>

                    <div class="action">
                        <a href="index.html#demos-section" class="button is-solid accent-button raised is-fullwidth">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        //Add Post
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#formdata').submit(function() {

                event.preventDefault();
                $url = "{{route('post.store')}}";
                var formData = new FormData(this);

                $.ajax({
                    url: $url,
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.message) {

                            toastr.success(response.message, 'Success');
                        } else {

                            toastr.success('Post added successfully', 'Success');
                        }

                        window.location.reload();
                    },
                    error: function(xhr) {
                        toastr.error(xhr.responseJSON.message, 'Error');
                        console.log(xhr.responseJSON.message);
                    },
                });
            });
        });
    </script>

    <script>
        //Add like_post
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function like_post($id) {
            var url = "{{ route('like') }}";

            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    post_id: $id,
                    type: 'like'
                },
                dataType: 'json',
                success: function(response) {
                    if (response.message) {
                        toastr.success(response.message, 'Success');
                    } else {
                        toastr.success('Like post successfully', 'Success');
                    }


                    var likeCount = parseInt($('#like-count').text());
                    $('#like-count').text(likeCount + 1);
                },
                error: function(xhr) {
                    toastr.error(xhr.responseJSON.message, 'Error');
                    console.log(xhr.responseJSON.message);
                }
            });
        }


        function showReplyForm(commentId) {
            console.log($('#reply-form-' + commentId));
            $('#reply-form-' + commentId).css('display', 'block');

            $(document).ready(function() {

                $(document).on('click', '.btn-reply', function() {
                    var commentId = $(this).data('comment-id');
                    showReplyForm(commentId);
                });


                $('.comment-reply-form').submit(function(event) {
                    event.preventDefault();
                    var form = $(this);

                    $.ajax({
                        type: 'POST',
                        url: form.attr('action'),
                        data: form.serialize(),
                        success: function(data) {
                            $('#comment-text').val('');
                            form.css('display', 'none');

                        }
                    });
                });
            });


        }
        //Add dislike_post
        function dislike_post($id) {
            var url = "{{ route('dislike') }}";

            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    post_id: $id,
                    type: 'dislike'
                },
                dataType: 'json',
                success: function(response) {
                    if (response.message) {
                        toastr.success(response.message, 'Success');
                    } else {
                        toastr.success('Dislike post successfully', 'Success');
                    }


                    var dislikeCount = parseInt($('#dislike-count').text());
                    $('#dislike-count').text(dislikeCount + 1);
                },
                error: function(xhr) {
                    toastr.error(xhr.responseJSON.message, 'Error');
                    console.log(xhr.responseJSON.message);
                }
            });
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.follow-button').click(function(e) {
                e.preventDefault();
                var $button = $(this);
                var userId = $button.data('user-id');
                var action = $button.hasClass('btn-danger') ? 'unfollow' : 'follow';

                $.ajax({
                    type: 'POST',
                    url: '/user/' + userId + '/' + action,
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (action === 'unfollow') {
                            $button.removeClass('btn-danger').addClass('btn-primary').text('Follow');
                        } else {
                            $button.removeClass('btn-primary').addClass('btn-danger').text('Unfollow');
                        }
                        $('#following-count-' + userId).text('Following: ' + response.followingsCount);
                    },
                    error: function(xhr, status, error) {}
                });
            });
        });
    </script>
    <script>
        //Comment
        $(document).ready(function() {
            $('.comment-form').submit(function(event) {
                event.preventDefault();


                let formData = new FormData(this);
                console.log({
                    formData
                });

                var postId = $('input[name="post_id"]').val();
                var commentText = $('.comment-here-' + postId).val();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('comments.store') }}",
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'comment': commentText,
                        'post_id': postId
                    },
                    success: function(data) {
                        console.log(data);
                        $('#comments-container').html(data);
                        $('#comment-text').val('');
                    }
                });
            });
        });
    </script>


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
    <script src="{{asset ('assets/js/feed.js') }}"></script>

    <script src="{{asset ('assets/js/webcam.js') }}"></script>
    <script src="{{asset ('assets/js/compose.js') }}"></script>
    <script src="{{asset ('assets/js/autocompletes.js') }}"></script>

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


<!-- Mirrored from friendkit.cssninja.io/navbar-v1-feed-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Oct 2023 10:44:08 GMT -->

</html>