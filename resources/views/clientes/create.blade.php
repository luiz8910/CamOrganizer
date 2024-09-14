<h1 class="text-3xl font-bold mb-6">{{ $customer->name ?? 'Novo Cliente'}}</h1>
<form>
    <div class="space-y-12">

        <div class="border-b border-gray-900/10 pb-12">


            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-full">
                    <label for="customer-external_id" class="block text-sm font-medium leading-6 text-gray-900">ID externo</label>
                    <div class="mt-2">
                        <input type="text" name="customer-external_id" id="customer-external_id" autocomplete="given-id" required value="{{ $customer->external_id ?? ""}}"
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
</form>
