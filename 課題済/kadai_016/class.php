<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food
        {
            public $name;
            public $price;
            // メソッドを定義
            public function show_price()
            {
                echo $this->price;
            }
            // コンストラクタを定義
            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }
        }
        class Animal
        {
            public $name;
            public $height;
            public $weight;
            // メソッドを定義
            public function show_height()
            {
                echo $this->height;
            }
            // コンストラクタを定義
            public function __construct(string $name, int $height, int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
        // インスタンス化する
        $kadai_016 = new Food('カレー', 360);
        $kadai_016_2 = new Animal('猫', 50, 100);

        //インスタンスの各プロパティの値を出力する
        print_r($kadai_016);
        echo '<br>';
        print_r($kadai_016_2);
        echo '<br>';

        // メソッドにアクセスして実行
        $kadai_016->show_price();
        echo '<br>';
        $kadai_016_2->show_height();
        ?>
    </p>
</body>
</html>