@extends("layout")
@section("content")
  @if ($error = $errors->first("notice"))
    <div class="error">
      <p>{{ $error }}</p>
    </div>
  @endif

  <div class="login">
    {{ Form::open(["route" => "user.login", "autocomplete" => "off"]) }}
      <div class="username">    
        {{ Form::label("username", "姓名：") }}
        {{ Form::text("username", Input::old("username"), ["placeholder" => "John"]) }}
      </div>

      <div class="password">
        {{ Form::label("password", "密码：") }}
        {{ Form::password("password", ["placeholder" => "********"]) }}
      </div>

      {{ Form::submit("登录") }} <br />
    {{ Form::close() }}
  </div>
@stop