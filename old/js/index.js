let countDate = new Date("Mar 15, 2022 00:00:00").getTime();
let now;
window.addEventListener("load", () => {
  const days = document.querySelector(".days");
  const hours = document.querySelector(".hours");
  const minutes = document.querySelector(".minutes");
  const seconds = document.querySelector(".seconds");

  let timeLeft = {
    d: 0,
    h: 0,
    m: 0,
    s: 0,
  };

  let totalSeconds;

  function init() {
    totalSeconds = Math.floor((new Date("10/15/2022") - new Date()) / 1000);
    setTimeLeft();
    let interval = setInterval(() => {
      if (totalSeconds < 0) {
        clearInterval(interval);
      }
      countTime();
    }, 1000);
  }

  function countTime() {
    if (totalSeconds > 0) {
      --timeLeft.s;
      if (timeLeft.m >= 0 && timeLeft.s < 0) {
        timeLeft.s = 59;
        --timeLeft.m;
        if (timeLeft.h >= 0 && timeLeft.m < 0) {
          timeLeft.m = 59;
          --timeLeft.h;
          if (timeLeft.d >= 0 && timeLeft.h < 0) {
            timeLeft.h = 23;
            --timeLeft.d;
          }
        }
      }
    }
    --totalSeconds;
    printTime();
  }

  function printTime() {
    animateFlip(days, timeLeft.d);
    animateFlip(hours, timeLeft.h);
    animateFlip(minutes, timeLeft.m);
    animateFlip(seconds, timeLeft.s);
  }

  function animateFlip(element, value) {
    const valueInDom = element.querySelector(".bottom-back").innerText;
    const currentValue = value < 10 ? "0" + value : "" + value;

    if (valueInDom === currentValue) return;

    element.querySelector(".top-back span").innerText = currentValue;
    element.querySelector(".bottom-back span").innerText = currentValue;

    gsap.to(element.querySelector(".top"), 0.7, {
      rotationX: "-180deg",
      transformPerspective: 300,
      ease: Quart.easeOut,
      onComplete: function () {
        element.querySelector(".top").innerText = currentValue;
        element.querySelector(".bottom").innerText = currentValue;
        gsap.set(element.querySelector(".top"), { rotationX: 0 });
      },
    });

    gsap.to(element.querySelector(".top-back"), 0.7, {
      rotationX: 0,
      transformPerspective: 300,
      ease: Quart.easeOut,
      clearProps: "all",
    });
  }

  function setTimeLeft() {
    timeLeft.d = Math.floor(totalSeconds / (60 * 60 * 24));
    timeLeft.h = Math.floor((totalSeconds / (60 * 60)) % 24);
    timeLeft.m = Math.floor((totalSeconds / 60) % 60);
    timeLeft.s = Math.floor(totalSeconds % 60);
  }

  init();
});

const image_preview = document.querySelector(".image-preview");
const images = document.querySelectorAll(".images");
const image_preview_img = document.querySelector(".image-preview-img");
const left = image_preview.querySelector(".left");
const right = image_preview.querySelector(".right");

let active;
images.forEach((item, index) => {
  item.addEventListener("click", (e) => {
    image_preview.classList.add("active");
    active = index;
    viewImage();
  });
});

function viewImage() {
  image_preview_img.src = images[active].src;
}

image_preview.addEventListener("click", () => {
  image_preview.classList.remove("active");
});

right.addEventListener("click", (e) => {
  e.stopPropagation();
  if (active === images.length - 1) {
    active = 0;
  } else {
    active++;
  }
  viewImage();
});
left.addEventListener("click", (e) => {
  e.stopPropagation();
  if (0 === active) {
    active = 2;
  } else {
    active--;
  }
  viewImage();
});
