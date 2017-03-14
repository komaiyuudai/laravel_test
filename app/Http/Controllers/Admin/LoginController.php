<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $guard = 'admin';                   // 使用するguard名(デフォルトはauth.phpのデフォルト設定してあるguard)
    protected $registerView = 'admin.register';   // 新規登録画面のview(デフォルトは「auth.register」)
    protected $redirectAfterLogout = '/';                  // ログアウト後のリダイレクト先(デフォルトは「/」)
    protected $username = 'email';                         // 認証用のカラム(デフォルトは「email」)
    protected $maxLoginAttempts = 5;                       // ログインスロットルとなるまで最高のログイン失敗回数(デフォルトは「5」)
    protected $lockoutTime = 60;                           // ログインスロットルとなってからの待ち秒数(デフォルトは60)

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * ログインフォーム
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * guard指定
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
