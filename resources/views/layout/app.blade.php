<!DOCTYPE html>
<head>
    <title>
        Laravel Book Catalog
    </title>
    @yield('styles')
</head>

<body>
    <h3> Laravel Book Catalog</h3>
    @if (session()->has('success'))
        <div>{{ session('success') }}</div>
    @endif

    @yield('title') 
    
    @yield('content')

</body>

</html>