      <!DOCTYPE html>
      <html lang="en">

      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <title>Document</title>
      </head>

      <style>
          .data {
              margin-top: 890px;
          }
      </style>

      <body>

      </body>

      </html>

      <div class="sidenav-overlay"></div>
      <div class="drag-target"></div>

      <!-- BEGIN: Footer-->
      <footer class="footer footer-static footer-light data">
          <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a
                      class="ms-25" href="https://1.envato.market/pixinvent_portfolio"
                      target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights
                      Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i
                      data-feather="heart"></i></span></p>
      </footer>
      <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
      <!-- END: Footer-->


      <!-- BEGIN: Vendor JS-->
      <!-- BEGIN Vendor JS-->

      <!-- BEGIN: Page Vendor JS-->
      <script src="{{ asset('admin/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
      <!-- END: Page Vendor JS-->

      <!-- BEGIN: Theme JS-->
      <script src="{{ asset('admin/app-assets/js/core/app-menu.js') }}"></script>
      <script src="{{ asset('admin/app-assets/js/core/app.js') }}"></script>
      <!-- END: Theme JS-->

      <!-- BEGIN: Page JS-->
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