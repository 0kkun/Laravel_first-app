
var mySwiper = new Swiper ('.swiper-container', {
  effect: "flip",
  loop: true,
  pagination: '.swiper-pagination',
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
})

var element1 = document.getElementById('target1'); // 移動させたい位置の要素を取得
var element2 = document.getElementById('target2');
var element3 = document.getElementById('target3'); 
    var rect1 = element1.getBoundingClientRect();
    var rect2 = element2.getBoundingClientRect();
    var rect3 = element3.getBoundingClientRect();
    var position1 = rect1.top;    // 一番上からの位置を取得
    var position2 = rect2.top;    
    var position3 = rect3.top;    

function scrollToProfile() {
  scrollTo(0, position1);
 }

function scrollToWorks() {
  scrollTo(0, position2);
 }

function scrollToContact() {
  scrollTo(0, position3);
 }