<!doctype html><!-- HTML5-->
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
    <link href="css/_reset.scss" rel="stylesheet" type="text/css">
    <link href="css/main_page.scss" rel="stylesheet" type="text/css">
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
    <div class = "box">
      <div class = "title_box">
        <div class = "main_title">
          Profile
        </div>
      </div>
      <div class = "content_box">
      <a href="{!! action('IntroductionController@index') !!}">
          <div class = content_box_mini_1>
            <div class = "content_box_text">
              <div class = "introduction_box">
                Introduction
              </div>
            </div>
          </div>
      </a>
        <div class = content_box_mini_2>
          <div class = "content_box_text">
            <div class = "skill_box">
              Skill
            </div>
          </div>
        </div>
      <a href="{!! action('ProductionController@index') !!}">
        <div class = content_box_mini_3>
          <div class = "content_box_text">
            <div class = "production">
              Production
            </div>
          </div>
        </div>
      </a>
      </div>
    </div>
  </body>
</html>