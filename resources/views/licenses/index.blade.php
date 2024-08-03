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
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="px-2">
                                    Licenças
                                </span>
                            </h2>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <span>
                                    {{--                                    <form action="#" method="post">--}}
                                    {{--                                        @csrf--}}
                                    <input type="search" name="search" id="search" placeholder="Pesquisar Empresas Licenciadas">
                                    {{--                                    </form>--}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <div class="px-2 py-2.5 w-full flex font-semibold uppercase text-xs text-gray-800 bg-gray-100 border-b border-gray-200 dark:text-white dark:bg-neutral-900">
                        <div class="w-1/12">

                        </div>
                        <div class="w-5/12">
                            Nome
                        </div>
                        <div class="w-3/12">
                            Status
                        </div>
                        <div class="w-2/12">
                            Expira em
                        </div>
                        <div class="w-1/12 text-center">
                            Ações
                        </div>
                    </div>

                    @foreach($licenses as $license)
                        <div class="w-full flex items-center px-2 text-sm py-3 border-b border-gray-200">
                            <div class="w-1/12 text-center">
                                {{--                                <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">--}}
                                <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 bg-slate-200 dark:bg-neutral-800 dark:border-neutral-700">
                                    <span class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">{{ Str::of($license->name)->substr(0,1) }}</span>
                                </span>

                            </div>
                            <div class="w-5/12">
                                <p class="font-semibold">{{ $license->name }}</p>
                                <p>{{ $license->email }}</p>
                            </div>
                            <div class="w-3/12">
                                    @if($license->expires_at > date('Y-m-d H:i:s'))
                                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                            </svg>
                                            Ativo
                                        </span>
                                    @else
                                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                            </svg>
                                            Inativo
                                        </span>
                                    @endif
                            </div>
                            <div class="w-2/12">
                                    {{ date('d/m/Y', strtotime($license->expires_at)) }}
                            </div>
                            <div class="w-1/12 flex justify-center">
                                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-medium hover:text-blue-700 focus:outline-none focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-right-{{ $license->license_id }}" data-hs-overlay="#hs-offcanvas-right-{{ $license->license_id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                                    </svg>
                                </button>

                                <div id="hs-offcanvas-right-{{ $license->license_id }}" class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-s dark:bg-neutral-800 dark:border-neutral-700" role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-right-label">
                                    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                        <h3 id="hs-offcanvas-right-label" class="font-bold text-gray-800 dark:text-white">
                                            Atribuir Licença
                                        </h3>
                                        <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-offcanvas-right">
                                            <span class="sr-only">Close</span>
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 6 6 18"></path>
                                                <path d="m6 6 12 12"></path>
                                            </svg>
                                        </button>

                                    </div>
                                    <div class="p-4">
                                        <p class="w-full text-gray-800 dark:text-neutral-400">
                                        <form action="{{ route('licenses.store') }}" method="post" class="w-full flex flex-col">
                                            @csrf

                                            <input type="hidden" name="company_id" value="{{ $license->company_id }}">
                                            <input type="date" name="expires_at" id="expires_at" value="{{ date('Y-m-d', strtotime('+1 month')) }}" class="w-full mb-3" required autofocus>
                                            <p class="mb-3">
                                                @if($license->license_id === $license->company_id)
                                                Sua licença atual expira em:
                                                <span class="italic">
                                                    {{ date('d/m/Y', strtotime($license->expires_at)) }}
                                                @endif
                                                </span>
                                            </p>
                                            <button type="submit"
                                                    class="py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                Atribuir Licença
                                            </button>
                                        </form>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                                        <!-- Footer -->
                                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                                            <div>
                                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                                    <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $licenses->total() }}</span> resultados
                                                </p>
                                            </div>

                                            <div>
                                                @if($licenses->count() >= 10)
                                                    <div class="inline-flex gap-x-2">
                                                        <a href="{{ $licenses->previousPageUrl() }}" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                                            Anterior
                                                        </a>
                                                        <a href="{{ $licenses->nextPageUrl() }}" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                                            Próxima
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
