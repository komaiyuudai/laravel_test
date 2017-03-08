<div id="header">
    <ul id="menu-left">
        <li><a href="/">TOP</a></li>
        <li>メニュー</li>
        <li>買い物かご</li>
        <li>
            @if (!auth()->guard('user')->check())
            <a href="/user/login">ログイン</a>
            @else
            <a href="/user/logout">ログアウト</a>
            @endif
        </li>
    </ul>
</div>