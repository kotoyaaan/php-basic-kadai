<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう課題</title>
</head>
<body>
  <p>
    <?php
    // クラスを定義する
    class Food {
      // プロパティを定義
      private $name;
      private $price;

        // メソッドを定義
        public function show_price() {
          echo $this->price . '<br>';
        }

        // コンストラクタの定義
        public function __construct($name, $price) {
          $this->name = $name;
          $this->price = $price;
          
        }
    }

    class Animal {
      // プロパティの定義
      private $name;
      private $height;
      private $weight;

        public function show_height() {
          echo $this->height . '<br>';
        }

        // コンストラクタの定義
        public function __construct($name, $height, $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
    }

    // インスタンス化
    $food = new Food('potato',250);
    $animal = new Animal('dog', 60, 5000);

    // インスタンスの出力
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';

    // メソッドへのアクセス
    $food->show_price();
    $animal->show_height();
    
    ?>
  </p>
  
</body>
</html>