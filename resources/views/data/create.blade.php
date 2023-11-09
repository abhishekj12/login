@extends('layouts.alldata')
@section('maincontent')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <a href="{{ route('data.index') }}" style="margin-left:670px "
            class="btn btn-primary waves-effect waves-float waves-light" id="data"> Back</a>
        <script src="{{ asset('admin/app-assets/vendors/js/vendors.min.js') }}"></script>
        <script src="{{ asset('admin/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('admin/app-assets/js/scripts/pages/auth-register.js') }}"></script>

        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">




            <div class="content-body">
                <section class="bs-validation" style="margin-top: 20px">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <form id="jquery-val-form" action="{{ route('data.store') }}" method="post">
                                        @csrf
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-default-name">Name</label>
                                            <input type="text" class="form-control" id="basic-default-name"
                                                name="name" value="{{ old('name') }}" placeholder="Enter Your Name" />
                                            @error('name')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-default-email">Email</label>
                                            <input type="text" id="basic-default-email" name="email"
                                                placeholder="Enter Your Email" class="form-control"
                                                value="{{ old('email') }}" />
                                            @error('email')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-default-password">Password</label>
                                            <input type="password" id="basic-default-password" name="password"
                                                value="{{ old('password') }}"class="form-control"
                                                placeholder="Enter Your Password" />
                                            @error('password')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="mb-1">
                                            <label class="form-label">Roles</label>
                                            <select class="form-select select2" name="rolename" id="country-dropdown">
                                                <option value="select data">Selecte roles</option>
                                                @foreach ($role_data as $key => $value)
                                                    <option value="{{ $value }}">
                                                        {{ str_replace('_', ' ', ucfirst($value)) }}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="submit"
                                            value="Submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
