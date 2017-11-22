<html lang="en">
@include('dev.includes.header')
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
@include('dev.includes.top-menu')
<!--close-top-Header-menu-->
<!--start-top-serch-->
<!-- <div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div> -->
<!--close-top-serch-->
<!--sidebar-menu-->
@include('dev.includes.sidebar')
<!--sidebar-menu-->

<!--main-container-part-->
@yield('content')

<!--end-main-container-part-->

<!--Footer-part-->

@include('dev.includes.footer')

<!--end-Footer-part-->

</body>
</html>
