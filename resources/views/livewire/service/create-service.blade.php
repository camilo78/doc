<div>
    <x-jet-button wire:click="$set('open',true)">
        Crear Servicio
    </x-jet-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear Nuevo Servicio
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre del Sevicio" />
                <x-jet-input type="text" wire:model="name" />
                <x-jet-input-error for="name" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Siglas" />
                <x-jet-input type="text" wire:model="acronym" />
                <x-jet-input-error for="acronym" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Unidad" />
                <select wire:model="unit">
                    <option value="0" selected="selected">Seleccione una Unidad</option>
                    @foreach ($units as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="unit" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-danger-button>
            <x-jet-button class="ml-4 disabled:opacity-25" wire:click="save" wire:loading.attr="disabled"
                wire:target="save">
                Crear
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
