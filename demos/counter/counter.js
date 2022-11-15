const count = document.getElementById("count")
const incBtn = document.getElementById("incBtn")

let countState = 0
function incCount () {
    countState++
    count.innerText = countState
}
incBtn.addEventListener ('click', incCount)