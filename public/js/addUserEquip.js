function getUsersData() {
    let data = {
        username: $("#username").val(),
        password: $("#password").val(),
        role: $("#usergroup").val(),
        uuid: generateUUID()
    };

    addUserEquip(data);
    setHiddenFields(data);
    clearFields();
}

function addUserEquip(data) {

    let append = `
        <tr>
            <td class="text-gray-800 font-normal">${data.username}</td>
            <td>
                <div class="flex items-center text-gray-800 font-normal">
                    <span id="mask-pass-${data.uuid}">********</span>
                    <span id="show-pass-${data.uuid}" class="hidden"> ${data.password}</span>
                    <button type="button" onclick="setClipboard(document.getElementById('show-pass-${data.uuid}').textContent)"
                        class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active">
                        <i class="ki-filled ki-copy"></i>
                    </button>

                    <button type="button" id="userToAdd-${data.uuid}" onclick="maskUnmaskPassword('${data.uuid}')"
                        class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active">
                        <i class="ki-filled ki-eye"></i>
                        <i class="ki-filled ki-eye-slash hidden"></i>
                        <input type="hidden" id="hidden-${data.uuid}" value="hidden">
                    </button>

                </div>
            </td>
            <td class="text-gray-800 font-normal">${data.role}</td>
            <td>
                <div class="menu inline-flex" data-menu="true">
                    <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end"
                        data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                            <i class="ki-filled ki-dots-vertical"></i>
                        </button>
                        <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                            <div class="menu-item">
                                <button type="button" class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-pencil"></i>
                                    </span>
                                    <span class="menu-title">Edit</span>
                                </button>
                            </div>
                            <div class="menu-separator"></div>
                            <div class="menu-item">
                                <button type="button" class="menu-link remove-user">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-trash"></i>
                                    </span>
                                    <span class="menu-title">Remove</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    `;

    $("#users_devices tbody").append(append);
}



function setHiddenFields(data) {
    let append = `
        <input type="hidden" class="iterable-fields" name="access_equip[username][]" value="${data.username}">
        <input type="hidden" class="iterable-fields" name="access_equip[password][]" value="${data.password}">
        <input type="hidden" class="iterable-fields" name="access_equip[role][]" value="${data.role}">`;

    $("#users_devices_fields").append(append);
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
    $(this).closest("tr").remove();
});
