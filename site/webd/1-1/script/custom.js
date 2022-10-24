// slider
const sliderInner = document.querySelector(".slider__inner");
const slider = document.querySelectorAll(".slider");

let currentIndex = 0;
sliderInner.style.transition = "all 0.6s";
setInterval(()=>{
    currentIndex = (currentIndex+1) % slider.length;
    sliderInner.style.transform = "translateX(-" + 1000*currentIndex + "px)";
},1000);

// 탭메뉴 2
const tabBtn = document.querySelectorAll(".notice > ul > li");
const tabCont = document.querySelectorAll(".notice > ul > li > ul > li > a");
tabBtn.forEach((e,i)=>{
    e.addEventListener("click",(event)=>{
        event.preventDefault();

        tabBtn.forEach((li)=>{
        li.classList.remove("active");
        });
        e.classList.add("active");

        tabCont.forEach((c)=>{
        c.style.display="none";
        });
        tabCont[i].style.display="block";
    });
});
