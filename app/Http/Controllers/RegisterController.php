<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Date;
use Auth;


class RegisterController extends Controller
{

    //一覧表示機能
    public function getIndex(Request $rq)
    {
        $from = $rq->input('from_date');
        $until = $rq->input('until_date');

          $query = \App\Models\Register::query();

        if(!empty($from) && !empty($until)){
          $registers = $query->orderBy('register_date', 'desc')->whereBetween('register_date',[$from,$until])->paginate(10);
        }else{
          $registers = $query->orderBy('register_date', 'desc')->paginate(10);
        }

        return view('register.list')->with('registers',$registers);
    }


    //新規登録機能
    public function getNew()
    {
      return View('register.new');
    }
    public function postNew(Request $request)
    {
      //バリデーション
      $this->validate($request,[
          'user_name' => 'required',
          'user_tel' => 'required|numeric',
          'register_date' => 'required|after:tomorrow',
          'register_time' => 'required'
      ]);

      //DBインサート
      $register = new Register([
        'user_name' => $request->input('user_name'),
        'user_tel' => $request->input('user_tel'),
        'register_date' => $request->input('register_date'),
        'register_time' => $request->input('register_time')
      ]);

      $register->save();

      return redirect()->route('register.list');
    }

    //予約情報編集機能
    //編集画面取得
    public function getEditRegister($id)
    {
      $register = Register::findOrFail($id);
      return view('register.editRegister')->with('register',$register);
    }

    //アップデート処理
    public function postEditRegister(Request $request, $id)
    {
      //レコードを検索
      $register = Register::findOrFail($id);

      //バリデーション
      $this->validate($request,[
          'user_name' => 'required',
          'user_tel' => 'required|numeric',
          'register_date' => 'required|after:tomorrow',
          'register_time' => 'required'
      ]);
      //値を代入
      $register->user_name = $request->user_name;
      $register->user_tel= $request->user_tel;
      $register->register_date = $request->register_date;
      $register->register_time = $request->register_time;

      //データの保存
      $register->save();

      //リダイレクト
      return redirect()->to('staff/list');
    }

    //予約削除処理
    public function postDeleteRegister($id)
    {
      //削除対象を検索
      $register = Register::find($id);
      //削除
      $register->delete();
      //リダイレクト
      return redirect()->to('staff/list');
    }
    public function getDeleteRegister($id)
    {
      return view('register.list');
    }
}
