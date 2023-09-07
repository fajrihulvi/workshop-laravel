<!doctype html>
<html lang="en">
<head>
@include('layouts.admin.head')
</head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    @include('layouts.admin.sidebar') 
                </div>
                <div class="col py-3">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.admin.footer')
    </body>
</html>