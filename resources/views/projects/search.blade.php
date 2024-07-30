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
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
                                        </svg>

                                    </span>
                                </span>
                                <span class="px-2">
                                    Projetos
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                                </svg>
                                <span class="px-2">
                                    Pesquisa de Projeto
                                </span>
                            </h2>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <span>
                                    <form action="{{ route('projects.search') }}" method="post">
                                        @csrf
                                        <input type="search" name="search" id="search" placeholder="Pesquisar Projeto">
                                    </form>
                                </span>
                                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="{{ route('projects.create') }}">
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                    Adicionar Projeto
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="px-2 py-2.5 w-full flex font-semibold uppercase text-xs text-gray-800 bg-gray-100 border-b border-gray-200 dark:text-white dark:bg-neutral-900">
                        <div class="w-1/12">

                        </div>
                        <div class="w-3/12">
                            Nome
                        </div>
                        <div class="w-5/12">
                            Descrição
                        </div>
                        <div class="w-2/12">
                            Criado em
                        </div>
                        <div class="w-1/12 text-center">
                            Ações
                        </div>
                    </div>

                    @foreach($projects as $project)
                        <div class="w-full flex items-center px-2 text-sm py-3 border-b border-gray-200">
                            <div class="w-1/12 text-center">
                                {{--                                <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">--}}
                                <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 bg-slate-200 dark:bg-neutral-800 dark:border-neutral-700">
                                    <span class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">{{ Str::of($project->name)->substr(0,1) }}</span>
                                </span>

                            </div>
                            <div class="w-3/12">
                                <p class="font-semibold">{{ $project->name }}</p>
                            </div>
                            <div class="w-5/12">
                                <p class="font-semibold">{{ $project->description }}</p>
                            </div>

                            <div class="w-2/12 text-xs">
                                {{ $project->created_at->format('d/m/Y') }}
                            </div>
                            <div class="w-1/12 flex justify-center">
                                <a href="{{ route('projects.edit', [$project->id]) }}">
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
