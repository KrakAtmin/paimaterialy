document.addEventListener('DOMContentLoaded', ()=>{
    document.getElementById('form').addEventListener('submit', onSubmit)
    const emailErrorField = document.getElementById('divEmail')
    const emailParagraph = document.createElement('div')
    emailErrorField.appendChild(emailParagraph)
    emailParagraph.id = 'emailp'

    const passwordErrorField = document.getElementById('divPass')
    const passwordParagraph = document.createElement('div')
    passwordErrorField.appendChild(passwordParagraph)
    passwordParagraph.id = 'passp'
})

const onSubmit = (event)=>{
    event.preventDefault()
    console.log(event)
    const re = /\d/
    const form = event.target
    let state = true
    
    const email = form.email.value
    const password = form.password.value
    console.log(password, password.length)
    console.log(email.includes("@gmail.com"))
    if (email.length < 11) {
        state = false
        const text = document.createTextNode("Email jest za krótki")
        const paragraf = document.createElement('p')
        paragraf.appendChild(text)
        const emailParagraph = document.getElementById("emailp")
        emailParagraph.appendChild(paragraf)
    }
    if (!email.includes("@gmail.com")) {
        state = false
        const text = document.createTextNode("Email musi się kończyć na @gmail.com")
        const paragraf = document.createElement('p')
        paragraf.appendChild(text)
        const emailParagraph = document.getElementById("emailp")
        emailParagraph.appendChild(paragraf)
    }
    
    if (password.length < 12) {
        state = false
        const text = document.createTextNode("Haslo jest za krótkie")
        const paragraf = document.createElement('p')
        paragraf.appendChild(text)
        const passwordParagraph = document.getElementById("passp")
        passwordParagraph.appendChild(paragraf)
    }

    if (re.exec(password) == null) {
        state = false
        const text = document.createTextNode("Haslo nie zawiera co najmniej 1 cyfry")
        const paragraf = document.createElement('p')
        paragraf.appendChild(text)
        const passwordParagraph = document.getElementById("passp")
        passwordParagraph.appendChild(paragraf)
    }


    switch (state) {
        case true:
            document.body.style.background = 'green'
            const form = document.getElementById('form')
            form.style.display = 'none'
            const imie = prompt("Jak się nazywasz? (imie do jasnej cholery)")
            alert(`Cześć ${imie}`)
            break

        case false:
            document.body.style.background = 'red'
            alert('Błędny formularz')
            break

    }




}

