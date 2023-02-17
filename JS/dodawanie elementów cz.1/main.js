document.addEventListener('DOMContentLoaded', (event) => {
    addName();
    editText();
    addDate();
    addSimpleBlockWithText();
    addImageToDocument();
    addButtonWithAlert();
});


const addName = () => {
    const name = document.getElementById('name');
    const im = document.createTextNode('Dawid');
    name.appendChild(im);
}

const editText = () => {
    document.getElementsByClassName('editMe')[0].textContent = 'Chodzę do technikum';

}

const addDate = () => {
    const datest = document.getElementById('currentDate');
    const date = new Date();
    const datetxt = document.createTextNode(date);
    datest.appendChild(datetxt);
    console.log(date)
}

const addSimpleBlockWithText = () =>{
    const newP = document.createElement("p")
    const newPtext = document.createTextNode("Nowy blok tekstowy")
    newP.appendChild(newPtext)
    document.body.appendChild(newP)
}


const addImageToDocument = () =>{
    const img = document.createElement("img")
    img.src = "cat.webp"
    document.body.appendChild(img)
}

const handleClick = () => {
    alert('Udało się poprawnie podpiąć skrypt')
}

const addButtonWithAlert = () =>{
    const p = document.createElement("p")
    const przy = document.createElement("button")
    const cisk = document.createTextNode("Click ME!!!")
    przy.appendChild(cisk)
    p.appendChild(przy)
    document.body.appendChild(p)
    przy.onclick = handleClick
}