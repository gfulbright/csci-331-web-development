function getSummation(start, upto) {
    // TODO...
    // add numbers 1 to "upto"

    let summation = 0
    for (let i=start; i<=upto; i++) {
        summation += i
    }
    return summation
}

console.log(getSummation(100))

function clearInputs(a, b) {
    console.log("clearing values", a, "&", b)
    const num1 = document.getElementById('num1')
    const num2 = document.getElementById('num2')
    num1.value = ''
    num2.value = ''
    return "[ ### ]"
}