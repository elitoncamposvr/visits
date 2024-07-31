@php use Illuminate\Support\Str; @endphp
<x-app-layout>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-md shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                    <!-- Header -->
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                        <div>
                            <h2 class="inline-flex items-center text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-slate-300 dark:bg-neutral-500">
                                    <span class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="px-2">
                                    Tickets
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                                </svg>
                                <span class="px-2">
                                    Abrir Ticket
                                </span>
                            </h2>
                        </div>
                    </div>

                    <div class="w-full flex flex-col px-2 text-sm py-3 border-b border-gray-200">
                        <div class="w-full mb-3">
                            <label for="title">Título</label>
                            <input type="text" name="title" id="title" class="w-full" required autofocus>
                        </div>
                        <div class="w-full mb-3">
                            <label for="description">Mensagem</label>
                            <input type="text" name="description" id="description" class="w-full" required>
                        </div>
                        <div class="w-full mb-3">
                            <label for="label">Tipo</label>
                            <div class="w-full flex">
                                <div class="mr-6">
                                    <input type="radio" name="label" id="label">
                                    Test
                                </div>
                                <span class="mr-6">
                                    <input type="radio" name="label" id="label">
                                    Teste
                                </span>
                                <span class="mr-6">
                                    <input type="radio" name="label" id="label">
                                    Sugestão
                                </span>
                            </div>
                        </div>
                        <div class="w-full mb-3">
                            <label for="category_id">Categoria</label>
                            <div class="w-full flex">
                                <div class="mr-6">
                                    <input type="radio" name="category_id" id="category_id">
                                    Sem categoria
                                </div>
                                <span class="mr-6">
                                    <input type="radio" name="category_id" id="category_id">
                                    Pagamentos
                                </span>
                                <span class="mr-6">
                                    <input type="radio" name="category_id" id="category_id">
                                    Suporte Sistema
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
