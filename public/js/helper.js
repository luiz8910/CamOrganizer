function clearFields() {
    $(".input:not([type='hidden']):not([readonly])").val("");
}

let cnpj = document.getElementById("cnpj");

cnpj.addEventListener("input", function (event) {

    let inputValue = event.target.value;

    // Sanitize by allowing only numbers and the dot
    let sanitizedValue = inputValue.replace(/[^0-9-/.]/g, '');

    if (sanitizedValue.length > 18) {
        sanitizedValue = sanitizedValue.substring(0, 18);
    }

    if(event.inputType !== "deleteContentBackward"){
        if (sanitizedValue.length > 2 && sanitizedValue[2] !== '.') {
            sanitizedValue = sanitizedValue.substring(0, 2) + '.' + sanitizedValue.substring(2);
        }
        else if (sanitizedValue.length === 6 && sanitizedValue[6] !== '.'){
            sanitizedValue = sanitizedValue.substring(0, 6) + '.' + sanitizedValue.substring(6);
        }
        else if (sanitizedValue.length === 10 && sanitizedValue[10] !== '.'){
            sanitizedValue = sanitizedValue.substring(0, 10) + '/0001-' + sanitizedValue.substring(10);
        }
    }

    // Update the input field value
    event.target.value = sanitizedValue;
});

let external_id = document.getElementById("external_id");

external_id.addEventListener("input", function (event) {
    let inputValue = event.target.value;

    event.target.value = inputValue.replace(/[^0-9]/g, '');
});

