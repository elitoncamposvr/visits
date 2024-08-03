<x-guest-layout>
    <div class="w-full flex flex-col py-10 text-center rounded-md bg-white">
        <span class="text-xl mb-1">
            Licença expirada!
        </span>
        <span class="mb-8">
            Entre em contato com o administrador.
        </span>
        <span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="flex w-full justify-center" type="submit">
                    Retornar para página de login
                </button>
            </form>
        </span>
    </div>
</x-guest-layout>

