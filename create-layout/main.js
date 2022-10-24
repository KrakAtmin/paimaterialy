document.addEventListener('DOMContentLoaded', (event) => {
   renderLayout();
});


const renderLayout = () => {
        const header = document.createElement('header');
        const content = document.createElement('div');
        const footer = document.createElement('footer');

        const leftSidebar = document.createElement('div');
        const mainContent = document.createElement('div');

        header.style.backgroundColor = 'red';
        footer.style.backgroundColor = 'blue';
        leftSidebar.style.backgroundColor = 'yellow';
        mainContent.style.backgroundColor = 'green';

        content.id = 'content';
        leftSidebar.id = 'left-sidebar';
        mainContent.id = 'main-content';

        document.body.appendChild(header);
        document.body.appendChild(content);
        document.body.appendChild(footer);

        content.appendChild(leftSidebar);
        content.appendChild(mainContent);

        const button = document.createElement('button')
        button.onclick = handleClick;
        mainContent.appendChild(button);
        button.append(document.createTextNode('Kliknij'))
}

const handleClick = () => {
    alert('Udało się poprawnie podpiąć funckję do skryptu')
}