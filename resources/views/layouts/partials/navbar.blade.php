<nav class="navbar navbar-inverse">
  <div class="container">
    <ul class="nav nav-pills">
        @if(\Auth::check())
            <li role="presentation"><a href="{{action('Auth\AuthController@getLogout')}}">Logout</a></li>
        @else
            <li role="presentation"><a href="{{action('Auth\AuthController@getLogin')}}">Login</a></li>
        @endif
        
        <li role="presentation"><a href="{{action('Auth\AuthController@getRegister')}}">Registration</a></li>
        <li role="presentation"><a href="{{action('PostController@index')}}">Posts</a></li>
        <li role="presentation"><a href="{{action('PostController@create')}}">Create Posts</a></li>
        
        <li role="presentation"><a href="{{action('TagController@index')}}">Tags</a></li>
        <li role="presentation"><a href="{{action('TagController@create')}}">Create Tag</a></li>
    </ul>
  </div>
</nav>