<!DOCTYPE html>
<head>
    <title>
        Laravel Book Catalog
    </title>
    <style>
          body{
        background-color:#EADBC8;
        
        font-family:sans-serif;
    }
    h2 {
				list-style-type: none;
				margin: 0;
				padding: 25px;
				overflow: hidden;
				background-color: #F8F0E5;
			}
    </style>
    @yield('styles')
</head>

<body>
    <h2> Laravel 11 Web Application: Book Catalog</h2>
   
    @if (session()->has('success'))
        <div>{{ session('success') }}</div>
    @endif

    @yield('title') 
    
    @yield('content')

</body>

</html>