const deleteForms = document.querySelectorAll('form.form-deleter');

deleteForms.forEach((formElement) => {
    formElement.addEventListener('submit', function (event) {
        event.preventDefault();
        const formElementName = formElement.getAttribute('data-element-name');
        const confirmPopUp = window.confirm(`Do you really want to delete ${formElementName}? Click 'OK' to confirm.`);
        if (confirmPopUp) this.submit();
    })
});