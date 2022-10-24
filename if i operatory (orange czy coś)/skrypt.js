
const calculate = () => {
    const firstNumber = Number(prompt("Podaj pierwszą liczbę"))
    const secondNumber = Number(prompt("Podaj drugą liczbę"))
    
    const firstNumberType = isNaN(firstNumber)
    //Number(firstNumber)
    console.log(firstNumber)
    //console.log(typeof firstNumber)
    if (firstNumberType) {
        alert("NaN")
    } else {
        alert("Number")
    }
    
}