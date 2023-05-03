<div>
    <div wire:init='loadContent'>
        <div class="flex items-center justify-between pb-4  bg-slate-100 dark:bg-gray-800">
            <div>
                @livewire('service.create-service',)
            </div>
            <div class="flex items-center">
                <span class="tex  t-sm">Mostrar</span>
                <select wire:model='cant' class="mx-2 p-2 pr-8 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                <span class="text-sm">Entradas</span>
            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 wire:model='search' dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" wire:model="search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar Servicios">
            </div>
        </div>
        @if ($services == 'spin')
        <div class="relative items-center block  bg-white border border-gray-100 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-800 dark:hover:bg-gray-700">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg opacity-20">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="w-24 cursor-pointer px-6 py-3" wire:click="order('id')">
                                id
                                @if ($sort == 'id')
                                @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                                @else
                                <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('name')">
                                Nombre del Servicio
                                @if ($sort == 'name')
                                @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                                @else
                                <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('email')">
                                Siglas
                                @if ($sort == 'address')
                                @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                                @else
                                <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('email_verified_at')">
                                Unidad
                                @if ($sort == 'acronym')
                                @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                                @else
                                <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-slate-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                ...
                            </td>
                            <td class="px-6 py-4">
                                ...
                            </td>
                            <td class="px-6 py-4">
                                ...
                            </td>
                            <td class="px-6 py-4">
                                ...
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                    <i class="material-icons-outlined text-base">visibility</i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                    <i class="material-icons-outlined text-base">edit</i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                    <i class="material-icons-round text-base">delete_outline</i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div role="status" class="absolute -translate-x-1/2 -translate-y-1/2 top-2/4 left-1/2">
                <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                </svg>
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        @else
        @if (count($services))
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="w-24 cursor-pointer px-6 py-3" wire:click="order('id')">
                            id
                            @if ($sort == 'id')
                            @if ($direction == 'asc')
                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif
                            @else
                            <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('name')">
                            Nombre del Servicio
                            @if ($sort == 'name')
                            @if ($direction == 'asc')
                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif
                            @else
                            <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('email')">
                            Siglas
                            @if ($sort == 'address')
                            @if ($direction == 'asc')
                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif
                            @else
                            <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('email_verified_at')">
                            Unidad
                            @if ($sort == 'acronym')
                            @if ($direction == 'asc')
                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif
                            @else
                            <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $item)
                    <tr class="bg-white border-b dark:bg-slate-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $item->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->acronym }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->unit }}
                        </td>
                        {{-- <td class="px-6 py-4">
                            <a class="text-gray-400 hover:text-gray-100 mx-2 cursor-pointer" wire:click="edit({{ $item }})">
                                <i class="material-icons-outlined text-base">edit</i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-100  ml-2" wire:click="$emit('deleteUnit', {{ $item }})">
                                <i class="material-icons-round text-base">delete_outline</i>
                            </a>
                        </td> --}}

                        <td class="px-6 py-4">
                            <a class="text-gray-400 hover:text-gray-100 mx-2 cursor-pointer">
                                <i class="material-icons-outlined text-base">edit</i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                <i class="material-icons-round text-base">delete_outline</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        @if ($services->hasPages())
        <div class="py-4 custom-pagination-brand-blue">
            {{ $services->links() }}
        </div>
        @endif
        @else
        <div class="relative overflow-x-auto text-center text-white">
            No existe registros coincidentes
        </div>
        @endif
        @endif
        <x-jet-dialog-modal wire:model="open_edit">
            <x-slot name="title">
                Editar Unidad
            </x-slot>

            <x-slot name="content">
                <div class="mb-4">
                    <x-jet-label value="Nombre de la Unidad" />
                    <x-jet-input type="text" wire:model="service.name" />
                    <x-jet-input-error for="service.name" />
                </div>
                <div class="mb-4">
                    <x-jet-label value="Siglas" />
                    <x-jet-input type="text" wire:model="service.acronym" />
                    <x-jet-input-error for="service.acronym" />
                </div>
                <div class="mb-4">
                    <x-jet-label value="Dirección" />
                    <textarea class="form-input w-full" name="" id="" cols="20" rows="2" wire:model="service.address">
                    </textarea>
                    <x-jet-input-error for="service.address" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-danger-button wire:click="$set('open_edit',false)">
                    Cancelar
                </x-jet-danger-button>
                <x-jet-button class="ml-4 disabled:opacity-25" wire:click="update" wire:loading.attr="disabled" wire:target="update">
                    Actualizar
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
        @push('js')
        <script src="sweetalert2.all.min.js"></script>
        <script>
            Livewire.on('deleteUnit', service => {
                Swal.fire({
                    title: '¿Confirmas esta acción?',
                    text: "¡Si la confirmas eliminaras la Unidad " + service['name'] + " !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Si, eliminar!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('service.show-units', 'delete', service);

                        Swal.fire(
                            '¡Eliminada!',
                            "La unidad " + service['name'] + " fue eliminada.",
                            'success'
                        )
                    }
                })
            })
        </script>
        @endpush
    </div>

</div>