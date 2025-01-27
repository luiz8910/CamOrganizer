$(function () {
    $(".delete-model").click(function () {
        $("#modal-delete").css("display", "block");

        let path = window.location.pathname;
        let id = this.id;

        id = id.replace("delete-button-", "");

        let modelName = $("#model-name-" + id).text();

        let title = "Atenção";
        let text = "Deseja mesmo excluir <strong>" + modelName + "</strong>?";

        $("#modal-delete-title").text(title);
        $("#modal-delete-paragraph").html(text);

        setModelDelete(path, id);
    });

    $("#hideModal").click(function () {
        $("#modal-delete").css("display", "none");
    });

    $("#cnpj").change(function () {
        verifyCnpj(this.value);
    });

    $("#external_id").change(function () {
        verifyExternalId(this.value);
    });
});

function deleteModel() {
    $("#modal-delete").css("display", "none");

    let model = getModelDelete();

    $.ajax({
        url: model.model + "/" + model.id,
        method: "DELETE",
        success: function (response) {
            console.log("Client deleted successfully:", response);

            window.location.reload();
        },
        error: function (xhr, status, error) {
            console.error("Failed to delete client:", xhr.responseText);
            alert("An error occurred while deleting the client.");
        },
    });
}

function verifyCnpj(cnpj) {

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'customers/verify-cnpj/',
        data: {
            cnpj: cnpj
        },
        method: "POST",
        success: function (response) {
            if(response.exists){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "CNPJ já cadastrado!",
                });

                $("#cnpj").val("");
            }
        },
        error: function (xhr, status, error) {
            console.error("Failed to verify CNPJ:", xhr.responseText);
            alert("An error occurred while verifying the CNPJ.");
        },
    })
}

function verifyExternalId($externalId){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'customers/verify-external-id/',
        data:{
            external_id: $externalId
        },
        method: "POST",
        success: function (response) {
            if(response.exists){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "ID Bling já cadastrado!",
                });

                $("#external_id").val("");
            }
        },
        error: function (xhr, status, error) {
            console.error("Failed to verify External ID:", xhr.responseText);
            console.error("Failed to verify External ID:", status);
            console.error("Failed to verify External ID:", error);
            alert("An error occurred while verifying the External ID.");
        },
    })
}

$("#additional_fields_check").change(function () {
    $("#additional_fields_check").is(":checked")
        ? showAdditionalFields("additional_fields")
        : hideAdditionalFields("additional_fields");
});

function showAdditionalFields(div){
    $("#" + div)
        .removeClass("hidden");
}

function hideAdditionalFields(div){
    $("#" + div)
        .addClass("hidden");
}
