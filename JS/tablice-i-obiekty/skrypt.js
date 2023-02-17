document.addEventListener('DOMContentLoaded', (event) => {
    calculateZad1();
    calculateZad2();
    calculateZad3();
});


const calculateZad1 = () => {
    const words = '18>2>2>14>1>18>3>2>6>6>15>11>16>13>9>10>1>17>15>14'
    const stringArray = words.split('>')
    
    console.log(stringArray)
    
    console.log('Min: ' + Math.min(...stringArray))
    console.log('Max: ' + Math.max(...stringArray))
    
    const numberArray = stringArray.map(element => Number(element))
    
    let sum = numberArray.reduce((a, b) => a + b, 0)
    console.log('Suma: ' + sum)
    const average = sum / numberArray.length
    
    console.log('Średnia: ' + average)
    
    console.log('Parzyste: ' + numberArray.filter(element => element%2 === 0))
    
    console.log('Nieparzyste: ' + numberArray.filter(element => element%2 != 0))
    
    console.log('Index 17-stki: ' + numberArray.indexOf(17))
    
    if (numberArray.includes(average)) {
        console.log('Tablica zawiera średnią')
    } else {
        console.log('Tablica nie zawiera średniej')
    }

    function compareNumbers(a, b) {
        return a - b;
      }
    console.log('Posortowana rosnąco tabela: ' + numberArray.sort(compareNumbers))
    
    
    const uniqueArray = numberArray.reduce((previousValue, currentValue) => {
            if (previousValue.includes(currentValue)) {
                return previousValue;
            } else {
                return [...previousValue, currentValue]
            }},[])
    console.log("Tabela z unikalnych wartości: " + uniqueArray)
    
    const uniqueArray2 = uniqueArray.map(element => element ** 2)
    console.log("Unikalna tabela podniesiona do potęgi: " + uniqueArray2)

    const slicedArray = uniqueArray2.slice(5, 11)
    console.log("Tabela z indexami od 5 do 10: " + slicedArray)

    console.log('Zamiana na stringa: ' + slicedArray.join(">"))
}

const calculateZad2 = () => {
    const nameArray = ['PENDING', 'PRE-CHECKOUT', 'APPROVED', 'PACKED', 'DELIVERED']
    
    const status = nameArray.reduce((previousValue, currentValue) => {
        
        return {...previousValue ,[currentValue]: {value: currentValue, label: currentValue.toLowerCase()}}
    },{})
    
    console.log(status)
}

const calculateZad3 = () => {
    const school = {

        '1inf': [
      
          3, 4, 1, 2, 4, 2, 3,
      
          5, 4, 2, 5, 3, 5, 4,
      
          1, 3, 4, 1, 1, 3
      
        ],
      
        '1mech': [
      
          4, 3, 5, 3, 3, 5, 3,
      
          3, 2, 4, 1, 3, 1, 5,
      
          3, 1, 1, 1, 1, 5
      
        ],
      
        '1infA': [
      
          3, 1, 2, 2, 1, 4, 3,
      
          3, 2, 1, 1, 5, 4, 2,
      
          2, 1, 5, 1, 3, 5
      
        ],
      
        '2programistyczna': [
      
          4, 1, 5, 4, 5, 3, 4,
      
          1, 4, 2, 3, 1, 5, 3,
      
          3, 2, 3, 3, 5, 5
      
        ],
      
        '2mech': [
      
          2, 5, 5, 4, 5, 1, 1,
      
          3, 3, 5, 2, 3, 4, 5,
      
          3, 2, 5, 2, 5, 5
      
        ],
      
        '3infA': [
      
          3, 2, 1, 1, 5, 5, 2,
      
          1, 3, 3, 2, 5, 4, 5,
      
          5, 5, 4, 1, 2, 2
      
        ],
      
        '3infB': [
      
          1, 5, 3, 2, 4, 5, 3,
      
          5, 4, 1, 1, 3, 5, 2,
      
          1, 1, 2, 2, 1, 1
      
        ],
      
        '4eko': [
      
          4, 1, 3, 2, 2, 3, 3,
      
          4, 3, 4, 5, 1, 3, 4,
      
          1, 1, 4, 2, 1, 4
      
        ],
      
        '4programistyczna': [
      
          5, 5, 3, 1, 4, 4, 5,
      
          3, 2, 2, 4, 3, 3, 2,
      
          5, 5, 4, 1, 5, 3
      
        ]
      
      }

      console.log("Lista klas: " + Object.keys(school))

      const averageObject = Object.keys(school).reduce((previousValue, currentValue) => {
        let keyValue = school[currentValue]
        let sum = keyValue.reduce((a,b) => a+b, 0)
        let average = sum / keyValue.length
        
        return {...previousValue, [currentValue]: {value: average}}
      },{})

      console.log(averageObject)

      const averageSchool = Object.values(school).reduce((prev, curr) => {
        let sum = [...prev] + [...curr]
        return sum
      })
      // const averageSchool = Object.values(school).reduce((previousValue, currentValue) => {
      //   let keyValue = school[currentValue]
      //   let sum = previousValue + currentValue
      //   return sum;
      // }, 0)

      console.log(averageSchool) // dokończ to idioto
}