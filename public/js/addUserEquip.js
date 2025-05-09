function getUsersData() {
    let id = $("#user_id").val();

    // Se for novo usuário (sem ID), gera UUID
    if (!id) {
        id = generateUUID();
    }

    let data = {
        id: id,
        username: $("#username").val(),
        password: $("#password").val(),
        group: $("#usergroup").val()
    };

    addUserEquip(data);
    setHiddenFields(data);
    clearFields();
}

function addUserEquip(data) {

    let append = `
        <tr data-id="${data.id}">
            <td class="text-gray-800 font-normal">${data.username}</td>
            <td>
                <div class="flex items-center text-gray-800 font-normal">
                    <span id="mask-pass-${data.id}">********</span>
                    <span id="show-pass-${data.id}" class="hidden"> ${data.password}</span>
                    <button type="button" onclick="setClipboard(document.getElementById('show-pass-${data.id}').textContent)"
                        class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active">
                        <i class="ki-filled ki-copy"></i>
                    </button>

                    <button type="button" id="userToAdd-${data.id}" onclick="maskUnmaskPassword('${data.id}')"
                        class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active">
                        <i class="ki-filled ki-eye"></i>
                        <i class="ki-filled ki-eye-slash hidden"></i>
                        <input type="hidden" id="hidden-${data.id}" value="hidden">
                    </button>

                </div>
            </td>
            <td class="text-gray-800 font-normal">${data.group}</td>
            <td>
                <div class="menu inline-flex" data-menu="true">
                    <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end"
                        data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                            <i class="ki-filled ki-dots-vertical"></i>
                        </button>
                        <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                            <div class="menu-item">
                                <button type="button" class="menu-link edit-user">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-pencil"></i>
                                    </span>
                                    <span class="menu-title">Editar</span>
                                </button>
                            </div>
                            <div class="menu-separator"></div>
                            <div class="menu-item">
                                <button type="button" class="menu-link remove-user">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-trash"></i>
                                    </span>
                                    <span class="menu-title">Remover</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    `;

    $("#users_devices tbody").append(append);
    $("#users_devices").removeClass("hidden");
}



function setHiddenFields(data) {
    // remove se já existe (edição)
    $(`input[name="access_equip[id][]"][value="${data.id}"]`).remove();
    $(`input[name="access_equip[username][]"][data-id="${data.id}"]`).remove();
    $(`input[name="access_equip[password][]"][data-id="${data.id}"]`).remove();
    $(`input[name="access_equip[group][]"][data-id="${data.id}"]`).remove();

    let append = `
        <input type="hidden" class="iterable-fields" name="access_equip[id][]" value="${data.id}">
        <input type="hidden" class="iterable-fields" name="access_equip[username][]" value="${data.username}" data-id="${data.id}">
        <input type="hidden" class="iterable-fields" name="access_equip[password][]" value="${data.password}" data-id="${data.id}">
        <input type="hidden" class="iterable-fields" name="access_equip[group][]" value="${data.group}" data-id="${data.id}">`;

    $("#users_devices_fields").append(append);

    localStorage.removeItem('edit-user');
}

function clearFields() {
    $(".input-user-add").val("");
}

function maskUnmaskPassword(id) {
    let safeId = CSS.escape("hidden-" + id); // Escapes special characters if present
    let hidden = $("#" + safeId).val() === "hidden" ? 1 : 0;

    if(hidden === 1){
        $("#mask-pass-" + id).addClass('hidden');
        $("#show-pass-" + id).removeClass('hidden');
        $("#hidden-" + id).val("visible");
        $("#userToAdd-" + id).find("i.ki-eye").addClass("hidden");
        $("#userToAdd-" + id).find("i.ki-eye-slash").removeClass("hidden");
    }
    else{
        $("#mask-pass-" + id).removeClass('hidden');
        $("#show-pass-" + id).addClass('hidden');
        $("#hidden-" + id).val("hidden");
        $("#userToAdd-" + id).find("i.ki-eye").removeClass("hidden");
        $("#userToAdd-" + id).find("i.ki-eye-slash").addClass("hidden");
    }
}
async function setClipboard(text) {
    const type = "text/plain";

    const blob = new Blob([text], { type: type });

    const clipboardItem = new ClipboardItem({
        [type]: blob
    });

    try {
        await navigator.clipboard.write([clipboardItem]);

        showToast("Senha copiada para a área de transferência!");
    } catch (err) {
        console.error("Error copying text: ", err);
    }
}

