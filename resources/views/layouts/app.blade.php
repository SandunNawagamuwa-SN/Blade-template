<!doctype html>

<html lang="en">

<head>

    @include('includes.header')

</head>

<body>

    <div id="main__container" class="container-fluid">

        <div id="top-bar__container">
            @include('includes.top-bar')
        </div>

        <div class="row">
            <div class="col-2">
                @include('includes.left-sidebar')
            </div>
            <div class="col-10 border border-primary py-3">
                @yield('content')
            </div>
        </div>

    </div>

    @include('includes.footer')

</body>

</html>
