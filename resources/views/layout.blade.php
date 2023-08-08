<!DOCTYPE html>
<html lang="en">
@include('common.head')
<body id="page-top">
<div id="wrapper">
    @include('common.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('common.navbar')
            <div class="container-fluid">
               @yield('content')
            </div>
        </div>
        @include('common.footer')
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">  <i class="fas fa-angle-up"></i> </a>
@include('common.scripts')
</body>
</html>
