@section("header")
  <div class="header">
    <div class="logo">
      {{ link_to_route('article.index', 'DuanPengfei\'s Blog') }}
    </div>

{{-- management --}}
    @if (Session::has('username'))
      <div class="management"> {{ link_to_route('user.profile', Session::get('username')) }}  {{ link_to_route('admin.index', '后台管理') }} </div>
    @else
      <div class="management"> {{ link_to_route('user.login', '登录') }} </div>
    @endif
  </div>
@show