<!DOCTYPE html>
<html>
<head>
  @include('Template.header')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper" id="app">
  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')
  <!-- End Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <div class="content">

      <router-view></router-view>

    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
 @include('Template.footer')
  <!-- End footer -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('Template.script')

</body>
</html>
