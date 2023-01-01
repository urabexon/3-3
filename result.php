<?php

  //②フォームからのデータを受け取ります
  $name = $_POST["name"];
  $number = $_POST["number"];

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
  $lots = $number * rand(1,6);

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
  function result($lots) {
    if ($lots <= 10){
      echo "凶";
    } elseif ($lots <= 15) {
      echo "小吉";
    } elseif ($lots <= 20) {
      echo "中吉";
    } elseif ($lots <= 25) {
      echo "吉";
    } elseif ($lots <= 36) {
      echo "大吉";
    } else {
      echo "残念";
    }
  };

?>

<!-- //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>結果</title>
</head>
<body>
  <p>
    <?= date( "Y-m-d H:i:s", time() ); ?>
  </p>
  <p>
    名前は<?= $name ?>です。
  </p>
  <p>
    番号は<?= $lots ?>です。
  </p>
  <p>
    番号は<?= result($lots) ?>です。
  </p>
</body>
</html>

