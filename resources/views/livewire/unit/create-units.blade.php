<div>
    <x-jet-button wire:click="$set('open',true)">
        Crear Unidad
    </x-jet-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear Nueva Unidad
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre de la Unidad" />
                <x-jet-input type="text" wire:model="name" />
                <x-jet-input-error for="name" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Siglas" />
                <x-jet-input type="text" wire:model="acronym" />
                <x-jet-input-error for="acronym" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <textarea class="form-input w-full" name="" id="" cols="20" rows="2" wire:model="address">

                </textarea>
                <x-jet-input-error for="address" />
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
