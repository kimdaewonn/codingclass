// 슬라이드
const slidrWrap = document.querySelector(".slider_wrap");
const sliderImg = document.querySelector(".slider_img");
const sliderInner = document.querySelector(".slider_inner");
const Slider = document.querySelectorAll(".slider");

let sliderIndex = 0;
let sliderCount = Slider.length;
let sliderHeight = sliderInner.offsetHeight;
let sliderClone = sliderInner.firstElementChild.cloneNode(true);
sliderInner.appendChild(sliderClone);

function sliderEffect() {
  sliderIndex++;
  sliderInner.style.transition = "all 0.6s";
  sliderInner.style.transform =
    "translateY(-" + (sliderHeight * sliderIndex) / 4 + "px)";

  if (sliderIndex == sliderCount) {
    setTimeout(() => {
      sliderInner.style.transition = "0s";
      sliderInner.style.transform = "translateY(0px)";
    }, 700);

    sliderIndex = 0;
  }
}
setInterval(sliderEffect, 2000);

// 중앙 탭메뉴
const gongH = document.querySelector(".gongh");
const gallH = document.querySelector(".gallh");
const gongCont = document.querySelector(".gong_cont");
const gallCont = document.querySelector(".gall_cont_ul");

gongH.addEventListener("click", () => {
  gongCont.style.display = "block";
  gallCont.style.display = "none";
  document.querySelector(".gong_cont_ul2").style.top = "28px";
  document.querySelector(".gong_cont_ul2").style.right = "10px";

  // gongH.classList.add("on");
  // gallH.classList.remove("on");
});
gallH.addEventListener("click", () => {
  gallCont.style.display = "flex";
  gongCont.style.display = "none";
  document.querySelector(".");
  // gongH.classList.add("on");
  // gallH.classList.remove("on");
});

// gongH.forEach((el, i) => {
//   el.addEventListener("click", (event) => {
//     event.preventDefault();
//     gongH.forEach((li) => {
//       li.classList.remove("active");
//     });
//     el.classList.add("active");

//     gongH.forEach((div) => {
//       div.style.display = "none";
//     });
//     tabCont[index].style.display = "block";
//   });
// });
