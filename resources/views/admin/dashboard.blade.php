<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ]
]">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <div class="card">
            <div class="flex items-center">
                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                    alt="{{ Auth::user()->name }}" />

                <div class="ml-4 flex-1">
                    <h2 class="text-lg font-semibold dark:text-white">
                        Bienvenido, {{ auth()->user()->name }}

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="text-sm hover:text-blue-500">
                                Cerrar sesión
                            </button>
                        </form>
                    </h2>
                </div>
            </div>
        </div>

        <div class="card flex items-center justify-center dark:text-white">
            <h2 class="text-xl font-semibold">
                ViryXana
            </h2>
        </div>

    </div>
</x-admin-layout>
