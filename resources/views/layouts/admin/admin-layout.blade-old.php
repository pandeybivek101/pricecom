
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Dotan - Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" href="{{asset('asets/image/favicon.png')}}">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="{{asset('asets/css/morris.css')}}">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{asset('asets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asets/css/toastr.min.css')}}">
     <!-- These plugins only need for the run this page -->
     <link rel="stylesheet" href="{{asset('asets/css/datatables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('asets/css/responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    @yield('css')
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="lds-hourglass"></div>
    </div>

    <!-- Main Content-->
    <div class="main-container-wrapper">
        <!-- Top bar area -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('asets/image/logo.png')}}" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('asets/image/small-logo.png')}}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item app-search d-none d-sm-block">
                        <form role="search" class=""><input type="text" placeholder="Search..." class="form-control">
                            <button type="submit" class="search-btn mr-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search search-icon">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg></button></form>
                    </li>
                </ul>
                <ul class="top-navbar-area navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown dropdown-animate country">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <img class="mr-2 flex-30-img" src="img/shop-img/l5.png" alt="">English
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">

                            <a href="#" class="dropdown-item preview-item d-flex align-items-center"><img class="language-thumb" src="img/shop-img/l2.jpg" alt=""> Canada</a>
                            <a href="#" class="dropdown-item preview-item d-flex align-items-center"><img class="language-thumb" src="img/shop-img/l3.jpg" alt=""> France</a>
                            <a href="#" class="dropdown-item preview-item d-flex align-items-center"><img class="language-thumb" src="img/shop-img/l4.jpg" alt=""> Iran</a>
                            <a href="#" class="dropdown-item preview-item d-flex align-items-center"><img class="language-thumb" src="img/shop-img/l1.jpg" alt=""> IND</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-animate">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown-2" href="#" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail switch-icon">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown-2">
                            <div class="dropdown-header custom">
                                <p class="mb-0">New Message</p>
                            </div>
                            <div id="messageBox">
                                <a class="dropdown-item preview-item d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-thumbnail">
                                            <div class="preview-icon">
                                                <img src="{{asset('asets/image/1.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="notification-item-content d-flex">
                                            <div>
                                                <h6>Peter jhon.</h6>
                                                <p class="mb-0">Time to get to you now.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item preview-item d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-thumbnail">
                                            <div class="preview-icon">
                                                <img src="{{asset('asets/image/2.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="notification-item-content d-flex">
                                            <div>
                                                <h6>Saldia jhon.</h6>
                                                <p class="mb-0">Time to get to you now.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-thumbnail">
                                            <div class="preview-icon">
                                                <img src="{{asset('asets/image/3.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="notification-item-content d-flex">
                                            <div>
                                                <h6>Ajoy Das.</h6>
                                                <p class="mb-0">Time to get to you now.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item preview-item d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-thumbnail">
                                            <div class="preview-icon">
                                                <img src="{{asset('asets/image/4.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="notification-item-content d-flex">
                                            <div>
                                                <h6>Purnima Punom.</h6>
                                                <p class="mb-0">Time to get to you now.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item preview-item d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-thumbnail">
                                            <div class="preview-icon">
                                                <img src="img/member-img/5.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="notification-item-content d-flex">
                                            <div>
                                                <h6>jhon Punom.</h6>
                                                <p class="mb-0">Time to get to you now.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item preview-item d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-thumbnail">
                                            <div class="preview-icon">
                                                <img src="{{asset('asets/image/6.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="notification-item-content d-flex">
                                            <div>
                                                <h6>Alex Punom.</h6>
                                                <p class="mb-0">Time to get to you now.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-animate">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown-3" href="#" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell switch-icon">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown-3">
                            <div class="dropdown-header custom">
                                <p class="mb-0">Notifications</p>
                            </div>
                            <div id="notificationsBox">
                                <a class="dropdown-item preview-item d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-thumbnail">
                                            <div class="preview-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail primary-text-cu">
                                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="notification-item-content d-flex">
                                            <div>
                                                <h6>New message.</h6>
                                                <p class="mb-0">Payout has been processed.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item preview-item d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-thumbnail">
                                            <div class="preview-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase sucess-text-cu">
                                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="notification-item-content d-flex">
                                            <div>
                                                <h6>New Order Recieved.</h6>
                                                <p class="mb-0">You got new order.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-thumbnail">
                                            <div class="preview-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server warning-text-cu">
                                                    <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                                    <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                                    <line x1="6" y1="6" x2="6.01" y2="6"></line>
                                                    <line x1="6" y1="18" x2="6.01" y2="18"></line>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="notification-item-content d-flex">
                                            <div>
                                                <h6>New message.</h6>
                                                <p class="mb-0">Payout has been processed.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item preview-item d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-thumbnail">
                                            <div class="preview-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square danger-text-cu">
                                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="notification-item-content d-flex">
                                            <div>
                                                <h6>New message.</h6>
                                                <p class="mb-0">Payout has been processed.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item preview-item d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-thumbnail">
                                            <div class="preview-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift info-text-cu">
                                                    <polyline points="20 12 20 22 4 22 4 12"></polyline>
                                                    <rect x="2" y="7" width="20" height="5"></rect>
                                                    <line x1="12" y1="22" x2="12" y2="7"></line>
                                                    <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                                                    <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="notification-item-content d-flex">
                                            <div>
                                                <h6>New message.</h6>
                                                <p class="mb-0">Payout has been processed.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item preview-item d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-thumbnail">
                                            <div class="preview-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase dark-text-cu">
                                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="notification-item-content d-flex">
                                            <div>
                                                <h6>New Order Recieved.</h6>
                                                <p class="mb-0">Payout has been processed.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </li>

                    <li class="nav-item nav-profile dropdown dropdown-animate">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{asset('asets/image/contact-3.jpg')}}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown profile-top" aria-labelledby="profileDropdown">
                            <div class="profile-header d-flex align-items-center">
                                <div class="thumb-area">
                                    <img src="{{asset('asets/image/contact-3.jpg')}}" alt="">
                                </div>
                                <div class="content-text">
                                    <h6>Jhon Hazra</h6>
                                    <p class="mb-0">Pro Member</p>
                                </div>
                            </div>
                            <a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user profile-icon">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> My profile</a>

                            <a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail profile-icon">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg> Inbox</a>

                            <a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square profile-icon">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg> Messages</a>

                            <a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings profile-icon">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg> Settings</a>

                            <a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out profile-icon">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> Sign-out</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-xl-none align-self-center" type="button" data-toggle="offcanvas">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid menu-bar-icon">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <!-- Side Menu area -->
           @include('layouts.admin.sidebar')

            <!-- Mani Page -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>

                <!-- Footer Area -->
                <div class="footer-area footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <!-- Footer Area -->
                                <div class="d-sm-flex align-items-center justify-content-between">
                                    <!-- Copywrite Text -->
                                    <div class="copywrite-text">
                                        <p>Dotan &copy; 2020 created by <a href="#">Theme-zome</a></p>
                                    </div>
                                    <!-- Footer Nav -->
                                    <ul class="footer-nav d-flex align-items-center justify-content-center">
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Purchase</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Must needed plugins to the run this Template -->
    <script src="{{asset('asets/js/jquery.min.js')}}"></script>
    <script src="{{asset('asets/js/popper.min.js')}}"></script>
    <script src="{{asset('asets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asets/js/bundle.js')}}"></script>
    <script src="{{asset('asets/js/vivus.min.js')}}"></script>
    <script src="{{asset('asets/js/svg.animation.js')}}"></script>

    <!-- Inject JS -->
    <script src="{{asset('asets/js/canvas.js')}}"></script>
    <script src="{{asset('asets/js/collapse.js')}}"></script>
    <script src="{{asset('asets/js/settings.js')}}"></script>
    <script src="{{asset('asets/js/template.js')}}"></script>
    <script src="{{asset('asets/js/active.js')}}"></script>

    <!-- These plugins only need for the run this page -->
    <script src="{{asset('asets/js/chart.js')}}"></script>
    <script src="{{asset('asets/js/jquery.flot.js')}}"></script>
    <script src="{{asset('asets/js/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('asets/js/sparkline.min.js')}}"></script>
    <script src="{{asset('asets/js/jquery.knob.js')}}"></script>
    <script src="{{asset('asets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('asets/js/knob-active.js')}}"></script>
    <script src="{{asset('asets/js/dashboard.js')}}"></script>
    <script src="{{asset('asets/js/toastr.min.js')}}"></script>
    <script src="{{asset('asets/js/toastr-init.js')}}"></script>
    <script src=”https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/dropzone.min.js” integrity=”sha256-fegGeSK7Ez4lvniVEiz1nKMx9pYtlLwPNRPf6uc8d+8=” crossorigin=”anonymous”>
</script>

    @yield('js')

</body>

</html>