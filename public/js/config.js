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
