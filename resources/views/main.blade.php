<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <title>My Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300 rel="stylesheet">
    <link href="css/_reset.scss" rel="stylesheet" type="text/css">
    <link href="css/main_page.scss" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300 rel="stylesheet">
    <!-- <link href="css/introduction.scss" rel="stylesheet" type="text/css">
    <link href="css/production.scss" rel="stylesheet" type="text/css"> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
    <!-- <script type="text/javascript" src="{{ asset('js/main_page.js') }}"></script> -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.pjax/1.9.6/jquery.pjax.js"></script> -->
    <script src="https://unpkg.com/@barba/core"></script>
    <!-- <script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script> -->
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
    <div class="change_box">
      <div class = "box">
        <div class = "title_box">
          <div class = "main_title" id = "title">
            Profile
          </div>
        </div>
        <div class = "content_box">
        <a href="{!! action('IntroductionController@index') !!}" class="pjax">
            <div class = content_box_mini_1>
              <div class = "content_box_text">
                <div class = "introduction_box">
                  Introduction
                </div>
              </div>
            </div>
        </a>
          <div class = content_box_mini_2 class="pjax">
            <div class = "content_box_text">
              <div class = "skill_box">
                Skill
              </div>
            </div>
          </div>
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
    </div>
  </body>
</html>