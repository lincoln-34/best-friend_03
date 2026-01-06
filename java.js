window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");

  if (window.scrollY > 50) {
    navbar.classList.add("navbar-scrolled");
  } else {
    navbar.classList.remove("navbar-scrolled");
  }
});
let startX = 0;

document.addEventListener("touchstart", function (e) {
  startX = e.touches[0].clientX;
});

document.addEventListener("touchend", function (e) {
  let endX = e.changedTouches[0].clientX;
  let diff = startX - endX;

  if (diff > 80) {
    // swipe kiri
    window.location.href = "temen2.html";
  } else if (diff < -80) {
    // swipe kanan
    window.location.href = "temen1.html";
  }
});
/* SWIPE KHUSUS HALAMAN TEMEN */
if (document.body.classList.contains("swipe-page")) {
  let startX = 0;

  document.addEventListener("touchstart", e => {
    startX = e.touches[0].clientX;
  });

  document.addEventListener("touchend", e => {
    let endX = e.changedTouches[0].clientX;
    let diff = startX - endX;

    if (diff > 80) {
      // swipe kiri
      window.location.href = "temen2.html";
    } else if (diff < -80) {
      // swipe kanan
      window.location.href = "temen1.html";
    }
  });
}
