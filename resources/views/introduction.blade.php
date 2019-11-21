<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- 以下の meta tags（charset と viewport）は必須です-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap の CSS（CDN経由）の読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link href="{{asset("css/main_page.css")}}" rel="stylesheet"> -->
    
    <title>main page</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300 rel="stylesheet">
    <link href="css/reset.scss" rel="stylesheet" type="text/css">
    <link href="css/introduction.scss" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class = "image_zone">
      <div class = "image_box">
        <img src="{{ asset('images/image.png') }}" alt="inu" class="my_image">
      </div>
      <div class = "name_box">
        長谷川 海斗
      </div>
    </div>
    <div class="text_box_1">
    <h3>■自己紹介</h3>
    <div class = "introduction_text">
        26歳、未経験でエンジニアになるべく、勉強を始めました。
        学習中の言語は、ruby, rails, PHP, larval, pythonです。
        プログラム以外にも機械学習にも興味があり、勝てるトレードツールの開発も行っております。
        よろしくお願いいたします。
    </div>
    </div>

  </body>
</html>