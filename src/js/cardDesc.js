

let projectBtn = document.querySelectorAll(".projectLink")
let projectDesc = document.querySelectorAll(".projectDesc")
let projectImg = document.querySelectorAll(".projectImg")


for (let pb = 0; pb < projectBtn.length; pb++){
    projectBtn[pb].onclick = function(){
        if(projectDesc[pb].id != "shown"){
            projectBtn[pb].style.display = "grid"
            if (projectBtn[pb].id != "left"){
                // projectImg[pb].style.transform = "translateX(110px)"
                // projectImg[pb].style.marginTop = "-100px"
                setTimeout(() => {
                }, 130);
                projectImg[pb].id = "imgRight"
                projectDesc[pb].id = "shown"
                projectDesc[pb].classList.remove("hidden")
                projectDesc[pb].classList.add('hovered')
                // projectImg[pb].style.marginTop = "-250px"
                // projectImg[pb].style.left = "-260px"
            } else if (projectBtn[pb].id != "right"){
                projectImg[pb].id = "imgLeft"
                projectDesc[pb].id = "shown"
                setTimeout(() => {
                    projectDesc[pb].classList.remove("hidden")
                    projectDesc[pb].classList.add('hovered')
                }, 130);
            }
        } else if (projectDesc[pb].id = "shown"){
            if (projectBtn[pb].id != "left"){
                projectImg[pb].id = ""
                // projectImg[pb].style.transform = "translateX(0px)"
                // projectImg[pb].style.marginTop = "0px"
                // setTimeout(() => {
                //     projectImg[pb].style.transform = "translateX(0px)"
                // }, 420);
            } else if (projectBtn[pb].id != "right"){
                projectImg[pb].id = ""
            }
            projectBtn[pb].style.display = "flex"
            projectDesc[pb].id = ""
            projectDesc[pb].classList.remove('hovered')
            projectDesc[pb].classList.add("hidden")
        } 
    }
}


