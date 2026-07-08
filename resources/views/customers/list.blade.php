<meta name="csrf-token" content="{{ csrf_token() }}">
<main
    class="flex flex-col grow rounded-xl bg-[--tw-content-bg] dark:bg-[--tw-content-bg-dark] border border-gray-300 dark:border-gray-200 lg:ms-[--tw-sidebar-width] pt-5 mt-0 lg:mt-5 m-5"
    role="content">
    <!-- Toolbar -->
    <div class="pb-5">
        <!-- Container -->
        <div class="container-fixed flex items-center justify-between flex-wrap gap-3">
            <!-- Título + trilha -->
            <div class="flex items-center gap-3 min-w-0">
                <h1 class="font-semibold text-base text-gray-900">Clientes</h1>
                <nav class="hidden md:flex items-center gap-1.5 text-sm">
                    <a class="text-gray-700 hover:text-primary" href="{{ route('home') }}">Home</a>
                    <span class="text-gray-400">/</span>
                    <span class="text-gray-900">Clientes</span>
                </nav>
            </div>

            <!-- Busca + Novo (ocupa a linha inteira no mobile) -->
            <div class="flex items-center gap-2.5 w-full md:w-auto order-3 md:order-2">
                <label class="input input-sm flex-1">
                    <i class="ki-outline ki-magnifier"></i>
                    <input
                        id="customerSearch"
                        type="text"
                        placeholder="Buscar cliente ou CNPJ..."
                        class="w-full"
                        autocomplete="off"
                    />
                </label>

                <a href="{{ route('customers.create') }}" class="btn btn-sm btn-primary shrink-0">
                    <i class="ki-filled ki-users"></i>
                    <span class="hidden xs:inline">Novo</span>
                </a>
            </div>

            <!-- Ações à direita (se houver) -->
            <div class="flex items-center gap-2.5 order-2 md:order-3">
                <!-- seus botões/ícones (grid/list etc.) -->
            </div>
        </div>

        <!-- End of Toolbar -->
    </div>
    <!-- End of Toolbar -->
    <style>
        .hero-bg {
            background-image: url('{{ "assets/media/images/2600x1200/bg-1.png"}}');
        }

        .dark .hero-bg {
            background-image: url('{{ "assets/media/images/2600x1200/bg-1-dark.png" }}');
        }
    </style>


    <!-- Container -->
    <div class="container-fixed">
        <!-- begin: projects -->
        <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
            <!-- begin: toolbar -->
            <div class="flex flex-wrap items-center gap-5 justify-between">
                <h3 id="customers_count" class="text-lg text-gray-900 font-semibold">
                    {{ count($customers) }} Clientes
                </h3>

            </div>
            <!-- end: toolbar -->
            <!-- begin: list -->
            <div id="projects_list">
                <div class="flex flex-col gap-5 lg:gap-7.5">
                    @foreach($customers as $customer)
                        <div class="card p-7" style="cursor: pointer;" data-customer="{{ $customer->id }}">
                            <div class="flex items-center flex-wrap justify-between gap-5">
                                <div class="flex items-center gap-3.5">
                                    <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                        <img alt="" class="" src="{{ $customer->logo }}">
                                    </div>
                                    <div class="flex flex-col">
                                        <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px"
                                           href="javascript:">
                                            {{ $customer->company_name }}
                                        </a>
                                        <span class="text-sm text-gray-700">
                                            CNPJ: {{ $customer->cnpj_formatted }}
                                        </span>
                                        <span class="text-sm text-gray-700">
                                            Fone: {{ $customer->phone }}
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <button class="avoid-default btn btn-icon text-danger" onclick="deleteCustomer({{ $customer->id }})" aria-label="Excluir">
                                        <i class="ki-filled ki-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- end: list -->
        </div>
        <!-- end: projects -->
    </div>
    <!-- End of Container -->
    <!-- Footer -->
    <footer class="mt-10 border-t">
        <div class="container-fixed">
            <div class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5">
                <div class="flex order-2 md:order-1 gap-2 font-normal text-2sm">
                    <span class="text-gray-500">{{ date('Y') }}©</span>
                    <span class="text-gray-600">{{ config('app.name') }}</span>
                </div>
                <nav class="flex order-1 md:order-2 gap-4 font-normal text-2sm text-gray-600">
                    <a class="hover:text-primary" href="{{ route('home') }}">Home</a>
                    <a class="hover:text-primary" href="{{ route('customers.index') }}">Clientes</a>
                </nav>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</main>

<script defer src="{{ asset('js/redirect.js') }}"></script>
<script defer src="{{ asset('js/search.js') }}"></script>


