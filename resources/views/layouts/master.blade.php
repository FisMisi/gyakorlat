<!doctype Html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Laravel 5.1')</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  @yield('meta')
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
    .ui-autocomplete{
    z-index:10000;
    }
   </style>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <!-- stylesheets -->
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
  
  {!! Html::style('http://http://code.jquery.com/ui/1.11.2/themes/start/jquery-ui.css') !!}
  {!! Html::style('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
  {!! Html::style('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}
  <!-- select 2 -->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
  
  @yield('styles')
<!--  {!! Html::style('public/css/app.css') !!}-->
    <script type="text/javascript">
      $(document).ready(function(){
       
            $('#term').autocomplete({
               source: "{!! route('get-search') !!}",
               minLength: 2,
               select: function( event, ui ) {
                    $('#data').val(ui.item.id);
                    $('#term').val(ui.item.value);
                    $('#search').hide();
                }
            });
            
    });
              
  </script>
  <style>
.ui-autocomplete{
z-index:10000;
}
</style>
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
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
  {!! Html::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}
  @yield('scripts')
<!--  {!! Html::script('public/js/app.js') !!}-->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
  <script>
      $('div.alert').delay(3000).slideUp(300);
  </script>
  
  
  @yield('footer')
</body>
</html>