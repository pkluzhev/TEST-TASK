document.addEventListener("DOMContentLoaded", () => {
    const mainForm = document.getElementById('main-form')
    const name = document.getElementById('name')
    const phone = document.getElementById('phone')
    const email = document.getElementById('email')
    const textarea = document.getElementById('textarea')
    const emptyNameMessage = document.getElementById('empty-name-message')
    const emptyPhoneMessage = document.getElementById('empty-phone-message')
    const emptyEmailMessage = document.getElementById('empty-email-message')
    const incorrectEmailMessage = document.getElementById('incorrect-email-message')
    const emptyTextareaMessage = document.getElementById('empty-textarea-message')
    const existedEmailMessage = document.getElementById('existed-email-message')
    const successMessage = document.getElementById('success-message')

    const subscribeForm = document.getElementById('subscribe-form')
    const subscribeEmail = document.getElementById('subscribe-email')
    const emptySubscribeEmailMessage = document.getElementById('empty-subscribe-email-message')
    const incorrectSubscribeEmailMessage = document.getElementById('incorrect-subscribe-email-message')
    const existedSubscribeEmailMessage = document.getElementById('existed-subscribe-email-message')
    const successSubscribeMessage = document.getElementById('success-subscribe-message')

    const burger = document.getElementById('burger')
    const menu = document.getElementById('menu')

    const ppCtaButton = document.getElementById('pp-cta-button')
    const benefitsCtaButton = document.getElementById('benefits-cta-button')
    const jumpCtaButton = document.getElementById('jump-cta-button')
    const manageCtaButton = document.getElementById('manage-cta-button')

    let mainFormData = {
        form: 'full',
        name: '',
        phone: '',
        email: '',
        text: ''
    }

    let subscribeFormData = {
        form: 'subscribe',
        email: ''
    }

    function initializeForms() {
        name.classList.remove('form-field__input_alert')
        phone.classList.remove('form-field__input_alert')
        email.classList.remove('form-field__input_alert')
        textarea.classList.remove('form-field__input_alert')

        emptyNameMessage.classList.remove('alert-message_active')
        emptyPhoneMessage.classList.remove('alert-message_active')
        emptyEmailMessage.classList.remove('alert-message_active')
        incorrectEmailMessage.classList.remove('alert-message_active')
        emptyTextareaMessage.classList.remove('alert-message_active')

        existedEmailMessage.classList.remove('alert-message_active')
        successMessage.classList.remove('success-message_active')

        incorrectSubscribeEmailMessage.classList.remove('alert-subscribe-message_active')
        emptySubscribeEmailMessage.classList.remove('alert-subscribe-message_active')
        subscribeEmail.classList.remove('subscribe-form-field__input_alert')

        existedSubscribeEmailMessage.classList.remove('alert-subscribe-message_active')
        successSubscribeMessage.classList.remove('success-subscribe-message_active')
    }

    function isDataCorrect(field) {
        const emailFormat = /\w+[@]{1}\w+[.]{1}[a-zA-Z]+/

        let correct = true

        switch (field) {
            case email:
                if (!emailFormat.test(field.value)) {
                    incorrectEmailMessage.classList.add('alert-message_active')
                    email.classList.add('form-field__input_alert')
                    correct = false
                }
                break
        }
        return correct
    }

    function checkMainFormField(field) {
        let correct = true

        if (field.value === '') {
            field.classList.add('form-field__input_alert')
            switch (field) {
                case name:
                    emptyNameMessage.classList.add('alert-message_active')
                    name.classList.add('form-field__input_alert')
                    break
                case phone:
                    emptyPhoneMessage.classList.add('alert-message_active')
                    phone.classList.add('form-field__input_alert')
                    break
                case email:
                    emptyEmailMessage.classList.add('alert-message_active')
                    email.classList.add('form-field__input_alert')
                    break
                case textarea:
                    emptyTextareaMessage.classList.add('alert-message_active')
                    textarea.classList.add('form-field__input_alert')
                    break
            }
            correct = false
        } else if (!isDataCorrect(field)) {
            correct = false
        }
        return correct
    }

    function checkMainForm() {
        let correctName = true, correctPhone = true, correctEmail = true, correctText = true

        correctName = checkMainFormField(name)
        correctPhone = checkMainFormField(phone)
        correctEmail = checkMainFormField(email)
        correctText = checkMainFormField(textarea)
        return correctName && correctPhone && correctEmail && correctText
    }

    function checkSubscribeForm(value) {
        const emailFormat = /\w+[@]{1}\w+[.]{1}[a-zA-Z]+/
        let correct = true

        if (value !== '') {
            if (!emailFormat.test(value)) {
                incorrectSubscribeEmailMessage.classList.add('alert-subscribe-message_active')
                subscribeEmail.classList.add('subscribe-form-field__input_alert')
                correct = false
            }
        } else {
            emptySubscribeEmailMessage.classList.add('alert-subscribe-message_active')
            subscribeEmail.classList.add('subscribe-form-field__input_alert')
            correct = false
        }
        return correct
    }

    function sendMainForm() {
        mainFormData.name = name.value
        mainFormData.phone = phone.value
        mainFormData.email = email.value
        mainFormData.text = textarea.value
        postMainFormJSON(mainFormData)
    }

    function sendSubscribeForm() {
        subscribeFormData.email = subscribeEmail.value
        postSubscribeFormJSON(subscribeFormData)
    }

    async function postMainFormJSON(data) {
        try {
            const response = await fetch("../api/FormHandler.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            })
            const result = await response.text()
            if (result !== 'existed-email') {
                successMessage.classList.add('success-message_active')
            } else {
                existedEmailMessage.classList.add('alert-message_active')
            }

        } catch (error) {
            console.error("Error:", error)
        }
    }

    async function postSubscribeFormJSON(data) {
        try {
            const response = await fetch("../api/FormHandler.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            })
            const result = await response.text()
            if (result !== 'existed-subscribe-email') {
                successSubscribeMessage.classList.add('success-subscribe-message_active')
            } else {
                existedSubscribeEmailMessage.classList.add('alert-subscribe-message_active')
            }
        } catch (error) {
            console.error("Error:", error)
        }
    }

    function handleMainForm(event) {
        event.preventDefault()
        initializeForms()
        if (checkMainForm()) {
            sendMainForm()
        }
    }

    function handleSubscribeForm(event) {
        event.preventDefault()
        initializeForms()
        if (checkSubscribeForm(subscribeEmail.value)) {
            sendSubscribeForm()
        }
    }

    mainForm.addEventListener('submit', handleMainForm)
    subscribeForm.addEventListener('submit', handleSubscribeForm)

    burger.addEventListener('click', () => {
        burger.classList.toggle('burger_active');
        menu.classList.toggle('header-block__menu_active');
    })

    window.addEventListener("resize", () => {
        burger.classList.remove('burger_active');
        menu.classList.remove('header-block__menu_active');
    })

    ppCtaButton.addEventListener('click', () => {
        mainForm.scrollIntoView()
    })

    benefitsCtaButton.addEventListener('click', () => {
        mainForm.scrollIntoView()
    })

    jumpCtaButton.addEventListener('click', () => {
        mainForm.scrollIntoView()
    })

    manageCtaButton.addEventListener('click', () => {
        mainForm.scrollIntoView()
    })
})