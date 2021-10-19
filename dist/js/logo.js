"use strict";

// This file is specificly meant to control the Logo animations
var logo = document.querySelector('.dreadlogo');
var logoLink = document.querySelector(".logoLink");
logoLink.addEventListener("mouseover", function () {
  logo.src = 'dist/img/logoClose.png';
});
logoLink.addEventListener("mouseout", function () {
  logo.src = 'dist/img/logoOpen.png';
});
//# sourceMappingURL=logo.js.map
