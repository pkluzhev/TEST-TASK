document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById('form')
    const email = document.getElementById('email')
    const emptyEmailMessage = document.getElementById('empty-email-message')
    const incorrectEmailMessage = document.getElementById('incorrect-email-message')
    const notFoundMessage = document.getElementById('not-found-message')

    const table = document.getElementById('table')

    let formData = {
        email: ''
    }

    function initializePage() {
        notFoundMessage.classList.remove('alert_active')
        incorrectEmailMessage.classList.remove('alert_active')
        emptyEmailMessage.classList.remove('alert_active')
        table.innerHTML = ''
    }

    function isDataCorrect(field) {
        const emailFormat = /\w+[@]{1}\w+[.]{1}[a-zA-Z]+/

        let correct = true

        if (field.value !== '') {
            if (!emailFormat.test(field.value)) {
                incorrectEmailMessage.classList.add('alert_active')
                correct = false
            }
        } else {
            emptyEmailMessage.classList.add('alert_active')
            correct = false
        }
        
        return correct
    }

    function createRow(arrayElement) {
        const divRow = document.createElement('div');
        divRow.className = 'table__row';
        table.appendChild(divRow);

        const divCellTitle = document.createElement('div');
        divCellTitle.className = 'table__cell';
        divRow.appendChild(divCellTitle);

        const titleText = document.createElement('p');
        titleText.className = 'table__title';
        titleText.innerText = arrayElement[0]
        divCellTitle.appendChild(titleText);

        const divCellContent = document.createElement('div');
        divCellContent.className = 'table__cell';
        divCellContent.classList.add('table__cell_content');
        divRow.appendChild(divCellContent);

        const contentText = document.createElement('p');
        contentText.className = 'table__content';
        contentText.innerText = arrayElement[1]
        divCellContent.appendChild(contentText);
    }

    async function sendFormJSON(data) {
        try {
            const response = await fetch("../api/AdminInterface.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            })
            const result = await response.text()

            if (result !== 'not-found') {
                let responseData = Object.entries(JSON.parse(result))
                responseData.forEach((arrayElement) =>
                    createRow(arrayElement)
                )
            } else {
                notFoundMessage.classList.add('alert_active')
            }
        } catch (error) {
            console.error("Error:", error)
        }
    }

    function handleForm(event) {
        event.preventDefault()
        initializePage()
        if (isDataCorrect(email)) {
            formData.email = email.value
            sendFormJSON(formData)
        }
    }

    form.addEventListener('submit', handleForm)
})