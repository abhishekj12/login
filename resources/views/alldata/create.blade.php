@extends('layouts.alldata')
@section('maincontent')
    <!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
        <meta name="description"
            content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords"
            content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
            rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('admin/app-assets/vendors/css/forms/select/select2.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('admin/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/components.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/themes/dark-layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/themes/bordered-layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/themes/semi-dark-layout.css') }}">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('admin/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('admin/app-assets/css/plugins/forms/form-validation.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('admin/app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <!-- END: Custom CSS-->

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->

    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
        data-menu="vertical-menu-modern" data-col="">





        <!-- BEGIN: Content-->
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <div class="content-body">
                    <!-- Validation -->
                    <section class="bs-validation">
                        <div class="row">

                            <!-- jQuery Validation -->
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                                        <form id="jquery-val-form" method="POST" action="{{ route('alldata.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-default-name">Name</label>
                                                <input type="text" class="form-control" id="basic-default-name"
                                                    name="basic-default-name" placeholder="Enter your name" />
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="select-country">Country</label>
                                                <select class="form-select select2" name="select-country"
                                                    id="country-dropdown">
                                                    <option value="select data">Select Country</option>

                                                    @foreach ($countries as $data)
                                                        <option value="{{ $data->id }} {{ $data->name }}">
                                                            {{ $data->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="select-country">state</label>

                                                <select class="form-select select2" name="select-countrys"
                                                    id="state-dropdown">
                                                    <option value="select data">Select State</option>

                                                </select>
                                            </div>


                                            <div class="mb-1">
                                                <label for="customFile" class="form-label">Profile pic</label>
                                                <input class="form-control" type="file" id="customFile"
                                                    name="customFile" />
                                            </div>
                                            <div class="mb-1">
                                                <label class="d-block form-label">Gender</label>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="validationRadiojq1" value="male"
                                                        name="validationRadiojq" class="form-check-input" />
                                                    <label class="form-check-label" for="validationRadiojq1">Male</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="validationRadiojq2" value="female"
                                                        name="validationRadiojq" class="form-check-input" />
                                                    <label class="form-check-label"
                                                        for="validationRadiojq2">Female</label>
                                                </div>
                                            </div>
                                            <div class="mb-1">
                                                <label class="d-block form-label">hobby</label>
                                                <div class="form-check my-50">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        name="hobbys[]" value="play" />
                                                    <label class="form-check-label" for="inlineCheckbox1">play</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="inlineCheckbox1"name="hobbys[]" value="sing" />
                                                    <label class="form-check-label" for="inlineCheckbox1">sing</label>
                                                </div>
                                                <div class="form-check my-50">

                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        name="hobbys[]" value="cricket" />
                                                    <label class="form-check-label" for="inlineCheckbox1">cricket</label>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary" name="submit"
                                                value="Submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /jQuery Validation -->
                        </div>
                    </section>
                    <!-- /Validation -->

                </div>
            </div>
        </div>
        <!-- END: Content-->

        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



        <!-- BEGIN: Vendor JS-->
        <script src="{{ asset('admin/app-assets/vendors/js/vendors.min.js') }}"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="{{ asset('admin/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
        <script src="{{ asset('admin/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('admin/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="{{ asset('admin/app-assets/js/core/app-menu.js') }}"></script>
        <script src="{{ asset('admin/app-assets/js/core/app.js') }}"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="{{ asset('admin/app-assets/js/scripts/forms/form-validation.js') }}"></script>
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

            $("#country-dropdown option:selected").text();
            // => "Mr"

            $(document).ready(function() {

                $('#country-dropdown').on('change', function() {
                    var idCountry = this.value;
                    $("#state-dropdown").html('');
                    $.ajax({
                        url: "{{ url('alldatacreate') }}",
                        type: "POST",
                        data: {
                            country_id: idCountry,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(result) {
                            $('#state-dropdown').html(
                                '<option value="select">-- Select State --</option>');
                            $.each(result.states, function(key, value, text) {
                                $("#state-dropdown").append('<option value="' + value
                                    .name + '">' + value.name + '</option>');
                            });
                            $('#city-dropdown').html('<option value="">-- Select City --</option>');
                        }
                    });
                });
            });
        </script>
    </body>
    <!-- END: Body-->
    <script></script>


    </html>
@endsection
