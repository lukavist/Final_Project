const scroll_ele = document.querySelectorAll(".scroll_ele");

console.log(scroll_ele);

scroll_ele.forEach((element) => {
    element.style.opacity = 0; 
});

const showText = (ele) => {
    ele.classList.add("entered");
    ele.parentElement.classList.add("season_background")


}

const hideText = (ele) => {

    ele.parentElement.classList.remove("season_background")


}

scroll_ele.forEach((element) =>
    {
    element.addEventListener("mouseenter", () => {showText(element)});
    element.addEventListener("mouseleave", () => {hideText(element)}); 
    }
)



const eleInView = (el, percentScroll = 100) => {
    topEle = el.getBoundingClientRect().top;

    return (
        topEle <= ((window.innerHeight || document.documentElement.clientHeight) * (percentScroll / 100))
    )

}

const displayScrolled = (ele) => {
    ele.classList.add("scrolled");
    ele.style.opacity = 1;
}

const hideScrolled = (ele) => {
    ele.classList.remove("scrolled");
    ele.style.opacity = 0;
}

const checkAnimation = () => {
    scroll_ele.forEach((ele) => {
        if(eleInView(ele, 100)) {
            displayScrolled(ele); 
        }

        else {
            hideScrolled(ele); 
        }

    })
    
}

window.addEventListener("scroll", () => {
    checkAnimation();
});







for(let i = 0; i < scroll_ele.length; i++){
    scroll_ele[i].after()

}