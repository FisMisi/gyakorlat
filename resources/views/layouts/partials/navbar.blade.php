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
      {!! Form::open(array('url'=>'list','class'=>'navbar-form navbar-left','role'=>'search')) !!}
<!--            {!! Form::hidden('input_key', Input::old('input_key'),array('id'=>'input_key'))!!}-->
            {!! Form::text('term','',array('class'=>'ui-widget uk-width-1-1, ui-widget-content ui-corner-all', 'id'=>'term')) !!}
                
            {!! Form::submit('Go',['class'=>'btn btn-default']) !!}
        {!! Form::close() !!}
        
        
  </div>
</nav>