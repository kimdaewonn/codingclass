const s = skrollr.init();
function scroll() {
  let scrollTop = window.screenY || document.documentElement.scrollTop;
  document.querySelector(".scrollTop").innerText = Math.ceil(scrollTop);
  requestAnimationFrame(scroll);
}
scroll();
// 마우스

const cursor = document.querySelector(".mouse__cursor");
const cursor2 = document.querySelector(".mouse__cursor2");
  window.addEventListener("mousemove", e=>{
        // 커서 좌표값 할당
        // cursor.style.left = e.pageX -5 + "px";
        // cursor.style.top = e.pageY -5 + "px";
        // cursor2.style.left = e.pageX -15 + "px";
        // cursor2.style.top = e.pageY -15 + "px";

        // GSAP
        gsap.to(cursor, {duration: 0.3, left: e.pageX -5, top: e.pageY - 5});
        gsap.to(cursor2, {duration: 0.5, left: e.pageX -15, top: e.pageY - 15});
  });