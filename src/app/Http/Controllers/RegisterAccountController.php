<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class RegisterAccountController extends Controller
{
    public function showStep1()
    {
        return view('register.step1');
    }

    public function postStep1(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:6',
        ],[
            'name.required' => '名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
            'password.required' => 'パスワードを入力してください',
        ]);

        Session::put('register', $request->only(['name', 'email', 'password']));

        return redirect()->route('register.step2');
    }

    public function showStep2()
    {
        $data = Session::get('register');
        return view('register.step2', compact('data'));
    }

    public function postStep(Request $request)
    {
        $request->validate([
            'current_weight' => 'required|numeric|between:between:0,9999.9',
            'target_weight' => 'required|numeric|between:0,9999.9',
        ],[
            'current_weight.required' => '現在の体重を入力してください',
            'current_weight.numeric' => '体重は数値で入力してください',
            'current_weight.between' => '体重は0~9999.9の範囲で入力してください',
            'target_weight.required' => '目標の体重を入力してください',
            'target_weight.numeric' => '体重は数値で入力してください',
            'target_weight.between' => '体重は0~9999.9の範囲で入力してください',
        ]);

        return redirect()->route('register.complete');// 例：完了ページへ
    }
}