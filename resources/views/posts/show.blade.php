<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿詳細</title>
</head>
<body>
    <h1>投稿詳細</h1>

    <ul>
        <li><strong>ID:</strong> {{ $post->id }}</li>
        <li><strong>タイトル:</strong> {{ $post->title }}</li>
        <li><strong>本文:</strong> {{ $post->content }}</li>
        <li><strong>作成日時:</strong> {{ $post->created_at }}</li>
        <li><strong>更新日時:</strong> {{ $post->updated_at }}</li>
    </ul>

    <a href="/posts">← 投稿一覧に戻る</a>
</body>
</html>
