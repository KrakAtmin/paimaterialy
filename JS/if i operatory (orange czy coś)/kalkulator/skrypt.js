
const calculate = () => {
    const firstNumber = Number(prompt("Podaj pierwszą liczbę"))
    const secondNumber = Number(prompt("Podaj drugą liczbę"))
    const operator = String(prompt("Podaj operator działania")) 
    const operatorArray = ['+', '-', '*', '/', '%', '**']


    const operations = {
        '+': (a,b)=>a+b,
        '-': (a,b)=>a-b,
        '*': (a,b)=>a*b,
        '/': (a,b)=>a/b,
        '%': (a,b)=>a%b,
        '**': (a,b)=>a**b,
    }

    
    const wynik = operations[operator](firstNumber, secondNumber);
    const start = performance.now()
    if (String(firstNumber) != "NaN" || String(secondNumber) != "NaN") {
        if (operatorArray.includes(operator)) {
            const end = performance.now()
            console.log(`Performance: ${end - start} ms`)
            alert(`Wynik to: ${wynik}`)
        }
    }







    //    let result
    //    if (String(firstNumber) != "NaN") {
    //        if (String(secondNumber) != "NaN") {   
    //            if (operatorArray.includes(operator)) {
    //             if (operator == "+") {
    //                 result = firstNumber + secondNumber
    //             } else if (operator == "-") {
    //                 result = firstNumber - secondNumber
    //             } else if (operator == "*") {
    //                 result = firstNumber * secondNumber
    //             } else if (operator == "/") {
    //                 if (secondNumber == 0) {
    //                     alert("Nie dziel cholero przez 0")
    //                 } else {
    //                     result = firstNumber / secondNumber
    //                 }
    //             } else if (operator == "%") {
    //                 if (firstNumber < secondNumber){
    //                     alert("Druga liczba musi być mniejsza")
    //                 } else {
    //                     result = firstNumber % secondNumber
    //                 }
    //             } else if (operator == "**") {
    //                 result = firstNumber ** secondNumber
    //             }
    //             const end = performance.now()
    //             console.log(`Performance: ${end - start} ms`)
    //               alert(`Wynik: ${result}`)
    //          } else {
    //              alert("Dozwolone operatory: +, -, *, /, %, **")
    //          }
    //      } else {
    //          alert("Podaj liczbę, a nie tekst")
    //      }
    //  } else {
    //      alert("Podaj liczbę, a nie tekst")
    //  }
}