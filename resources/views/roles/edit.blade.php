@extends('layouts.alldata')
@section('maincontent')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script src="{{ asset('admin/app-assets/vendors/js/vendors.min.js') }}"></script>
<style>
    .bs-validation{
        margin-top: 20px;
    }
</style>
    </head>

    <body>

        <!-- BEGIN: Content-->
        <div class="app-content content ">
            <a href="{{ route('roles.index') }}" style="margin-left:670px "
                class="btn btn-primary waves-effect waves-float waves-light" id="data" > Back</a>

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
                                        <form id="jquery-val-form" action="{{ route('roles.update', $crud->id) }}"
                                            method="post">
                                            @method('PATCH')
                                            @csrf
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-default-name">Name</label>
                                                <input type="text" class="form-control" id="basic-default-name"
                                                    value="{{ $crud->name }}" name="name"  />
                                                @error('name')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                            </div>

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

    </body>

    </html>
@endsection
