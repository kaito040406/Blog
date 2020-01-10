<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- 以下の meta tags（charset と viewport）は必須です-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap の CSS（CDN経由）の読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link href="{{asset("css/main_page.css")}}" rel="stylesheet"> -->
    
    <title>My Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300 rel="stylesheet">
    <link href="css/introduction.scss" rel="stylesheet" type="text/css">
    <link href="css/main_page.scss" rel="stylesheet" type="text/css">
  </head>
  <body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <a class="navbar-brand" href="/">Home</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#"></a>
            </li>
        </ul>
      </div>
    </nav>  
  </header>
    <div class="intro_box">
      <div class = "image_zone">
        <div class = "image_box">
          <img src="{{ asset('images/image.png') }}" alt="inu" class="my_image">
        </div>
        <div class = "name_box">
          長谷川 海斗
        </div>
      </div>
      <div class="text_box_1">
      <h3 class="list_text">■自己紹介</h3>
        <div class = "introduction_text">
          未経験でエンジニアになるべく、勉強を始めました。学習中の言語は、ruby, rails, PHP, larval, pythonです。<br>
          『太く短く美しく』というテーマのもと生きております。<br>
          プログラム以外にも機械学習にも興味があり、勝てるトレードツールの開発も行っております。<br>
          よろしくお願いいたします。
        </div>
      </div>
      <div class="text_box_1">
      <h3 class="list_text">■学習中の言語,フレームワーク</h3>
        <div class = "introduction_text">
          ・Ruby<br>
          ・Rails<br>
          ・Python<br>
          ・PHP<br>
          ・Laravel<br>
          ・JavaScript<br>
          ・HTML(haml)<br>
          ・CSS(scss)<br>
        </div>
      </div>
    </div>
    <div class = "content_box2">
        <a href="{!! action('IntroductionController@index') !!}" class="pjax">
            <div class = content_box_mini_1>
              <div class = "content_box_text">
                <div class = "introduction_box">
                  Introduction
                </div>
              </div>
            </div>
        </a>
        <a href="/">
          <div class = content_box_mini_2 class="pjax">
            <div class = "content_box_text">
              <div class = "skill_box">
                Home
              </div>
            </div>
          </div>
        </a>
        <a href="{!! action('ProductionController@index') !!}" class="pjax">
          <div class = content_box_mini_3>
            <div class = "content_box_text">
              <div class = "production">
                Production
              </div>
            </div>
          </div>
        </a>
        </div>
  </body>
</html>