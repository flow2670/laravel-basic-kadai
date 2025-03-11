<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai_011</title>
</head>
<body>
    <?php
    $kadai_011 = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($kadai_011 as $key => $value) {
        echo "{$key}：{$value}<br>";
    }
    ?> 
</body>
</html>