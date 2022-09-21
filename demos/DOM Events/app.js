const myBtn = document.getElementById("myBtn")
myBtn.origData = myBtn.innerText

function toggleColor() {
    let isToggled = this.classList.toggle("altColor")
    console.log(isToggled)

    this.innerText = (isToggled ? "Check it out! I'm GREEN!" : this.origData)
}

// toggleColor()
myBtn.addEventListener("click",toggleColor)

// const p = document.querySelector("p")
// p.addEventListener("click",toggleColor)

const pArray = document.querySelectorAll("p")
pArray.forEach((el)=>{
    el.origData = el.innerText
    el.addEventListener("click", toggleColor)
})

// Change text to "Hey check it out; I'm green!"
// 6.9.3