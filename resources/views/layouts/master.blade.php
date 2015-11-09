<!doctype Html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Laravel 5.1')</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  @yield('meta')
 
  <!-- stylesheets -->
  {!! Html::style('//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
  {!! Html::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}
  <!-- select 2 -->
  <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
  
  @yield('styles')
  {!! Html::style('public/css/app.css') !!}
</head>
<body>
@section('navbar')
  @include('layouts.partials.navbar')
@show

  <div id="main">
    <div class="container">
        
       <h1>@yield('title')</h1>
 
        
       @section('main')
       
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dissmiss="alert" aria-hidden="true">&times;</button>
               {{ session('flash_message') }}
            </div>
        @endif
        <div id="content">
          @yield('content')
        </div>
 
        <aside id="sidebar">
          @yield('sidebar')
        </aside>
       @show
     </div>
  </div>
 
  
    
  <!-- scripts -->
  {!! Html::script('//code.jquery.com/jquery-2.1.4.min.js') !!}
  {!! Html::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}
  @yield('scripts')
  {!! Html::script('public/js/app.js') !!}
  <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
  <script>
      $('div.alert').delay(3000).slideUp(300);
  </script>
  @yield('footer')
</body>
</html>