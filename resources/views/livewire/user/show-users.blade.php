<div>
    <div class="flex items-center justify-between pb-4  bg-slate-100 dark:bg-gray-800">
        <div>
            @livewire('user.create-user')
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 wire:model='search' dark:text-gray-400" aria-hidden="true"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text" wire:model="search"
                class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Buscar Usuarios">
        </div>
    </div>
    @if ($users->count())
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
                            Nombre
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
                            Correo Electrónico
                            @if ($sort == 'email')
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
                            Correo Verificado
                            @if ($sort == 'email_verified_at')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr
                            class="bg-white border-b dark:bg-slate-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $user->id }}
                            </td>
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-8 h-8 rounded-full" src="{{ $user->profile_photo_url }}" width="32" height="32" alt="{{ $user->name }}" />
                                    
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{ $user->name }}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($user->email_verified_at)
                                    <span
                                        class="bg-blue-700 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 border border-blue-500">
                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                            </path>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                        </svg>
                                        Verificado
                                    </span>
                                @else
                                    <span
                                        class="bg-red-700 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 border border-red-500">
                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                            </path>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                        </svg>
                                        No Verificado
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if (Auth::user()->id == $user->id)
                                <div class="form-check form-switch">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer" disabled checked>
                                    <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Small toggle</span>
                                  </label>
                                </div>
                                @else
                                @livewire('user.user-status', ['model' => $user, 'field' => 'status'], key($user->id))
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if(Auth::user()->id == $user->id)
                                <a href="{{ route('profile.show') }}" class="text-gray-400 hover:text-gray-100 mx-2">
                                    <i class="material-icons-outlined text-base">edit</i>
                                </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    @else
        <div class="relative overflow-x-auto text-center text-white">
            No existe registros coincidentes
        </div>
    @endif
</div>
