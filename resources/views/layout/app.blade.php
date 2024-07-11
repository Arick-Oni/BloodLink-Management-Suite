<!DOCTYPE html>
<html>
    <head><title>Notification bar </title>
    @yield('styles')

</head>
    <body>
    <div>@if (session()-> has('success'))
                <div>{{session('success')}}</div>
             @endif
    </div>
        <h1>@yield('title')</h1>

        <div>@yield('content')</div>
    </body>
</html>
