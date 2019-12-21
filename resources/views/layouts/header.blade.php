<nav style="margin-bottom:50px;" class="navbar bg-info">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand text-light" href="#">管理画面</a>
        </div>
      <div class="">
        <div class="navbar" id="navigation">
          @if(Auth::check())
            <a class="nav-item nav-link text-light" href="{{ route('staff.logout') }}">ログアウト</a>
          @else
            <a class="nav-item nav-link text-light" href="{{route('staff.login')}}">ログイン</a>
          @endif
        </div>
      </div>
      </div>
    </nav>
