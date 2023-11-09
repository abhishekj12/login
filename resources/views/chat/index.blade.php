@extends('layouts.alldata')
@section('maincontent')
    <!DOCTYPE html>
    <html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
        <meta name="description"
            content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords"
            content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Chat Application - Vuexy - Bootstrap HTML admin template</title>
        <link rel="apple-touch-icon" href="{{ asset('admin/app-assets/images/ico/apple-icon-120.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/app-assets/images/ico/favicon.ico') }}">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
            rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/vendors.min.css') }}">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/colors.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/components.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/themes/dark-layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/themes/bordered-layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/themes/semi-dark-layout.css') }}">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('admin/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/pages/app-chat.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/pages/app-chat-list.css') }}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <!-- END: Custom CSS-->
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="{{ asset('admin/app-assets/js/scripts/pages/app-chat.js') }}"></script>
        <!-- END: Page JS-->
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->


    <body class="vertical-layout vertical-menu-modern content-left-sidebar navbar-floating footer-static">

        <!-- BEGIN: Header-->

        <!-- END: Header-->


        <!-- BEGIN: Content-->
        <div class="app-content content chat-application">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-area-wrapper container-xxl p-0">
                <div class="sidebar-left">
                    <div class="sidebar">
                        <!-- Admin user profile area -->
                        <div class="chat-profile-sidebar">
                            <header class="chat-profile-header">
                                <span class="close-icon">
                                    <i data-feather="x"></i>
                                </span>
                                <!-- User Information -->
                                <div class="header-profile-sidebar">
                                    <div class="avatar box-shadow-1 avatar-xl avatar-border">
                                        <img src="{{ asset('admin/app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                            alt="user_avatar" />
                                        <span class="avatar-status-online avatar-status-xl"></span>
                                    </div>
                                    <h4 class="chat-user-name">John Doe</h4>
                                    <span class="user-post">Admin</span>
                                </div>
                                <!--/ User Information -->
                            </header>
                            <!-- User Details start -->
                            <div class="profile-sidebar-area">
                                <h6 class="section-label mb-1">About</h6>
                                <div class="about-user">
                                    <textarea data-length="120" class="form-control char-textarea" id="textarea-counter" rows="5"
                                        placeholder="About User">
    Dessert chocolate cake lemon drops jujubes. Biscuit cupcake ice cream bear claw brownie brownie marshmallow.</textarea>
                                    <!-- To set user status -->
                                    <small class="counter-value float-end"><span class="char-count">108</span> / 120
                                    </small>
                                </div>
                                <h6 class="section-label mb-1 mt-3">Status</h6>
                                <ul class="list-unstyled user-status">
                                    <li class="pb-1">
                                        <div class="form-check form-check-success">
                                            <input type="radio" id="activeStatusRadio" name="userStatus"
                                                class="form-check-input" value="online" checked />
                                            <label class="form-check-label ms-25" for="activeStatusRadio">Active</label>
                                        </div>
                                    </li>
                                    <li class="pb-1">
                                        <div class="form-check form-check-danger">
                                            <input type="radio" id="dndStatusRadio" name="userStatus"
                                                class="form-check-input" value="busy" />
                                            <label class="form-check-label ms-25" for="dndStatusRadio">Do Not
                                                Disturb</label>
                                        </div>
                                    </li>
                                    <li class="pb-1">
                                        <div class="form-check form-check-warning">
                                            <input type="radio" id="awayStatusRadio" name="userStatus"
                                                class="form-check-input" value="away" />
                                            <label class="form-check-label ms-25" for="awayStatusRadio">Away</label>
                                        </div>
                                    </li>
                                    <li class="pb-1">
                                        <div class="form-check form-check-secondary">
                                            <input type="radio" id="offlineStatusRadio" name="userStatus"
                                                class="form-check-input" value="offline" />
                                            <label class="form-check-label ms-25" for="offlineStatusRadio">Offline</label>
                                        </div>
                                    </li>
                                </ul>
                                <!--/ To set user status -->

                                <!-- User settings -->
                                <h6 class="section-label mb-1 mt-2">Settings</h6>
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between align-items-center mb-1">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="check-square" class="me-75 font-medium-3"></i>
                                            <span class="align-middle">Two-step Verification</span>
                                        </div>
                                        <div class="form-check form-switch me-0">
                                            <input type="checkbox" class="form-check-input" id="customSwitch1" checked />
                                            <label class="form-check-label" for="customSwitch1"></label>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-1">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="bell" class="me-75 font-medium-3"></i>
                                            <span class="align-middle">Notification</span>
                                        </div>
                                        <div class="form-check form-switch me-0">
                                            <input type="checkbox" class="form-check-input" id="customSwitch2" />
                                            <label class="form-check-label" for="customSwitch2"></label>
                                        </div>
                                    </li>
                                    <li class="mb-1 d-flex align-items-center cursor-pointer">
                                        <i data-feather="user" class="me-75 font-medium-3"></i>
                                        <span class="align-middle">Invite Friends</span>
                                    </li>
                                    <li class="d-flex align-items-center cursor-pointer">
                                        <i data-feather="trash" class="me-75 font-medium-3"></i>
                                        <span class="align-middle">Delete Account</span>
                                    </li>
                                </ul>
                                <!--/ User settings -->

                                <!-- Logout Button -->
                                <div class="mt-3">
                                    <button class="btn btn-primary">
                                        <span>Logout</span>
                                    </button>
                                </div>
                                <!--/ Logout Button -->
                            </div>
                            <!-- User Details end -->
                        </div>
                        <!--/ Admin user profile area -->

                        <!-- Chat Sidebar area -->
                        <div class="sidebar-content">
                            <span class="sidebar-close-icon">
                                <i data-feather="x"></i>
                            </span>
                            <!-- Sidebar header start -->
                            <div class="chat-fixed-search">
                                <div class="d-flex align-items-center w-100">
                                    <div class="sidebar-profile-toggle">
                                        <div class="avatar avatar-border">
                                            <img src="{{ asset('admin/app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                                alt="user_avatar" height="42" width="42" />
                                            <span class="avatar-status-online"></span>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-merge ms-1 w-100">
                                        <span class="input-group-text round"><i data-feather="search"
                                                class="text-muted"></i></span>
                                        <input type="text" class="form-control round" id="chat-search"
                                            placeholder="Search or start a new chat" aria-label="Search..."
                                            aria-describedby="chat-search" />
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar header end -->
                            <!-- Sidebar Users start -->
                            <div class="chat-user-list-wrapper ">
                                <h4 class="chat-list-title">Chats</h4>
                                <li>
                                    <div class="chat-info flex-grow-1">
                                        @foreach ($users as $single_message)
                                            <!-- <p>You are a receiver</p> -->
                                            <h5>
                                                <span class="avatar"><img
                                                        src="{{ asset('admin/app-assets/images/portrait/small/avatar-s-3.jpg') }}"
                                                        height="42" width="42" alt="Generic placeholder image" />
                                                    <span class="avatar-status-offline"></span>
                                                </span>
                                                <a href="javascript:void(0);"
                                                    onclick="show({{ $single_message }},{{ Auth::user()->id }});"
                                                    class="list-group-item list-group-action-item">
                                                    <ul>
                                                        <li id="{{ $single_message->id }}">
                                                            {{ $single_message->name }}
                                                        </li>
                                                    </ul>
                                                </a>
                                            </h5>
                                        @endforeach
                                    </div>
                                    <div class="chat-meta text-nowrap">
                                        <small class="float-end mb-25 chat-time">4:14 PM</small>
                                    </div>
                                </li>
                                <li class="no-results">
                                    <h6 class="mb-0">No Chats Found</h6>
                                </li>
                                </ul>
                            </div>
                            <!-- Sidebar Users end -->
                        </div>
                        <!--/ Chat Sidebar area -->

                    </div>
                </div>
                <div class="content-right">
                    <div class="content-wrapper container-xxl p-0">
                        <div class="content-header row">
                        </div>
                        <div class="content-body">
                            <div class="body-content-overlay">

                            </div>
                            <!-- Main chat area -->
                            <section class="chat-app-window">
                                <!-- To load Conversation -->
                                <div class="start-chat-area">
                                    <div class="mb-1 start-chat-icon">
                                        <i data-feather="message-square"></i>
                                    </div>
                                    <h4 class="sidebar-toggle start-chat-text">Start Conversation</h4>
                                </div>
                                <!--/ To load Conversation -->

                                <!-- Active Chat -->
                                <div class="active-chat d-none">
                                    <!-- Chat Header -->
                                    <div class="chat-navbar">
                                        <header class="chat-header">
                                            <div class="d-flex align-items-center">
                                                <div class="sidebar-toggle d-block d-lg-none me-1">
                                                    <i data-feather="menu" class="font-medium-5"></i>
                                                </div>
                                                <div class="avatar avatar-border user-profile-toggle m-0 me-1">
                                                    <img src="{{ asset('admin/app-assets/images/portrait/small/avatar-s-7.jpg') }}"
                                                        alt="avatar" height="36" width="36" />
                                                </div>
                                                <h3 id="chatWithName"></h3>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i data-feather="phone-call"
                                                    class="cursor-pointer d-sm-block d-none font-medium-2 me-1"></i>
                                                <i data-feather="video"
                                                    class="cursor-pointer d-sm-block d-none font-medium-2 me-1"></i>
                                                <i data-feather="search"
                                                    class="cursor-pointer d-sm-block d-none font-medium-2"></i>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn-icon btn btn-transparent hide-arrow btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i data-feather="more-vertical" id="chat-header-actions"
                                                            class="font-medium-2"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="chat-header-actions">
                                                        <a class="dropdown-item" href="#">View Contact</a>
                                                        <a class="dropdown-item" href="#">Mute Notifications</a>
                                                        <a class="dropdown-item" href="#">Block Contact</a>
                                                        <a class="dropdown-item" href="#">Clear Chat</a>
                                                        <a class="dropdown-item" href="#">Report</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                    </div>
                                    <!--/ Chat Header -->

                                    <!-- User Chat messages -->
                                    <div class="user-chats">
                                        <div class="chats">
                                            <div class="chat">
                                                <div class="chat-avatar">
                                                    <span class="avatar box-shadow-1 cursor-pointer">
                                                        <img src="{{ asset('admin/app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                                            alt="avatar" height="36" width="36" />
                                                    </span>
                                                </div>
                                                <div class="chat-body  messageThread" id="messageThread">


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- User Chat messages -->

                                    <!-- Submit Chat form -->
                                    <form class="chat-app-form" method="POST" onsubmit="submitMessage();">
                                        @csrf
                                        <div class="input-group input-group-merge me-1 form-send-message">
                                            <span class="speech-to-text input-group-text"><i data-feather="mic"
                                                    class="cursor-pointer"></i></span>
                                            <input type="hidden" class="form-control message" id="data_id"
                                                name="data" placeholder="Type your message or use speech to text"
                                                required />
                                            <span class="input-group-text">
                                                <label for="attach-doc" class="attachment-icon form-label mb-0">
                                                    <i data-feather="image" class="cursor-pointer text-secondary"></i>
                                                    <input type="" name="message" id="messsageInput" required />
                                                </label></span>
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="sendMsgBtn">
                                            <i data-feather="send" class="d-lg-none"></i>
                                            <span class="d-none d-lg-block">Send</span>
                                        </button>
                                    </form>
                            </section>
                            <!--/ Main chat area -->

                            <!-- User Chat profile right area -->
                            <div class="user-profile-sidebar">
                                <header class="user-profile-header">
                                    <span class="close-icon">
                                        <i data-feather="x"></i>
                                    </span>
                                    <!-- User Profile image with name -->
                                    <div class="header-profile-sidebar">
                                        <div class="avatar box-shadow-1 avatar-border avatar-xl">
                                            <img src="{{ asset('admin/app-assets/images/portrait/small/avatar-s-7.jpg') }}"
                                                alt="user_avatar" height="70" width="70" />
                                            <span class="avatar-status-busy avatar-status-lg"></span>
                                        </div>
                                        <h4 class="chat-user-name">Kristopher Candy</h4>
                                        <span class="user-post">UI/UX Designer 👩🏻‍💻</span>
                                    </div>
                                    <!--/ User Profile image with name -->
                                </header>
                                <div class="user-profile-sidebar-area">
                                    <!-- About User -->
                                    <h6 class="section-label mb-1">About</h6>
                                    <p>Toffee caramels jelly-o tart gummi bears cake I love ice cream lollipop.</p>
                                    <!-- About User -->
                                    <!-- User's personal information -->
                                    <div class="personal-info">
                                        <h6 class="section-label mb-1 mt-3">Personal Information</h6>
                                        <ul class="list-unstyled">
                                            <li class="mb-1">
                                                <i data-feather="mail" class="font-medium-2 me-50"></i>
                                                <span class="align-middle">kristycandy@email.com</span>
                                            </li>
                                            <li class="mb-1">
                                                <i data-feather="phone-call" class="font-medium-2 me-50"></i>
                                                <span class="align-middle">+1(123) 456 - 7890</span>
                                            </li>
                                            <li>
                                                <i data-feather="clock" class="font-medium-2 me-50"></i>
                                                <span class="align-middle">Mon - Fri 10AM - 8PM</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--/ User's personal information -->

                                    <!-- User's Links -->
                                    <div class="more-options">
                                        <h6 class="section-label mb-1 mt-3">Options</h6>
                                        <ul class="list-unstyled">
                                            <li class="cursor-pointer mb-1">
                                                <i data-feather="tag" class="font-medium-2 me-50"></i>
                                                <span class="align-middle">Add Tag</span>
                                            </li>
                                            <li class="cursor-pointer mb-1">
                                                <i data-feather="star" class="font-medium-2 me-50"></i>
                                                <span class="align-middle">Important Contact</span>
                                            </li>
                                            <li class="cursor-pointer mb-1">
                                                <i data-feather="image" class="font-medium-2 me-50"></i>
                                                <span class="align-middle">Shared Media</span>
                                            </li>
                                            <li class="cursor-pointer mb-1">
                                                <i data-feather="trash" class="font-medium-2 me-50"></i>
                                                <span class="align-middle">Delete Contact</span>
                                            </li>
                                            <li class="cursor-pointer">
                                                <i data-feather="slash" class="font-medium-2 me-50"></i>
                                                <span class="align-middle">Block Contact</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--/ User's Links -->
                                </div>
                            </div>
                            <!--/ User Chat profile right area -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Submit Chat form -->
        </div>
        <!-- END: Content-->
        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>
        <!-- END: Page JS-->
        <script>
            $(window).on('load', function() {
                if (feather) {
                    feather.replace({
                        width: 14,
                        height: 14
                    });
                }
            })
        </script>
        <script>
            var lastid = 0;

            function scroll() {
                var a = document.getElementById('messageThread');
                a.scrollTop = a.scrollHeight;
            }

            function show(user, authuser) {
                var name = document.getElementById('chatWithName');
                var inputid = document.getElementById('data_id');
                name.innerHTML = user.name;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'GET',
                    url: '/check/' + user.id,
                    success: function(response) {
                        inputid.value = response;
                        load();
                    },
                    error: function(response) {
                        console.log(error);
                    }
                });

                function load() {
                    i = 0;
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: 'GET',
                        url: '/loadMessage/' + user.id + '/' + authuser,
                        success: function(response) {
                            $('#messageThread').html('');
                            console.log();
                            while (response[0][i] != null) {
                                if (response[1][0] == response[0][i].message_users_id) {
                                    $('#messageThread').append(
                                        '<div class="chat"> <div class="chat-avatar"><span class="avatar box-shadow-1 cursor-pointer"><img src="{{ asset('admin/app-assets/images/portrait/small/avatar-s-7.jpg') }}" alt="avatar" height="36" width="36" /> </span> </div> <div class="chat-body "><div class="chat-content" <p>' +
                                        response[0][i].message + '</p></div></div></div>');
                                } else {
                                    $('#messageThread').append(
                                        '<div class="chat chat-left"><div class="chat-avatar"><span class="avatar box-shadow-1 cursor-pointer"><img src="{{ asset('admin/app-assets/images/portrait/small/avatar-s-7.jpg') }}" alt="avatar" height="36" width="36" /> </span> </div> <div class="chat-body "><div class="chat-content" <p>' +
                                        response[0][i].message + '</p></div></div></div>');
                                }
                                i++;

                            }
                            scroll();
                            newdata();
                        }
                    });
                }

                function newdata() {
                    i = 0;
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: 'GET',
                        url: '/new/' + user.id + '/' + authuser + '/' + lastid,
                        success: function(response) {
                            // console.log(response);
                            // console.log(lastid);
                            while (response[i] != null) {
                                $('#messageThread').append(
                                    '<div class="chat chat-left"><div class="chat-avatar"><span class="avatar box-shadow-1 cursor-pointer"><img src="{{ asset('admin/app-assets/images/portrait/small/avatar-s-7.jpg') }}" alt="avatar" height="36" width="36" /> </span> </div> <div class="chat-body "><div class="chat-content" <p>' +
                                    response[i].message + '</p></div></div></div>');
                                lastid = response[i].id + 1;
                                i++;
                            }
                            scroll();
                        },
                        complete: function() {
                            setTimeout(newdata, 1000);
                        }
                    });
                }
            }

            function submitMessage() {
                event.preventDefault();
                $('#messageThread').append(
                    '<div class="chat"> <div class="chat-avatar"><span class="avatar box-shadow-1 cursor-pointer"><img src="{{ asset('admin/app-assets/images/portrait/small/avatar-s-7.jpg') }}" alt="avatar" height="36" width="36" /> </span> </div> <div class="chat-body "><div class="chat-content" <p>' +
                    $('#messsageInput').val() + '</p></div></div></div>');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'POST',
                    url: '/sendMessage',
                    data: {
                        'data': $('#data_id').val(),
                        'message': $('#messsageInput').val()
                    },
                    success: function(response) {
                        $('#messsageInput').val('');
                    },
                });
                $('#messsageInput').val('');
                scroll();
            }
        </script>
    </body>
    <!-- END: Body-->

    </html>
@endsection
