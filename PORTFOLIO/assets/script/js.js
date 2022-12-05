const s = skrollr.init();

function scroll() {
    let scrollTop = window.screenY || document.documentElement.scrollTop;
    document.querySelector(".scrollTop").innerText = Math.ceil(scrollTop);
    requestAnimationFrame(scroll);
  }
  scroll();