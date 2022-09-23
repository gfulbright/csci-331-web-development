const body = document.querySelector("body")

function toggleBackground() {
    body.classList.toggle("differentColor")
}

function callAlert(m) {
    if (m) {
        alert(m)
    }
    else {
        alert("Thanks for calling")

    }
}

for (let i=0; i<10; i++) {
    setTimeout(toggleBackground, 100 * i)
}


// setTimeout(callAlert, 1000)
// setTimeout(() => {callAlert("Watch it, buddy.")}, 3000)

const myspan = document.createElement("span")
// body.append(myspan)
body.insertBefore(myspan, document.querySelector("script"))
myspan.innerText = 0
myspan.style.fontSize="5em"

let count = 0

const countup = () => {
    myspan.innerText = count++
}

setInterval(countup, 500)


// AJAX: Axync Javascript And SML (or JSON)
function getUser() {
    let xhr = new XMLHttpRequest
    xhr.open("GET", "https://randomuser.me/api")
    xhr.send()
    xhr.addEventListener("load", ()=>{
        let userData = JSON.parse(xhr.response)
        apiData = document.getElementById("apiData")
        apiData.innerHTML = `<p> ${userData.results[0].gender} </p>`
    })
}

myBtn = document.getElementById("myBtn")
myBtn.addEventListener("click", getUser)