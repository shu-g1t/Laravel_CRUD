@extends('layouts.master_auth')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3">
    <!-- サイドバー -->
    @include('layouts.sidebar')
    </div>
    <div class="container col-md-8">
      <div class="jumbotron">
        <h1 class="display-4">Hello World!!</h1>
        <p class="lead">
          このウェブサイトはポートフォリオ用に作成された予約管理サイトです。<br>
          CRUD機能を実装しましたので、左のサイドバーからお試しください。<br>
          (認証ミドルウェアはコメントアウト済みです)
        </p>
        <hr class="my-6">
        <p>
          フロントエンド→HTML,Bootstrap,javascript<br>
          サーバーサイド→PHP,Laravel
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
