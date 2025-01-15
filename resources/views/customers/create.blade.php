<!-- Main -->
<main class="flex flex-col grow rounded-xl bg-[--tw-content-bg] dark:bg-[--tw-content-bg-dark] border border-gray-300 dark:border-gray-200 lg:ms-[--tw-sidebar-width] pt-5 mt-0 lg:mt-5 m-5" role="content">
    <!-- Toolbar -->
    <div class="pb-5">
        <!-- Container -->
        <div class="container-fixed flex items-center justify-between flex-wrap gap-3">
            <div class="flex items-center flex-wrap gap-1 lg:gap-5">
                <h1 class="font-medium text-base text-gray-900">
                    Clientes
                </h1>
                <div class="flex items-center flex-wrap gap-1 text-sm">
                    <a class="text-gray-700 hover:text-primary" href="html/demo8.html">
                        Home
                    </a>
                    <span class="text-gray-400 text-sm">
          /
         </span>
                    <span class="text-gray-700">
          Clientes
         </span>
                    <span class="text-gray-400 text-sm">
          /
         </span>
                    <span class="text-gray-900">
          Adicionar/Editar Clientes
         </span>
                </div>
            </div>
        </div>
        <!-- End of Container -->
    </div>
    <!-- End of Toolbar -->
    <!-- Container -->
    <div class="container-fixed">
        <div class="grid gap-5 lg:gap-7.5 xl:w-[38.75rem] mx-auto">
            @if(isset($customer))
                <?php
                    $route = route('clientes-update', ['id' => $customer->id]);
                    $method = 'PUT';
                ?>
            @else
                <?php
                    $route = route('clientes-store');
                    $method = 'POST';
                ?>
            @endif
            <form action="{{ $route }}" method="post" enctype="multipart/form-data">
                @method($method)
                @csrf
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="card pb-2.5">
                    <div class="card-header" id="basic_settings">
                        <h3 class="card-title">
                            {{ isset($customer) ? "Editar - " . $customer->company_name : 'Adicionar Cliente'}}
                        </h3>
                        <!-- <div class="flex items-center gap-2">
                          <label class="switch switch-sm">
                           <span class="switch-label">
                            Ativo
                           </span>
                           <input checked="" name="check" type="checkbox" value="1"/>
                          </label>
                         </div> -->
                    </div>
                    <div class="card-body grid gap-5">
                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <label class="form-label max-w-56">
                                Logo
                            </label>
                            <div class="flex items-center justify-between flex-wrap grow gap-2.5">
        <span class="text-2sm">
            1000x1000px JPEG, PNG Image
        </span>
                                <div class="image-input size-16" data-image-input="true">
                                    <!-- Input for file upload -->
                                    <input
                                        accept=".png, .jpg, .jpeg"
                                        name="logo"
                                        type="file"
                                        id="logo_input"
                                        class="hidden"
                                        onchange="previewLogo(event)" />

                                    <!-- Preview container -->
                                    <div class="image-input-placeholder rounded-full border-2 border-success image-input-empty:border-gray-300" style="background-image:url('{{ $customer->logo ?? 'assets/media/avatars/blank.png' }}')">
                                        <div class="image-input-preview rounded-full" id="logo_preview" style="background-image:url('{{ isset($customer) ? $customer->logo : 'assets/media/avatars/300-2.png' }}')">
                                        </div>
                                        <div class="flex items-center justify-center cursor-pointer h-5 left-0 right-0 bottom-0 bg-dark-clarity absolute">
                                            <label for="logo_input" class="cursor-pointer text-white">
                                                Change
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            // Function to preview the selected logo
                            function previewLogo(event) {
                                const reader = new FileReader();
                                reader.onload = function () {
                                    const preview = document.getElementById('logo_preview');
                                    preview.style.backgroundImage = `url('${reader.result}')`;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                            }
                        </script>

                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <label class="form-label max-w-56">
                                ID Bling
                            </label>
                            <input class="input" id="external_id" name="external_id" placeholder="ID externo" type="text" value="{{ $customer->external_id ?? ""}}"/>
                        </div>
                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <label class="form-label max-w-56">
                                Razão social
                            </label>
                            <input class="input" name="company_name" placeholder="Razão social" type="text" value="{{ $customer->company_name ?? ""}}"/>
                        </div>
                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <label class="form-label max-w-56">
                                CNPJ
                            </label>
                            <input class="input" id="cnpj" name="cnpj" placeholder="CNPJ" type="text" value="{{ $customer->cnpj ?? ""}}"/>
                        </div>
                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <label class="form-label max-w-56">
                                Email
                            </label>
                            <input class="input" placeholder="Email" name="email" type="email" value="{{ $customer->email ?? ""}}"/>
                        </div>
                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <label class="form-label max-w-56">
                                Telefone
                            </label>
                            <input class="input" placeholder="Telefone" id="phone" name="phone" type="text" value="{{ $customer->phone ?? "" }}"/>
                        </div>

                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <label class="form-label max-w-56">
                                CEP
                            </label>
                            <input class="input" placeholder="Cep" id="zip_code" onchange="buscarEndereco()" name="zip_code" type="text" value="{{ $customer->zip_code ?? "" }}"/>
                        </div>
                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <label class="form-label max-w-56">
                                Endereço
                            </label>
                            <input class="input" placeholder="Endereço" id="address" name="address" type="text" value="{{ $customer->address ?? "" }}"/>
                        </div>
                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                            <label class="form-label max-w-56">
                                Número
                            </label>
                            <input class="input" placeholder="Número" name="number" id="number" type="number" value="{{ $customer->number ?? "" }}"/>
                        </div>
                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                            <label class="form-label max-w-56">
                                Cidade
                            </label>
                            <input class="input" placeholder="Cidade" type="text" id="city" name="city" value="{{ $customer->city ?? "" }}"/>
                        </div>
                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                            <label class="form-label max-w-56">
                                Estado
                            </label>
                            <input class="hidden" value="{{ $customer->state ?? "" }}"/>
                            <select name="state" id="state" class="input" style="cursor: pointer;">
                                <option value="">Selecione</option>
                                <option value="SP">São Paulo (SP)</option>
                                <option value="AC">Acre (AC)</option>
                                <option value="AL">Alagoas (AL)</option>
                                <option value="AP">Amapá (AP)</option>
                                <option value="AM">Amazonas (AM)</option>
                                <option value="BA">Bahia (BA)</option>
                                <option value="CE">Ceará (CE)</option>
                                <option value="DF">Distrito Federal (DF)</option>
                                <option value="ES">Espírito Santo (ES)</option>
                                <option value="GO">Goiás (GO)</option>
                                <option value="MA">Maranhão (MA)</option>
                                <option value="MT">Mato Grosso (MT)</option>
                                <option value="MS">Mato Grosso do Sul (MS)</option>
                                <option value="MG">Minas Gerais (MG)</option>
                                <option value="PA">Pará (PA)</option>
                                <option value="PB">Paraíba (PB)</option>
                                <option value="PR">Paraná (PR)</option>
                                <option value="PE">Pernambuco (PE)</option>
                                <option value="PI">Piauí (PI)</option>
                                <option value="RJ">Rio de Janeiro (RJ)</option>
                                <option value="RN">Rio Grande do Norte (RN)</option>
                                <option value="RS">Rio Grande do Sul (RS)</option>
                                <option value="RO">Rondônia (RO)</option>
                                <option value="RR">Roraima (RR)</option>
                                <option value="SC">Santa Catarina (SC)</option>
                                <option value="SE">Sergipe (SE)</option>
                                <option value="TO">Tocantins (TO)</option>
                            </select>
                        </div>
                        <div class="flex justify-end">
                            <button type="button" class="btn btn-outline btn-primary" onclick="clearFields()">
                                <i class="ki-outline ki-brush"></i>
                                Limpar
                            </button>

                            <button type="submit" class="btn btn-outline btn-success">
                                <i class="ki-outline ki-plus-squared"></i>
                                Adicionar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End of Container -->
    <!-- Footer -->
    <footer class="footer">
        <!-- Container -->
        <div class="container-fixed">
            <div class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5">
                <div class="flex order-2 md:order-1 gap-2 font-normal text-2sm">
         <span class="text-gray-500">
          2024©
         </span>
                    <a class="text-gray-600 hover:text-primary" href="https://jf.tec.br">
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
<script src="{{ $app_url.'js/helper.js' }}"></script>
<script src="{{ $app_url.'js/cep.js' }}"></script>
<!-- End of Main -->
