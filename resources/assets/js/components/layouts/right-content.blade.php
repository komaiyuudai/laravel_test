<div id="header-label">
    <div id="header">
        <div id="left-header">
            <a id="title" href="/">YDKショッピング</a>
        </div>
        <div id="right-header">
            <ul>
                <li>
                    <a href="#">
                        <span class="header-right-menu">買い物かご</span>
                    </a>
                </li>
                <li>
                    @if (!auth()->guard('user')->check())
                    <a href="/user/login">
                        <span class="header-right-menu">会員ログイン</span>
                    </a>
                    @else
                    <a href="/user/logout">
                        <span class="header-right-menu">会員ログアウト</span>
                    </a>
                    @endif
                </li>
                <li>
                    @if (!auth()->guard('admin')->check())
                    <a href="/admin/login">
                        <span class="header-right-menu">店舗ログイン</span>
                    </a>
                    @else
                    <a href="/admin/logout">
                        <span class="header-right-menu">店舗ログアウト</span>
                    </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</div>