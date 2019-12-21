<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<!-- ヘッダー -->
@include('layouts.header')

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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@yield('script')
</body>
</html>
