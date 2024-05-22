<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>{{ config('app.name') }} -  @yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{ asset('admin/images/fevicon.png') }}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('admin/style.css') }}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('admin/css/responsive.css') }}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('admin/css/colors.css') }}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('admin/css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="{{ asset('admin/js/semantic.min.css') }}" />
      <!-- fancy box js -->
      <link rel="stylesheet" href="{{ asset('admin/css/jquery.fancybox.css') }}" />
	  <!-- Datatable -->
      <link rel="stylesheet" href="{{ asset('admin/css/jquery.dataTables.min.css') }}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page tables_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            @include('admin.layouts.leftsidebar')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               @include('admin.layouts.topbar')
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>@yield('title')</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>@yield('title') </h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
<form action="" method="POST">
   @csrf
   <!-- ###### Form Code Starts Here ### -->
   @yield('viewpage')
   <!-- ###### Form Code Ends Here ### -->
</form>
                              </div>
                           </div>
                        </div>
                        <!-- table section -->
                     </div>
                  </div>
                  <!-- footer -->
                  @include('admin.layouts.footer')
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
         <!-- model popup -->
      </div>
      <!-- jQuery -->
      <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
      <script src="{{ asset('admin/js/popper.min.js') }}"></script>
      <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
      <!-- wow animation -->
      <script src="{{ asset('admin/js/animate.js') }}"></script>
      <!-- select country -->
      <script src="{{ asset('admin/js/bootstrap-select.js') }}"></script>
      <!-- owl carousel -->
      <script src="{{ asset('admin/js/owl.carousel.js') }}"></script> 
      <!-- chart js -->
      <script src="{{ asset('admin/js/Chart.min.js') }}"></script>
      <script src="{{ asset('admin/js/Chart.bundle.min.js') }}"></script>
      <script src="{{ asset('admin/js/utils.js') }}"></script>
      <script src="{{ asset('admin/js/analyser.js') }}"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- fancy box js -->
      <script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('admin/js/jquery.fancybox.min.js') }}"></script>
      <!-- custom js -->
      <script src="{{ asset('admin/js/custom.js') }}"></script>
      <!-- calendar file css -->    
      <script src="{{ asset('admin/js/semantic.min.js') }}"></script>
      <!-- Datatable Plugin -->     
      <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>
      <script>
         $(document).ready( function () {
             $('#datatable').DataTable();
         } );
      </script>

   </body>
</html>