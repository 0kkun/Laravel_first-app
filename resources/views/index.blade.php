<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Shinji's portfolio</title>
  <!-- <link rel="stylesheet" href="/sass/index.scss"> -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

  <div class = "wrapper">

    <div class="header">
      <div class="background-image">
        <div class="title"> Shinji's portfolio </div>
        <div class="job"> Web Enginieer </div>
      </div>
    </div>

  <div class="container">

    <div class="navis">
      <ul class="navi-list">
        <li class="fas fa-user-alt"><a href="#" class="navi-link">PROFILE</a></li>
        <li class="fas fa-tasks"><a href="#" class="navi-link">WORKS</a></li>
        <li class="fas fas fa-envelope"><a href="#" class="navi-link">CONTACT</a></li>
        <!-- <li class="fab fa-blogger-b"><a href="#" class="navi-link">blog</a></li> -->
      </ul>
    </div>


  <div class="section profile">
    <div class="fas fa-user-alt section-title"> PROFILE</div>
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

  <div class="section works">
    <div class="fas fa-tasks section-title"> WORKS</div>
  </div>

  <div class="section contact">
    <div class="fas fas fa-envelope section-title"> CONTACT</div>
      <div class="section-desc">何かありましたらTwitterのDMからご連絡ください。</div>
      <a href="https://twitter.com/Shin_Spcl_Prg" class="fab fa-twitter"> </a>
  </div>


  <div class="footer">
      <ul class="footer__navi-list">
        <li class="footer__navi-link"><a href="#" class="footer__link">profile</a></li>
        <li class="footer__navi-link"><a href="#" class="footer__link">works</a></li>
        <li class="footer__navi-link"><a href="#" class="footer__link">contact</a></li>
      </ul>
    <div class="copy-rihgt"> Copyright©shinji. All Rights Reserved.</div>
  </div>


</div>
</html>