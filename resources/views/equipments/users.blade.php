<div class="card pb-2.5">
    <div class="card-header" id="basic_settings">
        <h3 class="card-title">
            Usuários
        </h3>
    </div>
    <div class="card-body grid gap-5">
        @foreach(['username', 'password', 'usergroup'] as $field)
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="form-label max-w-56">{{ ucfirst($field) }}</label>
                <input class="input input-user-add" id="{{ $field }}" placeholder="{{ ucfirst($field) }}"
                       type="{{ $field === 'password' ? 'password' : 'text' }}" value=""/>
                @error("$field") <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        @endforeach
        <div id="users_devices_fields"></div>
        <div class="flex justify-end">
            <button type="button" onclick="getUsersData()" class="btn btn-outline btn-primary">
                <i class="ki-outline ki-user-tick"></i>
                Adicionar Usuário
            </button>
        </div>
        <div></div> <!-- AJ (ajuste técnico) :) -->
        <div></div>

        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <div data-datatable="true" data-datatable-page-size="10">
                <div class="scrollable-x-auto">
                    <table class="table table-auto table-border @if(!isset($equipment)) hidden @endif"
                           data-datatable-table="true" id="users_devices" >
                        <thead>
                        <tr>
                            <th class="min-w-[206px]">
                                                            <span class="sort">
                                                                <span class="sort-label text-gray-700 font-normal">
                                                                    Nome do Usuário
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                            </th>
                            <th class="min-w-[224px]">
                                                            <span class="sort">
                                                                <span class="sort-label text-gray-700 font-normal">
                                                                    Senha
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                            </th>
                            <th class="min-w-[122px]">
                                                            <span class="sort">
                                                                <span class="sort-label text-gray-700 font-normal">
                                                                    Grupo
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                            </th>
                            <th class="w-[60px]">
                                                            <span class="sort-label text-gray-700 font-normal">
                                                                Ação
                                                            </span>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @if(isset($equipment))
                            @foreach($equipment->access as $equip)
                                <tr>
                                    <td class="text-gray-800 font-normal">
                                        {{ $equip->username }}
                                    </td>
                                    <td>
                                        <div class="flex items-center text-gray-800 font-normal">
                                            <span id="mask-pass-{{ $equip->id }}">********</span>
                                            <span id="show-pass-{{ $equip->id }}" class="hidden">{{ $equip->password }}</span>
                                            <button type="button" onclick="setClipboard(document.getElementById('show-pass-{{ $equip->id }}').textContent)" class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active">
                                                <i class="ki-filled ki-copy"></i>
                                            </button>
                                            <button type="button" onclick="maskUnmaskPassword({{ $equip->id }})"
                                                    class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active">
                                                <i class="ki-filled ki-eye"></i>
                                                <i class="ki-filled ki-eye-slash hidden"></i>
                                                <input type="hidden" value="hidden" id="hidden-{{ $equip->id }}">
                                            </button>
                                        </div>
                                    </td>
                                    <td class="text-gray-800 font-normal">
                                        {{ $equip->group }}
                                    </td>
                                    <td>
                                        <div class="menu inline-flex" data-menu="true">
                                            <div class="menu-item" data-menu-item-offset="0, 10px"
                                                 data-menu-item-placement="bottom-end"
                                                 data-menu-item-toggle="dropdown"
                                                 data-menu-item-trigger="click|lg:click">
                                                <button
                                                    class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                    <i class="ki-filled ki-dots-vertical">
                                                    </i>
                                                </button>
                                                <div class="menu-dropdown menu-default w-full max-w-[175px]"
                                                     data-menu-dismiss="true">
                                                    <div class="menu-item">
                                                        <button type="button" class="menu-link edit-user">
                                                                                <span class="menu-icon">
                                                                                    <i class="ki-filled ki-pencil">
                                                                                    </i>
                                                                                </span>
                                                            <span class="menu-title">
                                                                                    Editar
                                                                                </span>
                                                        </button>
                                                    </div>
                                                    <div class="menu-separator">
                                                    </div>
                                                    <div class="menu-item">
                                                        <button type="reset" class="menu-link remove-user" id="remove-user-{{ $equip->id }}">
                                                                                <span class="menu-icon">
                                                                                    <i class="ki-filled ki-trash">
                                                                                    </i>
                                                                                </span>
                                                            <span class="menu-title">
                                                                                    Remover
                                                                                </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
