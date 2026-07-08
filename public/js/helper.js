function clearFields() {
    $(".input:not([type='hidden']):not([readonly])").val("");
}

(function () {
    // Máscara de CNPJ via jQuery Mask (Item 4).
    // Guardas de null: este arquivo também é carregado em páginas sem #cnpj/#external_id.
    var cnpj = document.getElementById("cnpj");
    if (cnpj && window.jQuery && typeof jQuery.fn.mask === "function") {
        jQuery(cnpj).mask("00.000.000/0000-00");
    }

    var external_id = document.getElementById("external_id");
    if (external_id) {
        external_id.addEventListener("input", function (event) {
            event.target.value = event.target.value.replace(/[^0-9]/g, '');
        });
    }
})();
