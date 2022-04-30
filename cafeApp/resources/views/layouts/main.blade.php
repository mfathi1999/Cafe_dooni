<!doctype html>
<html lang="fa" dir="rtl">
  <head>
    @include('includes.head')
  </head>
  <body>
    <header>
        @include('includes.header')
    </header>

    @include('includes.navbar')

    @yield('content')


    @include('includes.bottom_scripts')
  </body>
</html>