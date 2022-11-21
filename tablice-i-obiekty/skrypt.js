document.addEventListener('DOMContentLoaded', (event) => {
    calculateZad1();
    calculateZad2();
    calculateZad3();
});


const calculateZad1 = () => {
    const words = '18>2>2>14>1>18>3>2>6>6>15>11>16>13>9>10>1>17>15>14'
    const stringArray = words.split('>')
    console.log(stringArray)
    console.log('Min:' + Math.min(...stringArray))
    console.log('Max:' + Math.max(...stringArray))
    const numberArray = stringArray.map(element => Number(element))
    let sum = numberArray.reduce((a, b) => a + b, 0)
    console.log('Suma:' + sum)
    const average = sum / numberArray.length
    console.log('Średnia:' + average)
    console.log('Parzyste:' + numberArray.filter(element => element%2 === 0))
    console.log('Nieparzyste:' + numberArray.filter(element => element%2 != 0))
    console.log('Index 17-stki:' + numberArray.indexOf(17))
    if (numberArray.includes(average)) {
        console.log('Tablica zawiera średnią')
    } else {
        console.log('Tablica nie zawiera średniej')
    }
    function compareNumbers(a, b) {
        return a - b;
      }
    console.log('Posortowana rosnąco tabela:' + numberArray.sort(compareNumbers))
    
    let uniqueArray = [1]
    numberArray.reduce((previousValue, currentValue) => {
            if (uniqueArray.includes(currentValue)) {
                console.log("juz ma")
            } else {
                uniqueArray.push(currentValue);
            }

        })
    // uniqueArray = numberArray.reduce(stage => {
    //     if (uniqueArray.includes(stage)) {
    //         return 0
    //     }
    //       uniqueArray.push(stage)
 
    // })
    console.log(uniqueArray)


}

const calculateZad2 = () => {

}

const calculateZad3 = () => {

}