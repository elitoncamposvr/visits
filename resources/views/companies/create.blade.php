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
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                        </svg>

                                    </span>
                                </span>
                                <span class="px-2">
                                    Empresas
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                                </svg>
                                <span class="px-2">
                                    Criar Empresa
                                </span>
                            </h2>
                        </div>

                    </div>


                    <div class="w-full flex flex-col px-2 text-sm py-3 border-b border-gray-200">
                        <form action="{{ route('companies.store') }}" method="post">
                            @csrf
                            <div class="w-full flex mb-3">
                                <div class="w-1/2 sm:pr-2">
                                    <label for="name">Nome da Empresa</label>
                                    <input type="text" name="name" id="name" class="w-full" required autofocus>
                                </div>
                                <div class="w-1/2">
                                    <label for="contact_name">Contato</label>
                                    <input type="text" name="contact_name" id="contact_name" class="w-full" required>
                                </div>
                            </div>
                            <div class="w-full flex mb-3">
                                <div class="w-1/2 sm:pr-2">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" id="email" class="w-full" required>
                                </div>
                                <div class="w-1/2">
                                    <label for="phone">Telefone/Celular</label>
                                    <input type="tel" name="phone" id="phone" class="w-full" required>
                                </div>
                            </div>
                            <div class="w-full mb-3">
                                <label for="address">Endereço</label>
                                <input type="text" name="address" id="address" class="w-full" required>
                            </div>
                            <div class="w-full flex mb-3">
                                <div class="w-4/12 sm:pr-2">
                                    <label for="cep">CEP</label>
                                    <input type="text" name="cep" id="cep" class="w-full" required>
                                </div>
                                <div class="w-4/12 sm:pr-2">
                                    <label for="city">Cidade</label>
                                    <input type="text" name="city" id="city" class="w-full" required>
                                </div>
                                <div class="w-4/12">
                                    <label for="province">Estado</label>
                                    <input type="text" name="province" id="province" class="w-full" required>
                                </div>
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                    Salvar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
