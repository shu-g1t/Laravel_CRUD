<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="container">

      <div class="row" id="content">
      <div class="col-md-3">
      <!-- サイドバー -->
      @include('layouts.sidebar')
      </div>
      <div class="col-md-9">
      <!-- コンテンツ -->
      @yield('content')
      </div>
      </div>

    </div>
  </body>
</html>
