<ul class="nav navbar-expand-lg navbar-dark bg-dark">
    <li class="nav-item">
        <h1 style="color: white; font-size: 30px;">Laravel掲示板</h1>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/" style="color: white; text-decoration-line: none;">メイン画面</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/dashboard" style="color: white;  text-decoration-line: none;">ダッシュボード</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/post" style="color: white;  text-decoration-line: none;">投稿一覧</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.show', Auth::user()->id) }}"
            style="color: white;  text-decoration-line: none;">プロフィール</a>
    </li>
</ul>
