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
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                    </span>
                                </span>
                                <span class="px-2">
                                    Usuários
                                </span>
                            </h2>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <span>
                                    <form action="{{ route('users.search') }}" method="post">
                                        @csrf
                                        <input type="search" name="search" id="search" placeholder="Pesquisar Usuário">
                                    </form>
                                </span>
                                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="{{ route('users.create') }}">
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                    Adicionar Usuário
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <div class="px-2 py-2.5 w-full flex font-semibold uppercase text-xs text-gray-800 bg-gray-100 border-b border-gray-200 dark:text-white dark:bg-neutral-900">
                        <div class="w-1/12">

                        </div>
                        <div class="w-4/12">
                            Nome
                        </div>
                        <div class="w-2/12">
                            Status
                        </div>
                        <div class="w-2/12">
                            Nível
                        </div>
                        <div class="w-2/12">
                            Criado em
                        </div>
                        <div class="w-1/12 text-center">
                            Ações
                        </div>
                    </div>

                    @foreach($users as $user)
                        <div class="w-full flex items-center px-2 text-sm py-3 border-b border-gray-200">
                            <div class="w-1/12 text-center">
                                {{--                                <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">--}}
                                <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 bg-slate-200 dark:bg-neutral-800 dark:border-neutral-700">
                                    <span class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">{{ Str::of($user->name)->substr(0,1) }}</span>
                                </span>

                            </div>
                            <div class="w-4/12">
                                <p class="font-semibold">{{ $user->name }}</p>
                                <p>{{ $user->email }}</p>
                            </div>
                            <div class="w-2/12">
                                @if($user->status === 1)
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
                                @switch($user->user_level)
                                    @case(1)
                                        <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500">
                                            Administrador
                                        </span>
                                        @break
                                    @case(2)
                                        <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-slate-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500">
                                            Adm. Projetos
                                        </span>
                                        @break
                                    @case(3)
                                        <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-red-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500">
                                            Usuário Sênior
                                        </span>
                                        @break
                                    @case(4)
                                        <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-amber-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500">
                                            Usuário Pleno
                                        </span>
                                        @break
                                    @case(5)
                                        <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-neutral-200/75 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500">
                                            Usuário Júnior
                                        </span>
                                        @break
                                    @default
                                        <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-pink-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500">
                                            Adm. Sistema
                                        </span>
                                @endswitch
                            </div>
                            <div class="w-2/12 text-xs">
                                {{ $user->created_at->format('d/m/Y') }}
                            </div>
                            <div class="w-1/12 flex justify-center">
                                <a href="{{ route('users.edit', [$user->id]) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
