const sliderWrap = document.querySelector(".slider__wrap");
const sliderImg = document.querySelector(".slider__img");
const sliderInner = document.querySelector(".slider__inner");
const Slider = document.querySelectorAll(".sliderr");


let sliderindex = 0;
let sliderCount = Slider.length;
let sliderWidth = sliderImg.offsetWidth;
let sliderclone = sliderInner.firstElementChild.cloneNode(true);
sliderInner.appendChild(sliderclone);

function sliderEffect(){
    sliderindex++;
    sliderInner.style.transition = "all 0.6s";
    sliderInner.style.transform = "translateX(-" + sliderWidth * sliderindex + "px)";
    
    if(sliderindex==sliderCount){
        setTimeout(()=>{
            sliderInner.style.transition = "0s";
            sliderInner.style.transform = "translateX(0px)";

        },700);
        sliderindex = 0;

    }
}
setInterval(sliderEffect,2000);

const sliderBtn = document.querySelector(".slider__btn");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");

//이미지 움직이는 영역
function gotoSlider(num){
    sliderInner.style.transition = "all 400ms";
    sliderInner.style.transform = "translateX(-"+ sliderWidth * num +"px)";
    sliderindex = num;
}
// 왼쪽 버튼 클릭
prevBtn.addEventListener("click", ()=>{
    let prevIndex = (sliderindex + sliderCount -1) % sliderCount;
    gotoSlider(prevIndex);
});
//오른쪽 버튼 클릭
nextBtn.addEventListener("click", () => {
    let nextIndex = (sliderindex + 1) % sliderCount
    gotoSlider(nextIndex);
    // 0 1 2 3 4
});

