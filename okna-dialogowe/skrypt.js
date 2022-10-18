
const showAlert = () => {
    alert("Alert działa")
}

const showPrompt = () => {
    const result = prompt("Podaj swoje imie")
    const loc = document.getElementById("name")
    const def = document.createTextNode(`Nazywasz się ${result}`)
    const result_t = document.createTextNode(result)
    console.log(def)
    loc.appendChild(def)
}

const showConfirm = () => {
    const result = confirm("Chodzisz do szkoły?!?!?!!?")
    console.log(result)
    let text
    if (result == true) {
        text = document.createTextNode("Chodzisz do szkoły ヽ(o＾▽＾o)ノ")
    } else {
        text = document.createTextNode("Nie chodzisz do szkoły (ಥ﹏ಥ)")
    }
    const loc = document.getElementById("areYouStudent")
    console.log(result.toString())
    loc.appendChild(text)
}