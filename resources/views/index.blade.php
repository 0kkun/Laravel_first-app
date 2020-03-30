<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Shinji's portfolio</title>
  <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
</head>

<body>

  <div class="header">
    <div class="background-image">
      <div class="title"> Shinji's portfolio </div>
      <div class="job"> Web Enginieer </div>
    </div>
  </div>

  <body class="container">

    <div class="navis">
      <ul class="navi-list">
        <li class="fas fa-user-alt navi-link" onclick="scrollToProfile()">PROFILE</li>
        <li class="fas fa-tasks    navi-link" onclick="scrollToWorks()">WORKS</li>
        <li class="fas fa-envelope navi-link" onclick="scrollToContact()">CONTACT</li>
      </ul>
    </div>


  <div class="section profile" id="target1">
    <div class="fas fa-user-alt section-title" > PROFILE</div>
    <div class="profile-contents">
      <div class="profile-image"></div>
      <div class="text">
        　初めまして。shinjiと申します。平成1年生まれ、30歳です。
        これまで電子部品の会社でメカニカルエンジニア6年、経理1年、サプライチェーン1年を経験しました。
        サプライチェーンでIoTのツールを使い業務の自動化・見える化を行いました。その経験を通じて、
        私も人の役に立つツールを作りたいと思うようになり、webエンジニアになることを決意しました。
        そして2019/12からTech::Expertで Ruby on rails を学習し2020/02に卒業、現在はDockerとLaravelを勉強中です。
        今後は社会に役立ち、人の生活を豊かにできるアプリケーションを作れるエンジニアになりたいと思っています。
      </div>
    </div>
  </div>

  <div class="section works" id="target2">
    <div class="fas fa-tasks section-title"> WORKS</div>
    <div class="works-images">

      <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="https://my-tennis-app.herokuapp.com/"><img src="images/works-tennis-app1.jpg" alt=""></a>
              <div>
              <h1 class="app-title">テニスアプリ</h1>
              <p >test account ID: test@gmail.com, PASS : 11111111, </p1>
              <a href="https://github.com/0kkun/tennis-application">github</a>
              <p class="app-desc">使用技術：Ruby on Rails / MySQL / Ruby / google API / Scraping / Heroku</p>
              <p class="app-desc app-desc-end">目的：ユーザーが登録した好みに合わせてテニスの最新情報を集約できるアプリです。</p>
              </div>
            </div>
            
            <div class="swiper-slide">
              <a href="http://3.113.152.196/"><img src="images/works-frema.jpg" alt=""></a>
              <div>
              <h1 class="app-title">フリマアプリ</h1>
              <p >test account ID: team67a, PASS : 6767, </p1>
              <a href="https://github.com/0kkun/freemarket_sample_67a">github</a>
              <p class="app-desc">使用技術：Ruby on Rails / MySQL / Ruby / AWS / jQuery / Gem (Ancestory) </p>
              <p class="app-desc app-desc-end">目的：某フリマサイトを模倣したアプリです。</p>
              </div>
            </div>

            <div class="swiper-slide">
              <a href="http://3.113.152.196/"><img src="images/works-chatspace.png" alt=""></a>
              <div>
              <h1 class="app-title">チャットアプリ</h1>
              <p >test account ID: ******, PASS : ****, </p1>
              <a href="https://github.com/0kkun/chat-space">github</a>
              <p class="app-desc">使用技術：Ruby on Rails / MySQL / Ruby / AWS / jQuery </p>
              <p class="app-desc app-desc-end">目的：グループを作成し、チャットができるアプリです。</p>
              </div>
            </div>

            <div class="swiper-slide">
              <a href="#"><img src="images/works-portfolio.jpg" alt=""></a>
              <div>
              <h1 class="app-title">ポートフォリオサイト</h1>
              <p >test account ID: ******, PASS : ****, </p1>
              <a href="https://github.com/0kkun/Laravel_first-app">github</a>
              <p class="app-desc">使用技術：Docker / Laravel / PHP / JS / Heroku</p>
              <p class="app-desc app-desc-end">目的：このサイトです。</p>
              </div>
            </div>

        </div>
        <!-- pagination -->
        <div class="swiper-pagination"></div>
        
        <!-- navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    </div>
    
  </div>

  <div class="section contact" id="target3">
    <div class="fas fas fa-envelope section-title"> CONTACT</div>
      <div class="section-desc">何かありましたらTwitterのDMからご連絡ください。</div>
      <a href="https://twitter.com/Shin_Spcl_Prg" class="fab fa-twitter"> </a>
  </div>




  <div class="footer">
      <ul class="footer__navi-list">
        <!-- <li class="footer__navi-link footer__link" onclick="scrollToProfile()">profile</li>
        <li class="footer__navi-link footer__link" onclick="scrollToWorks()">works</li>
        <li class="footer__navi-link footer__link" onclick="scrollToContact()">contact</li> -->
      </ul>
    <div class="copy-rihgt"> Copyright©shinji. All Rights Reserved.</div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
  <script src="{{ asset('js/slider-script.js') }}"></script>
</body>
</html>