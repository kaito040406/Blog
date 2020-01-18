<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    <title>My Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300 rel="stylesheet">
    <link href="css/_reset.scss" rel="stylesheet" type="text/css">
    <link href="css/production.scss" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-3 mb-3">
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
    <div class="pro_box">
      <div class = "production_box">
        <div class = "title_production">
            Production
        </div>
        <div class = "content_box">
          <div class = "app_box">
            <div class = "app_box_text" id = app_box_bottan>
              App
            </div>
          </div>
          <div class = "youtube_box">
            <div class = "youtube_box_text">
              YouTube
            </div>
          </div>
        </div>
      </div>
      <div class = "app_production_list" id = "app_production_list">
        <div class = "app_production_list_title">
          ■ Application list
        </div>
        <div class = "app_productions">
          <div class = "app_production">
            <div class = "app_title">
              <div class = "app_title_text">
                メルカリコピー
              </div>
              <div class = "app_text">
                プログラミングスクール TECH::EXPERTにてチーム開発を行なった時のものです。
                <a href=" http://3.112.169.24/">
                  <br>詳細はこちら
                <a>
              </div>
            </div>
          </div>
          <div class = "app_production">
            <div class = "app_title">
              <div class = "app_title_text">
                Dream diary
              </div>
              <div class = "app_text">
                自殺防止を目的としたアプリケーションです。<br>
                昨日見た夢を投稿するSNSとなっております。<br>
                夢の状態からその人が危険かをお互いに判断することができます。<br>
                また、『ゆるい』というデザインコンセプトを取っており、可愛いキャラクターたちが癒してくれます。
                <a href=" http://52.199.170.110/">
                  <br>詳細はこちら
                <a><br>
                <img src="{{ asset('images/dream_diary.png') }}" alt="inu" class="auto-mode_image">
              </div>
            </div>
          </div>
        <div class = "youtube_production_list_title">
          ■ Youtube list  Comming soon
        </div>
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