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
                                    Adicionar Camera
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
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            @csrf
                            <div class="card pb-2.5">
                                <div class="card-header" id="basic_settings">
                                    <h3 class="card-title">
                                        Informações Camera
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

                            @include('equipments.network')

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
                            @include('equipments.users')
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
                                    {{ date_format(date_create(), 'Y') }}©
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
<script src="{{ asset('js/helper-phone.js') }}"></script>
<script src="{{ asset('js/helper.js') }}"></script>
<script src="{{ asset('js/addUserEquip.js') }}"></script>
