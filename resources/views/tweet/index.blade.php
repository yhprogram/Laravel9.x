<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0,
        maximum-scale=1.0, minimum-swcale=1.0">
    <title>つぶやきアプリ</title>
</head>

<body>
    <h1>つぶやきアプリ</h1>
    <div>
        <p>投稿フォーム</p>
        @if (session('feedback.delete.success'))
            <p style="color:green"> {{ session('feedback.delete.success') }}</p>
        @endif
        <form action="{{ route('tweet.create') }}" method="post">
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea id="tweet-content" type="text" name="tweet" placeholder="つぶやきを入力"></textarea>
            @error('tweet')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <button type="submit">投稿</button>
        </form>
    </div>
    <?php
    $js = "<script>alert('xss')</script>";
    ?>
    {{-- {!! $js !!} --}}
    <div>
        @foreach ($tweets as $tweet)
            {{-- <p>
                {{ $tweet->id }}：
                {{ $tweet->content }}
                <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>
            </p> --}}

            <details>
                <summary>{{ $tweet->content }}</summary>
                <div>
                    <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>
                    <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">削除</button>
                    </form>
                </div>
            </details>
        @endforeach
    </div>
</body>

</html>
