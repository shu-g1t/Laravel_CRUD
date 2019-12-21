@extends('layouts.layout')
@section('title', '管理画面')
@section('content')
 <div class="page-header" style="margin-top:-30px;padding-bottom:0px;">
  <h1><small>予約一覧</small></h1>
  <form style="margin-bottom:16px" class="input-group" method="get">
    <input type="date" name="from_date" value=""><span>　〜　</span><input type="date" name="until_date" value="">
    <button type="submit" style="margin-left:16px;" class="btn btn-info btn-sm">検索</a>
  </form>
  </div>
  <table class="table table-striped table-hover">
  <thead>
  <tr>
  <th>No</th>
  <th>name</th>
  <th>tel</th>
  <th>日付</th>
  <th>時間</th>
  <th>option</th>
  </tr>
  </thead>
  <tbody>
    @foreach($registers as $register)
  <tr>
  <td>{{$register->id}}</td><td>{{$register->user_name}}</td><td>{{$register->user_tel}}</td><td>{{$register->register_date}}</td><td>{{$register->register_time}}</td>
  <td>
  <a href="" class="btn btn-info btn-sm">詳細</a>
  <a href="{{route('register.edit',$register->id)}}" class="btn btn-info btn-sm">編集</a>
  <a href="{{route('register.delete',$register->id)}}" class="btn btn-danger btn-sm btn-dell">削除</a>
  </td>
  </tr>
  @endforeach
  </tbody>
  </table>
  <div class="text-center">
    {{ $registers->appends(Request::query())->links() }}
  </div>

  @section('script')
    <script>
      $(function(){
        $('.btn-dell').click(function(){
          if(confirm("本当に削除しますか？")){

          }else{
            return false;
          }
        });
      });
    </script>
  @endsection

@endsection
