const btn = document.querySelector("#nav-toggle");
const nav = document.querySelector("#g-nav");
const menu = document.querySelector("#menu");
const menu1 = document.querySelector("#menu1");
const menu2 = document.querySelector("#menu2");

btn.addEventListener("click", function () {
  btn.classList.toggle("active");
});

btn.addEventListener("click", () => {
  nav.classList.toggle("panelactive");
});

menu.addEventListener("click", () => {
  nav.classList.toggle("panelactive");
});
menu1.addEventListener("click", () => {
  nav.classList.toggle("panelactive");
});
menu2.addEventListener("click", () => {
  nav.classList.toggle("panelactive");
});

menu.addEventListener("click", () => {
  btn.classList.toggle("active");
});
menu1.addEventListener("click", () => {
  btn.classList.toggle("active");
});
menu2.addEventListener("click", () => {
  btn.classList.toggle("active");
});

$('.slider').slick({
  variableWidth: true,
  arrows: false,//左右の矢印はなし
  autoplay: true,//自動的に動き出すか。初期値はfalse。
  autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
  speed: 6900,//スライドのスピード。初期値は300。
  infinite: true,//スライドをループさせるかどうか。初期値はtrue。
  pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
  pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
  cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
  slidesToShow: 4,//スライドを画面に4枚見せる
  slidesToScroll: 1,//1回のスライドで動かす要素数
  responsive: [
    {
    breakpoint: 769,//モニターの横幅が769px以下の見せ方
    settings: {
      slidesToShow: 2,//スライドを画面に2枚見せる
    }
  },
  {
    breakpoint: 426,//モニターの横幅が426px以下の見せ方
    settings: {
      slidesToShow: 1.5,//スライドを画面に1.5枚見せる
    }
  }
]
});