<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Auth;

class StaffController extends Controller
{
    public function getProfile(){
      return View('staff.profile');
    }
    public function getSignup(){
      return View('staff.signup');
    }
    public function postSignup(Request $request) {
      //バリデーション
      $this->validate($request, [
        'staff_id' => 'required | unique:staffs',
        'password' => 'required | min:4',
      ]);

      //DBインサート
      $staff = new Staff([
        'staff_id' => $request->input('staff_id'),
        'password' => bcrypt($request->input('password')),
        'staff_name' => $request->input('staff_name')
      ]);

      //保存
      $staff->save();

      return redirect()->route('staff.profile');
    }

    //ログイン
    public function getLogin()
    {
      return view('staff.login');
    }
    public function postLogin(Request $request)
    {
      $this->validate($request, [
        'staff_id' => 'required',
        'password' => 'required | min:4'
      ]);

      if(Auth::attempt(['staff_id' => $request->input('staff_id'),'password' => $request->input('password')])){
        return redirect()->route('staff.profile');
      }
        return redirect()->back();
    }

    //ログアウト
    public function getLogout(){
      Auth::logout();
      return redirect()->route('staff.login');
    }



}
