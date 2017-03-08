<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $guard = 'user';                   // 使用するguard名(デフォルトはauth.phpのデフォルト設定してあるguard)
    protected $registerView = 'user.register';   // 新規登録画面のview(デフォルトは「auth.register」)
    protected $loginView = 'user.login';         // ログインページのview(デフォルトは「auth.authenticate」)
    // protected $redirectTo = '/user/index';                // ログイン後のリダイレクト先(デフォルトは「/home」)
    protected $redirectAfterLogout = '/';                  // ログアウト後のリダイレクト先(デフォルトは「/」)
    protected $username = 'mail';                         // 認証用のカラム(デフォルトは「email」)
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
        return view('user.login');
    }

    /**
     * カラム名の変更
     */
    public function username()
    {
        return 'mail';
    }


}
