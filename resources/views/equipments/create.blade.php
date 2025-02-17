<main
    class="flex flex-col grow rounded-xl bg-[--tw-content-bg] dark:bg-[--tw-content-bg-dark] border border-gray-300 dark:border-gray-200 lg:ms-[--tw-sidebar-width] pt-5 mt-0 lg:mt-5 m-5"
    role="content">
    <!-- Toolbar -->
    <div class="pb-5">
        <!-- Container -->
        <div class="container-fixed flex items-center justify-between flex-wrap gap-3">
            <div class="flex items-center flex-wrap gap-1 lg:gap-5">
                <h1 class="font-medium text-base text-gray-900">
                    Dispositivos
                </h1>
                <div class="flex items-center flex-wrap gap-1 text-sm">
                    <a class="text-gray-700 hover:text-primary" href="html/demo8.html">
                        Home
                    </a>
                    <span class="text-gray-400 text-sm">
                                    /
                                </span>
                    <span class="text-gray-700">
                                    Dispositivos
                                </span>
                    <span class="text-gray-400 text-sm">
                                    /
                                </span>
                    <span class="text-gray-900">
                                    Adicionar DVR
                                </span>
                </div>
            </div>
        </div>
        <!-- End of Container -->
    </div>
    <!-- End of Toolbar -->
    <!-- Container -->
    <div class="container-fixed">
        @if ($errors->any())
            <div class="error-message">
                <span class="error-icon">️</span>
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span>
                @endforeach
            </div>
        @endif
        <div class="grid gap-5 lg:gap-7.5 xl:w-[38.75rem] mx-auto">
            @if(isset($edit))
                <form action="{{ route('equipments.update', $equipment->id) }}" method="POST">
                    @method('PUT')
            @else
                <form action="{{ route('equipments.store') }}" method="POST">
            @endif
                @csrf
            <div class="card pb-2.5">
                <div class="card-header" id="basic_settings">
                    <h3 class="card-title">
                        Informações DVR
                    </h3>
                </div>
                <input type="hidden" name="customer_id" value="{{ $customer->id }}" />
                <input type="hidden" name="device_id" value="{{ $device_id }}" />
                <div class="card-body grid gap-5">
                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-56">
                            Cliente
                        </label>
                        <input class="input" required disabled readonly type="text" value="{{ $customer->company_name }}" />
                    </div>

                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-56">Marca</label>
                        @if(isset($edit))
                            <input class="input" required type="text" placeholder="Marca" value="{{ $equipment->brand }}" name="brand" />
                        @else
                            <input class="input" required type="text" placeholder="Marca" value="{{ old('brand') }}" name="brand" />
                        @endif
                        @error('brand') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-56">Modelo</label>
                        @if(isset($edit))
                            <input class="input" required type="text" placeholder="Modelo" value="{{ $equipment->model }}" name="model" />
                        @else
                            <input class="input" required placeholder="Modelo" type="text" value="{{ old('model') }}" name="model" />
                        @endif
                        @error('model') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-56">Serial</label>
                        @if(isset($edit))
                            <input class="input" required type="text" placeholder="Serial" value="{{ $equipment->serial }}" name="serial" />
                        @else
                            <input class="input" placeholder="Serial" type="text" value="{{ old('serial') }}" name="serial" />
                        @endif
                        @error('serial') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                        <label class="form-label max-w-56">Email</label>
                        @if(isset($edit))
                            <input class="input" placeholder="Email" type="email" value="{{ $equipment->email }}" name="email" />
                        @else
                            <input class="input" placeholder="Email" type="email" value="{{ old('email') }}" name="email" />
                        @endif
                        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                        <label class="form-label max-w-56">Telefone</label>
                        @if(isset($edit))
                            <input class="input" placeholder="Telefone" type="text" value="{{ $equipment->phone }}" id="phone" name="phone" />
                        @else
                            <input class="input" placeholder="Telefone" type="text" value="{{ old('phone') }}" id="phone" name="phone" />
                        @endif
                        @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                        <label class="form-label max-w-56">Local de Instalação</label>
                        @if(isset($edit))
                            <input class="input" placeholder="Local de Instalação" type="text" value="{{ $equipment->installation_location }}" name="installation_location" />
                        @else
                            <input class="input" placeholder="Local de Instalação" type="text" value="{{ old('installation_location') }}" name="installation_location" />
                        @endif
                        @error('installation_location') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                        <label class="form-label max-w-56">Tamanho HDD</label>
                        @if(isset($edit))
                            <input class="input" placeholder="Tamanho HDD" type="text" value="{{ $equipment->storage_capacity }}" name="storage_capacity" />
                        @else
                            <input class="input" placeholder="Tamanho HDD" type="text" value="{{ old('storage_capacity') }}" name="storage_capacity" />
                        @endif
                        @error('storage_capacity') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                        <label class="form-label max-w-56">Marca HD</label>
                        @if(isset($edit))
                            <input class="input" placeholder="Marca HDD" type="text" value="{{ $equipment->hd_brand }}" name="hd_brand" />
                        @else
                            <input class="input" placeholder="Marca HDD" type="text" value="{{ old('hd_brand') }}" name="hd_brand" />
                        @endif
                        @error('hd_brand') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                        <label class="form-label max-w-56">Porta</label>
                        @if(isset($edit))
                            <input class="input" placeholder="Porta" type="text" value="{{ $equipment->port }}" name="port" />
                        @else
                            <input class="input" placeholder="Porta" type="text" value="{{ old('port') }}" name="port" />
                        @endif
                        @error('port') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                        <label class="form-label max-w-56">DDNS</label>
                        @if(isset($edit))
                            <input class="input" placeholder="DDNS" type="text" value="{{ $equipment->ddns }}" name="ddns" />
                        @else
                            <input class="input" placeholder="DDNS" type="text" value="{{ old('ddns') }}" name="ddns" />
                        @endif
                        @error('ddns') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                        <label class="form-label max-w-56">IP de Acesso</label>
                        @if(isset($edit))
                            <input class="input" placeholder="IP de Acesso" type="text" value="{{ $equipment->access_ip }}" name="access_ip" />
                        @else
                            <input class="input" placeholder="IP de Acesso" type="text" value="{{ old('access_ip') }}" name="access_ip" />
                        @endif
                        @error('access_ip') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                        <label class="form-label max-w-56">Observação</label>
                        @if(isset($edit))
                            <textarea class="textarea" placeholder="Observação" rows="4" name="description">{{ $equipment->description }}</textarea>
                        @else
                            <textarea class="textarea" placeholder="Observação" rows="4" name="description">{{ old('description') }}</textarea>
                        @endif
                        @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>

            <div class="card pb-2.5">
                    <div class="card-header" id="basic_settings">
                        <h3 class="card-title">Redes</h3>
                    </div>
                    <div class="card-body grid gap-5">
                        @foreach(['mac', 'ip', 'mask', 'gateway'] as $field)
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">{{ ucfirst($field) }}</label>
                                @if(isset($edit))
                                    <input class="input" name="network[{{ $field }}]" placeholder="{{ ucfirst($field) }}" type="text"
                                           value="@if(isset($equipment->network)){{ $equipment->network[0]->{$field} }}@endif" />
                                @else
                                    <input class="input" name="network[{{ $field }}]" placeholder="{{ ucfirst($field) }}" type="text" value="{{ old('network.' . $field) }}" />
                                @endif
                                @error("network.$field") <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        @endforeach
                    </div>
                </div>
            <div class="card pb-2.5">
                <div class="card-header" id="basic_settings">
                    <h3 class="card-title">
                        Rede Adicional
                    </h3>
                    <div class="flex items-center gap-2">
                        <label class="switch switch-sm">
                                        <span class="switch-label">
                                            Redes 2
                                        </span>
                            @if(isset($edit))
                                <input type="checkbox" value="1" id="additional_fields_check" @if(isset($equipment->network[1])) checked @endif />
                            @else
                                <input type="checkbox" value="1" id="additional_fields_check" />
                            @endif
                        </label>
                    </div>
                </div>
                @if(isset($equipment->network[1]))
                    <div class="card-body grid gap-5" id="additional_fields">
                @else
                    <div class="card-body grid gap-5 hidden" id="additional_fields">
                @endif
                    @foreach(['mac', 'ip', 'mask', 'gateway'] as $input)
                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <label class="form-label max-w-56">{{ ucfirst($input) }}</label>
                            @if(isset($edit))
                                <input class="input" name="network[{{ $input }}]" placeholder="{{ ucfirst($input) }}" type="text"
                                   value="@if(isset($equipment->network[1])){{ $equipment->network[1]->{$input} }}@endif" />
                            @else
                                <input class="input" name="network_add[{{ $input }}]" placeholder="{{ ucfirst($input) }}" type="text" value="{{ old('network_add.' . $input) }}" />
                            @endif
                            @error("network_add.$input") <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    @endforeach
                </div>
            </div>
            {{--<div class="card pb-2.5">
                <div class="card-header" id="basic_settings">
                    <h3 class="card-title">
                        Acesso
                    </h3>
                </div>
                <div class="card-body grid gap-5">
                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-56">
                            IP de Acesso lan
                        </label>
                        <input class="input" placeholder="IP de Acesso lan" type="text" value="" />
                    </div>
                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-56">
                            Porta de acesso lan
                        </label>
                        <input class="input" placeholder="porta de acesso lan" type="text" value="" />
                    </div>
                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-56">
                            Link de Acesso externo
                        </label>
                        <input class="input" placeholder="Link de Acesso externo" type="text" value="" />
                    </div>
                    <div class="flex justify-end">
                        <button class="btn btn-outline btn-success">
                            <i class="ki-outline ki-plus-squared"></i>
                            Adicionar
                        </button>
                    </div>
                </div>
            </div>--}}
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
                            <input class="input input-user-add" id="{{ $field }}" placeholder="{{ ucfirst($field) }}" type="{{ $field === 'password' ? 'password' : 'text' }}"
                                   value=""/>
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
                                                        <button type="button" id="userToAdd-1" onclick="maskUnmaskPassword({{ $equip->id }})"
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
                                                                    <button type="reset" class="menu-link">
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
                                                                    <button type="reset" class="menu-link remove-user">
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
                <div class="flex justify-end">
                    <button type="button" class="btn btn-outline btn-secondary mr-5" onclick="clearFields()">
                        <i class="ki-outline ki-brush"></i>
                        Limpar
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="ki-outline ki-plus-circle"></i>
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- End of Container -->
    <!-- Footer -->
    <footer class="footer">
        <!-- Container -->
        <div class="container-fixed">
            <div
                class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5">
                <div class="flex order-2 md:order-1 gap-2 font-normal text-2sm">
                                <span class="text-gray-500">
                                    2024©
                                </span>
                    <a class="text-gray-600 hover:text-primary" href="https://keenthemes.com">
                        JF Soluções Inteligentes.
                    </a>
                </div>
            </div>
        </div>
        <!-- End of Container -->
    </footer>
    <!-- End of Footer -->
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ $app_url.'js/helper-phone.js' }}"></script>
<script src="{{ $app_url.'js/helper.js' }}"></script>
<script src="{{ $app_url.'js/addUserEquip.js' }}"></script>
