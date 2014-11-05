@extends("layout")
@section("content")
  <div class="login">
    @if (Session::has('username'))
      <div class="profile">
        <h1>账户信息</h1>
        <div class="username">姓名：{{ Session::get('username'); }} </div>
      </div>
    @endif
  </div>
@stop