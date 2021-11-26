const openModalButtons = document.querySelectorAll('[data-form-target]')
const closeModalButtons = document.querySelectorAll('[data-colse-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const form = document.querySelector(button.dataset.formTarget)
        openModal(form)
    })
})

closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        // const form = button.closest('.form')
        const form =document.querySelector('#form')
        closeModal(form)
    })
})


overlay.addEventListener('click', () => {
        const modals = document.querySelectorAll('.form.active')
        modals.forEach(modal => {
        closeModal(modal)
    })
})

function openModal(form) {
    if (form == null) return
    form.classList.add('active')
    overlay.classList.add('active')
}

function closeModal(form) {
    if (form == null) return
    form.classList.remove('active')
    overlay.classList.remove('active')
}



