document.addEventListener('DOMContentLoaded', ()=>{
    document.getElementById('form').addEventListener('submit', onSubmit)

})

const onSubmit = (event)=>{
    event.preventDefault()
    const form = event.target

    console.log(form)

    const email = form.email.value
    const money = form.money.value
    const tax = form.tax.value
    let state = true
    
    console.log(email, money, tax)

    if (!email.includes("@")) {
        state = false
        const emailError = document.createElement("div")
        const emailText = document.getElementById("email")
        const emailErrorText = document.createTextNode("Email nie zawiera @")
        emailText.after(emailError)
        emailError.appendChild(emailErrorText)
        
    }
    if (money <= 0) {
        state = false
        const moneyError = document.createElement("div")
        const moneyText = document.getElementById("money")
        const moneyErrorText = document.createTextNode("Kwota musi być większa od 0")
        moneyText.after(moneyError)
        moneyError.appendChild(moneyErrorText)
    }
    if (tax <= 0) {
        state = false
        const taxError = document.createElement("div")
        const taxText = document.getElementById("tax")
        const taxErrorText = document.createTextNode("Podatek musi być większy od 0")
        taxText.after(taxError)
        taxError.appendChild(taxErrorText)
    }

    if (state == true) {
        document.body.style.backgroundColor = "blue"
        alert(`${email} musisz zapłacić ${money * tax /100}zł`)
    } else {
        document.body.style.backgroundColor = "orange"
    }

    

}

