@php
    use Illuminate\Support\Facades\Auth;
@endphp
<x-app-layout>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div
                    class="bg-white border border-gray-200 rounded-md shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                    <!-- Header -->
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-600 dark:text-neutral-200 inline-flex items-center">
                                Usuários
                                <span class="px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                                    </svg>
                                </span>
                                <span>
                                    Editar Usuário
                                </span>
                            </h2>
                        </div>

                    </div>

                    <div class="w-full py-2 px-6">
                        <form action="{{ route('users.update', [$user->id]) }}" method="post">
                            @csrf
                            @method('put')

                            <div class="w-full flex mb-3">
                                <div class="w-1/2 sm:mr-1.5">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" id="name" class="w-full" value="{{ $user->name }}" required>
                                </div>
                                <div class="w-1/2">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" id="email" class="w-full" value="{{ $user->email }}" required>
                                </div>
                            </div>
                            <div class="w-full flex mb-3">
                                <div class="w-1/2 sm:mr-1.5">
                                    <label for="user_level">Nível Usuário</label>
                                    <select name="user_level" id="user_level" class="w-full" required>
                                        @if(Auth::user()->is_admin === true)
                                            <option value="1" {{ $user->user_level === 1 ? 'selected' : '' }}>Administrador Geral</option>
                                            <option value="0" {{ $user->user_level === 0 ? 'selected' : '' }}>Usuário Administrador do Sistema</option>
                                        @endif

                                        @if(Auth::user()->is_admin === false)
                                            <option value="1" {{ $user->user_level === 1 ? 'selected' : '' }}>Administrador Geral</option>
                                            <option value="2" {{ $user->user_level === 2 ? 'selected' : '' }}>Administrador de Projetos</option>
                                            <option value="3" {{ $user->user_level === 3 ? 'selected' : '' }}>Usuário Sênior</option>
                                            <option value="4" {{ $user->user_level === 4 ? 'selected' : '' }}>Usuário Pleno</option>
                                            <option value="5" {{ $user->user_level === 5 ? 'selected' : '' }}>Usuário Júnior</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="w-1/2">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="w-full" required>
                                        <option value="1" {{ $user->status === 1 ? 'selected' : '' }}>Ativo</option>
                                        <option value="2" {{ $user->status !== 1 ? 'selected' : '' }}>Inativo</option>
                                    </select>
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
</x-app-layout>
