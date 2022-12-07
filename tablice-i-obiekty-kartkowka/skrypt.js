document.addEventListener('DOMContentLoaded', (event) => {
    calculate();
});

const calculate = () => {
    const arrayString = '17^1^13^18^17^1^7^7^10^13^4^10^14^3^19^11^11^13^0^9^11^3^15^10^13^4^2^12^19^13^1^0^3^18^3^18^13^7^0^6^2^10^14^17^19^17^10^4^19^7'// reduce z mnożeniem wyświetla 0 bo isnieje w tabeli liczba 0 
    const testArray = [1, 2, 3, 4]// reduce z mnożeniem wyświetla dla tej tablicy wartość 24
    const Array = arrayString.split('^')
    console.log(Array)

    const lowestNumber = Math.min(...Array).toString()
    console.log(Array.indexOf(lowestNumber))

    const multiply = (Array.reduce((prev, curr) => {
        result = prev * curr
        return result
    }, 1))
    console.log('Mnożenie dla oryginalnej tabeli: ' + multiply)
    const multiply2 = (testArray.reduce((prev, curr) => {
        result = prev * curr
        return result
    }, 1))
    console.log('Mnożenie dla testowej tabeli: ' + multiply2)

    console.log(Array.filter(elem => elem%3 == 0))

    const NewArray = Array.reduce((a,b) => {
        if (a.includes(b)) {
            return a
        } else {
            return [...a, b]
        }
    }, [])
    console.log(NewArray)

    const SplicedArray = Array.slice(5, 15)
    console.log(SplicedArray)

    console.log(Array.join("#"))
}