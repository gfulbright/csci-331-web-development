const body = document.querySelector("body")

function toggleBackground() {
    body.classList.toggle("differentColor")
}

function callAlert(m) {
    alert(m)
}

// setTimeout(toggleBackground, 2000)

for (let i=0; i<10; i++) {
    setTimeout(toggleBackground, 500 * i)
}

setTimeout(() => {callAlert("Watch it, buddy.")}, 3000)
