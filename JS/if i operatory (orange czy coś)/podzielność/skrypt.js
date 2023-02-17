
const calculate = () => {
    const firstNumber = Number(prompt("Podaj pierwszą liczbę"))
    
    //const firstNumberType = isNaN(firstNumber)
    //Number(firstNumber)
    //console.log(firstNumber)
    //console.log(typeof firstNumber)
    
    if (String(firstNumber) == "NaN") {
        alert("Musisz podać liczbę")
    } else {
        const secondNumber = Number(prompt("Podaj drugą liczbę"))
        if (String(secondNumber) == "NaN") {
            alert("Druga też musi być liczbą")
        } else {
            if (firstNumber < secondNumber) {
                alert("Druga liczba musi być mniejsza")
            } else {
                if (firstNumber % secondNumber === 0) {
                    alert(`Liczba ${firstNumber} jest podzielna przez ${secondNumber}`)
                } else {
                    alert(`Liczba ${firstNumber} nie jest podzielna przez ${secondNumber}`)
                }
            }
        }
    }
    
}