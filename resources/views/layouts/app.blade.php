@include('layouts.head')
<body>  
    
    @include('header')  
    
    @section('main') 
        @yield('content')
    @show
    
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slick.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/slick/slick.min.js')}}"></script>
    <script  type="text/javascript" src="{{asset('js/active.js')}}"></script>
    <script  type="text/javascript" src="{{asset('js/shop.js')}}"></script>
    <script  type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
    <script  type="text/javascript" src="{{asset('js/product.js')}}"></script>
    <script  type="module " src="{{asset('js/icons.js')}}"></script>
    <script  type="module" src="{{asset('js/b&w.js')}}"></script>
    
@include('layouts.footer')
</body>
</html>
