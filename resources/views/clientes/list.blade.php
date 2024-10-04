<div class="w-full relative mt-4">
    <!-- Botão "Novo" -->
    <div class="mb-4 flex justify-end">
        <a href="{{ route('clientes-create') }}" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-600 flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>
            <span>Novo</span>
        </a>
    </div>

    @include('config.search')
</div>

<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200">
        <thead class="bg-gray-800 text-white hidden sm:table-header-group">
        <tr>
            <th class="py-3 px-4 text-left">ID</th>
            <th class="py-3 px-4 text-left">Nome</th>
            <th class="py-3 px-4 text-left">Opções</th>
        </tr>
        </thead>
        <tbody class="text-gray-700" id="tbody-list">
        <tr class="border-b sm:table-row flex flex-col sm:flex-row mb-4">
            <td class="py-3 px-4 flex-shrink-0">175</td>
            <td class="py-3 px-4 flex-shrink-0" id="model-name-175">Cervejaria Pinelli</td>
            <td class="py-3 px-4 flex-shrink-0">
                <button class="rounded-md bg-blue-500 py-2 px-4 font-semibold border border-transparent text-center text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
                    <i class="fas fa-edit"></i> Editar
                </button>
                <button id="delete-button-175" class="delete-model rounded-md bg-red-600 py-2 px-4 font-semibold border border-transparent text-center text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
                    <i class="fas fa-trash"></i> Excluir
                </button>
            </td>
        </tr>
        <tr class="border-b sm:table-row flex flex-col sm:flex-row mb-4 bg-gray-50">
            <td class="py-3 px-4 flex-shrink-0">99</td>
            <td class="py-3 px-4 flex-shrink-0" id="model-name-99">Rodovias do Estado - Itapeva</td>
            <td class="py-3 px-4 flex-shrink-0">
                <button class="rounded-md bg-blue-500 py-2 px-4 font-semibold border border-transparent text-center text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
                    <i class="fas fa-edit"></i> Editar
                </button>
                <button id="delete-button-99" class="delete-model rounded-md bg-red-600 py-2 px-4 font-semibold border border-transparent text-center text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
                    <i class="fas fa-trash"></i> Excluir
                </button>
            </td>
        </tr>
        <tr class="border-b sm:table-row flex flex-col sm:flex-row mb-4">
            <td class="py-3 px-4 flex-shrink-0">35</td>
            <td class="py-3 px-4 flex-shrink-0" id="model-name-35">My Company</td>
            <td class="py-3 px-4 flex-shrink-0">
                <button class="rounded-md bg-blue-500 py-2 px-4 font-semibold border border-transparent text-center text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
                    <i class="fas fa-edit"></i> Editar
                </button>
                <button id="delete-button-35" class="delete-model rounded-md bg-red-600 py-2 px-4 font-semibold border border-transparent text-center text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
                    <i class="fas fa-trash"></i> Excluir
                </button>
            </td>
        </tr>
        </tbody>
    </table>
</div>
@include('config.modal-delete')

