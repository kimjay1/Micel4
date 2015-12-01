<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container-fluid">
    <header class="row">
        @include('includes.header')
    </header>
</div>
<div class="container">    

    <div id="main" class="row">
        <div id="sidebar" class="col-md-2">
            @include("includes.nav")
        </div>
        <div id="content" class="col-md-7">
            @yield('content')
        </div>

        <div id="optionbar" class="col-md-3">
            @yield('optionbar')
        </div>
            

    </div>

    <footer class="row">
        @include('includes.footer')        
    </footer>

</div>
</body>
</html>