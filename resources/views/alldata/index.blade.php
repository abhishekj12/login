@extends('layouts.alldata')
@section('maincontent')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" type="text/css"
            href="{{ asset('admin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('admin/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('admin/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('admin/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('admin/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/vendors.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/charts/apexcharts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/extensions/toastr.min.css') }}">
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
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/pages/dashboard-ecommerce.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/plugins/charts/chart-apex.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('admin/app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
        <script src="{{ asset('admin/app-assets/vendors/js/vendors.min.js') }}"></script>
        <script src="
                        https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js
                        "></script>
        <style>
            #ajax-datatable {
                margin-left: 200px;
                margin-top: 20px;

            }

            .icon-Wapper {
                width: 200px;
            }

            #data {
                margin-left: 200px;
                margin-top: 80px;

            }

            .btn2 {
                margin-top: -75px;
                left: -40px;

            }

            .image {
                border: 1px solid #ddd;
                border-radius: 4px;
                padding: 5px;
                width: 150px;
            }

            img:hover {
                box-shadow: 0 0 20px 10px rgba(186, 0, 0, 0.5);
            }

            #ajax-datatable {
                padding: 50px;

            }
        </style>
    </head>

    <body>
            <div class="container">
                <!-- Modal -->
                 <!-- Button trigger modal -->
                <section id="ajax-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mt-4">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h3>User All Data</h3>
                                        <a href="{{ route('alldata.create') }}"
                                            class="btn btn-primary waves-effect waves-float waves-light"> Add User Data</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-datatable">
                                            <table class="datatables-ajax table yajra-datatable">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>name</th>
                                                        <th>country</th>
                                                        <th>state</th>
                                                        <th>image</th>
                                                        <th>gender</th>
                                                        <th>hobby</th>
                                                        <th>action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Vertically Centered</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h4>
                                <font color="red">Are you sure delete this data?</font>
                            </h4>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger  delete accept" data-id=""
                                data-bs-dismiss="modal">Delete</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Reject</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </form>
    </body>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin/app-assets/js/scripts/tables/table-datatables-basic.js') }}"></script>


    <script type="text/javascript">
        $(function() {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('alldata.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'country',
                        name: 'country'
                    },
                    {
                        data: 'state',
                        name: 'state'
                    },
                    {
                        data: 'file',
                        name: 'file'
                    },
                    {
                        data: 'gender',
                        name: 'gender'
                    },
                    {
                        data: 'hobby',
                        name: 'hobby'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });


        $(document).on('click', '.delete-permission', function() {
            let id = $(this).attr('data-id');
            $('.accept').attr('data-id', id);
        })

        $('.accept').click(function() {

            let id = $(this).attr('data-id');
            let url = "{{ url('/') }}" + "/alldata/" + id;


            $.ajax({
                type: "DELETE",
                url: url,
                data: {
                    "id": id,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    if (response.status == true) {
                        $('.yajra-datatable').DataTable().ajax.reload();
                        toastr.success("Delted Succesfully!");
                    }
                }
            });
        })
    </script>



    </html>
@endsection
