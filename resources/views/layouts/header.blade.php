<div id="header">
    <ul id="menu-left">
        <li><a href="/">TOP</a></li>
        <li>メニュー</li>
        <li>買い物かご</li>
        <li>
            @if (!auth()->guard('user')->check())
            <a href="/user/login">会員ログイン</a>
            @else
            <a href="/user/logout">会員ログアウト</a>
            @endif
        </li>
        <li>
            @if (!auth()->guard('admin')->check())
            <a href="/admin/login">店舗ログイン</a>
            @else
            <a href="/admin/logout">店舗ログアウト</a>
            @endif
        </li>
    </ul>
</div>