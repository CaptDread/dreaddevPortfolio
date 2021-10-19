"use strict";

// Logo Button Animations
var logo = document.querySelector('.dreadlogo');
var logoLink = document.querySelector(".logoLink");
logoLink.addEventListener("mouseover", function () {
  logo.src = 'dist/img/logoClose.png';
});
logoLink.addEventListener("mouseout", function () {
  logo.src = 'dist/img/logoOpen.png';
}); // Burger Button

var burgBtn = document.querySelector(".burg_btn");
var burgMenu = document.querySelector(".home_head nav");
var headBar = document.querySelector(".home_head");
burgBtn.addEventListener("click", function (e) {
  e.preventDefault();

  if (burgBtn.id != "open") {
    burgBtn.id = "open";
    burgMenu.id = "active";
    var activeMenu = document.getElementById("active");
    var activeUl = document.querySelector("#active ul");
    setTimeout(function () {
      activeMenu.style.opacity = "100%";
      setTimeout(function () {
        headBar.id = "fixed";
        activeUl.style.transform = "translateX(0%)";
      }, 420);
    }, 420);
  } else if (burgBtn.id != "closed") {
    var _activeMenu = document.getElementById("active");

    var _activeUl = document.querySelector("#active ul");

    _activeUl.style.transform = "translateX(-100%)";
    headBar.id = "unfixed";
    setTimeout(function () {
      _activeMenu.style.opacity = "0%";
      setTimeout(function () {
        burgBtn.id = "closed";
        burgMenu.id = "inactive";
      }, 130);
    }, 420);
  }
}); // wallpaper fade

var papeVidFade = document.querySelector(".video_foreground");
var media = document.getElementById("videoBG");
setInterval(function () {
  var currentTime = media.currentTime;

  if (currentTime > 34) {
    papeVidFade.style.opacity = "100%";
  }

  if (currentTime < 2) {
    papeVidFade.style.opacity = "42%";
  }
}, 1);
//# sourceMappingURL=main.js.map