function generateUUID() {
    return ([1e7] + -1e3 + -4e3 + -8e3 + -1e11).replace(/[018]/g, c =>
        (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & (15 >> (c / 4))).toString(16)
    );
}



$(document).on("click", ".remove-user", function (e) {
    e.preventDefault();
    let str_user = $(this)[0].id;

    let id = str_user.replace("remove-user-", "");

    $(this).closest("tr").remove();

    if ($("#users_devices tbody tr").length === 0) {
        $("#users_devices").addClass("hidden");
    }

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/equipments/delete-user-access/" + id,
        type: "DELETE",
        success: function (data) {
            console.log(data);
            showToast("Usuário excluído!");
        },
        error: function (data) {
            console.log(data);
            showToast("Erro ao excluir usuário!");
        }
    });
});

$(document).on("click", ".edit-user", function () {
    let row = $(this).closest("tr");

    let usernameCell = row.find("td:eq(0)");
    let passwordCell = row.find("td:eq(1) span.hidden");
    let groupCell = row.find("td:eq(2)");

    let username = usernameCell.text().trim();
    let password = passwordCell.text().trim();
    let group = groupCell.text().trim();
    let id = row.find("span[id^='show-pass-']").attr("id").replace("show-pass-", "");

    localStorage.setItem("edit-user", id);

    // Replace text with input fields
    usernameCell.html(`<input type="text" class="input-edit-user" value="${username}">`);
    passwordCell.html(`<input type="text" class="input-edit-password" value="${password}">`);
    groupCell.html(`<input type="text" class="input-edit-group" value="${group}">`);

    // Change Edit button to Save
    $(this).replaceWith(`
        <button type="button" class="menu-link save-user">
            <span class="menu-icon"><i class="ki-filled ki-check"></i></span>
            <span class="menu-title">Salvar</span>
        </button>
    `);
});

$(document).on("click", ".save-user", function () {
    let row = $(this).closest("tr");
    let id = localStorage.getItem("edit-user");

    console.log("ID do usuário salvo:", id);

    let newUsername = row.find(".input-edit-user").val();
    let newPassword = row.find(".input-edit-password").val();
    let newGroup = row.find(".input-edit-group").val();

    // Update the row with new values
    row.find("td:eq(0)").html(newUsername);
    row.find("td:eq(1)").html(`
        <div class="flex items-center text-gray-800 font-normal">
            <span id="mask-pass-${newUsername}">********</span>
            <span id="show-pass-${newUsername}" class="hidden">${newPassword}</span>
            <button type="button" onclick="setClipboard('${newPassword}')" class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active">
                <i class="ki-filled ki-copy"></i>
            </button>
            <button type="button" onclick="maskUnmaskPassword('${newUsername}')" class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active">
                <i class="ki-filled ki-eye"></i>
                <i class="ki-filled ki-eye-slash hidden"></i>
                <input type="hidden" id="hidden-${newUsername}" value="hidden">
            </button>
        </div>
    `);
    row.find("td:eq(2)").html(newGroup);

    let userObj = {
        id: id,
        username: newUsername,
        password: newPassword,
        group: newGroup
    };

    setHiddenFields(userObj);

    // Change Save button back to Edit
    $(this).replaceWith(`
        <button type="button" class="menu-link edit-user">
            <span class="menu-icon"><i class="ki-filled ki-pencil"></i></span>
            <span class="menu-title">Editar</span>
        </button>
    `);
});

