function setModelDelete(model, id) {
    sessionStorage.removeItem("modelDelete");

    let obj = {
        model: model,
        id: id,
    };

    sessionStorage.setItem("modelDelete", JSON.stringify(obj));
}

function getModelDelete() {
    return JSON.parse(sessionStorage.getItem("modelDelete"));
}
