<div class="mb-4 flex justify-end">
    <a href="{{ route('clientes-create') }}" class="bg-indigo-600 w-30 text-white py-2 px-4 rounded hover:bg-blue-600">
        <i class="fas fa-plus"></i>
        <span>Novo</span>
    </a>
</div>
<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200">
        <thead class="bg-gray-800 text-white hidden sm:table-header-group">
        <tr>
            <th class="py-3 px-4 text-left">ID</th>
            <th class="py-3 px-4 text-left">Nome</th>
            <th class="py-3 px-4 text-left">Email</th>
            <th class="py-3 px-4 text-left">CPNJ</th>
            <th class="py-3 px-4 text-left">Tel</th>
            <th class="py-3 px-4 text-left">Opções</th>
        </tr>
        </thead>
        <tbody class="text-gray-700">
        <tr class="border-b sm:table-row flex flex-col sm:flex-row mb-4">
            <td class="py-3 px-4 flex-shrink-0">175</td>
            <td class="py-3 px-4 flex-shrink-0">Cervejaria Pinelli</td>
            <td class="py-3 px-4 flex-shrink-0">john.doe@example.com</td>
            <td class="py-3 px-4 flex-shrink-0">1231.1153.1513/0001-99</td>
            <td class="py-3 px-4 flex-shrink-0">(15) 09999-9999</td>
            <td class="py-3 px-4 flex-shrink-0">
                <button class="rounded-md bg-blue-500 py-2 px-4 font-semibold border border-transparent text-center text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
                    <i class="fas fa-edit"></i> Editar
                </button>
                <button class="rounded-md bg-red-600 py-2 px-4 font-semibold border border-transparent text-center text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
                    <i class="fas fa-trash"></i> Excluir
                </button>
            </td>
        </tr>
        <tr class="border-b sm:table-row flex flex-col sm:flex-row mb-4 bg-gray-50">
            <td class="py-3 px-4 flex-shrink-0">99</td>
            <td class="py-3 px-4 flex-shrink-0">Rodovias do Estado - Itapeva</td>
            <td class="py-3 px-4 flex-shrink-0">jane.smith@example.com</td>
            <td class="py-3 px-4 flex-shrink-0">12315.15135/0001-77</td>
            <td class="py-3 px-4 flex-shrink-0">(15) 09999-9999</td>
            <td class="py-3 px-4 flex-shrink-0">
                <button class="rounded-md bg-blue-500 py-2 px-4 font-semibold border border-transparent text-center text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
                    <i class="fas fa-edit"></i> Editar
                </button>
                <button class="rounded-md bg-red-600 py-2 px-4 font-semibold border border-transparent text-center text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
                    <i class="fas fa-trash"></i> Excluir
                </button>
            </td>
        </tr>
        <tr class="border-b sm:table-row flex flex-col sm:flex-row mb-4">
            <td class="py-3 px-4 flex-shrink-0">35</td>
            <td class="py-3 px-4 flex-shrink-0">My Company</td>
            <td class="py-3 px-4 flex-shrink-0">xamps@corp.com</td>
            <td class="py-3 px-4 flex-shrink-0">9999.9999/0001-99</td>
            <td class="py-3 px-4 flex-shrink-0">(15) 09999-9999</td>
            <td class="py-3 px-4 flex-shrink-0">
                <button class="rounded-md bg-blue-500 py-2 px-4 font-semibold border border-transparent text-center text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
                    <i class="fas fa-edit"></i> Editar
                </button>
                <button class="rounded-md bg-red-600 py-2 px-4 font-semibold border border-transparent text-center text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
                    <i class="fas fa-trash"></i> Excluir
                </button>
            </td>
        </tr>
        </tbody>
    </table>
</div>
