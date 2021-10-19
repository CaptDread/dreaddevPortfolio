// Logo Button Animations
let logo = document.querySelector('.dreadlogo')
let logoLink = document.querySelector(`.logoLink`)

logoLink.addEventListener(`mouseover`, function(){
    logo.src = 'dist/img/logoClose.png'
})

logoLink.addEventListener(`mouseout`, function(){
    logo.src = 'dist/img/logoOpen.png'
})


// Burger Button
let burgBtn = document.querySelector(".burg_btn")
let burgMenu = document.querySelector(".home_head nav")
let headBar = document.querySelector(".home_head")

burgBtn.addEventListener("click", function(e){
    e.preventDefault();
    if(burgBtn.id != "open"){
        burgBtn.id = "open"
        burgMenu.id = "active"
        let activeMenu = document.getElementById("active")
        let activeUl = document.querySelector("#active ul")
        setTimeout(() => {
            activeMenu.style.opacity = "100%"
            setTimeout(() => {
                headBar.id = "fixed"
                activeUl.style.transform = "translateX(0%)"
            }, 420);
        }, 420);
    } else if(burgBtn.id != "closed"){
        let activeMenu = document.getElementById("active")
        let activeUl = document.querySelector("#active ul")
        activeUl.style.transform = "translateX(-100%)"
        headBar.id = "unfixed"
        setTimeout(() => {
            activeMenu.style.opacity = "0%"
            setTimeout(() => {
                burgBtn.id = "closed"
                burgMenu.id = "inactive"
            }, 130);
        }, 420);
    }
})

// wallpaper fade


let papeVidFade = document.querySelector(".video_foreground")
let media = document.getElementById("videoBG")

setInterval(() => {
    let currentTime = media.currentTime

    if(currentTime > 34){
        papeVidFade.style.opacity = "100%"
    }
    if(currentTime < 2 ){
        papeVidFade.style.opacity = "42%"
    }
}, 1);
