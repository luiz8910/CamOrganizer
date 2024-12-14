{{--<h1 class="text-3xl font-bold mb-6">{{ $customer->name ?? 'Novo Cliente'}}</h1>
<form>
    <div class="space-y-12">

        <div class="border-b border-gray-900/10 pb-12">


            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-full">
                    <label for="customer-external_id" class="block text-sm font-medium leading-6 text-gray-900">ID externo</label>
                    <div class="mt-2">
                        <input type="text" name="customer-external_id" id="customer-external_id" autocomplete="given-id" required value=""
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="customer-name" class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
                    <div class="mt-2">
                        <input type="text" name="customer-name" id="customer-name" autocomplete="given-name" required value="{{ $customer->name ?? ""}}"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Telefone</label>
                    <div class="mt-2">
                        <input type="text" name="phone" id="phone" autocomplete="phone" value="{{ $customer->phone ?? ""}}"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" value="{{ $customer->email ?? ""}}"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="cnpj" class="block text-sm font-medium leading-6 text-gray-900">CNPJ</label>
                    <div class="mt-2">
                        <input type="text" name="cnpj" id="cnpj" autocomplete="cnpj" value="{{ $customer->cnpj ?? ""}}"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button class="w-full rounded-md bg-indigo-600 py-2 px-4 font-semibold border border-transparent text-center text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="submit">
            Salvar
        </button>
    </div>
</form>--}}

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
            <form action="@if(isset($customer)){{ route('clientes-update', ['customer_id' => $customer->id]) }} @else {{ route('clientes-store') }} @endif " method="post" enctype="multipart/form-data">
                @csrf
                <div class="card pb-2.5">
                    <div class="card-header" id="basic_settings">
                        <h3 class="card-title">
                            {{ isset($customer) ? "Editar - " . $customer->name : 'Adicionar Clientes'}}
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
                                    <input accept=".png, .jpg, .jpeg" name="logo" type="file">

                                    {{--<input name="avatar_remove" type="hidden">--}}
                                    <div class="btn btn-icon btn-icon-xs btn-light shadow-default absolute z-1 size-5 -top-0.5 -right-0.5 rounded-full" data-image-input-remove="" data-tooltip="#image_input_tooltip" data-tooltip-trigger="hover">
                                        <i class="ki-filled ki-cross">
                                        </i>
                                    </div>
                                    <span class="tooltip" id="image_input_tooltip">
                   Clique para remover ou reverter
                  </span>
                                    <div class="image-input-placeholder rounded-full border-2 border-success image-input-empty:border-gray-300" style="background-image:url(assets/media/avatars/blank.png)">
                                        <div class="image-input-preview rounded-full" style="background-image:url(assets/media/avatars/300-2.png)">
                                        </div>
                                        <div class="flex items-center justify-center cursor-pointer h-5 left-0 right-0 bottom-0 bg-dark-clarity absolute">
                                            <svg class="fill-light opacity-80" height="12" viewbox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.6665 2.64585H11.2232C11.0873 2.64749 10.9538 2.61053 10.8382 2.53928C10.7225 2.46803 10.6295 2.36541 10.5698 2.24335L10.0448 1.19918C9.91266 0.931853 9.70808 0.707007 9.45438 0.550249C9.20068 0.393491 8.90806 0.311121 8.60984 0.312517H5.38984C5.09162 0.311121 4.799 0.393491 4.5453 0.550249C4.2916 0.707007 4.08701 0.931853 3.95484 1.19918L3.42984 2.24335C3.37021 2.36541 3.27716 2.46803 3.1615 2.53928C3.04584 2.61053 2.91234 2.64749 2.7765 2.64585H2.33317C1.90772 2.64585 1.49969 2.81486 1.19885 3.1157C0.898014 3.41654 0.729004 3.82457 0.729004 4.25002V10.0834C0.729004 10.5088 0.898014 10.9168 1.19885 11.2177C1.49969 11.5185 1.90772 11.6875 2.33317 11.6875H11.6665C12.092 11.6875 12.5 11.5185 12.8008 11.2177C13.1017 10.9168 13.2707 10.5088 13.2707 10.0834V4.25002C13.2707 3.82457 13.1017 3.41654 12.8008 3.1157C12.5 2.81486 12.092 2.64585 11.6665 2.64585ZM6.99984 9.64585C6.39413 9.64585 5.80203 9.46624 5.2984 9.12973C4.79478 8.79321 4.40225 8.31492 4.17046 7.75532C3.93866 7.19572 3.87802 6.57995 3.99618 5.98589C4.11435 5.39182 4.40602 4.84613 4.83432 4.41784C5.26262 3.98954 5.80831 3.69786 6.40237 3.5797C6.99644 3.46153 7.61221 3.52218 8.1718 3.75397C8.7314 3.98576 9.2097 4.37829 9.54621 4.88192C9.88272 5.38554 10.0623 5.97765 10.0623 6.58335C10.0608 7.3951 9.73765 8.17317 9.16365 8.74716C8.58965 9.32116 7.81159 9.64431 6.99984 9.64585Z" fill="">
                                                </path>
                                                <path d="M7 8.77087C8.20812 8.77087 9.1875 7.7915 9.1875 6.58337C9.1875 5.37525 8.20812 4.39587 7 4.39587C5.79188 4.39587 4.8125 5.37525 4.8125 6.58337C4.8125 7.7915 5.79188 8.77087 7 8.77087Z" fill="">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    </input>
                                    </input>
                                </div>
                            </div>
                        </div>
                        <input type="file" name="logo" hidden>
                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <label class="form-label max-w-56">
                                ID Externo
                            </label>
                            <input class="input" name="external_id" id="external_id" type="text" placeholder="Codigo do Bling" value="{{ $customer->external_id ?? ""}}"/>
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
                            <input class="input" placeholder="Telefone" name="phone" type="text" value="{{ $customer->phone ?? "" }}"/>
                        </div>

                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <label class="form-label max-w-56">
                                CEP
                            </label>
                            <input class="input" placeholder="Cep" id="zip_code" onchange="buscarEndereco()" name="zip_code" type="text" value="{{ $customer->zipCode ?? "" }}"/>
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
                            <input class="hidden" value="{{ $customer->uf ?? "" }}"/>
                            <select name="uf" id="uf" class="input" style="cursor: pointer;">
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
<script src="js/helper.js"></script>
<script src="js/cep.js"></script>
<!-- End of Main -->
