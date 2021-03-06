@extends('layouts.layout')

@section('content')
<div  class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">{{ __('予約追加') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register.new') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="staff_id" class="col-md-4 col-form-label text-md-right">{{ __('お名前') }}</label>

                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control @error('staff_id') is-invalid @enderror" name="user_name" placeholder="フルネームで入力" autocomplete="off" >

                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_tel" class="col-md-4 col-form-label text-md-right">{{ __('お電話番号') }}</label>

                            <div class="col-md-6">
                                <input id="user_tel" type="text" class="form-control @error('user_tel') is-invalid @enderror" name="user_tel" placeholder="半角数字で入力" autocomplete="off" >

                                @error('user_tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="register_date" class="col-md-4 col-form-label text-md-right">{{ __('来店日') }}</label>

                            <div class="col-md-6">
                                <input id="register_date" type="date" class="form-control @error('register_date') is-invalid @enderror" name="register_date" autocomplete="off">

                                @error('register_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="register_time" class="col-md-4 col-form-label text-md-right">{{ __('来店時間') }}</label>

                            <div class="col-md-6">
                                <input id="register_time" type="text" class="form-control" placeholder="午前・午後を必ず明記" name="register_time" >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('新規作成') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
