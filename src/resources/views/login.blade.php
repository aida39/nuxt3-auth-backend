@extends('layouts.app')

@section('content')
    <h1>loginページ</h1>
    <form action="/login" method="post">
        @csrf
        <div>
            <label for="name">名前:</label>
            <input type="text" id="name" name="name" />
        </div>
        <div>
            <label for="email">アドレス:</label>
            <input type="text" id="email" name="email" />
        </div>
        <div>
            <label for="password">パスワード:</label>
            <input type="password" id="password" name="password" />
        </div>
        <button type="submit">ログイン</button>
    </form>
@endsection
