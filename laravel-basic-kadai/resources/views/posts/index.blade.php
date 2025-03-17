<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿一覧</title>
</head>

<body>
    <ul>
        @foreach($posts as $post)
        <li>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </li>
        @endforeach
    </ul>
</body>

</html>