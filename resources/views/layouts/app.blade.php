<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  {{-- font and js --}}
    @include('includes.font')
    @yield('styling')
</head>

<body>
    {{-- navbar include --}}
    @include('includes.header')

    {{-- content pages --}}
    @yield('content')

    {{-- footer includes --}}
    @include('includes.footer')

    {{-- js buat navbar --}}
    @include('includes.navbar-js')

    {{-- js pages --}}
    @yield('js')
</body>
</html>