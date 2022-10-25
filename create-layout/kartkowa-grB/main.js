document.addEventListener('DOMContentLoaded', (event) => {
   renderLayout();
});


const renderLayout = () => {
    const header = document.createElement("header")
    const content = document.createElement("div")
    const footer = document.createElement("footer")
    const leftSidebar = document.createElement("div")
    const mainContent = document.createElement("div")
    const leftFooter = document.createElement("div")
    const rightFooter = document.createElement("div")

    content.id = "content"
    leftSidebar.id = "left-sidebar"
    mainContent.id = "main-content"
    leftFooter.id = "left-footer"
    rightFooter.id = "right-footer"

    header.style.backgroundColor = "green"
    leftSidebar.style.backgroundColor = "red"
    mainContent.style.backgroundColor = "yellow"
    leftFooter.style.backgroundColor = "pink"
    rightFooter.style.backgroundColor = "brown"

    const button = document.createElement("button")
    button.onclick = handleClick
    const buttonText = document.createTextNode("Wyloguj")
    button.appendChild(buttonText)
    leftFooter.appendChild(button)

    content.appendChild(leftSidebar)
    content.appendChild(mainContent)

    footer.appendChild(leftFooter)
    footer.appendChild(rightFooter)

    document.body.appendChild(header)
    document.body.appendChild(content)
    document.body.appendChild(footer)

}

const handleClick = () => {
    alert('Przycisk działa')
}