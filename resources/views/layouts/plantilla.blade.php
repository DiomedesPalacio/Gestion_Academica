
<!DOCTYPE html>
<html lang="es">
<head>

    @include('layouts.partials.head')
   
</head>
<body>

   @include('layouts.partials.header')

   @include('layouts.partials.slider')   
    
   @yield('content')
             
   @include('layouts.partials.footer')
    
   @include('layouts.partials.scripts')
   
</body>
</html>