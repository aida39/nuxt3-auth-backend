<!DOCTYPE html>
<html lang="ja">

<body>
    <header class="header">
        <a href="/">index</a>
        <a href="/login">login</a>
        <a href="/dashboard">dashboard</a>
    </header>

    <main>
        @if (session('result'))
            <div class="flash-message">
                {{ session('result') }}
            </div>
        @endif

        @yield('content')

        @if (Auth::check())
            <p>認証状態：ログイン中</p>
        @else
            <p>認証状態：ログインしていません</p>
        @endif
    </main>
</body>

</html>
