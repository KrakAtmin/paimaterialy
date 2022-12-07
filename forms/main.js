document.addEventListener('DOMContentLoaded', ()=>{
    document.getElementById('form').addEventListener('submit', onSubmit)

})
const onSubmit = (event)=>{
    event.preventDefault()
    console.log(event)

    const form = event.target
    
    const firstName = form.firstName.value
    const lastName = form.lastName.value
    const favouriteLanguage = form.favouriteLanguage.value
    const isAdult = form.isAdult.checked
    const schoolClass = form.class.value

    if (firstName == "") alert("Ej bo nie podałeś imienia gościu")
    if (lastName == "") alert("Nazwiska też nie podałeś")
    if (favouriteLanguage == "") alert("Język ci odjęło?")
    if (isAdult == false) alert("Oj kolego, ten teren tylko dla wydoroślałych")
    if (schoolClass == "3infA") {
        alert("Witamy w rodzinie")
    }else{
        alert("Do zobaczenia w piekle")
    }

    const paragraf = document.createElement("p")
    document.body.appendChild(paragraf)
    const firstNameHTML = document.createTextNode("firstName: " + firstName)
    paragraf.appendChild(firstNameHTML)
}

