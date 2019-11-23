<!doctype html><!-- HTML5-->
<html lang="ja">
  <head>
    <!-- 以下の meta tags（charset と viewport）は必須です-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap の CSS（CDN経由）の読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- <link href="{{asset("css/main_page.css")}}" rel="stylesheet"> -->
    
    <title>main page</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300 rel="stylesheet">
    <link href="css/_reset.scss" rel="stylesheet" type="text/css">
    <link href="css/main_page.scss" rel="stylesheet" type="text/css">
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
              プログラミングスクール TEACH::EXPEARTにてチーム開発を行なった時のものです。
              <a href=" http://3.112.169.24/">
                <br>詳細はこちら
              <a>
            </div>
          </div>
        </div>
        <div class = "app_production">
          <div class = "app_title">
            <div class = "app_title_text">
              FX用自動売買ツール auto-mode
            </div>
            <div class = "app_text">
              FX向けの自動トレードツールを作成しました。
              OANDA apiを用いて、為替の情報を取得し、短期、中期、長期でのトレンドの情報を計算させて
              相場情報を判断し、売買するツールです。でも講座を用いて、利益を得るための調整を行なっております。今後は、機械学習を用いて、精度を向上させていく予定です。
              <a href="{{url('/images/auto-mode.zip')}}" download><br>ダウンロードはこちら</a>
            </div>
          </div>
        </div>
      <div class = "youtube_production_list_title">
        ■ Youtube list  Comming soon
      </div>
      </div>
    </div>
  </body>
</html>